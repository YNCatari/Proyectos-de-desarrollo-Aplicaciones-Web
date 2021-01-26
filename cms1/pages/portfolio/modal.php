
	<div style="width:650px" class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
				<div class="row">
		            <?php
		            require_once "../../config/database.php";

		            $portfolio_id = $_GET['id'];

		            // Funcion para mostrar el portafolio
		            $query = mysqli_query($mysqli, "SELECT * FROM is_portfolio WHERE portfolio_id='$portfolio_id'")
		                                            or die('Hubo un error en la consulta : '.mysqli_error($mysqli));

		            $data = mysqli_fetch_assoc($query);
		            ?>
	                <div class="col-sm-12 col-md-12">
	                	<br>
	                    <div class="thumbnail">
	                        <img src="images/portfolio/<?php echo $data['image']; ?>" alt="Portfolio">
	                        <div class="caption">
	                            <p><?php echo $data['title']; ?></p>
	                        </div>
	                    </div>
	                </div>
	       		</div>
			</div>

			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		    </div>
		</div>
	</div>