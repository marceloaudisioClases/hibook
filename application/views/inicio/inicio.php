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
                                        <li class="list-group-item"><?php echo $d['nombre'];  ?></li>
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
                                        <?php for($i=0; $i<5;$i++){ ?>
                                    <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                        <span class="switch-icon-a text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        </span>
                                        <span class="switch-icon-b text-yellow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                        </span>
                                    </button>
                                    <?php }?>
                                        
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        Compañerismo
                                    </div>
                                    <div class="col-4 offset-4">
                                        4.0
                                        <?php for($i=0; $i<5;$i++){ ?>
                                    <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                        <span class="switch-icon-a text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        </span>
                                        <span class="switch-icon-b text-yellow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                        </span>
                                    </button>
                                    <?php }?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4">
                                        Pensamiento critico
                                    </div>
                                    <div class="col-4 offset-4">
                                        3.5
                                        <?php for($i=0; $i<5;$i++){ ?>
                                    <button class="switch-icon switch-icon-scale" data-bs-toggle="switch-icon">
                                        <span class="switch-icon-a text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        </span>
                                        <span class="switch-icon-b text-yellow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"></path>
                                        </svg>
                                        </span>
                                    </button>
                                    <?php }?>
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