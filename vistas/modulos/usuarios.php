<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Administrar usuarios
      
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar usuarios</li>
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          Agregar Usuario
        </button>
      </div>

      <div class="box-body">
        
        <table class="table table-bordered table-striped">
          
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
          </thead>


        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
          MODAL AGREGAR USUARIO
======================================-->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header" style="background:#3c8dbc; color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>

      <div class="modal-body">
        <div class="box-body">
          <!-- Entrada del Tipo de Documento -->
          <!-- Entrada del Numero de Documento -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
              <input type="text" class="form-control input-lg" name="nroDocumento" placeholder="Numero Documento" required>
            </div>
          </div>
          <!-- Entrada del Nombre -->
          <!-- Entrada del Apellido -->
          <!-- Entrada del Dirección -->
          <!-- Entrada del Ubigeo -->
          <!-- Entrada del Apellido -->
          <!-- Entrada del Sexo -->
          <!-- Entrada del Fecha de Nacimiento -->
          <!-- Entrada del Estado Civil-->
          <!-- Entrada del Telefono -->
          <!-- Entrada del Email -->
          <!-- Entrada del Usuario -->
          <!-- Entrada del Contraseña -->
          <!-- Entrada del Nivel -->
          <!-- Entrada del Estado -->
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>

    </div>

  </div>
</div>