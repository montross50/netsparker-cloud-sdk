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

class ScheduledScanModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScheduledScanModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\ScheduledScanModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\ScheduledScanModel();
        if (property_exists($data, 'LastExecutedScanTaskId')) {
            $object->setLastExecutedScanTaskId($data->{'LastExecutedScanTaskId'});
        }
        if (property_exists($data, 'LastExecutionError')) {
            $object->setLastExecutionError($data->{'LastExecutionError'});
        }
        if (property_exists($data, 'LastExecutionStatus')) {
            $object->setLastExecutionStatus($data->{'LastExecutionStatus'});
        }
        if (property_exists($data, 'TimeWindow')) {
            $object->setTimeWindow($this->denormalizer->denormalize($data->{'TimeWindow'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScanTimeWindowModel', 'json', $context));
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'OccurencesCount')) {
            $object->setOccurencesCount($data->{'OccurencesCount'});
        }
        if (property_exists($data, 'Disabled')) {
            $object->setDisabled($data->{'Disabled'});
        }
        if (property_exists($data, 'EnableScheduling')) {
            $object->setEnableScheduling($data->{'EnableScheduling'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'NextExecutionTime')) {
            $object->setNextExecutionTime($data->{'NextExecutionTime'});
        }
        if (property_exists($data, 'ScanGroupId')) {
            $object->setScanGroupId($data->{'ScanGroupId'});
        }
        if (property_exists($data, 'ScanType')) {
            $object->setScanType($data->{'ScanType'});
        }
        if (property_exists($data, 'ScheduleRunType')) {
            $object->setScheduleRunType($data->{'ScheduleRunType'});
        }
        if (property_exists($data, 'CustomRecurrence')) {
            $object->setCustomRecurrence($this->denormalizer->denormalize($data->{'CustomRecurrence'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScheduledScanRecurrenceViewModel', 'json', $context));
        }
        if (property_exists($data, 'IsTargetUrlRequired')) {
            $object->setIsTargetUrlRequired($data->{'IsTargetUrlRequired'});
        }
        if (property_exists($data, 'AdditionalWebsites')) {
            $object->setAdditionalWebsites($this->denormalizer->denormalize($data->{'AdditionalWebsites'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\AdditionalWebsitesSettingModel', 'json', $context));
        }
        if (property_exists($data, 'AgentGroupId')) {
            $object->setAgentGroupId($data->{'AgentGroupId'});
        }
        if (property_exists($data, 'AgentId')) {
            $object->setAgentId($data->{'AgentId'});
        }
        if (property_exists($data, 'BasicAuthenticationSetting')) {
            $object->setBasicAuthenticationSetting($this->denormalizer->denormalize($data->{'BasicAuthenticationSetting'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\BasicAuthenticationSettingModel', 'json', $context));
        }
        if (property_exists($data, 'CanEdit')) {
            $object->setCanEdit($data->{'CanEdit'});
        }
        if (property_exists($data, 'ClientCertificateAuthentication')) {
            $object->setClientCertificateAuthentication($this->denormalizer->denormalize($data->{'ClientCertificateAuthentication'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ClientCertificateAuthenticationViewModel', 'json', $context));
        }
        if (property_exists($data, 'Cookies')) {
            $object->setCookies($data->{'Cookies'});
        }
        if (property_exists($data, 'CrawlAndAttack')) {
            $object->setCrawlAndAttack($data->{'CrawlAndAttack'});
        }
        if (property_exists($data, 'CreateType')) {
            $object->setCreateType($data->{'CreateType'});
        }
        if (property_exists($data, 'FindAndFollowNewLinks')) {
            $object->setFindAndFollowNewLinks($data->{'FindAndFollowNewLinks'});
        }
        if (property_exists($data, 'FormAuthenticationSetting')) {
            $object->setFormAuthenticationSetting($this->denormalizer->denormalize($data->{'FormAuthenticationSetting'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\FormAuthenticationSettingModel', 'json', $context));
        }
        if (property_exists($data, 'HeaderAuthentication')) {
            $object->setHeaderAuthentication($this->denormalizer->denormalize($data->{'HeaderAuthentication'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\HeaderAuthenticationModel', 'json', $context));
        }
        if (property_exists($data, 'ImportedLinks')) {
            $object->setImportedLinks($this->denormalizer->denormalize($data->{'ImportedLinks'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ImportedLinksSetting', 'json', $context));
        }
        if (property_exists($data, 'IsMaxScanDurationEnabled')) {
            $object->setIsMaxScanDurationEnabled($data->{'IsMaxScanDurationEnabled'});
        }
        if (property_exists($data, 'IsPrimary')) {
            $object->setIsPrimary($data->{'IsPrimary'});
        }
        if (property_exists($data, 'IsShared')) {
            $object->setIsShared($data->{'IsShared'});
        }
        if (property_exists($data, 'MaxScanDuration')) {
            $object->setMaxScanDuration($data->{'MaxScanDuration'});
        }
        if (property_exists($data, 'PolicyId')) {
            $object->setPolicyId($data->{'PolicyId'});
        }
        if (property_exists($data, 'ProfileId')) {
            $object->setProfileId($data->{'ProfileId'});
        }
        if (property_exists($data, 'ProfileName')) {
            $object->setProfileName($data->{'ProfileName'});
        }
        if (property_exists($data, 'ReportPolicyId')) {
            $object->setReportPolicyId($data->{'ReportPolicyId'});
        }
        if (property_exists($data, 'SaveScanProfile')) {
            $object->setSaveScanProfile($data->{'SaveScanProfile'});
        }
        if (property_exists($data, 'ScopeSetting')) {
            $object->setScopeSetting($this->denormalizer->denormalize($data->{'ScopeSetting'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScopeSetting', 'json', $context));
        }
        if (property_exists($data, 'SelectedAgents')) {
            $values = [];
            foreach ($data->{'SelectedAgents'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\NetsparkerCloud\\SDK\\Model\\AgentSelectionModel', 'json', $context);
            }
            $object->setSelectedAgents($values);
        }
        if (property_exists($data, 'SelectedScanProfileId')) {
            $object->setSelectedScanProfileId($data->{'SelectedScanProfileId'});
        }
        if (property_exists($data, 'SelectedScanProfileName')) {
            $object->setSelectedScanProfileName($data->{'SelectedScanProfileName'});
        }
        if (property_exists($data, 'TargetUrl')) {
            $object->setTargetUrl($data->{'TargetUrl'});
        }
        if (property_exists($data, 'UrlRewriteSetting')) {
            $object->setUrlRewriteSetting($this->denormalizer->denormalize($data->{'UrlRewriteSetting'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\UrlRewriteSetting', 'json', $context));
        }
        if (property_exists($data, 'UserId')) {
            $object->setUserId($data->{'UserId'});
        }
        if (property_exists($data, 'WebsiteGroupId')) {
            $object->setWebsiteGroupId($data->{'WebsiteGroupId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLastExecutedScanTaskId()) {
            $data->{'LastExecutedScanTaskId'} = $object->getLastExecutedScanTaskId();
        }
        if (null !== $object->getLastExecutionError()) {
            $data->{'LastExecutionError'} = $object->getLastExecutionError();
        }
        if (null !== $object->getLastExecutionStatus()) {
            $data->{'LastExecutionStatus'} = $object->getLastExecutionStatus();
        }
        if (null !== $object->getTimeWindow()) {
            $data->{'TimeWindow'} = $this->normalizer->normalize($object->getTimeWindow(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getOccurencesCount()) {
            $data->{'OccurencesCount'} = $object->getOccurencesCount();
        }
        if (null !== $object->getDisabled()) {
            $data->{'Disabled'} = $object->getDisabled();
        }
        if (null !== $object->getEnableScheduling()) {
            $data->{'EnableScheduling'} = $object->getEnableScheduling();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getNextExecutionTime()) {
            $data->{'NextExecutionTime'} = $object->getNextExecutionTime();
        }
        if (null !== $object->getScanGroupId()) {
            $data->{'ScanGroupId'} = $object->getScanGroupId();
        }
        if (null !== $object->getScanType()) {
            $data->{'ScanType'} = $object->getScanType();
        }
        if (null !== $object->getScheduleRunType()) {
            $data->{'ScheduleRunType'} = $object->getScheduleRunType();
        }
        if (null !== $object->getCustomRecurrence()) {
            $data->{'CustomRecurrence'} = $this->normalizer->normalize($object->getCustomRecurrence(), 'json', $context);
        }
        if (null !== $object->getIsTargetUrlRequired()) {
            $data->{'IsTargetUrlRequired'} = $object->getIsTargetUrlRequired();
        }
        if (null !== $object->getAdditionalWebsites()) {
            $data->{'AdditionalWebsites'} = $this->normalizer->normalize($object->getAdditionalWebsites(), 'json', $context);
        }
        if (null !== $object->getAgentGroupId()) {
            $data->{'AgentGroupId'} = $object->getAgentGroupId();
        }
        if (null !== $object->getAgentId()) {
            $data->{'AgentId'} = $object->getAgentId();
        }
        if (null !== $object->getBasicAuthenticationSetting()) {
            $data->{'BasicAuthenticationSetting'} = $this->normalizer->normalize($object->getBasicAuthenticationSetting(), 'json', $context);
        }
        if (null !== $object->getCanEdit()) {
            $data->{'CanEdit'} = $object->getCanEdit();
        }
        if (null !== $object->getClientCertificateAuthentication()) {
            $data->{'ClientCertificateAuthentication'} = $this->normalizer->normalize($object->getClientCertificateAuthentication(), 'json', $context);
        }
        if (null !== $object->getCookies()) {
            $data->{'Cookies'} = $object->getCookies();
        }
        if (null !== $object->getCrawlAndAttack()) {
            $data->{'CrawlAndAttack'} = $object->getCrawlAndAttack();
        }
        if (null !== $object->getCreateType()) {
            $data->{'CreateType'} = $object->getCreateType();
        }
        if (null !== $object->getFindAndFollowNewLinks()) {
            $data->{'FindAndFollowNewLinks'} = $object->getFindAndFollowNewLinks();
        }
        if (null !== $object->getFormAuthenticationSetting()) {
            $data->{'FormAuthenticationSetting'} = $this->normalizer->normalize($object->getFormAuthenticationSetting(), 'json', $context);
        }
        if (null !== $object->getHeaderAuthentication()) {
            $data->{'HeaderAuthentication'} = $this->normalizer->normalize($object->getHeaderAuthentication(), 'json', $context);
        }
        if (null !== $object->getImportedLinks()) {
            $data->{'ImportedLinks'} = $this->normalizer->normalize($object->getImportedLinks(), 'json', $context);
        }
        if (null !== $object->getIsMaxScanDurationEnabled()) {
            $data->{'IsMaxScanDurationEnabled'} = $object->getIsMaxScanDurationEnabled();
        }
        if (null !== $object->getIsPrimary()) {
            $data->{'IsPrimary'} = $object->getIsPrimary();
        }
        if (null !== $object->getIsShared()) {
            $data->{'IsShared'} = $object->getIsShared();
        }
        if (null !== $object->getMaxScanDuration()) {
            $data->{'MaxScanDuration'} = $object->getMaxScanDuration();
        }
        if (null !== $object->getPolicyId()) {
            $data->{'PolicyId'} = $object->getPolicyId();
        }
        if (null !== $object->getProfileId()) {
            $data->{'ProfileId'} = $object->getProfileId();
        }
        if (null !== $object->getProfileName()) {
            $data->{'ProfileName'} = $object->getProfileName();
        }
        if (null !== $object->getReportPolicyId()) {
            $data->{'ReportPolicyId'} = $object->getReportPolicyId();
        }
        if (null !== $object->getSaveScanProfile()) {
            $data->{'SaveScanProfile'} = $object->getSaveScanProfile();
        }
        if (null !== $object->getScopeSetting()) {
            $data->{'ScopeSetting'} = $this->normalizer->normalize($object->getScopeSetting(), 'json', $context);
        }
        if (null !== $object->getSelectedAgents()) {
            $values = [];
            foreach ($object->getSelectedAgents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'SelectedAgents'} = $values;
        }
        if (null !== $object->getSelectedScanProfileId()) {
            $data->{'SelectedScanProfileId'} = $object->getSelectedScanProfileId();
        }
        if (null !== $object->getSelectedScanProfileName()) {
            $data->{'SelectedScanProfileName'} = $object->getSelectedScanProfileName();
        }
        if (null !== $object->getTargetUrl()) {
            $data->{'TargetUrl'} = $object->getTargetUrl();
        }
        if (null !== $object->getUrlRewriteSetting()) {
            $data->{'UrlRewriteSetting'} = $this->normalizer->normalize($object->getUrlRewriteSetting(), 'json', $context);
        }
        if (null !== $object->getUserId()) {
            $data->{'UserId'} = $object->getUserId();
        }
        if (null !== $object->getWebsiteGroupId()) {
            $data->{'WebsiteGroupId'} = $object->getWebsiteGroupId();
        }

        return $data;
    }
}
