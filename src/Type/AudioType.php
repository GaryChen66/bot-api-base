<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class AudioType.
 *
 * @see https://core.telegram.org/bots/api#audio
 */
class AudioType
{
    /**
     * Unique identifier for this file.
     *
     * @var string
     */
    public $fileId;

    /**
     * Duration of the audio in seconds as defined by sender.
     *
     * @var int
     */
    public $duration;

    /**
     * Optional. Performer of the audio as defined by sender or by audio tags.
     *
     * @var string|null
     */
    public $performer;

    /**
     * Optional. Title of the audio as defined by sender or by audio tags.
     *
     * @var string|null
     */
    public $title;

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

    /**
     * Optional. Thumbnail of the album cover to which the music file belongs.
     *
     * @var PhotoSizeType|null
     */
    public $thumb;
}
