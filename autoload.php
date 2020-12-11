<?php
		spl_autoload_register(function($classe) {
			$diretorio_base = __DIR__."/".str_replace("\\", "/", $classe).".php";
			if(file_exists($diretorio_base)) {
				require_once $diretorio_base;
				return true;
			}else {
				echo "Arquivo com implementação da classe inexistente !!" . "<br>\n";
				return false;
			}
		})
?>