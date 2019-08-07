<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase;

use TgBotApi\BotApiBase\Method\Interfaces\AddMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\AnswerMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\CreateMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\DeleteMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\EditMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\ForwardMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\KickMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\LeaveMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\PinMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\PromoteMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\RestrictMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\SendMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\SetMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\StopMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\UnbanMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\UnpinMethodAliasInterface;
use TgBotApi\BotApiBase\Method\Interfaces\UploadMethodAliasInterface;
use TgBotApi\BotApiBase\Type\FileType;
use TgBotApi\BotApiBase\Type\MessageType;

/**
 * Interface BotApiAliasInterface.
 */
interface BotApiAliasInterface
{
    /**
     * @param SendMethodAliasInterface $method
     *
     * @return MessageType
     */
    public function send(SendMethodAliasInterface $method): MessageType;

    /**
     * @param CreateMethodAliasInterface $method
     *
     * @return bool
     */
    public function create(CreateMethodAliasInterface $method): bool;

    /**
     * @param AddMethodAliasInterface $method
     *
     * @return bool
     */
    public function add(AddMethodAliasInterface $method): bool;

    /**
     * @param AnswerMethodAliasInterface $method
     *
     * @return bool
     */
    public function answer(AnswerMethodAliasInterface $method): bool;

    /**
     * @param DeleteMethodAliasInterface $method
     *
     * @return bool
     */
    public function delete(DeleteMethodAliasInterface $method): bool;

    /**
     * @param EditMethodAliasInterface $method
     *
     * @return MessageType | bool
     */
    public function edit(EditMethodAliasInterface $method);

    /**
     * @param ForwardMethodAliasInterface $method
     *
     * @return MessageType
     */
    public function forward(ForwardMethodAliasInterface $method): MessageType;

    /**
     * @param KickMethodAliasInterface $method
     *
     * @return bool
     */
    public function kick(KickMethodAliasInterface $method): bool;

    /**
     * @param LeaveMethodAliasInterface $method
     *
     * @return bool
     */
    public function leave(LeaveMethodAliasInterface $method): bool;

    /**
     * @param PinMethodAliasInterface $method
     *
     * @return bool
     */
    public function pin(PinMethodAliasInterface $method): bool;

    /**
     * @param PromoteMethodAliasInterface $method
     *
     * @return bool
     */
    public function promote(PromoteMethodAliasInterface $method): bool;

    /**
     * @param RestrictMethodAliasInterface $method
     *
     * @return bool
     */
    public function restrict(RestrictMethodAliasInterface $method): bool;

    /**
     * @param SetMethodAliasInterface $method
     *
     * @return bool
     */
    public function set(SetMethodAliasInterface $method): bool;

    /**
     * @param StopMethodAliasInterface $method
     *
     * @return bool
     */
    public function stop(StopMethodAliasInterface $method): bool;

    /**
     * @param UnbanMethodAliasInterface $method
     *
     * @return bool
     */
    public function unban(UnbanMethodAliasInterface $method): bool;

    /**
     * @param UnpinMethodAliasInterface $method
     *
     * @return bool
     */
    public function unpin(UnpinMethodAliasInterface $method): bool;

    /**
     * @param UploadMethodAliasInterface $method
     *
     * @return FileType
     */
    public function upload(UploadMethodAliasInterface $method): FileType;
}
