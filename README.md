CardTest
========

A card deck test

### Run unit test 

Please note you must be in the module root. 

``` curl -s http://getcomposer.org/installer | php 
php composer.phar install 
./vendor/bin/phpunit 
``` 

If you have xdebug enabled and you want to see 
code coverage run the command below, 
it'll create html files in CardTest\tests\data\coverage 

``` ./vendor/bin/phpunit --coverage-html data/coverage 
```
