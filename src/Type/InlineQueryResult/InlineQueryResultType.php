<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type\InlineQueryResult;

use TgBotApi\BotApiBase\Type\InlineKeyboardMarkupType;

/**
 * Class InlineQueryResult.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresult
 */
abstract class InlineQueryResultType
{
    const TYPE_ARTICLE = 'article';
    const TYPE_PHOTO = 'photo';
    const TYPE_GIF = 'gif';
    const TYPE_MPEG4GIF = 'mpeg4_gif';
    const TYPE_VIDEO = 'video';
    const TYPE_AUDIO = 'audio';
    const TYPE_VOICE = 'voice';
    const TYPE_DOCUMENT = 'document';
    const TYPE_LOCATION = 'location';
    const TYPE_VENUE = 'venue';
    const TYPE_CONTACT = 'contact';
    const TYPE_GAME = 'game';
    const TYPE_STICKER = 'sticker';

    /**
     * Unique identifier for this result, 1-64 bytes.
     *
     * @var string
     */
    public $id;

    /**
     * Optional. Inline keyboard attached to the message.
     *
     * @var InlineKeyboardMarkupType|null
     */
    public $replyMarkup;

    /**
     * Type of the result.
     *
     * @var string
     */
    public $type;
}
