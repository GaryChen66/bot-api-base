<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class LocationType.
 *
 * @see https://core.telegram.org/bots/api#location
 */
class LocationType
{
    /**
     * Longitude as defined by sender.
     *
     * @var float
     */
    public $longitude;

    /**
     * Latitude as defined by sender.
     *
     * @var float
     */
    public $latitude;
}
