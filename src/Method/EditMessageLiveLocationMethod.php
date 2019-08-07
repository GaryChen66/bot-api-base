<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Method;

use TgBotApi\BotApiBase\Method\Interfaces\EditMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Traits\EditMessageVariablesTrait;
use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class EditMessageLiveLocationMethod.
 *
 * @see https://core.telegram.org/bots/api#editmessagelivelocation
 */
class EditMessageLiveLocationMethod implements EditMethodAliasInterface
{
    use EditMessageVariablesTrait;
    use FillFromArrayTrait;
    /**
     * Latitude of the location.
     *
     * @var float
     */
    public $latitude;

    /**
     * Longitude of the location.
     *
     * @var float
     */
    public $longitude;

    /**
     * @param int|string $chatId
     * @param int        $messageId
     * @param float      $latitude
     * @param float      $longitude
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return EditMessageLiveLocationMethod
     */
    public static function create(
        $chatId,
        int $messageId,
        float $latitude,
        float $longitude,
        array $data = null
    ): EditMessageLiveLocationMethod {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->messageId = $messageId;
        $instance->latitude = $latitude;
        $instance->longitude = $longitude;
        if ($data) {
            $instance->fill($data, ['chatId', 'messageId', 'latitude', 'longitude', 'inlineMessageId']);
        }

        return $instance;
    }

    /**
     * @param string     $inlineMessageId
     * @param float      $latitude
     * @param float      $longitude
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return EditMessageLiveLocationMethod
     */
    public static function createInline(
        string $inlineMessageId,
        float $latitude,
        float $longitude,
        array $data = null
    ): EditMessageLiveLocationMethod {
        $instance = new static();
        $instance->latitude = $latitude;
        $instance->longitude = $longitude;
        $instance->inlineMessageId = $inlineMessageId;
        if ($data) {
            $instance->fill($data, ['chatId', 'latitude', 'longitude', 'inlineMessageId']);
        }

        return $instance;
    }
}
