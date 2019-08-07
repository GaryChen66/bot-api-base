<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

/**
 * Class VoiceType.
 *
 * @see https://core.telegram.org/bots/api#voice
 */
class VoiceType
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
