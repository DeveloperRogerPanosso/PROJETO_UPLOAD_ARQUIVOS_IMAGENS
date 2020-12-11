<?php
		declare(strict_types=1);

		require_once "autoload.php";

		use \aplicacao\models\UploadArquivo;

		$uploadArquivo = new UploadArquivo();
		$uploadArquivo->setArquivoUpload();
?>