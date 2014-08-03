<?php
namespace CardTest\Game\Deck\Card; 

class Card 
{
  protected $suit;

  protected $value;

	public function __construct ($suit, $value) 
	{
	  $this->setSuit($suit);
	  $this->setValue($value);
	}
	
  public function setSuit($suit) 
	{
    $this->suit = $suit;

    return $this;
  }

  public function getSuit() 
  {
    return $this->suit;
	}
	
	public function setValue($value) 
	{
	  $this->value = $value;
	
	  return $this;
	}
	
	public function getValue() 
	{
	  return $this->value;
	}
}