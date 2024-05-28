<div class="content-wrapper">
  <div class="container-header">
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
            <i class="nav-icon fas fa-shopping-cart"> Agregar Productos</i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<style>
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .elemento {
    width: 29%;
    box-sizing: border-box;
    margin-bottom: 20px; /* Ajusta el espacio debajo de cada elemento */
  }

  select {
    width: 185px;
  }

  .img-thumbnail {
    margin-top: 10px;
  }
</style>

<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 700px; display: flex; flex-direction: column;">
      <form method="post" role="form">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <i class="nav-icon fab fa-wpforms"></i> Formulario Agregar Productos
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">
              <div class="input-group">
                <div class="container">
                  <div class="elemento">
                    <div>
                      <i class="fas fa-list"></i> <i>Seleccione categoria</i><br>
                      <select name="categoria" id="categoria">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select><br>

                      <i class="fas fa-box"></i> Stock Productos</i>
                      <input type="number" name="stock" id="stock"><br>

                      <i class="fas fa-tags"></i> <i>precio al por mayor</i><br>
                      <input type="number" name="precio_mayor" id="precio_mayor"><br>

                      <i class="fas fa-image"></i> <i>Imagen del producto</i><br>
                      <input type="file" id="nuevaFoto" name="nuevaFoto" class="nuevaFoto"
                        onchange="previewImage(event)"><br>
                      <p class="help-block">Peso máximo de la foto 200 MB</p>
                      <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px"
                        id="imgPreview">
                    </div>
                  </div>
                  <div class="elemento">
                    <div>
                      <i class="fas fa-barcode"></i> <i>codigo del producto</i>
                      <input type="number" name="codigo_producto" id="codigo_producto"><br>
                      <i class="fas fa-dollar-sign"></i> <i>Precio de la compra</i><br>
                      <input type="number" name="precio_compra" id="precio_compra">
                    </div>
                  </div>
                  <div class="elemento">
                    <div>
                      <i class="fas fa-file-alt"></i> <i>Descripccion del producto</i>
                      <input type="text" name="descripcion" id="descripcion"><br>
                      <i class="fas fa-dollar-sign"></i> <i>Precio de venta</i>
                      <input type="number" name="precio_venta" id="precio_venta">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #343a40;">
            <i class="nav-icon fas fa-window-close"></i> Cerrar
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="nav-icon fa fa-save"></i> Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function () {
      var output = document.getElementById('imgPreview');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>