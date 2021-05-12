
<h1>Iniciar sesion</h1>
<form action="<?=base_url()?>usuario/Usuarios/acceso" method="post">
<label for="usuario">Usuario:</label>
<input type="text" name="usuario" required>
<br><br>
<label for="password">Contraseña:</label>
<input type="password" name="password" required>
<br><br>
<input type="submit" value="Entrar">
<br><br><br><br>
<a href="<?=base_url()?>usuario/Usuarios/registro">Si no estas resgistrado pincha aqui.</a>
</form>


<div class="card mx-auto border border-primary bg-dark" style="max-width:319px">
                <div class="mx-auto mt-3 text-white" style=font-family:"Lucida Console", "Courier New", monospace>
                    <h3>Iniciar sesion</h3>
                    
                </div>
                <div class="card-body">
                    <!-- FORMULARIO -->
                    <form action="<?=base_url()?>usuario/Usuarios/acceso" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <!-- TextBox - Correo -->
                            <input type="text" name="usuario" class="form-control" placeholder="Corro">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fas fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="row align-items-center remember text-white">
                            <input type="checkbox">Recuerdame
                        </div>
                        <div class="form-group">
                            <!-- Submit - Ingresar -->
                            <input type="submit" value="Ingresar" class="btn float-right login_btn btn btn-primary">
                        </div>
                    </form>
                    <!-- FORMULARIO -->
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links text-white">
                        ¿No tienes una cuenta?<a href="#">Registrate</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="Home/pagRecuperar">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <!--<span>El usuario o la contraseña es incorrecto</span>-->
                    </div>
                </div>
            </div>
        