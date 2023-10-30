<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tabler Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">

    <title>HiBook</title>
</head>

<body>
    <div class="page">

        <header class="navbar navbar-expand-sm navbar-light d-print-none">
            <div class="container-xl">
                <!-- Logo -->
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="#">
                        <img src="https://preview.tabler.io/static/logo.svg" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image" />
                    </a>
                </h1>

                <div class="navbar-nav flex-row order-md-last">
                    <!-- Buscar usuario -->
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
                    <!-- Boton perfil -->
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

        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">

                    <!-- Perfil de usuario buscado -->
                    <div class="row row-deck row-cards">
                        <div class="col-10 offset-1">
                            <div class="card">
                                <div class="card-body" style="height: 10rem">
                                    <h1>Perfil de "Nombre de Usuario"</h1>
                                    <div class="row g-4 py-4">
                                        <div class="col-2 offset-1">
                                            <p><b>Fellowship</b>: 3</p>
                                        </div>
                                        <div class="col-2">
                                            <p>Critical-thinking: 4</p>
                                        </div>
                                        <div class="col-2">
                                            <p><b>Leadership</b>: 4</p>
                                        </div>
                                        <div class="col-2">
                                            <p>Teamwork: 4</p>
                                        </div>
                                        <div class="col-2">
                                            <p><b>Teaching</b>: 4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-deck row-cards py-2">
                        <!-- Form enviar evaluacion -->
                        <div class="col-5 offset-1">
                            <div class="card">
                                <div class="card-body" style="height: 10rem">
                                    <p class="card-title">Envía una Evaluación:</p>

                                </div>
                            </div>
                        </div>
                        <!-- Novedades usuario buscado -->
                        <div class="col-5">
                            <div class="card">
                                <div class="card-body" style="height: 10rem">
                                    <p class="card-title">Novedades de "Nombre de Usuario"</p>
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