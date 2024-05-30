<div class="content-wrapper">
  <div class="container-header">
    <!-- /.col-md-6 -->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Modulo de Registrar Categorias</h3>
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

            <i class="nav-icon fas fa-box-open"> Agregar Categoría</i>

          </button><br><br>

          <!-- DataTable Formulario -->
          <div class="card-body">
            <table id="tablas" class="table table-bordered table-striped dt-responsive" width="100%">
              <thead>
                <tr>
                  <th style="width: 10px;">#</th>
                  <th>Categoría</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $item = null;
                $valor = null;

                $categorias = ControladorCategoria::controladorMostrarCategoria($item, $valor);
                // var_dump(json_encode($categorias));
                foreach ($categorias as $key => $value) {
                  echo '<tr>
                        <td>' . ($key + 1) . '</td>
                        <td class="text-uppercase">' . $value["categoria"] . '</td>
                        <td>
                          <div class="btn-group">
                          <button class="btn btn-warning btnEditarCategoria"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
                          <button class="btn btn-danger btnEliminarCategoria"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                          </div>
                        </td>
                    </tr>';
                }

                ?>

                <!-- <td>1</td>
              <td>USB</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"> Editar</i></button><br>
                  <button class="btn btn-danger"><i class="fas fa-trash-alt" aria-hidden="true"> Desactivar</i></button>
                </div>
              </td> -->
              </tbody>
            </table>
          </div>

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
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" role="form">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="nav-icon fab fa-wpforms"> Formulario Agregar
              Categoría</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <div class="input-group">

                <input type="text" class="form-control input-lg" placeholder="Ingresar Categoria" required
                  name="nuevaCategoria">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #343a40;"><i
              class="nav-icon fas fa-window-close"> Cerrar</i></button>
          <button type="submit" class="btn btn-primary toastrDefaultSuccess"><i class="nav-icon fa fa-save"> Guardar</i></button>
        </div>

        <?php

          $crearCategoria = new ControladorCategoria();
          $crearCategoria -> controladorCrearCategoria();

        ?>

      </form>

    </div>
  </div>
</div>