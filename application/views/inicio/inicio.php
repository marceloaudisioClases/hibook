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
                                <?php if (isset($datos_usuario['nombre_completo'])) { ?> <h1 class="card-title"><?php echo $datos_usuario['nombre_completo']; ?></h1> <?php } ?>                                         
                                <h3>Estadisticas</h3>

                                <?php 
                                    if ($estadisticas= $datos_usuario['estadisticas']){
                                        foreach ($datos_usuario['estadisticas'] as $e){
                                ?>
                                        <hr>
                                        <div class="row">
                                            <div class="col-4">          
                                                <?php echo $e['nombre']; ?>
                                            </div>
                                            <div class="col-4 offset-4">
                                                <span class="float-right">
                                                <?php echo $e['promedio_valoracion']; 
                                                    $i= 1;
                                                    while ($i <= $e['promedio_valoracion']){
                                                        ?>
                                                        <i class="bi bi-star-fill"></i>
                                                        <?php
                                                        $i++;
                                                    }
                                                    if ($i !== $e['promedio_valoracion'] + 1){
                                                        ?>
                                                        <i class="bi bi-star-half"></i>                                                        
                                                        <?php
                                                        $i++;
                                                    }
                                                    while ($i <= 5){
                                                        ?>
                                                        <i class="bi bi-star"></i>
                                                        <?php
                                                        $i++;
                                                    }
                                                ?>
                                                </span>
                                            </div>
                                        </div>
                                <?php   }
                                    } else {
                                        ?>
                                        <h3>No se han encontrado valoraciones</h3>
                                        <?php
                                    }
                                ?>       
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