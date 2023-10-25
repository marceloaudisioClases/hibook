<div class="page">
    <!-- Cuerpo -->
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-4 offset-1">
                        <form method="post" action="<?php echo site_url('Inicio/buscarPorNombre'); ?>" >
                    
                        <!-- Cuadro de busqueda -->                    
                            <div class="card">
                                <div class="card-body">
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

                                    <!-- Resultados v1 -->
                                    <!--
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
                                    -->

                                    <!-- Resultados v2 -->
                                    <div id="resultados" class="mb-3" style="display: none;">
                                        <h4>Resultados</h4>
                                        <ul class="list-group">
                                            <!-- Aquí se mostrarán los resultados dinámicamente -->
                                        </ul>
                                    </div>
                                </div>
                            </div>                        
                        </form>
                    </div>


                    <!-- Perfil y estadisticas de usuario -->
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body" style="height: 10rem">
                                <h1 class="card-title">Nombre de usuario</h1>
                                <h5>Estadisticas</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Caracteristica 1
                                        <div class="align-items-right">
                                            <span>*****</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">Caracteristica 2</li>
                                    <li class="list-group-item">Caracteristica 3</li>
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
    // Script JavaScript para realizar la búsqueda con clic en el botón "Buscar"
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const resultadosElement = document.getElementById('resultados');

        fetch(this.getAttribute('action'), {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            resultadosElement.style.display = 'block';
            resultadosElement.innerHTML = '';
            data.forEach(usuario => {
                const li = document.createElement('li');
                li.className = 'list-group-item';
                li.textContent = usuario.nombre;
                resultadosElement.appendChild(li);
            });
        })
        .catch(error => {
            console.error(error);
        });
    });
</script>

</body>

</html>