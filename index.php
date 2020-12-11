<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta http-equiv="http-equiv" content="text/html">
	<meta name="description" content="Uploads Arquivos"/>
	<title>Upload Arquivos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap-reboot.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/style.css"/>
</head>
<body>
	<article>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12 order-1 mt-5">
						<div class="h1 page-header mb-3 text-center">Upload Arquivos</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12 order-1">
						<div class="alert alert-info shadow-lg text-center" role="alert">
							Selecione um arquivo(imagem) especifico para upload !!
						</div>
						<?php require_once "sessions.php"; ?>
						<form name="upload" method="POST" enctype="multipart/form-data" action="upload.php">
							<div class="form-row">
								<div class="col-md-12 order-1 mb-1">
									<div class="form-group">
										<label class="text-dark font-weight-bold form-label" for="arquivo">Arquivo</label>
										<input type="file" name="arquivo" class="form-control form-control-md" autocomplete="off" id="arquivo" required/>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 order-1 mb-1">
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-md shadow-sm">Realizar Upload</button>
										<button type="reset" class="btn btn-danger btn-md shadow-sm">Realizar Arquivo</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6 order-2">
						<a class="text-primary" href="#" data-toggle="modal" data-target="#ModalUploads">Visualizar Uploads</a>
					</div>
				</div>
			</div>
		</section>
		<footer>	
		</footer>
	</article>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/script.js"></script>
	<?php require_once "modal_uploads.php"; ?>
</body>
</html>