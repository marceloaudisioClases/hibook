<div class="page">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">

                <!-- Perfil de usuario buscado -->
                <div class="row row-deck row-cards">
                    <div class="col-10 offset-1">
                        <div class="card">
                            <div class="card-body" style="height: 10rem">
                                <h1>Perfil de <?php echo $usuario["nombre"]; ?></h1>
                                <div class="row g-4 py-4">
                                    <?php
                                    if(isset($caracteristicas)){
                                        foreach ($caracteristicas as $c){
                                            ?>
                                        <div class="col-2 offset-1">
                                            <p><b><?php echo $c->nombre; ?></b> 
                                                <?php
                                                if(isset($estadisticas_usuario)){
                                                    foreach($estadisticas_usuario as $est_us){
                                                        if ($est_us->nombre == $c->nombre){
                                                            $promedio = $est_us->promedio_valoracion; 
                                                            echo $promedio;
                                                        }else{
                                                            echo "0.0";
                                                        }
                                                    }
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <?php
                                        }
                                    }
                                    ?>
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
                                <p class="card-title">Novedades de: <?php echo $usuario["nombre"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>