{
    "name": "tomdyg/firstbundle",
    "type": "symfony-bundle",
    "description": "Symfony2 first bundle",
    "keywords": ["prototype", "bundle"],
    "homepage": "https://github.com/tomdyg/firstBundle",
    "license": "MIT",
    "authors": [
        {
            "name": "Tomasz Dyguda",
            "email": "tomasz.dyguda@gmail.com"
        }
    ],
    "require": {
        "php": ">=5.3.2",
        "symfony/framework-bundle": "2.*"
    },
    "require-dev": { 
        "phpunit/phpunit": "5.*",  
        "phpunit/phpunit-story": "*",  
        "phploc/phploc": "*",  
        "fabpot/php-cs-fixer": "*" 
     }, 
    "autoload": {
        "psr-4": {
            "tomdyg\\firstBundle\\": ""
        }
    },
    "minimum-stability": "dev"
}