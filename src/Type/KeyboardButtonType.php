<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Type;

use TgBotApi\BotApiBase\Method\Traits\FillFromArrayTrait;

/**
 * Class KeyboardButtonType
 * Note: request_contact and request_location options will only work in Telegram versions released after 9
 * April, 2016. Older clients will ignore them.
 *
 * @see https://core.telegram.org/bots/api#keyboardbutton
 */
class KeyboardButtonType
{
    use FillFromArrayTrait;

    /**
     * Text of the button. If none of the optional fields are used,
     * it will be sent as a message when the button is pressed.
     *
     * @var string
     */
    public $text;

    /**
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed.
     * Available in private chats only.
     *
     * @var bool|null
     */
    public $requestContact;

    /**
     * Optional. If True, the user's current location will be sent when the button is pressed.
     * Available in private chats only.
     *
     * @var bool|null
     */
    public $requestLocation;

    /**
     * @param string     $text
     * @param array|null $data
     *
     * @throws \TgBotApi\BotApiBase\Exception\BadArgumentException
     *
     * @return KeyboardButtonType
     */
    public static function create(string $text, array $data = null): KeyboardButtonType
    {
        $instance = new static();
        $instance->text = $text;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
