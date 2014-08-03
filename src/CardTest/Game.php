<?php
namespace CardTest; 

use \CardTest\Game\Player\Player,
    \CardTest\Game\Deck\Deck;

class Game 
{
  protected $players; 

  protected $deck; 

  const PLAYER_CARDS = 7;

  public function addPlayer(Player $player) 
  {
    $this->players[] = $player;
  } 

  public function getPlayers() 
  {
    return $this->players; 
  }

  public function setDeck(Deck $deck) 
	{
    $this->deck = $deck; 

    return $this;
  } 

  public function getDeck() 
  {
    return $this->deck;
  } 

  public function dealCards() 
  {
	  $players = $this->getPlayers();
	  for($i = 0; $i < self::PLAYER_CARDS; $i++) {
	    foreach($players as $player) {
	      $this->getDeck()->dealCard($player);
      }
	  }
  }

  public function setUp()
  {
	  $this->getDeck()->shuffle();
	  $this->dealCards();
  }
}