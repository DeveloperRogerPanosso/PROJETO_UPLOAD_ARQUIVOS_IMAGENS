<?php
		session_start();
		
		if(isset($_SESSION["upload_arquivo_valido"]) AND !empty($_SESSION["upload_arquivo_valido"])) {
			echo $_SESSION["upload_arquivo_valido"];
			$_SESSION["upload_arquivo_valido"] = null;
			unset($_SESSION["upload_arquivo_valido"]);
		}
		if(isset($_SESSION["upload_arquivo_invalido"]) AND !empty($_SESSION["upload_arquivo_invalido"])) {
			echo $_SESSION["upload_arquivo_invalido"];
			$_SESSION["upload_arquivo_invalido"] = null;
			unset($_SESSION["upload_arquivo_invalido"]);
		}
?>