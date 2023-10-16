<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tabler Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css">

    <title>HiBook - Inicio</title>
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
                    <div class="row row-deck row-cards">

                        <!-- Cuadro de busqueda -->
                        <div class="col-4 offset-1">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="buscar" class="form-label">Buscar</label>
                                        <div class="row g-2">
                                            <div class="col">
                                                <input type="text" name="buscar" id="buscar" class="form-control"
                                                    placeholder="Nombre de usuario">
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-icon" aria-label="Button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <circle cx="10" cy="10" r="7" />
                                                        <line x1="21" y1="21" x2="15" y2="15" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Resultados -->
                                    <div class="mb-3">
                                        <h4>Resultados</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Tatenda Şadiye</li>
                                            <li class="list-group-item">Feray Surya</li>
                                            <li class="list-group-item">Sifiso Kanon</li>
                                            <li class="list-group-item">Volos Tiernan</li>
                                            <li class="list-group-item">Eustachio Barb</li>
                                            <li class="list-group-item">Aenor Aglaia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Perfil y estadisticas de usuario -->
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body" style="height: 10rem">
                                    <h1>Nombre de usuario</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row row-deck row-cards py-2">
                        <div class="col-10 offset-1">
                            <!-- Novedades -->
                            <div class="card">
                                <div class="card-body" style="height: 10rem;">
                                    <h2 class="card-title">Novedades</h2>
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