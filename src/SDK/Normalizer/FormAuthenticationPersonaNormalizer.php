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

class FormAuthenticationPersonaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\FormAuthenticationPersona';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\FormAuthenticationPersona;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\FormAuthenticationPersona();
        if (property_exists($data, 'IsActive')) {
            $object->setIsActive($data->{'IsActive'});
        }
        if (property_exists($data, 'Password')) {
            $object->setPassword($data->{'Password'});
        }
        if (property_exists($data, 'UserName')) {
            $object->setUserName($data->{'UserName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsActive()) {
            $data->{'IsActive'} = $object->getIsActive();
        }
        if (null !== $object->getPassword()) {
            $data->{'Password'} = $object->getPassword();
        }
        if (null !== $object->getUserName()) {
            $data->{'UserName'} = $object->getUserName();
        }

        return $data;
    }
}
