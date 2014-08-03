<?php
namespace CardTest\Game\Deck;

use CardTest\Game\Deck\Card\Card,
    CardTest\Game\Player\Player;

interface DeckInterface 
{
	static function getSuits();
	static function getValues();
	function getCards();
	function generate();
	function addCard(Card $card);
	function shuffle();
	function dealCard(Player $player);
}