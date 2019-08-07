<?php

declare(strict_types=1);

namespace TgBotApi\BotApiBase\Normalizer;

use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use TgBotApi\BotApiBase\Type\InputFileType;
use TgBotApi\BotApiBase\Type\InputMedia\InputMediaPhotoType;
use TgBotApi\BotApiBase\Type\InputMedia\InputMediaVideoType;

/**
 * Class InputMediaNormalizer.
 */
class InputMediaNormalizer implements NormalizerInterface
{
    /**
     * @var
     */
    private $files;
    /**
     * @var NormalizerInterface
     */
    private $objectNormalizer;

    /**
     * InputMediaNormalizer constructor.
     *
     * @param NormalizerInterface $objectNormalizer
     * @param $files
     */
    public function __construct(NormalizerInterface $objectNormalizer, &$files)
    {
        $this->objectNormalizer = $objectNormalizer;
        $this->files = &$files;
    }

    /**
     * @param mixed $topic
     * @param null  $format
     * @param array $context
     *
     * @throws ExceptionInterface
     *
     * @return array|bool|float|int|mixed|string
     */
    public function normalize($topic, $format = null, array $context = [])
    {
        if ($topic->media instanceof InputFileType) {
            $uniqid = \uniqid('', true);
            $this->files[$uniqid] = $topic->media;
            $topic->media = 'attach://' . $uniqid;
        }

        if (\property_exists($topic, 'thumb') && $topic->thumb instanceof InputFileType) {
            $uniqid = \uniqid('', true);
            $this->files[$uniqid] = $topic->thumb;
            $topic->thumb = 'attach://' . $uniqid;
        }

        $serializer = new Serializer([$this->objectNormalizer]);

        return $serializer->normalize($topic, null, ['skip_null_values' => true]);
    }

    /**
     * @param mixed $data
     * @param null  $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof InputMediaPhotoType ||
            $data instanceof InputMediaVideoType;
    }
}
