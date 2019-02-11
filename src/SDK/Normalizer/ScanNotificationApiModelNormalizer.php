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

class ScanNotificationApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScanNotificationApiModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\ScanNotificationApiModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\ScanNotificationApiModel();
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Priority')) {
            $object->setPriority($data->{'Priority'});
        }
        if (property_exists($data, 'Recipients')) {
            $object->setRecipients($this->denormalizer->denormalize($data->{'Recipients'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScanNotificationRecipientApiModel', 'json', $context));
        }
        if (property_exists($data, 'WebsiteGroupName')) {
            $object->setWebsiteGroupName($data->{'WebsiteGroupName'});
        }
        if (property_exists($data, 'WebsiteRootUrl')) {
            $object->setWebsiteRootUrl($data->{'WebsiteRootUrl'});
        }
        if (property_exists($data, 'Disabled')) {
            $object->setDisabled($data->{'Disabled'});
        }
        if (property_exists($data, 'Event')) {
            $object->setEvent($data->{'Event'});
        }
        if (property_exists($data, 'LowestSeverity')) {
            $object->setLowestSeverity($data->{'LowestSeverity'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Scope')) {
            $object->setScope($data->{'Scope'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getPriority()) {
            $data->{'Priority'} = $object->getPriority();
        }
        if (null !== $object->getRecipients()) {
            $data->{'Recipients'} = $this->normalizer->normalize($object->getRecipients(), 'json', $context);
        }
        if (null !== $object->getWebsiteGroupName()) {
            $data->{'WebsiteGroupName'} = $object->getWebsiteGroupName();
        }
        if (null !== $object->getWebsiteRootUrl()) {
            $data->{'WebsiteRootUrl'} = $object->getWebsiteRootUrl();
        }
        if (null !== $object->getDisabled()) {
            $data->{'Disabled'} = $object->getDisabled();
        }
        if (null !== $object->getEvent()) {
            $data->{'Event'} = $object->getEvent();
        }
        if (null !== $object->getLowestSeverity()) {
            $data->{'LowestSeverity'} = $object->getLowestSeverity();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getScope()) {
            $data->{'Scope'} = $object->getScope();
        }

        return $data;
    }
}
