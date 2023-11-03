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
                            <div class="card-body" style="height: 20rem">
                                <p class="card-title">Envía una Evaluación:</p>
                                Amabilidad
                                <div><input type="range" min="0" max="5" step="1" value="0"/></div>
                                Compañerismo
                                <div><input type="range" min="0" max="5" step="1" value="0"/></div>
                                Pensamiento Critico
                                <div><input type="range" min="0" max="5" step="1" value="0"/></div>
                               
                                <br><br><div align="center"><a href="#" class="btn btn-outline-info" id="btnConfirmarValoracion">Confirmar Valoración</a></div>
                            </div>
                        </div>
                    </div>
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