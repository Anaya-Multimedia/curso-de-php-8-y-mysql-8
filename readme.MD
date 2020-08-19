# Curso de PHP 8 y MySQL 8
![Imagen provisional del libro](https://raw.githubusercontent.com/Anaya-Multimedia/curso-de-php-8-y-mysql-8/master/images/portada-libro.png "Curso de PHP 8 y MySQL 8" width=300)
## Introducción
En este repositorio encontrarás todos los ejemplos del libro “Curso de PHP 8 y MySQL 8” de _Anaya Multimedia_. Sigue los pasos de instalación de los contenedores para poder tener un Sistema completo con PHP 8, MySQL 8 y Nginx.
## Instalación
Para instalar los contenedores es necesario tener Docker funcionado en la máquina y que el comando _docker-compose_ esté presente.  
Después de clonar el repositorio es necesario levantar los contenedores con:  
`docker-compose up`. 
Si es la primera vez que se ejecuta, Docker recuperará las imágenes de los contenedores, compilará la última versión de la rama master de PHP en uno de ellos y quedará funcionando todo correctamente.  
Para revisar si la instalación ha sido correcta puedes ejecutar el comando:  
`docker-compose ps`. 
Deberías obtener un resultado parecido:
```bash
`              Name                            Command              State                 Ports              `
`------------------------------------------------------------------------------------------------------------`
`curso-de-php-8-y-mysql-8_mysql_1   docker-entrypoint.sh mysqld     Up      0.0.0.0:3306->3306/tcp, 33060/tcp`
`curso-de-php-8-y-mysql-8_nginx_1   nginx -g daemon off;            Up      0.0.0.0:8000->80/tcp               `
`curso-de-php-8-y-mysql-8_php_1     docker-php-entrypoint php-fpm   Up      0.0.0.0:9000->9000/tcp`
```

Cada línea indica que es un contenedor distinto:
- curso-de-php-8-y-mysql-8_mysql_1: Contiene el motor de bases de datos MySQL 8.
- curso-de-php-8-y-mysql-8_nginx_1. Contiene el Servidor de aplicaciones Nginx que va a tramitar las peticiones de PHP.
- curso-de-php-8-y-mysql-8_php_1. Contiene la compilación de PHP 8 funcionando como componente ([FastCGI Process Manager](https://www.php.net/manual/es/install.fpm.php "FastCGI Process Manager")) de Nginx.
Si el estado (_State_) del contenedor es _UP_ quiere decir que todo está funcionando. El servidor web Nginx se levanta en el puerto 8000 y debería responder desde cualquier navegador con la URL [http://localhost:8000](http://localhost:8000 "http://localhost:8000"). 
Además, es posible comprobar que PHP 8 está funcionando accediendo a la URL [http://localhost:8000/info.php](http://localhost:8000/info.php "http://localhost:8000/info.php"). 
![Captura de pantalla de phpinfo()](https://raw.githubusercontent.com/Anaya-Multimedia/curso-de-php-8-y-mysql-8/master/images/info.png)
## Conexión con los contenedores
### PHP 8
Una vez que los contenedores están funcionando se puede interactuar con ellos con los [comandos básicos de Docker](https://cerebro-digital.com/panel/knowledgebase/63/Comandos-frecuentes-de-Docker.html "comandos básicos de Docker"). Para conectar con el contenedor de PHP 8 tendremos que poner en el terminal el siguiente comando:  
```bash
docker exec -ti curso-de-php-8-y-mysql-8_php_1 sh
```
A partir de aquí tendremos una Shell (una línea de comandos) para hacer comprobaciones o crear nuevos archivos. Desde esta misma línea de comandos podemos comprobar la versión que se está ejecutando con el comando:  
`php -v`
Obtendremos algo parecido a esto:
```bash
/var/www/html # php -v
PHP 8.0.0-dev (cli) (built: Feb  2 2020 23:35:55) ( NTS )
Copyright (c) The PHP Group
Zend Engine v4.0.0-dev, Copyright (c) Zend Technologies
    with Zend OPcache v8.0.0-dev, Copyright (c), by Zend Technologies
```
Al clonar el repositorio, se crea un directorio llamado _www_. En este directorio tendremos que añadir los archivos de PHP que vayamos creando y serán accesibles desde el navegador a través del puerto 8000. El directorio _www_ está conectado con el directorio _/srv/www/api_ del contenedor de PHP 8. Todo lo que creemos en nuestra máquina local en _www_ aparecerá en el Docker en esa dirección. Docker necesita directorios compartidos para guardar  los archivos que vamos creando, porque cada vez que se apaga el contenedor desaparece todo aquello que se ha modificado dentro.  
### MySQL 8
La conexión al contenedor de MySQL es prácticamente igual al anterior:  
`docker exec -it curso-de-php-8-y-mysql-8_mysql_1 sh`
En el archivo _.env_ están descritas las variables de entorno que se utilizan en la instalación del motor de bases de datos. Ahí se muestran las contraseñas de root y del usuario por defecto.
```bash
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=curso
MYSQL_USER=curso
MYSQL_PASSWORD=curso
```
Para ver la versión instalada en el Docker tendremos que escribir el siguiente comando:
`mysql —version`
Obteniendo un resultado parecido al siguiente:
```bash
# mysql --version
mysql  Ver 8.0.21 for Linux on x86_64 (MySQL Community Server - GPL)
```
Para conectar a MySQL 8 se utiliza el comando básico y el usuario root o el creado por defecto (_curso_):
`# mysql -u root -p`
Tras escribir la contraseña del usuario debería aparecer la consola de MySQL, que nos permitirá, a través de consultas SQL, manejar todos los aspectos de nuestras bases de datos:
```bash
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 10
Server version: 8.0.21 MySQL Community Server - GPL

Copyright (c) 2000, 2020, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> 
```
La última comprobación que podemos hacer es ejecutar una pequeña consulta para ver si la base de datos del curso está creada:
`show databases;`
Obtendremos algo parecido a lo siguiente:
```bash
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| curso              |
| information_schema |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
5 rows in set (0.00 sec)
```
### Nginx
También es posible conectar al contenedor del servidor web, pero no es nada recomendable si no sabemos muy bien lo que hacemos. Este contenedor tiene la configuración de uso de PHP 8, el directorio que va a ejecutar los scripts de PHP (el mismo que está compartido con el Docker de PHP 8).  
Cualquier configuración que sea necesario cambiar es obligatorio hacerlo en los archivos externos, que están en _docker/nginx/_. Si se cambia alguna configuración dentro del Docker directamente solo será efectiva hasta que el contenedor se apague. Cuando arranque de nuevo la configuración volverá a restablecerse.