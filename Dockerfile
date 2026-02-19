# PHP 8.4 FPM
FROM php:8.4-fpm

# Instalar dependências
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    nano \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensões PHP necessárias
RUN docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd

# Instalar composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar todo o código Laravel para o container
COPY . /var/www

# Permissões (opcional, mas ajuda)
RUN chown -R www-data:www-data /var/www

# Comando para o Render: usar porta dinâmica
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=$PORT"]
