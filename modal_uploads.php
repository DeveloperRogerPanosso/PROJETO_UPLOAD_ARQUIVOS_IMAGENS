<div class="modal fade" id="ModalUploads" role="dialog">
	<div class="modal-dialog shadow-sm modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h5 class="modal-title">Uploads</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-12 order-1">
							<div class="alert alert-info shadow-sm text-center" role="alert">Segue os seguintes uploads realizados !!</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 order-1">
							<?php
								$diretorio = "arquivos";
								if(is_dir($diretorio)) {
									$linhas = scandir($diretorio);
									foreach ($linhas as $value) {
										echo $value . " - ";
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer bg-light">
				<button type="button" class="btn btn-danger btn-md shadow-sm" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>