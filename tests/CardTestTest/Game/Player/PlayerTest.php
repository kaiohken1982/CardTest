<?php
namespace CardTestTest\Game\Player;

use CardTest\Game\Player\Player;

class PlayerTest 
    extends \PHPUnit_Framework_TestCase 
{
  protected $obj;

  protected function setUp() 
  {
    $this->obj = new Player('TestPlayer');
  }

  /** 
   * @covers \CardTest\Game\Player\Player::getName()
   * @covers \CardTest\Game\Player\Player::setName() 
   */
  public function testPlayerName() 
  {
    $this->assertEquals($this->obj->getName(), 
        'TestPlayer');
  }
}