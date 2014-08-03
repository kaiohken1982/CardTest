<?php
namespace CardTest; 

use \CardTest\Game\Player\Player;

class Game 
{
  protected $players;

  public function addPlayer(Player $player) 
  {
    $this->players[] = $player;
  } 

  public function getPlayers() 
  {
    return $this->players; 
  }
}