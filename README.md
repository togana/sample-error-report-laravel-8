# error log 検証

## composer install

```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

## 初期設定

```sh
./vendor/bin/sail php -r "copy('.env.example', '.env');"
./vendor/bin/sail php artisan key:generate
```

## 起動

```sh
./vendor/bin/sail up -d
```

## リクエスト先

web: `http://localhost/error`  
api: `http://localhost/api/error`

## ログ

```sh
less ./storage/logs/laravel.log
```
