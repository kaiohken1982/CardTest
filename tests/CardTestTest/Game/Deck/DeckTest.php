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

  /** 
   * @covers \CardTest\Game\Deck\Deck::shuffle() 
   */
  public function testShuffle() 
  {
	   $this->obj->shuffle();
    $cards = $this->obj->getCards();

    $this->assertNotEquals(
       $cards[0]->getSuit() . $cards[0]->getValue(), 
       Deck::SUIT_HEARTS . Deck::VALUE_ACE
    ); 
    $this->assertNotEquals(
       $cards[13]->getSuit() . $cards[13]->getValue(), 
       Deck::SUIT_CLUBS . Deck::VALUE_ACE
    );
    $this->assertNotEquals(
       $cards[26]->getSuit() . $cards[26]->getValue(), 
       Deck::SUIT_SPADES . Deck::VALUE_ACE
    );
    $this->assertNotEquals(
       $cards[39]->getSuit() . $cards[39]->getValue(), 
       Deck::SUIT_DIAMONDS. Deck::VALUE_ACE
    );
  }
}