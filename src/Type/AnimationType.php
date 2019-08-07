<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class AnimationType.
 *
 * @see https://core.telegram.org/bots/api#animation
 */
class AnimationType
{
    /**
     * Unique file identifier.
     *
     * @var string
     */
    public $fileId;

    /**
     * Video width as defined by sender.
     *
     * @var int
     */
    public $width;

    /**
     * Video height as defined by sender.
     *
     * @var int
     */
    public $height;

    /**
     * Duration of the video in seconds as defined by sender.
     *
     * @var int
     */
    public $duration;

    /**
     * Animation thumbnail as defined by sender.
     *
     * @var PhotoSizeType
     */
    public $thumb;

    /**
     * Optional. Original animation filename as defined by sender.
     *
     * @var string|null
     */
    public $fileName;

    /**
     * Optional. MIME type of the file as defined by sender.
     *
     * @var string|null
     */
    public $mimeType;

    /**
     * Optional. File size.
     *
     * @var int|null
     */
    public $fileSize;
}
