<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Tests\Method;

use TgBotApi\BotApiBase\Method\EditMessageLiveLocationMethod;
use TgBotApi\BotApiBase\Tests\Method\Traits\ReplyKeyboardMarkupTrait;

class EditMessageLiveLocationMethodTest extends MethodTestCase
{
    use ReplyKeyboardMarkupTrait;

    /**
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     * @throws \TgBotApi\BotApiBase\Exception\ResponseException
     */
    public function testEncode()
    {
        $this->queryApi(
            [
                'chat_id' => 'chat_id',
                'message_id' => 1,
                'latitude' => 51.5287718,
                'longitude' => -0.2416802,
                'reply_markup' => $this->buildReplyMarkupArray(),
            ],
            EditMessageLiveLocationMethod::create(
                'chat_id',
                1,
                51.5287718,
                -0.2416802,
                [
                    'replyMarkup' => $this->buildReplyMarkupObject(),
                ]
            )
        );
    }

    /**
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     * @throws \TgBotApi\BotApiBase\Exception\ResponseException
     */
    public function testEncodeInline()
    {
        $this->queryApi(
            [
                'inline_message_id' => 'inline_message_id',
                'latitude' => 51.5287718,
                'longitude' => -0.2416802,
                'reply_markup' => $this->buildReplyMarkupArray(),
            ],
            EditMessageLiveLocationMethod::createInline(
                'inline_message_id',
                51.5287718,
                -0.2416802,
                [
                    'replyMarkup' => $this->buildReplyMarkupObject(),
                ]
            )
        );
    }

    /**
     * @param array                         $excepted
     * @param EditMessageLiveLocationMethod $actual
     *
     * @throws \TgBotApi\BotApiBase\Exception\ResponseException
     */
    private function queryApi(array $excepted, EditMessageLiveLocationMethod $actual)
    {
        $this->getBot(
            'editMessageLiveLocation',
            $excepted,
            true,
            ['reply_markup']
        )->editMessageLiveLocation($actual);
    }
}
