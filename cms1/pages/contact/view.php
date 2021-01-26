
<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">

    <?php  
    if (empty($_GET['alert'])) {
        echo "";
    } 

    elseif ($_GET['alert'] == 1) { ?>
        <div style="margin-top:25px" class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><i class="glyphicon glyphicon-alert"></i> Bien hecho!</strong> Tu mensaje fue enviado correctamente.
        </div>
    <?php
    } 
    ?>
        <div class="row">
            <div style="padding-right:50px" class="col-lg-8">
                <h3 class="page-header">
                    <i style="margin-right:6px" class="fa fa-envelope-o"></i>
                    Envíanos un mensaje
                </h3>

                <form action="pages/contact/proses.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Nombre" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                    </div>

                    <input style="width:100px" type="submit" class="btn btn-primary" name="send" value="Enviar" />
                </form>

            </div>

            <div class="col-lg-4">
                <div style="margin-top:70px"></div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="padding: 0 10px;text-align:justify"> 
                            <h4>Dirección</h4>
                            <div style="border: 1px dotted #eee; margin: 10px 0 10px 0"></div>
                            <p><i style="margin-right:10px" class="fa fa-map-marker"></i>Tacna - Peru</p>
                            <div style="border: 1px dotted #eee; margin: 10px 0 10px 0"></div>
                            <p><i style="margin-right:10px" class="fa fa-phone"></i>+51 955766034</p>
                            <div style="border: 1px dotted #eee; margin: 10px 0 10px 0"></div>
                            <p><i style="margin-right:10px" class="fa fa-envelope"></i>andinosoftperuventas@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
