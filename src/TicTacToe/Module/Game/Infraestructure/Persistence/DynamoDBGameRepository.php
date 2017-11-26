<?php

declare(strict_types=1);

namespace Kev\TicTacToe\Module\Game\Infraestructure\Persistence;

use Kev\TicTacToe\Module\Game\Domain\Game;
use Kev\TicTacToe\Module\Game\Domain\GameId;
use Kev\TicTacToe\Module\Game\Domain\GameRepository;
use Kev\TicTacToe\Module\Game\Domain\PlayerId;
use Kev\Types\ValueObject\Uuid;

final class DynamoDBGameRepository implements GameRepository
{
    public function save(Game $game): void
    {

    }

    public function find(GameId $id): ?Game
    {
        return Game::start($id, new PlayerId(Uuid::random()), new PlayerId(Uuid::random()));
    }
}
