<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\EditMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\HasParseModeVariableInterface;
use TgBotApi\BotApiBase\Method\Traits\EditMessageVariablesTrait;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class EditMessageTextMethod.
 *
 * @see https://core.telegram.org/bots/api#editmessagetext
 */
class EditMessageTextMethod implements HasParseModeVariableInterface, EditMethodAliasInterface
{
    use FillFromArrayTrait;
    use EditMessageVariablesTrait;

    /**
     * New text of the message.
     *
     * @var string
     */
    public $text;

    /**
     * Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic,
     * fixed-width text or inline URLs in your bot's message.
     *
     * @var string|null
     */
    public $parseMode;

    /**
     * Optional. Disables link previews for links in this message.
     *
     * @var bool|null
     */
    public $disableWebPagePreview;

    /**
     * @param int|string $chatId
     * @param int        $messageId
     * @param string     $text
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return EditMessageTextMethod
     */
    public static function create($chatId, int $messageId, string $text, array $data = null): EditMessageTextMethod
    {
        $instance = new self();
        $instance->chatId = $chatId;
        $instance->text = $text;
        $instance->messageId = $messageId;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }

    /**
     * @param string     $inlineMessageId
     * @param string     $text
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return EditMessageTextMethod
     */
    public static function createInline(
        string $inlineMessageId,
        string $text,
        array $data = null
    ): EditMessageTextMethod {
        $instance = new self();
        $instance->inlineMessageId = $inlineMessageId;
        $instance->text = $text;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
