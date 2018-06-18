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
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <select class="form-control input-lg" name="nuevoTipoDocumento">
                <option value="">Seleccionar Tipo de Documento</option>
                <option value="SinDocumento">Sin Documento</option>
                <option value="Dni">DNI</option>
                <option value="Ruc">RUC</option>
                <option value="Pasaporte">Pasaporte</option>
                <option value="CarnetExtranjeria">Carnet de Extranjeria</option>
              </select>
            </div>
          </div>
          <!-- Entrada del Numero de Documento -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nroDocumento" placeholder="Numero Documento" required>
            </div>
          </div>
          <!-- Entrada del Nombre -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>
            </div>
          </div>
          <!-- Entrada del Apellido -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoApellido" placeholder="Ingresar Apellido" required>
            </div>
          </div>
          <!-- Entrada del Dirección -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoDireccion" placeholder="Ingresar Direccion" required>
            </div>
          </div>
          <!-- Entrada del Ubigeo -->
          <!-- Entrada del Sexo -->
          <!-- Entrada del Fecha de Nacimiento -->
          <!-- Entrada del Estado Civil-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <select class="form-control input-lg" name="nuevoEstadoCivil">
                <option value="">Seleccionar Estado Civil</option>
                <option value="Soltero">Soltero</option>
                <option value="Casado">Casado</option>
              </select>
            </div>
          </div>
          <!-- Entrada del Telefono -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar Telefono" required>
            </div>
          </div>
          <!-- Entrada del Email -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" required>
            </div>
          </div>
          <!-- Entrada del Usuario -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuarios" required>
            </div>
          </div>
          <!-- Entrada del Contraseña -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Cotraseña" required>
            </div>
          </div>
          <!-- Entrada del Nivel -->
         <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil">
                <option value="">Seleccionar Perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
          <!-- Entrada del Estado -->
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </div>

  </div>
</div>