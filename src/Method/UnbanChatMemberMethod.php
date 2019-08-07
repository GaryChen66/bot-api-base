<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\UnbanMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\ChatIdVariableTrait;
use TgBotApi\BotApiBase\Method\Traits\UserIdVariableTrait;

/**
 * Class UnbanChatMemberMethod.
 *
 * @see https://core.telegram.org/bots/api#unbanchatmember
 */
class UnbanChatMemberMethod implements UnbanMethodAliasInterface
{
    use ChatIdVariableTrait;
    use UserIdVariableTrait;

    /**
     * @param int|string $chatId
     * @param int        $userId
     *
     * @return UnbanChatMemberMethod
     */
    public static function create($chatId, int $userId): UnbanChatMemberMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->userId = $userId;

        return $instance;
    }
}
