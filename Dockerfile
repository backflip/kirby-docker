FROM composer:2.10.1 AS build

WORKDIR /app

COPY . .

RUN composer install \
  --optimize-autoloader \
  --no-interaction \
  --no-progress \
  --ignore-platform-req=ext-gd

FROM trafex/php-nginx:3:11:1

COPY  --from=build /app/nginx.conf /etc/nginx/conf.d/default.conf
COPY --chown=nobody --from=build /app /var/www/html
