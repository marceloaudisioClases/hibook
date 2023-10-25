<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tabler Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">

    <title>HiBook - Caracteristicas</title>
</head>

<body>
    <div class="page">

        <!-- Barra de navegacion -->
        <header class="navbar navbar-expand-sm navbar-light d-print-none">
            <div class="container-xl">
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <!-- Logo -->
                    <a href="#">
                        <img src="https://preview.tabler.io/static/logo.svg" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image" />
                    </a>
                </h1>

                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item">
                        <form class="form-inline">
                            <div class="row g-2">
                                <div class="col-9">
                                    <input type="text" class="form-control" placeholder="Buscar usuario..."
                                        aria-label="First name">
                                </div>
                                <div class="col-3">
                                    <a href="#" class="btn btn-icon" aria-label="Button">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="10" cy="10" r="7" />
                                            <line x1="21" y1="21" x2="15" y2="15" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0">
                            <span class="avatar avatar-sm"
                                style="background-image: url(/samples/avatars/002m.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Paweł Kuna</div>
                                <div class="mt-1 small text-secondary">UI Designer</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Cuerpo -->
        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards py-2">

                        <!-- Creacion de la Caracteristica -->
                        <div class="col-5 offset-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="buscar" class="form-label">Nueva Caracteristica</label>
                                        <div class="row g-2">
                                            <div class="col">
												<div class="mb-3">
													<label class="form-label">Caracteristica</label>
													<input type="text" class="form-control" name="example-disabled-input" placeholder="Nombre" value="Nombre">
												</div>												
												<div class="mb-3">
													<label class="form-label">Color representativo</label>
													<div class="row g-2">
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="dark" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-dark"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput form-colorinput-light">
														  <input name="color" type="radio" value="white" class="form-colorinput-input" checked="">
														  <span class="form-colorinput-color bg-white"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="blue" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-blue"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="azure" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-azure"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="indigo" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-indigo"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="purple" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-purple"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="pink" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-pink"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="red" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-red"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="orange" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-orange"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="yellow" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-yellow"></span>
														</label>
													  </div>
													  <div class="col-auto">
														<label class="form-colorinput">
														  <input name="color" type="radio" value="lime" class="form-colorinput-input">
														  <span class="form-colorinput-color bg-lime"></span>
														</label>
													  </div>
													</div>
												</div>
												<div class="mb-3">
													<label class="form-label">Icono</label>
													<div class="form-selectgroup">
													  <label class="form-selectgroup-item">
														<input type="checkbox" name="name" value="sun" class="form-selectgroup-input" checked="">
														<span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/sun -->
														  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path></svg>
														</span>
													  </label>
													  <label class="form-selectgroup-item">
														<input type="checkbox" name="name" value="moon" class="form-selectgroup-input">
														<span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/moon -->
														  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>
														</span>
													  </label>
													  <label class="form-selectgroup-item">
														<input type="checkbox" name="name" value="cloud-rain" class="form-selectgroup-input">
														<span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/cloud-rain -->
														  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path><path d="M11 13v2m0 3v2m4 -5v2m0 3v2"></path></svg>
														</span>
													  </label>
													  <label class="form-selectgroup-item">
														<input type="checkbox" name="name" value="cloud" class="form-selectgroup-input">
														<span class="form-selectgroup-label"><!-- Download SVG icon from http://tabler-icons.io/i/cloud -->
														  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6.657 18c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878"></path></svg>
														</span>
													  </label>
													  <!--	Hay que programar esto	-->
													  <label class="form-selectgroup-item">
														<input type="checkbox" name="name" value="Other" class="form-selectgroup-input">
														<span class="form-selectgroup-label">Otro</span>
													  </label>
													</div>
												</div>
												<div class="mb-3">
													<label class="form-label">Descripcion</label>
													<textarea class="form-control" rows="5"> </textarea>
												</div>
											</div>
											<br>
											<a href="#" class="btn btn-info">Crear</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

						<!-- Lista de Caracteristicas ya creadas -->
						<div class="col-5">
							<div class="card">
								<div class="card-body">
									<p class="card-title">Caracteristicas</p>
									<select class="form-select">
										<option value="1">Poner</option>
										<option value="2">lista</option>
										<option value="3">de</option>
										<option value="4">Caracteristicas</option>
									</select>
									<div class="mb-3">
										<br>
										<label class="form-label">Icono</label>
										<!-- Poner icono -->
									</div>
									<div>
										<br>
										<label class="form-colorinput">
										<input name="color" type="radio" value="dark" class="form-colorinput-input">
										<span class="form-colorinput-color bg-dark"></span>
										</label>
									</div>
									<div class="mb-3">
										<br>
										<label class="form-label">Descripcion</label>
										<textarea class="form-control" rows="5"> </textarea>
									</div>
									<a href="#" class="btn btn-info">Editar</a>
									<a href="#" class="btn btn-danger">Eliminar</a>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabler Script -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>
</body>

</html>
