<?php
		namespace aplicacao\models;

		interface UploadArquivoInterface {
			public function setArquivoUpload();
			public function getNomeArquivoUpload() : string;
			public function getEnderecoArquivoUpload() : string;
		}
?>