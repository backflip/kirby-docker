# Kirby

Docker setup based on [plainkit](https://github.com/getkirby/plainkit) and [trafex/php-nginx](https://github.com/TrafeX/docker-php-nginx).

## Build

Pass URL as build argument:

```sh
docker build . -t kirby --build-arg APP_URL=http://localhost:8080
```

## Run

```sh
docker run -p 8080:8080 -v $(pwd)/data:/var/www/html/data -t kirby
```

Open http://localhost:8080

## Fly

1. Launch (will create app and volume based on `fly.toml`):

    ```sh
    fly launch
    ```

2. Copy local files to volume and set permissions:

    ```sh
    fly sftp put -R data/accounts /var/www/html/data/accounts
    fly sftp put -R data/content /var/www/html/data/content
    fly ssh console -C "chown -R nobody:nobody /var/www/html/data"
    ```
