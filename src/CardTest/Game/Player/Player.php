<?php
namespace CardTest\Game\Player;

use \CardTest\Game\Deck\Card\Card;

class Player 
{
  protected $cards; 

  protected $name;

  public function __construct($name) 
  {
    $this->setName($name);
  }

  public function setName($name) 
  {
    $this->name = $name; 

    return $this;
  }

  public function getName() 
  {
    return $this->name;
  }

  public function addCard(Card $card) 
  {
    $this->cards[] = $card;

    return $this;
  }
	
}