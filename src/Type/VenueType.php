<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class VenueType.
 *
 * @see https://core.telegram.org/bots/api#venue
 */
class VenueType
{
    /**
     * Venue location.
     *
     * @var LocationType
     */
    public $location;

    /**
     * Name of the venue.
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
     * Optional. Foursquare identifier of the venue.
     *
     * @var string|null
     */
    public $foursquareId;

    /**
     * Optional. Foursquare type of the venue.
     * (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.).
     *
     * @var string|null
     */
    public $foursquareType;
}
