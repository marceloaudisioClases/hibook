<h1>Proyecto HiBook</h1>

HiBook es una aplicación de evaluación de pares creada por los alumnos de tercer año 2023 de la carrera Analista de Sistemas del instituto Argentino de la empresa(HILET). <br>
ClickUp del proyecto: https://app.clickup.com/9011121076/v/l/8chnjxm-31

<h3>Estandar de codeo</h3>
<hr>
No hacer push directo hacia las ramas main y dev, ni pull request hacia main. Las actualizaciones se envian a alguna de las ramificaciones que empiecen con el nombre "feat".
Todos los nombres de métodos y variables son en español, salvo métodos base de los modelos (default_join, default_select)
Consultar en qué rama hacer push en las tareas del ClickUp del proyecto.

Si quieren trabajar en características cortas y puntuales pueden hacer ramificaciones partiendo de la rama en la que están

<h3>Pasos para hacer pull request a dev</h3>
<ol>
	<li>Si hicieron ramas extra a partir de la rama feat en la que están trabajando, hagan pull request desde esas ramas para juntar los cambios en la rama feat. Recuerden no volver
			a usar esa rama despues de hacer el merge(si queren pueden pedirnos para que la eliminemos).</li>
	<li>Hacer un pull request desde dev hacia su rama donde estén trabajando y hacer merge de los cambios: <br>
 ![image](https://github.com/marceloaudisioClases/hibook/assets/64920999/b8a70942-bcf5-4616-8425-d37f4f88dcd5) <br>
		Esto es para evitar llevar conflictos hacia la rama dev.
	</li>
	<li>Resolver los conflictos si es que hay</li>
	<li>Hacer el pull request hacia dev y esperar la aceptación de uno de los moderadores. Pueden asignar a alguien para que revise su pull request en la parte de "Reviewers": </li>
	![image](https://github.com/marceloaudisioClases/hibook/assets/64920999/59cf9317-2185-42d6-b9f5-0f5cb9a3fdf1)

</ol>

<h3>Vistas --> application/views</h3>
<hr>

Agrupamos las vistas en carpetas, una por cada sección (a excepción de secciones reutilizables como el navbar). 

Dentro de las carpteas se encuentran los archivos con el código HTML

![image](https://github.com/marceloaudisioClases/hibook/assets/64920999/101c69c6-86d8-42c5-9394-f6ec4afbc73e)

En cada pagina desarrollamos solo el código visible, no es necesario agregar headers ni body ya que están incluidos en la plantilla.
Pueden ver como ejemplo la página de login en application/views/login/login.php


<h3>Controladores --> application/controllers</h3>
<hr>

Creamos un archivo controlador por cada sección en la página web. Un controlador debe tener mínimo esta estructura:

![image](https://github.com/marceloaudisioClases/hibook/assets/64920999/c52744b2-b303-4f34-8cc2-0a9b550ba0b2)


En el constructor utilizamos set_template para definir la plantilla que utilizará la página (generalmente 'default'), y set_title para indicar el título.
Si es necesario, también cargamos los modelos en esta seccion utilizando:

![image](https://github.com/marceloaudisioClases/hibook/assets/64920999/e95d07d5-748a-4f0c-b203-bd580e3889e9)


El método index es el que se ejecuta por defecto si no se específica un método específico del controlador en la ruta accedida por el usuario, lo utilizamos para redirigir al método principal del controlador.
Dentro de los métodos usamos redirect para redireccionar a otro metodo del mismo controlador u otros controladores. Sino, utilizamos set_section('navbar', 'navbar') para mostrar la barra 
de navegación (opcional) y load->view con la ruta de la vista en la carpeta views para mostrar la página.

<h3>Modelos --> application/models</h3>
<hr>

Recordatorio: los campos y tablas de la base de datos están en inglés
Métodos mínimos de un modelo:

![image](https://github.com/marceloaudisioClases/hibook/assets/64920999/508ab69e-3567-4f5d-be31-cbde7c737a71)


<h3>Herramientas utilizadas en el sistema</h3>
<hr>

PHP version 7.4 --> https://www.php.net/manual/es/intro-whatis.php <br>
Codeigniter 3 --> https://codeigniter.com/userguide3/general/welcome.html <br>
Bootstrap 4.6 --> https://getbootstrap.com/docs/4.6/getting-started/introduction/ <br>
Tabler.io --> https://tabler.io/

