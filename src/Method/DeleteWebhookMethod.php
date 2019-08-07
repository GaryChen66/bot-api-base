<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\DeleteMethodAliasInterface;

/**
 * Class DeleteWebhookMethod.
 *
 * @see https://core.telegram.org/bots/api#deletewebhook
 */
class DeleteWebhookMethod implements DeleteMethodAliasInterface
{
    /**
     * @return DeleteWebhookMethod
     */
    public static function create(): DeleteWebhookMethod
    {
        return new static();
    }
}
