# Curso de PHP 8 y MySQL 8
![Imagen provisional del libro](https://raw.githubusercontent.com/Anaya-Multimedia/curso-de-php-8-y-mysql-8/master/images/portada-libro.png "Curso de PHP 8 y MySQL 8")
## Introducción
En este repositorio encontrarás todos los ejemplos del libro “Curso de PHP 8 y MySQL 8” de Anaya Multimedia”. Sigue los pasos de instalación de los contenedores para poder tener un Sistema completo con PHP 8, MySQL 8 y Nginx.
## Instalación
Para instalar los contenedores es necesario tener Docker funcionado en la máquina y que el comando docker-compose esté presente.
Después de clonar el repositorio es necesario levantar los contenedores con:
`docker-compose up`
Si es la primera vez que se ejecuta, Docker recuperará las imágenes de los contenedores, compilará la última versión de la rama master de PHP en uno de ellos y quedará funcionando todo correctamente.
Para revisar si la instalación ha sido correcta puedes ejecutar el comando:
`docker-compose ps`
Deberías obtener un resultado parecido:
```bash
`              Name                            Command              State                 Ports              `
`------------------------------------------------------------------------------------------------------------`
`curso-de-php-8-y-mysql-8_mysql_1   docker-entrypoint.sh mysqld     Up      0.0.0.0:3306->3306/tcp, 33060/tcp`
`curso-de-php-8-y-mysql-8_nginx_1   nginx -g daemon off;            Up      0.0.0.0:80->80/tcp               `
`curso-de-php-8-y-mysql-8_php_1     docker-php-entrypoint php-fpm   Up      0.0.0.0:9000->9000/tcp`
```

Cada línea indica que es un contenedor distinto:
- curso-de-php-8-y-mysql-8_mysql_1: Contiene el motor de bases de datos MySQL 8.
- curso-de-php-8-y-mysql-8_nginx_1. Contiene el Servidor de aplicaciones Nginx que va a tramitar las peticiones de PHP.
- curso-de-php-8-y-mysql-8_php_1. Contiene la compilación de PHP 8 funcionando como componente ([FastCGI Process Manager](https://www.php.net/manual/es/install.fpm.php "FastCGI Process Manager")) de Nginx.
Si el estado (State) del contenedor es UP quiere decir que todo está funcionando.