<?php
namespace CardTestTest\Game\Deck; 

use CardTest\Game\Deck\Deck,
    CardTest\Game\Deck\Card\Card,
    CardTest\Game\Player\Player;

class DeckTest 
    extends \PHPUnit_Framework_TestCase 
{  
  protected $obj;

  protected function setUp() 
  {
    $this->obj = new Deck();
  }  

  /** 
   * @covers \CardTest\Game\Deck\Deck::getCards() 
   */
  public function testCardsInDeck() 
  {
    $this->assertEquals(count($this->obj->getCards()), 52);
  }

  /** 
   * @covers \CardTest\Game\Deck\Deck::dealCard() 
   */
  public function testDealToPlayer() 
  {
    $player = new Player('TestPlayer');
    $this->obj->dealCard($player);

    $this->assertEquals(count($this->obj->getCards()), 51);
  }
}