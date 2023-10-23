<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Iniciar sesión - Hibook</title>
    <!-- CSS files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
        --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
        font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt="Hibook"></a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Inicia sesión con tu cuenta</h2>
            <form action="<?php echo site_url('auth/ingresar'); ?>" method="post" autocomplete="off" novalidate>
              <div class="mb-3">
               
              </div>
              <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input name="usuario" type="text" class="form-control <?php echo (form_error('usuario')) ? "is-invalid" : ""; ?>" placeholder="Tu nombre de usuario" autocomplete="off" value="<?php echo set_value('usuario'); ?>">
                <?php echo form_error('usuario', "<small class='invalid-feedback'>", "</small>"); ?>
              </div>
              <div class="mb-3">
                <label class="form-label">
                  Contraseña
                  <span class="form-label-description">
                    <a href="./forgot-password.html">Olvide mi contraseña</a>
                  </span>
                </label>
                  <input name="password" type="password" class="form-control <?php echo (form_error('password')) ? "is-invalid" : ""; ?>"   placeholder="Tu contraseña"  autocomplete="off">
                  
                  <?php echo form_error('password', "<small class='invalid-feedback'>", "</small>"); ?>
                                           
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center text-muted mt-3">
          No tienen una cuenta? <a href="./sign-up.html" tabindex="-1">Crear una cuenta</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
  </body>
</html>