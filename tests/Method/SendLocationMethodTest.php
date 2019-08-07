<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Tests\Method;

use TgBotApi\BotApiBase\BotApiComplete;
use TgBotApi\BotApiBase\Method\SendLocationMethod;
use TgBotApi\BotApiBase\Tests\Method\Traits\InlineKeyboardMarkupTrait;

class SendLocationMethodTest extends MethodTestCase
{
    use InlineKeyboardMarkupTrait;

    /**
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     * @throws \TgBotApi\BotApiBase\Exception\ResponseException
     */
    public function testEncode()
    {
        $this->getApi()->sendLocation($this->getMethod());
        $this->getApi()->send($this->getMethod());
    }

    /**
     * @return BotApiComplete
     */
    private function getApi(): BotApiComplete
    {
        return $this->getBot('sendLocation', [
            'chat_id' => 1,
            'live_period' => 60,
            'latitude' => 51.5287718,
            'longitude' => -0.2416802,
            'disable_notification' => true,
            'reply_to_message_id' => 1,
            'reply_markup' => $this->buildInlineMarkupArray(),
        ], [], ['reply_markup']);
    }

    /**
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return SendLocationMethod
     */
    private function getMethod(): SendLocationMethod
    {
        return SendLocationMethod::create(
            1,
            51.5287718,
            -0.2416802,
            [
                'livePeriod' => 60,
                'disableNotification' => true,
                'replyToMessageId' => 1,
                'replyMarkup' => $this->buildInlineMarkupObject(),
            ]
        );
    }
}
