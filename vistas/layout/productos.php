<div class="content-wrapper">
  <div class="container-header">
    <!-- /.col-md-6 -->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Modulo de Registrar Productos</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <button class="btn btn-secondary" style="background-color: #343a40;" data-toggle="modal"
            data-target="#modalAgregarCategoria">
            <i class="nav-icon fas fa-box-open"> Agregar Productos</i>

          </button>
        </div>
        <!-- /.card-body -->

      </div>

    </div>
    <!-- /.col-md-6 -->

    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!--modal categoria-->
<!-- Modal -->
<style>
  .container {
    display: flex;
  }

  .elemento {
    width: 44.33%;
    float: left;
    margin-left: 3.33%;
  
  }
  select{
    width: 185px;
  }
</style>
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="display: grid; width:700px">

      <form method="post" role="form">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="nav-icon fab fa-wpforms"> Formulario
              Agregar Categoría</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <div class="box-body">
            <div class="form-group">
              <div class="input-group">
                <div class="container">
                  <div class="elemento">Elemento 1
                    <div>
                      <i>Seleccione categoria</i><br> 
                      <select name="" id="" >
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4 </option>
                      </select><br>
                      <i class="fa fa-user" aria-hidden="true"> Stock Productos</i>
                      <input type="number" name="" id=""><br>
                      <i>precio al x mayor</i>
                      <input type="number" name="" id="">
                    </div>


                  </div>
                  <div class="elemento">Elemento 2
                    <div>
                      <i>codigo del producto</i>
                      <input type="number">
                    </div>
                  </div>
                  <div class="elemento">Elemento 3
                    <div>
                      <i>Descripccion del producto</i>
                      <input type="text">
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #343a40;"><i
              class="nav-icon fas fa-window-close"> Cerrar</i></button>
          <button type="button" class="btn btn-primary"><i class="nav-icon fa fa-save"></i> Guardar</button>
        </div>

      </form>

    </div>
  </div>
</div>