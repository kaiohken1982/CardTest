<?php
namespace CardTestTest;

use \CardTest\Game, 
    \CardTest\Game\Player\Player,
    \CardTest\Game\Deck\Deck;

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

  /** 
   * @covers \CardTest\Game::setDeck() 
   * @covers \CardTest\Game::getDeck() 
   */
  public function testSetGetDeck() 
  { 
	  $deck = new Deck();
	  $this->obj->setDeck($deck);
	
	  $this->assertEquals($this->obj->getDeck(), $deck);
	}  
	
	/** 
	 * @covers \CardTest\Game::setUp() 
	 * @covers \CardTedt\Game::dealCards()
	 */
	public function testSetUp() 
	{ 
    $this->obj->addPlayer(new Player('One'));
    $this->obj->addPlayer(new Player('Two'));
    $this->obj->addPlayer(new Player('Three'));
    $this->obj->addPlayer(new Player('Four')); 

    $this->obj->setDeck(new Deck()); 

    $this->obj->setUp(); 

    $players = $this->obj->getPlayers();
    $this->assertEquals(count($players), 4);
    $this->assertEquals(count($players[0]->getCards()), Game::PLAYER_CARDS);
    $this->assertEquals(count($players[1]->getCards()), Game::PLAYER_CARDS);
    $this->assertEquals(count($players[2]->getCards()), Game::PLAYER_CARDS);
    $this->assertEquals(count($players[3]->getCards()), Game::PLAYER_CARDS);
	}
}