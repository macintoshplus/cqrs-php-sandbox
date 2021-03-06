<?php

namespace Afsy\Domain\Blackjack\Command;

class StartGameCommand implements \LiteCQRS\Command
{
    public $gameId;

    public $nbPlayers;

    public function __construct($gameId, $nbPlayers)
    {
        $this->gameId = $gameId;
        $this->nbPlayers = $nbPlayers;
    }
}