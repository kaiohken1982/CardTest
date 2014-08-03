<?php
namespace CardTestTest\Game\Deck\Card; 

use CardTest\Game\Deck\Card\Card,
    CardTest\Game\Deck\Deck;

class CardTest 
    extends \PHPUnit_Framework_TestCase 
{
  protected $obj;

  protected function setUp () 
  {
    $this->obj = new Card(Deck::SUIT_DIAMONDS, 
       Deck::VALUE_KING);
  }
 
  /** 
   * @covers \CardTest\Card::setValue() 
   * @covers \CardTest\Card::getValue() 
   */
  public function testSetGetValue () 
  {
    $card = $this->obj->setValue(Deck::VALUE_KING);
    
    $this->assertEquals(Deck::VALUE_KING, 
      $this->obj->getValue());

    $this->assertInstanceOf('CardTest\Game\Deck\Card\Card', $card);
  }
}