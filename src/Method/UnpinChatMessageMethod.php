<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\UnpinMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;

/**
 * Class UnpinChatMessageMethod.
 *
 * @see https://core.telegram.org/bots/api#unpinchatmessage
 */
class UnpinChatMessageMethod implements UnpinMethodAliasInterface
{
    use ChatIdVariableTrait;

    /**
     * @param int|string $chatId
     *
     * @return UnpinChatMessageMethod
     */
    public static function create($chatId): UnpinChatMessageMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;

        return $instance;
    }
}
