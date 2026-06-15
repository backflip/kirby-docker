# Kirby

Docker setup based on [plainkit](https://github.com/getkirby/plainkit) and [trafex/php-nginx](https://github.com/TrafeX/docker-php-nginx).

## Build

```sh
docker build . -t kirby
```

## Run

```sh
docker run -p 8080:8080 -v $(pwd)/data:/var/www/html/data -t kirby
```

## Fly

1. Set up volume:

    ```sh
    fly volume create kirby_docker_data -r fra -n
    ```

2. Deploy:

    ```sh
    fly deploy
    ```

3. Copy local files to volume and set permissions:

    ```sh
    fly sftp put -R data/accounts /var/www/html/data/accounts
    fly sftp put -R data/content /var/www/html/data/content
    fly ssh console -C "chown -R nobody:nobody /var/www/html/data"
    ```
