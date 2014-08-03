<?php
namespace CardTest\Game\Deck;

use CardTest\Game\Deck\Card\Card,
    CardTest\Game\Player\Player;

class Deck 
    implements DeckInterface
{
  protected $cards; 

  const VALUE_ACE = 1;
  const VALUE_TWO = 2;
  const VALUE_THREE = 3;
  const VALUE_FOUR = 4;
  const VALUE_FIVE = 5; 
  const VALUE_SIX = 6;
  const VALUE_SEVEN = 7; 
  const VALUE_EIGHT = 8; 
  const VALUE_NINE = 9;
  const VALUE_TEN = 10;
  const VALUE_JACK = 11; 
  const VALUE_QUEEN = 12;
  const VALUE_KING = 13;

  const SUIT_HEARTS = 'hearts'; 
  const SUIT_CLUBS = 'clubs';
  const SUIT_SPADES = 'spades';
  const SUIT_DIAMONDS = 'diamonds';

  protected static $suits = array (
    self::SUIT_HEARTS,
    self::SUIT_CLUBS, 
    self::SUIT_SPADES,
    self::SUIT_DIAMONDS
  );

  protected static $values = array ( 
    self::VALUE_ACE,
    self::VALUE_TWO,
    self::VALUE_THREE,
    self::VALUE_FOUR,
    self::VALUE_FIVE,
    self::VALUE_SIX,
    self::VALUE_SEVEN,
    self::VALUE_EIGHT,
    self::VALUE_NINE,
    self::VALUE_TEN,
    self::VALUE_JACK,
    self::VALUE_QUEEN,
    self::VALUE_KING
  );

  public function __construct($length = 52) 
  {
    $this->generate($length);
  }  

  public static function getValues() 
  {
    return self::$values;
  }

  public static function getSuits() 
  {
    return self::$suits;
  }

  public function getCards() 
  {
    return $this->cards;
  }

  public function generate()
  {
    foreach(self::getSuits() as $suit) {
      foreach(self::getValues() as $value) {
        $this->addCard(new Card($suit, $value));
      }
    }
  }

  public function addCard(Card $card) 
  {
    $this->cards[] = $card;

    return $this;
  }

  public function dealCard(Player $player) 
  {
    $card = array_pop($this->cards);
    $player->addCard($card);  

    return $this;
  } 

  public function shuffle() 
  {
    shuffle($this->cards); 
 
    return $this;
  }
}