FROM composer:2.10.1 AS build

WORKDIR /app

COPY . .

RUN composer install \
  --optimize-autoloader \
  --no-interaction \
  --no-progress \
  --ignore-platform-req=ext-gd

FROM trafex/php-nginx:3.11.1

COPY --from=build /app/nginx.conf /etc/nginx/conf.d/default.conf

# Install PHP extensions
USER root
RUN apk add --no-cache php85-simplexml
USER nobody

# Replace `${APP_URL}` with the build arg
# The default nginx image's `envsubst` approach as is not available in this image
ARG APP_URL
USER root
RUN sed -i 's~${APP_URL}~'"${APP_URL}"'~g' /etc/nginx/conf.d/default.conf
USER nobody

COPY --chown=nobody --from=build /app /var/www/html
