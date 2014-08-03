CardTest
========

A card deck test 

### How to use this module 

Install using composer

composer.json
```
{
    "repositories": [
      {
        "type": "vcs",
        "url": "https://github.com/kaiohken1982/CardTest.git"
      }
    ],
    "require": {
      "kaiohken1982/cardtest": "dev-master"
    }
}
```

index.php
```
<?php
require __DIR__ . '/vendor/autoload.php';

use \CardTest\Game, 
    \CardTest\Game\Deck\Deck;

// Stop the script giving time out errors..
set_time_limit(0);

// This opens standard in ready for interactive input..
//define('STDIN',fopen("php://stdin","r"));

$game = new Game();
$game->setDeck(new Deck());

// Main event loop to capture top level command..
while(!0)
{
    // Print out main menu..
    echo "Welcome to Card Game! Select an option..\n\n";
    echo "    1) Shuffle Cards\n";
    echo "    2) Deal Cards to players\n";
    echo "    x) Exit\n";

    // Decide what menu option to select based on input..
    switch(trim(fgets(STDIN,256)))
    {
      case 1: 
        $game->getDeck()->shuffle();
        echo "Cards are now shuffled";
        break;
               
      case 2:
        $game->dealCards(); 
        echo "Card dealed to player";
        break;

      case "x":
        exit(); 
        break;
               
      default:
        break;
    }
}
```

Run from console
```
php index.php
```

### Run unit test 

Please note you must be in the module root. 

``` 
curl -s http://getcomposer.org/installer | php 
php composer.phar install 
./vendor/bin/phpunit 
``` 

If you have xdebug enabled and you want to see 
code coverage run the command below, 
it'll create html files in CardTest\tests\data\coverage 

``` 
./vendor/bin/phpunit --coverage-html data/coverage 
```
