# Ejercicio Excepciones

El objetivo de esta práctica es intentar controlar un error en el caso de que una petición HTTP a un API
sea incorrecta y produzca un error.

Es mucho mejor controlar las excepciones nosotros y actuar en consecuencia, que dejar que la excepción finalice
nuestro programa.

Una vez controlado el error, cread un script que utilizando la misma API https://swapi.dev/, nos diga los nombres
de los planetas que salen en la película "La amenaza fantasma". Ojo que los nombres están en inglés.

Para facilitar el entorno, hay un fichero docker-compose.yml para que simplemente haya que ejecutar:

```shell
docker-compose up -d
```

Utiliza una imagen de PHP con todo lo necesario, que podéis construir en el repositorio
https://github.com/franciscosantamaria/php-environment/tree/php8.1


Una vez levantado el contenedor "entrad" dentro del contenedor e instalar las dependencias:

```shell
docker-compose exec -u XXXXXXX webserver bash
composer install
```
Donde XXXXXXX será el usuario que habéis utilizado en la construcción de la imagen. 

Acceder al navegador a la url http://localhost:8888/demo.php y empezad la práctica.

**Bonus:** Cuando tengáis el código resuelto, hacer refactoring para que el código sea orientado a objetos y con namespaces.

La idea es que haya una clase encargada de realizar las peticiones HTTP al api y vosotros solamente le preguntéis
mediante una llamada a un método que os devuelva una lista de objetos planeta.

**Bonus 2:** Podéis también implementar métodos para que os diga en qué peliculas aparecen juntos ciertos personajes y cosas más 
complejas.
