<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\CreateMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\EmojisVariableTrait;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Type\InputFileType;
use TgBotApi\BotApiBase\Type\MaskPositionType;

/**
 * Class CreateNewStickerSetMethod.
 *
 * @see https://core.telegram.org/bots/api#createnewstickerset
 */
class CreateNewStickerSetMethod implements CreateMethodAliasInterface
{
    use FillFromArrayTrait;
    use EmojisVariableTrait;

    /**
     * User identifier of created sticker set owner.
     *
     * @var int
     */
    public $userId;

    /**
     * Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals).
     * Can contain only english letters, digits and underscores.
     * Must begin with a letter, can't contain consecutive underscores and must end in “_by_<bot username>”.
     * <bot_username> is case insensitive. 1-64 characters.
     *
     * @var string
     */
    public $name;

    /**
     * Sticker set title, 1-64 characters.
     *
     * @var string
     */
    public $title;

    /**
     * Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px,
     * and either width or height must be exactly 512px.
     * Pass a file_id as a String to send a file that already exists on the Telegram servers,
     * pass an HTTP URL as a String for Telegram to get a file from the Internet,
     * or upload a new one using multipart/form-data.
     *
     * @var InputFileType|string
     */
    public $pngSticker;

    /**
     * Optional. Pass True, if a set of mask stickers should be created.
     *
     * @var bool|null
     */
    public $containsMasks;

    /**
     * Optional. A JSON-serialized object for position where the mask should be placed on faces.
     *
     * @var MaskPositionType|null
     */
    public $maskPosition;

    /**
     * CreateNewStickerSetMethod constructor.
     *
     * @param int                  $userId
     * @param string               $name
     * @param string               $title
     * @param InputFileType|string $pngSticker
     * @param string               $emojis
     * @param array|null           $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return CreateNewStickerSetMethod
     */
    public static function create(
        int $userId,
        string $name,
        string $title,
        $pngSticker,
        string $emojis,
        array $data = null
    ): CreateNewStickerSetMethod {
        $instance = new static();
        $instance->userId = $userId;
        $instance->name = $name;
        $instance->title = $title;
        $instance->pngSticker = $pngSticker;
        $instance->emojis = $emojis;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
