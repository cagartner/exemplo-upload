<?php 

/**
 * Importante essa biblioteca necessita estar com o GD lib ativado no php.ini:
 * Ativar módulo: php_gd2.dll
 */
include "vendor/wideimage/lib/WideImage.php";

if (!isset($_POST))
	exit("Acesso negado!");

try {
	// pathinfo pega informações do nome
	$info = pathinfo($_FILES['file']['name']);

	// realpath, pega o caminho real da pasta no servidor
	$path = realpath('upload/') . '/';

	// Novo nome do arquivo
	$nome = md5(time()) . '.' . strtolower($info['extension']);

	// Nome do Campo File! 80 é a qualidade da foto
	WideImage::loadFromUpload('file')->resize(600, 600)->saveToFile($path.$nome, 80);

	// Volta para o index.php
	header('Location: index.php?message=' . urlencode("Upload feito com sucesso!"));

} catch (Exception $e) {
	echo $e->getMessage();
}