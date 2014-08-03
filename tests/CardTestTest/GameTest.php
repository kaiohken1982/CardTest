<?php
namespace CardTestTest;

use \CardTest\Game, 
    \CardTest\Game\Player\Player;

class GameTest 
  extends \PHPUnit_Framework_TestCase 
{
  protected $obj;

  protected function setUp() 
  {
    $this->obj = new Game();
  }

  /** 
   * @covers \CardTest\Game::addPlayer() 
   * @covers \CardTest\Game::getPlayers() 
   */
  public function testPlayers() 
  {
    $this->obj->addPlayer(new Player('One'));
    $this->obj->addPlayer(new Player('Two')); 

    $this->assertEquals(count($this->obj->getPlayers()), 2);
  }
}