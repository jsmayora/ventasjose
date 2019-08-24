   <?php  
   // $iduser=session_id('iduser');
   session_start();
   if (isset($_SESSION['usuario'])  ) {

     ?> 

     <!DOCTYPE html>
     <html lang="es">
     <head>

       <title>Categorias</title>
       <?php require_once "menu.php"; ?>
     </head>
     <body>

       <div class="container">
        <h1>Categorias</h1>
        <div class="row">
          <idv class="col-sm-12">

          </idv>
          <div class="col-sm-4">
            <form action="" id="frmCategorias">
             <label for="">Categoria</label>
             <input type="text" class="form-control input-sm" name="categoria" id="categoria"></input>
             <p></p><p></p>
             <span class="btn btn-primary" id="btnAgregarCategoria">Agregar</span>

           </form>
         </div>
         <div class="col-sm-8">
          <div id="tablaCategoriaLoad"></div>
        </div>
      </div>
    </div>


    <!-- Modal actualizaro editar-->

    <!-- Modal -->
    <div class="modal fade" id="actualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Actualiza Categorias </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form id="frmCategoria" role="form">
              <div class="form-group">
                <input type="hidden" name="id_categoria" id="id_categoria" class="form-control input-sm">
                <label for="">Categroria</label>
                <input type="text" class="form-control" name="categoriaU" id="categoriaU" class="form-control input-sm">
              </div>
              
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" id="btnactualizaCategoria" class="btn btn-warning" data-dismiss="modal">Guardar</button>
            
          </div>
        </div>
      </div>
    </div>

    <!-- fin de modal actualizar o editar -->




    <!-- modal eliminar-->


    <!-- fin modal eliminar -->




    <!-- Script de validacion -->
    <script type="text/javascript" src="../js/categorias.js"></script>
    <!-- <script type="text/javascript" src="../js/funciones.js"></script> -->
  </body>
  </html>
<?php } else{ 
  header("location:../index.php");
} ?>  
