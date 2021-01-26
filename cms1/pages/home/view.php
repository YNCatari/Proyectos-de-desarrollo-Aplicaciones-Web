


<br><br>

<div class="row">
    <div class="col-lg-12">
        <h2 style="padding-bottom: 20px" class="page-header center">
        ¿POR QUÉ VIAJAR EN MOQUEGUA?
        </h2>

        <br>
    </div>
    
    <div class="row">
        <?php
        // Funcion para mostrar 6 registro del portafolio
        $query = mysqli_query($mysqli, "SELECT * FROM tariffs ORDER BY tariffs_id DESC LIMIT 6")
                                        or die('Hubo un error en la consulta : '.mysqli_error($mysqli));

        while($data = mysqli_fetch_assoc($query)) {
        ?>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail">
                    <a data-toggle="modal" class="open_modal" href="#" data-id="<?php echo $data['tariffs_id']; ?>">
                        <img src="images/tarifas/<?php echo $data['image']; ?>" alt="tarifas">
                    </a>
                    <div class="caption">
                        <p><?php echo $data['title']; ?></p>
                    </div>
                </div>
            </div>
        <?php  
        }
        ?>
    </div>
   

    
</div>

<div id="modal-form" class="modal" tabindex="-1">

</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("data-id");
           $.ajax({
                   url: "pages/services/modal.php",
                   type: "GET",
                   data : {id: m,},
                   success: function (ajaxData){
                   $("#modal-form").html(ajaxData);
                   $("#modal-form").modal('show',{backdrop: 'true'});
               }
               });
        });
      });
</script>
