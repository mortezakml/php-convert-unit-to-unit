# Convert Unit to Unit

- PHP Pure
- phpunit

![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)


## Bulding Step By Step

Create Php Pure Project Step by Step with unit test

```sh
Create project directory
cd project directory 
touch index.php
 
mkdir src
    > mkdir src/confings (interface and )
    > mkdir src/contracts  (interface and Contracts Project)
    > mkdir src/exceptions
    > mkdir src/helpers 
    > mkdir src/database (PDO Database connection)

mkdir tests

```


## composer init

```sh
composer init
    >Package name (<vendor>/<name>) [dd]: mortezakml/hello
    > Would you like to define your dev dependencies (require-dev) interactively[yes]? Yes
    > install phpunit 
    
```
## Edit composer.json

**add this part into composer.json file** 
```sh
"autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
```

**Run for (Generating autoload files): **
> composer dump-autoload



## Php Serve


> php -S localhost:8000




##  config phpunit

generate **phpunit.xml** file

> ./vendor/bin/phpunit --generate-configuration









