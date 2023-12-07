## Install Porcess

-   Clone the repo
-   create .env file copy from .env.example
-   put database name on .env file
-   Then run these commans one by one

```
composer install install
```

```
php artisan key:generate
```

```
php artsisan migrate --seed
```

```
php artisan serve
```
