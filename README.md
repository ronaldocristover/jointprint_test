### Join Print

## How to deploy application:
 1. Install laravel dependency
 ```
 composer install
 ```
 2. Create database manually
 ```sql
 create database joinprint_db
 ```
 3. Copy env-example to .env
 ```cmd
 cp env-example to .env
 ```
 5. Migrate database and seeder
```
php artisan migrate --seed
```

## Task
### Task 1. (String Reducer)
to use function reducer, call url with get parameter
```
{domain}/stringreducer/{param}

Example:
localhost.com/stringreducer/aaaabbbbddddeee
output: e
```
### Task 2. (Salary Helper)
### Task 3 (Image PDF)

### Task 4 (Ecommerce Sample App)
to access ecommerce sample app, access url: 
**product List:** 
```
localhost/
```
**cart**
```
localhost/cart
```

