
 <?php  

if ($_GET['form']=='detail') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-envelope-o"></i> Suscripciones
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=subcriptions"> Suscripciones </a></li>
      <li class="active"> Detalles </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <br>

        <?php
        // Consulta a la tabla
        $query = mysqli_query($mysqli, "SELECT * FROM subcriptions WHERE subcriptions_id='$_GET[id]'")
                                        or die('Hubo un error en la consulta: '.mysqli_error($mysqli));

        while ($data = mysqli_fetch_assoc($query)) { 
          $tgl          = substr($data['date'],0,10);
          $exp          = explode('-',$tgl);
          $date         = $exp[2]."-".$exp[1]."-".$exp[0];
          
          $time         = substr($data['date'],11,8);
        ?>
          <ul class="timeline">
            <li>
              <div class="timeline-item">
                <span class="time">
                  <i class="fa fa-clock-o icon-title"></i> <?php echo $date; ?> <?php echo $time; ?>
                </span>
                <h3 class="timeline-header">
                  <a href="javascript:void(0);"> <i class="fa fa-user icon-title"></i> <?php echo $data['name']; ?></a> (<?php echo $data['email']; ?>)
                </h3>
                <div class="timeline-body"><?php echo $data['message']; ?></div>
              </div>
            </li>
          </ul>
        <?php
        }
        ?>

          <a href="?module=subcriptions" class="btn btn-default btn-reset">Regresar</a>

      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>