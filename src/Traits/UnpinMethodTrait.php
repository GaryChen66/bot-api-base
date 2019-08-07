<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Traits;

use TgBotApi\BotApiBase\Exception\ResponseException;
use TgBotApi\BotApiBase\Method\Interfaces\UnpinMethodAliasInterface;
use TgBotApi\BotApiBase\Method\UnpinChatMessageMethod;

/**
 * Trait UbpinMethodTrait.
 */
trait UnpinMethodTrait
{
    /**
     * @param UnpinMethodAliasInterface $method
     *
     * @throws ResponseException
     *
     * @return bool
     */
    abstract public function unpin(UnpinMethodAliasInterface $method): bool;

    /**
     * @param UnpinChatMessageMethod $method
     *
     * @throws ResponseException
     *
     * @return bool
     */
    public function unpinChatMessage(UnpinChatMessageMethod $method): bool
    {
        return $this->unpin($method);
    }
}
