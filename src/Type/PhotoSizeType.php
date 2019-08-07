<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class PhotoSizeType.
 *
 * @see https://core.telegram.org/bots/api#photosize
 */
class PhotoSizeType
{
    /**
     * Unique identifier for this file.
     *
     * @var string
     */
    public $fileId;

    /**
     * Photo width.
     *
     * @var int
     */
    public $width;

    /**
     * Photo height.
     *
     * @var int
     */
    public $height;

    /**
     * Optional. File size.
     *
     * @var int|null
     */
    public $fileSize;
}
