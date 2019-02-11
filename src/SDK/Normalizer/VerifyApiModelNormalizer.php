<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class VerifyApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\VerifyApiModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\VerifyApiModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\VerifyApiModel();
        if (property_exists($data, 'VerificationMethod')) {
            $object->setVerificationMethod($data->{'VerificationMethod'});
        }
        if (property_exists($data, 'VerificationSecret')) {
            $object->setVerificationSecret($data->{'VerificationSecret'});
        }
        if (property_exists($data, 'WebsiteUrl')) {
            $object->setWebsiteUrl($data->{'WebsiteUrl'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getVerificationMethod()) {
            $data->{'VerificationMethod'} = $object->getVerificationMethod();
        }
        if (null !== $object->getVerificationSecret()) {
            $data->{'VerificationSecret'} = $object->getVerificationSecret();
        }
        if (null !== $object->getWebsiteUrl()) {
            $data->{'WebsiteUrl'} = $object->getWebsiteUrl();
        }

        return $data;
    }
}
