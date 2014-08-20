<?php
namespace CardTest; 

use \CardTest\Game\Player\Player,
    \CardTest\Game\Deck\Deck;

/**
 * The game class wraps all the players and a deck of cards
 * 
 * @author Sergio
 */
class Game 
{
    /**
     * @var array
     */
    protected $players; 
    
    /**
     * @var Deck
     */
    protected $deck; 

    /**
     * @var Int
     */
    const PLAYER_CARDS = 7;

    /**
     * Adds a player object to the game
     * 
     * @param Player $player
     * @return \CardTest\Game
     */
    public function addPlayer(Player $player)
    {
        $this->players[] = $player;
        
        return $this;
    }

    /**
     * Get game players
     * 
     * @return array
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set a deck for the game
     * 
     * @param Deck $deck
     * @return \CardTest\Game
     */
    public function setDeck(Deck $deck)
    {
        $this->deck = $deck;

        return $this;
    }

    /**
     * Get the deck for this game
     * 
     * @return \CardTest\Game\Deck\Deck
     */
    public function getDeck()
    {
        return $this->deck;
    }
    
    /**
     * Deal card for each player
     * 
     * @return \CardTest\Game
     */
    public function dealCards()
    {
        $players = $this->getPlayers();
        for($i = 0; $i < self::PLAYER_CARDS; $i++) {
            foreach($players as $player) {
                $this->getDeck()->dealCard($player);
            }
        }

        return $this;
    }

    /**
     * Set up the game
     * 
     * @return \CardTest\Game
     */
    public function setUp()
    {
        $this->getDeck()->shuffle();
        $this->dealCards();

        return $this;
    }
}