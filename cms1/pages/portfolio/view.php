
<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <?php
            /* Paginacion */
            $limit = 9;

            $number_record = mysqli_query($mysqli, "SELECT * FROM is_portfolio")
                                                    or die('Se produjo un error en los datos para realizar consultas en la tabla: '.mysqli_error($mysqli));

            $number  = mysqli_num_rows($number_record);
            $pages = ceil($number / $limit);
            $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
            $begin   = ($page - 1) * $limit;
            /*-------------------------------------------------------------------*/

            // funciones de consulta para mostrar los datos de la tabla is_portfolio
            $query = mysqli_query($mysqli, "SELECT * FROM is_portfolio ORDER BY portfolio_id DESC LIMIT $begin, $limit")
                                            or die('Se produjo un error en los datos para realizar consultas en la tabla : '.mysqli_error($mysqli));

            while($data = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col-sm-4 col-md-4">
                    <br><br>
                    <div class="thumbnail">
                        <a data-toggle="modal" class="open_modal" href="#" data-id="<?php echo $data['portfolio_id']; ?>">
                            <img src="images/portfolio/<?php echo $data['image']; ?>" alt="Portfolio">
                        </a>
                        <div class="caption">
                            <p><?php echo $data['title']; ?></p>
                        </div>
                    </div>
                </div>
            <?php  
            }

            if (empty($_GET['hal'])) {
                $active_page = '1';
            } else {
                $active_page = $_GET['hal'];
            }
            ?>
            <br/>
            <!-- Pagination -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                    <!-- Botón a la página anterior -->
                    <?php 
                    if ($active_page<='1') { ?>
                        <li class="disabled"> 
                            <a href="">&laquo;</a>
                        </li>
                    <?php
                    } else { ?>
                        <li> 
                            <a href="page-<?php echo $page -1 ?>">&laquo;</a>
                        </li>
                    <?php
                    }
                    ?>

                    <!-- Enlace página 1 2 3 ... -->
                    <?php 
                    for($x=1; $x<=$pages; $x++) { ?>
                        <li class="">
                            <a href="page-<?php echo $x ?>"><?php echo $x ?></a>
                        </li>
                    <?php
                    }
                    ?>
                    
                    <!-- Botón a la página siguiente -->
                    <?php 
                    if ($active_page>=$pages) { ?>
                        <li class="disabled">
                            <a href="">&raquo;</a>
                        </li>
                    <?php
                    } else { ?>
                        <li>
                            <a href="page-<?php echo $page +1 ?>">&raquo;</a>
                        </li>
                    <?php
                    }
                    ?>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
<!-- /.row -->

<div id="modal-form" class="modal" tabindex="-1">

</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("data-id");
           $.ajax({
                   url: "pages/portfolio/modal.php",
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
