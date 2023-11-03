<?php 

require_once 'header.html';
require_once 'navbar.html';

?>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5 bg-light p-4 rounded border columna-login">
                <div class="vertical-center">
                    <h2 class="text-center mb-4">Iniciar Sesión</h2>
                    <form>
                        <div class="mb-3">
                            <label for="rut" class="form-label">RUT</label>
                            <input type="text" placeholder="Ej: 21.510.846-5" class="form-control placeholderlogin " pattern="^\d{1,2}\.\d{3}\.\d{3}-\d$" title="Ingresa un RUT chileno válido" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-botonlogin">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
                


            <div class="col-md-5 bg-light p-4 rounded border columna-login">
                <div class="vertical-center">
                    <h2 class="text-center mb-4">Registrarse</h2>
                    <form>
                        <div class="mb-3">
                            <label for="nombreCompleto" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombreCompleto">
                        </div>
                        <div class="mb-3">
                            <label for="rutRegistro" class="form-label">RUT</label>
                            <input type="text" placeholder="Ej: 21.510.846-5" class="form-control placeholderlogin " pattern="^\d{1,2}\.\d{3}\.\d{3}-\d$" title="Ingresa un RUT chileno válido" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasenaRegistro" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasenaRegistro">
                        </div>
                        <div class="mb-3">
                            <label for="verificarContrasena" class="form-label">Verificar Contraseña</label>
                            <input type="password" class="form-control" id="verificarContrasena">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-botonlogin">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>