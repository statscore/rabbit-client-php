<?php

namespace Statscore\Service\Serializer;

use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class DateTimeNullNormalizer implements NormalizerInterface, DenormalizerInterface
{
    /**
     * @var DateTimeNormalizer
     */
    private DateTimeNormalizer $dateTimeNormalizer;

    public function __construct(DateTimeNormalizer $dateTimeNormalizer)
    {
        $this->dateTimeNormalizer = $dateTimeNormalizer;
    }

    public function supportsDenormalization($data, string $type, string $format = null)
    {
        return $this->dateTimeNormalizer->supportsDenormalization($data, $type, $format);
    }

    public function supportsNormalization($data, string $format = null)
    {
        return $this->dateTimeNormalizer->supportsNormalization($data, $format);
    }

    public function denormalize($data, $class, string $format = null, array $context = array())
    {
        if ($data === '') {
            $data = null;
        }

        if ($data === null) {
            return $data;
        }

        return $this->dateTimeNormalizer->denormalize($data, $class, $format, $context);
    }

    public function normalize($object, string $format = null, array $context = array())
    {
        return $this->dateTimeNormalizer->normalize($object, $format, $context);
    }
}
