<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type\InlineQueryResult;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;
use TgBotApi\BotApiBase\Type\InputMessageContent\InputMessageContentType;

/**
 * Class InlineQueryResultVenueType.
 *
 * Represents a venue. By default, the venue will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultvenue
 */
class InlineQueryResultVenueType extends InlineQueryResultType
{
    use FillFromArrayTrait;

    /**
     * Latitude of the venue location in degrees.
     *
     * @var float
     */
    public $latitude;

    /**
     * Longitude of the venue location in degrees.
     *
     * @var float
     */
    public $longitude;

    /**
     * Title of the venue.
     *
     * @var string
     */
    public $title;

    /**
     * Address of the venue.
     *
     * @var string
     */
    public $address;

    /**
     * Optional. Foursquare identifier of the venue if known.
     *
     * @var string|null
     */
    public $foursquareId;

    /**
     * Optional. Foursquare type of the venue, if known.
     * (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.).
     *
     * @var string|null
     */
    public $foursquareType;

    /**
     * Optional. Content of the message to be sent instead of the venue.
     *
     * @var InputMessageContentType|null
     */
    public $inputMessageContent;

    /**
     * Optional. Url of the thumbnail for the result.
     *
     * @var string|null
     */
    public $thumbUrl;

    /**
     * Optional. Thumbnail width.
     *
     * @var int|null
     */
    public $thumbWidth;

    /**
     * Optional. Thumbnail height.
     *
     * @var int|null
     */
    public $thumbHeight;

    /**
     * @param string     $id
     * @param float      $latitude
     * @param float      $longitude
     * @param string     $title
     * @param string     $address
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return InlineQueryResultVenueType
     */
    public static function create(
        string $id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        array $data = null
    ): InlineQueryResultVenueType {
        $instance = new static();
        $instance->type = static::TYPE_VENUE;
        $instance->id = $id;
        $instance->latitude = $latitude;
        $instance->longitude = $longitude;
        $instance->title = $title;
        $instance->address = $address;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
