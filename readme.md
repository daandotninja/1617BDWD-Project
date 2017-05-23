# project backend - Alivino
---
## Template
***
[Template alivino from w3layouts.com ] (https://p.w3layouts.com/demos/sep-2016/15-09-2016/fashion_club/web/)

## Installation Alivino
***

### Vendors
```
composer install
```

### Create DB
*in /database*
```
sqlite3 shop.sqlite ""
```

### Migrate
*in /*
```
php artisan migrate
```

### Seed database
```
php artisan db:seed
```

### Create your own .env file
```
cp .env.example .env
```

### When error in config files
```
php artisan config:clear
```

### When autoload not found
```
composer dump-autoload
```

### when app key error
```
php artisan key:generate
```