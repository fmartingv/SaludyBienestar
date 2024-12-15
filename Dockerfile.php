FROM php:8.2-fpm

# Instalar dependencias necesarias para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev

# Configurar la extensión PostgreSQL para PHP
RUN docker-php-ext-install pdo_pgsql pgsql

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Exponer el puerto
EXPOSE 9000
