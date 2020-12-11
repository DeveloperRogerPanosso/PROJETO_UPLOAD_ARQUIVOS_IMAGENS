<?php
		namespace aplicacao\models;

		session_start();

		require_once "UploadArquivoInterface.php";

		class UploadArquivo implements UploadArquivoInterface {
			private int $id;
			private string $nome_arquivo;
			private string $endereco_arquivo;

			public function setArquivoUpload() {
				if(isset($_FILES["arquivo"]) AND !empty($_FILES["arquivo"])) {
					$arquivo = $_FILES["arquivo"];
					echo "<pre>";
					print_r($arquivo);
					echo "</pre>";

					if(isset($_FILES["arquivo"]["tmp_name"]) AND !empty($_FILES["arquivo"]["tmp_name"])) {
						$extencoes_validas = array("image/jpeg", "image/jpg", "image/png", "image/svg");
						if(in_array($_FILES["arquivo"]["type"], $extencoes_validas)) {
							echo "Arquivo salvo com suscesso !!" . "<br>\n";
							move_uploaded_file($_FILES["arquivo"]["tmp_name"], "arquivos/".$_FILES["arquivo"]["name"]);
							$nome_arquivo = $_FILES["arquivo"]["name"];
							$endereco_arquivo = "arquivos/".$_FILES["arquivo"]["name"];
							$this->nome_arquivo = $nome_arquivo;
							$this->endereco_arquivo = $endereco_arquivo;
							$_SESSION["upload_arquivo_valido"] = "
							<div class='alert alert-success fade show alert-dismissible shadow-sm' role='alert'>
								<a class='close' href='#' data-dismiss='alert' aria-label='close'>
									<span aria-hidden='true'>&times;</span>
								</a>
								Arquivo {$this->nome_arquivo} salvo com suscesso !! 
							</div>";
							header("Location: index.php");
							return true;
						}else {
							$_SESSION["upload_arquivo_invalido"] = "
							<div class='alert alert-danger fade show alert-dismissible shadow-sm' role='alert'>
								<a class='close' href='#' data-dismiss='alert' aria-label='close'>
									<span aria-hidden='true'>&times;</span>
								</a>
								Arquivo selecionado para upload contem extenção invalida !! 
							</div>";
							header("Location: index.php");
							return true;
						}
					}else {
						header("Location: index.php");
						return false;
					}
				}else {
					header("Location: index.php");
					return false;
				}
			}

			public function getNomeArquivoUpload() : string {
				return $this->nome_arquivo ?? "Nome do arquivo não informado !!";
			}

			public function getEnderecoArquivoUpload() : string {
				return $this->endereco_arquivo ?? "Endereço do arquivo não informado !!";
			}
		}
?>