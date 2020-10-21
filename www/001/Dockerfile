## MySQL 8
## Imagen base
FROM mysql
 
## Variables de entorno. Configuración inicial de MySQL 8
ENV MYSQL_ROOT_PASSWORD=anaya
ENV MYSQL_DATABASE=php8
ENV MYSQL_USER=php8
ENV MYSQL_PASSWORD=anaya

## Puerto donde se expondrá el Servidor de Bases de Datos
EXPOSE 3306

## Directorio del Contenedor que necesita persistencia
VOLUME /var/lib/mysql