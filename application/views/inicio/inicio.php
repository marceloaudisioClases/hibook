<div class="page">
    <!-- Cuerpo -->
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-4 offset-1">

                        <!-- Cuadro de busqueda -->
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="<?php echo site_url('inicio/buscar_por_nombre'); ?>">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Buscar</label>
                                        <div class="row g-2">
                                            <div class="col">
                                                <input type="text" name="nombre" id="nombre" class="form-control"
                                                    placeholder="Nombre de usuario">
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-icon" aria-label="Button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <circle cx="10" cy="10" r="7" />
                                                        <line x1="21" y1="21" x2="15" y2="15" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Resultados v2 -->
                                <div id="resultados" class="mb-3">
                                    <h4>Resultados</h4>
                                    <ul class="list-group">
                                        <?php foreach ($registros as $d) : ?>
                                        <li class="list-group-item" id="<?php echo $d['usuario_id']; ?>">
                                            <h4 style="float: left;"> <?php echo $d['nombre']; ?> </h4>
                                            <a class="btn btn-icon" style="float: right;" href=<?php echo site_url('usuario/detalle_usuario?id='.$d['usuario_id']); ?>>
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>


                            </div>
                        </div>

                    </div>


                    <!-- Perfil y estadisticas de usuario -->
                    <div class="col-6">
                        <div class="card py-3">
                            <div class="card-body">
                                <?php if (isset($nombre_completo)) { ?> <h1 class="card-title"><?php echo $nombre_completo; ?></h1> <?php } ?>                                         
                                <h3>Estadisticas</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        Amabilidad
                                    </div>
                                    <div class="col-4 offset-4">
                                        2.5
                                        <span class="float-right"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        Compañerismo
                                    </div>
                                    <div class="col-4 offset-4">
                                        4.0
                                        <span class="float-right"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        Pensamiento critico
                                    </div>
                                    <div class="col-4 offset-4">
                                        3.5
                                        <span class="float-right"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>