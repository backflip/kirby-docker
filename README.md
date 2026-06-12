# Kirby

Docker setup based on [plainkit](https://github.com/getkirby/plainkit) and [trafex/php-nginx](https://github.com/TrafeX/docker-php-nginx).

## Build

```sh
docker build . -t kirby
```

## Run

```sh
docker run -p 8080:8080 -v $(pwd)/content:/var/www/html/content -v $(pwd)/site:/var/www/html/site -t kirby
```
