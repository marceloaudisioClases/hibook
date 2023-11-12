<div class="page">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">

                <!-- Perfil de usuario buscado -->
                <div class="row row-deck row-cards">
                    <div class="col-10 offset-1 px-0">
                        <div class="card">
                            <div class="card-body">
                                <h1>Perfil de <?php echo $usuario["nombre"]; ?></h1>
                                <div class="row pt-4">
                                    <?php
                                    if(isset($caracteristicas)){
                                        foreach ($caracteristicas as $c){
                                            ?>
                                        <div class="col-2 mx-auto text-center">
                                            <img src=<?php echo (base_url($c['icono'])); ?> style="width:2em;"/></img>
                                            <h4><?php echo $c['nombre']; ?></h4>
                                            <h2>
                                                <?php
                                                if(isset($estadisticas_usuario)){
                                                    foreach($estadisticas_usuario as $est_us){
                                                        if ($est_us["nombre"] == $c["nombre"]){
                                                            $promedio = $est_us["promedio_valoracion"]; 
                                                            echo $promedio;
                                                        }
                                                    }
                                                }
                                                ?>
                                            </h2>
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
                
                <div class="row row-deck row-cards py-2 mx-auto">
                    <!-- Form enviar evaluacion -->
                    <form class="card col-5 offset-1" method="post" action="<?php echo site_url('Caracteristicas/evaluar/' . $usuario['usuario_id']); ?>">
                        <div class="card-header">
                            <h3 class="card-title">Envía una evaluación para <?php echo $usuario["nombre"]; ?>:</h3>
                        </div>
                        <table class="table card-table table-vcenter" >
                            <thead align="center">
                                <tr>
                                    <th>Caracteristicas</th>
                                    <th>Selector</th>
                                    <th>Puntuaje</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <?php
                                if(isset($caracteristicas)){
                                    foreach ($caracteristicas as $c){
                                        ?>
                                        <tr>
                                            <td>
                                                <img src=<?php echo (base_url($c["icono"])); ?> style="width:2em;"/></img>
                                                <h4><?php echo ($c['nombre']); ?></h4>
                                            </td>
                                            <td><input class="mx-1" type="range" name="<?php echo ($c['estadistica_id']); ?>" min="0" max="5" step="1" value="0" oninput="actualizarValor(this)"/></td>
                                            <td><h2>0</h2></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <br>
                        <div align="center"><button type="submit" class="btn btn-outline-info" id="btnConfirmarValoracion">Confirmar Valoración</button></div>
                        <br>
                    </form>
                    <!-- Novedades usuario buscado -->
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body" style="height: 10rem">
                                <p class="card-title">Novedades de: <?php echo $usuario["nombre"]; ?></p>
                                <ul class="list-group list-group-flush" id="listaNovedades">
                                <li class="list-group-item" id="novedad">Novedad1</li>
                                <li class="list-group-item">Novedad2</li>
                                <li class="list-group-item">Novedad3</li>
                                <li class="list-group-item">Novedad4</li>
                                <li class="list-group-item">Novedad5</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function actualizarValor(input) {
    const valorSlider = input.value;
    const h2Element = input.parentElement.nextElementSibling.querySelector("h2");
    h2Element.textContent = valorSlider;
}
</script>