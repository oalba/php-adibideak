###PHP

[w3schools](http://www.w3schools.com/php/)

[http://php.net/manual/](http://php.net/manual/)

###Servers

MAC 

[https://bitnami.com/stack/mamp](https://bitnami.com/stack/mamp)

Windows 

[http://www.wampserver.com/](http://www.wampserver.com/)

[https://www.apachefriends.org](https://www.apachefriends.org)

Portable: [http://www.usbwebserver.net/en/](http://www.usbwebserver.net/en/) 

###Dependency manager: Composer
https://getcomposer.org/

Install:
```
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```
Create composer.json file:
```
$ touch composer.json
$ vim composer.json
{
    "require": {
        "monolog/monolog": "1.2.*"
    }
}
```
Use:
```
$ composer install
```
put this in the .php file:
```php
require 'vendor/autoload.php';
```
