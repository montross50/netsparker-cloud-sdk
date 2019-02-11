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

class UrlRewriteSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\UrlRewriteSetting';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\UrlRewriteSetting;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\UrlRewriteSetting();
        if (property_exists($data, 'EnableHeuristicChecksInCustomUrlRewrite')) {
            $object->setEnableHeuristicChecksInCustomUrlRewrite($data->{'EnableHeuristicChecksInCustomUrlRewrite'});
        }
        if (property_exists($data, 'MaxDynamicSignatures')) {
            $object->setMaxDynamicSignatures($data->{'MaxDynamicSignatures'});
        }
        if (property_exists($data, 'SubPathMaxDynamicSignatures')) {
            $object->setSubPathMaxDynamicSignatures($data->{'SubPathMaxDynamicSignatures'});
        }
        if (property_exists($data, 'UrlRewriteAnalyzableExtensions')) {
            $object->setUrlRewriteAnalyzableExtensions($data->{'UrlRewriteAnalyzableExtensions'});
        }
        if (property_exists($data, 'UrlRewriteBlockSeparators')) {
            $object->setUrlRewriteBlockSeparators($data->{'UrlRewriteBlockSeparators'});
        }
        if (property_exists($data, 'UrlRewriteMode')) {
            $object->setUrlRewriteMode($data->{'UrlRewriteMode'});
        }
        if (property_exists($data, 'UrlRewriteRules')) {
            $values = [];
            foreach ($data->{'UrlRewriteRules'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\NetsparkerCloud\\SDK\\Model\\UrlRewriteRuleModel', 'json', $context);
            }
            $object->setUrlRewriteRules($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnableHeuristicChecksInCustomUrlRewrite()) {
            $data->{'EnableHeuristicChecksInCustomUrlRewrite'} = $object->getEnableHeuristicChecksInCustomUrlRewrite();
        }
        if (null !== $object->getMaxDynamicSignatures()) {
            $data->{'MaxDynamicSignatures'} = $object->getMaxDynamicSignatures();
        }
        if (null !== $object->getSubPathMaxDynamicSignatures()) {
            $data->{'SubPathMaxDynamicSignatures'} = $object->getSubPathMaxDynamicSignatures();
        }
        if (null !== $object->getUrlRewriteAnalyzableExtensions()) {
            $data->{'UrlRewriteAnalyzableExtensions'} = $object->getUrlRewriteAnalyzableExtensions();
        }
        if (null !== $object->getUrlRewriteBlockSeparators()) {
            $data->{'UrlRewriteBlockSeparators'} = $object->getUrlRewriteBlockSeparators();
        }
        if (null !== $object->getUrlRewriteMode()) {
            $data->{'UrlRewriteMode'} = $object->getUrlRewriteMode();
        }
        if (null !== $object->getUrlRewriteRules()) {
            $values = [];
            foreach ($object->getUrlRewriteRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'UrlRewriteRules'} = $values;
        }

        return $data;
    }
}