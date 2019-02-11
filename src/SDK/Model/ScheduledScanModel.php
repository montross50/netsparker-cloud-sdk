<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ScheduledScanModel
{
    /**
     * Gets or sets the last executed scan task identifier.
     *
     * @var string
     */
    protected $lastExecutedScanTaskId;
    /**
     * Gets or sets the last execution error.
     *
     * @var int
     */
    protected $lastExecutionError;
    /**
     * Gets or sets the last execution status. If value is not {Netsparker.Cloud.Core.Models.ScanLaunchStatus.Ok}, specifies error type of.
    {Netsparker.Cloud.Infrastructure.Models.ScheduledScanModel.LastExecutionError}
     *
     * @var string
     */
    protected $lastExecutionStatus;
    /**
     * Represents a model for carrying out scan time window settings.
     *
     * @var ScanTimeWindowModel
     */
    protected $timeWindow;
    /**
     * Gets or sets the identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Gets or sets the how many times a scheduled scan triggered.
     *
     * @var int
     */
    protected $occurencesCount;
    /**
     * Gets or sets a value indicating whether scheduled scan is disabled.
     *
     * @var bool
     */
    protected $disabled;
    /**
     * Gets or sets a value indicating whether scheduling enabled.
     *
     * @var bool
     */
    protected $enableScheduling;
    /**
     * Gets or sets the name.
     *
     * @var string
     */
    protected $name;
    /**
     * Gets or sets the next execution time.
     *
     * @var string
     */
    protected $nextExecutionTime;
    /**
     * Gets or sets scan group id.
     *
     * @var string
     */
    protected $scanGroupId;
    /**
     * Gets or sets scan type.
     *
     * @var string
     */
    protected $scanType;
    /**
     * Gets or sets the run interval of scheduled scan.
     *
     * @var string
     */
    protected $scheduleRunType;
    /**
     * Scheduled scan recurrence view model.
     *
     * @var ScheduledScanRecurrenceViewModel
     */
    protected $customRecurrence;
    /**
     * Gets or sets whether is target URL required.
     *
     * @var bool
     */
    protected $isTargetUrlRequired;
    /**
     * Represents a model for carrying out additional websites.
     *
     * @var AdditionalWebsitesSettingModel
     */
    protected $additionalWebsites;
    /**
     * Gets or sets the agent group identifier.
     *
     * @var string
     */
    protected $agentGroupId;
    /**
     * Gets or sets the agent identifier.
     *
     * @var string
     */
    protected $agentId;
    /**
     * Represents a model for carrying out basic authentication settings.
     *
     * @var BasicAuthenticationSettingModel
     */
    protected $basicAuthenticationSetting;
    /**
     * Gets or sets the can edit.
     *
     * @var bool
     */
    protected $canEdit;
    /**
     * Represents a model for carrying out client certificate authentication settings.
     *
     * @var ClientCertificateAuthenticationViewModel
     */
    protected $clientCertificateAuthentication;
    /**
     * Gets or sets the cookies.
     *
     * @var string
     */
    protected $cookies;
    /**
     * Gets or sets a value indicating whether parallel attacker is enabled.
     *
     * @var bool
     */
    protected $crawlAndAttack;
    /**
     * Gets or sets the type of the create.
     *
     * @var string
     */
    protected $createType;
    /**
     * Gets or sets a value indicating whether automatic crawling is enabled.
     *
     * @var bool
     */
    protected $findAndFollowNewLinks;
    /**
     * Represents a model for carrying out form authentication settings.
     *
     * @var FormAuthenticationSettingModel
     */
    protected $formAuthenticationSetting;
    /**
     * Represents a model for carrying out header authentication setttings.
     *
     * @var HeaderAuthenticationModel
     */
    protected $headerAuthentication;
    /**
     * Represents a class that carries out imported links.
     *
     * @var ImportedLinksSetting
     */
    protected $importedLinks;
    /**
     * Gets or sets a value indicating whether max scan duration is enabled.
    This is only used for scheduled group scan and regular group scan.
     *
     * @var bool
     */
    protected $isMaxScanDurationEnabled;
    /**
     * Gets or sets a value indicating whether this instance is primary.
     *
     * @var bool
     */
    protected $isPrimary;
    /**
     * Gets or sets a value indicating whether this instance is shared.
     *
     * @var bool
     */
    protected $isShared;
    /**
     * Gets or sets the maximum duration of the scan in hours.
     *
     * @var int
     */
    protected $maxScanDuration;
    /**
     * Gets or sets the scan policy identifier. This property is required if CreateType is Website.
     *
     * @var string
     */
    protected $policyId;
    /**
     * Gets or sets the profile identifier.
     *
     * @var string
     */
    protected $profileId;
    /**
     * Gets or sets a name for this instance.
     *
     * @var string
     */
    protected $profileName;
    /**
     * Gets or sets the report policy identifier. This property is required if CreateType is Website.
     *
     * @var string
     */
    protected $reportPolicyId;
    /**
     * Gets or sets the save scan profile.
     *
     * @var bool
     */
    protected $saveScanProfile;
    /**
     * Represents a class that carries out scope settings.
     *
     * @var ScopeSetting
     */
    protected $scopeSetting;
    /**
     * Gets or sets the agent selections for the websites that use custom agent. This property is needed for Gorup Scans.
     *
     * @var AgentSelectionModel[]
     */
    protected $selectedAgents;
    /**
     * Gets or sets the selected scan profile identifier.
     *
     * @var string
     */
    protected $selectedScanProfileId;
    /**
     * Gets or sets the name of the selected scan profile.
     *
     * @var string
     */
    protected $selectedScanProfileName;
    /**
     * Gets or sets the target website URL. This property is required if CreateType is Website.
     *
     * @var string
     */
    protected $targetUrl;
    /**
     * Represents a class that carries out url rewrite settings.
     *
     * @var UrlRewriteSetting
     */
    protected $urlRewriteSetting;
    /**
     * Gets or sets the user identifier.
     *
     * @var string
     */
    protected $userId;
    /**
     * Gets or sets the website group identifier. This property is required if CreateType is WebsiteGroup.
     *
     * @var string
     */
    protected $websiteGroupId;

    /**
     * Gets or sets the last executed scan task identifier.
     *
     * @return string
     */
    public function getLastExecutedScanTaskId(): ?string
    {
        return $this->lastExecutedScanTaskId;
    }

    /**
     * Gets or sets the last executed scan task identifier.
     *
     * @param string $lastExecutedScanTaskId
     *
     * @return self
     */
    public function setLastExecutedScanTaskId(?string $lastExecutedScanTaskId): self
    {
        $this->lastExecutedScanTaskId = $lastExecutedScanTaskId;

        return $this;
    }

    /**
     * Gets or sets the last execution error.
     *
     * @return int
     */
    public function getLastExecutionError(): ?int
    {
        return $this->lastExecutionError;
    }

    /**
     * Gets or sets the last execution error.
     *
     * @param int $lastExecutionError
     *
     * @return self
     */
    public function setLastExecutionError(?int $lastExecutionError): self
    {
        $this->lastExecutionError = $lastExecutionError;

        return $this;
    }

    /**
     * Gets or sets the last execution status. If value is not {Netsparker.Cloud.Core.Models.ScanLaunchStatus.Ok}, specifies error type of.
    {Netsparker.Cloud.Infrastructure.Models.ScheduledScanModel.LastExecutionError}
     *
     * @return string
     */
    public function getLastExecutionStatus(): ?string
    {
        return $this->lastExecutionStatus;
    }

    /**
     * Gets or sets the last execution status. If value is not {Netsparker.Cloud.Core.Models.ScanLaunchStatus.Ok}, specifies error type of.
    {Netsparker.Cloud.Infrastructure.Models.ScheduledScanModel.LastExecutionError}
     *
     * @param string $lastExecutionStatus
     *
     * @return self
     */
    public function setLastExecutionStatus(?string $lastExecutionStatus): self
    {
        $this->lastExecutionStatus = $lastExecutionStatus;

        return $this;
    }

    /**
     * Represents a model for carrying out scan time window settings.
     *
     * @return ScanTimeWindowModel
     */
    public function getTimeWindow(): ?ScanTimeWindowModel
    {
        return $this->timeWindow;
    }

    /**
     * Represents a model for carrying out scan time window settings.
     *
     * @param ScanTimeWindowModel $timeWindow
     *
     * @return self
     */
    public function setTimeWindow(?ScanTimeWindowModel $timeWindow): self
    {
        $this->timeWindow = $timeWindow;

        return $this;
    }

    /**
     * Gets or sets the identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Gets or sets the identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets or sets the how many times a scheduled scan triggered.
     *
     * @return int
     */
    public function getOccurencesCount(): ?int
    {
        return $this->occurencesCount;
    }

    /**
     * Gets or sets the how many times a scheduled scan triggered.
     *
     * @param int $occurencesCount
     *
     * @return self
     */
    public function setOccurencesCount(?int $occurencesCount): self
    {
        $this->occurencesCount = $occurencesCount;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether scheduled scan is disabled.
     *
     * @return bool
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    /**
     * Gets or sets a value indicating whether scheduled scan is disabled.
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(?bool $disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether scheduling enabled.
     *
     * @return bool
     */
    public function getEnableScheduling(): ?bool
    {
        return $this->enableScheduling;
    }

    /**
     * Gets or sets a value indicating whether scheduling enabled.
     *
     * @param bool $enableScheduling
     *
     * @return self
     */
    public function setEnableScheduling(?bool $enableScheduling): self
    {
        $this->enableScheduling = $enableScheduling;

        return $this;
    }

    /**
     * Gets or sets the name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Gets or sets the name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets or sets the next execution time.
     *
     * @return string
     */
    public function getNextExecutionTime(): ?string
    {
        return $this->nextExecutionTime;
    }

    /**
     * Gets or sets the next execution time.
     *
     * @param string $nextExecutionTime
     *
     * @return self
     */
    public function setNextExecutionTime(?string $nextExecutionTime): self
    {
        $this->nextExecutionTime = $nextExecutionTime;

        return $this;
    }

    /**
     * Gets or sets scan group id.
     *
     * @return string
     */
    public function getScanGroupId(): ?string
    {
        return $this->scanGroupId;
    }

    /**
     * Gets or sets scan group id.
     *
     * @param string $scanGroupId
     *
     * @return self
     */
    public function setScanGroupId(?string $scanGroupId): self
    {
        $this->scanGroupId = $scanGroupId;

        return $this;
    }

    /**
     * Gets or sets scan type.
     *
     * @return string
     */
    public function getScanType(): ?string
    {
        return $this->scanType;
    }

    /**
     * Gets or sets scan type.
     *
     * @param string $scanType
     *
     * @return self
     */
    public function setScanType(?string $scanType): self
    {
        $this->scanType = $scanType;

        return $this;
    }

    /**
     * Gets or sets the run interval of scheduled scan.
     *
     * @return string
     */
    public function getScheduleRunType(): ?string
    {
        return $this->scheduleRunType;
    }

    /**
     * Gets or sets the run interval of scheduled scan.
     *
     * @param string $scheduleRunType
     *
     * @return self
     */
    public function setScheduleRunType(?string $scheduleRunType): self
    {
        $this->scheduleRunType = $scheduleRunType;

        return $this;
    }

    /**
     * Scheduled scan recurrence view model.
     *
     * @return ScheduledScanRecurrenceViewModel
     */
    public function getCustomRecurrence(): ?ScheduledScanRecurrenceViewModel
    {
        return $this->customRecurrence;
    }

    /**
     * Scheduled scan recurrence view model.
     *
     * @param ScheduledScanRecurrenceViewModel $customRecurrence
     *
     * @return self
     */
    public function setCustomRecurrence(?ScheduledScanRecurrenceViewModel $customRecurrence): self
    {
        $this->customRecurrence = $customRecurrence;

        return $this;
    }

    /**
     * Gets or sets whether is target URL required.
     *
     * @return bool
     */
    public function getIsTargetUrlRequired(): ?bool
    {
        return $this->isTargetUrlRequired;
    }

    /**
     * Gets or sets whether is target URL required.
     *
     * @param bool $isTargetUrlRequired
     *
     * @return self
     */
    public function setIsTargetUrlRequired(?bool $isTargetUrlRequired): self
    {
        $this->isTargetUrlRequired = $isTargetUrlRequired;

        return $this;
    }

    /**
     * Represents a model for carrying out additional websites.
     *
     * @return AdditionalWebsitesSettingModel
     */
    public function getAdditionalWebsites(): ?AdditionalWebsitesSettingModel
    {
        return $this->additionalWebsites;
    }

    /**
     * Represents a model for carrying out additional websites.
     *
     * @param AdditionalWebsitesSettingModel $additionalWebsites
     *
     * @return self
     */
    public function setAdditionalWebsites(?AdditionalWebsitesSettingModel $additionalWebsites): self
    {
        $this->additionalWebsites = $additionalWebsites;

        return $this;
    }

    /**
     * Gets or sets the agent group identifier.
     *
     * @return string
     */
    public function getAgentGroupId(): ?string
    {
        return $this->agentGroupId;
    }

    /**
     * Gets or sets the agent group identifier.
     *
     * @param string $agentGroupId
     *
     * @return self
     */
    public function setAgentGroupId(?string $agentGroupId): self
    {
        $this->agentGroupId = $agentGroupId;

        return $this;
    }

    /**
     * Gets or sets the agent identifier.
     *
     * @return string
     */
    public function getAgentId(): ?string
    {
        return $this->agentId;
    }

    /**
     * Gets or sets the agent identifier.
     *
     * @param string $agentId
     *
     * @return self
     */
    public function setAgentId(?string $agentId): self
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * Represents a model for carrying out basic authentication settings.
     *
     * @return BasicAuthenticationSettingModel
     */
    public function getBasicAuthenticationSetting(): ?BasicAuthenticationSettingModel
    {
        return $this->basicAuthenticationSetting;
    }

    /**
     * Represents a model for carrying out basic authentication settings.
     *
     * @param BasicAuthenticationSettingModel $basicAuthenticationSetting
     *
     * @return self
     */
    public function setBasicAuthenticationSetting(?BasicAuthenticationSettingModel $basicAuthenticationSetting): self
    {
        $this->basicAuthenticationSetting = $basicAuthenticationSetting;

        return $this;
    }

    /**
     * Gets or sets the can edit.
     *
     * @return bool
     */
    public function getCanEdit(): ?bool
    {
        return $this->canEdit;
    }

    /**
     * Gets or sets the can edit.
     *
     * @param bool $canEdit
     *
     * @return self
     */
    public function setCanEdit(?bool $canEdit): self
    {
        $this->canEdit = $canEdit;

        return $this;
    }

    /**
     * Represents a model for carrying out client certificate authentication settings.
     *
     * @return ClientCertificateAuthenticationViewModel
     */
    public function getClientCertificateAuthentication(): ?ClientCertificateAuthenticationViewModel
    {
        return $this->clientCertificateAuthentication;
    }

    /**
     * Represents a model for carrying out client certificate authentication settings.
     *
     * @param ClientCertificateAuthenticationViewModel $clientCertificateAuthentication
     *
     * @return self
     */
    public function setClientCertificateAuthentication(?ClientCertificateAuthenticationViewModel $clientCertificateAuthentication): self
    {
        $this->clientCertificateAuthentication = $clientCertificateAuthentication;

        return $this;
    }

    /**
     * Gets or sets the cookies.
     *
     * @return string
     */
    public function getCookies(): ?string
    {
        return $this->cookies;
    }

    /**
     * Gets or sets the cookies.
     *
     * @param string $cookies
     *
     * @return self
     */
    public function setCookies(?string $cookies): self
    {
        $this->cookies = $cookies;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether parallel attacker is enabled.
     *
     * @return bool
     */
    public function getCrawlAndAttack(): ?bool
    {
        return $this->crawlAndAttack;
    }

    /**
     * Gets or sets a value indicating whether parallel attacker is enabled.
     *
     * @param bool $crawlAndAttack
     *
     * @return self
     */
    public function setCrawlAndAttack(?bool $crawlAndAttack): self
    {
        $this->crawlAndAttack = $crawlAndAttack;

        return $this;
    }

    /**
     * Gets or sets the type of the create.
     *
     * @return string
     */
    public function getCreateType(): ?string
    {
        return $this->createType;
    }

    /**
     * Gets or sets the type of the create.
     *
     * @param string $createType
     *
     * @return self
     */
    public function setCreateType(?string $createType): self
    {
        $this->createType = $createType;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether automatic crawling is enabled.
     *
     * @return bool
     */
    public function getFindAndFollowNewLinks(): ?bool
    {
        return $this->findAndFollowNewLinks;
    }

    /**
     * Gets or sets a value indicating whether automatic crawling is enabled.
     *
     * @param bool $findAndFollowNewLinks
     *
     * @return self
     */
    public function setFindAndFollowNewLinks(?bool $findAndFollowNewLinks): self
    {
        $this->findAndFollowNewLinks = $findAndFollowNewLinks;

        return $this;
    }

    /**
     * Represents a model for carrying out form authentication settings.
     *
     * @return FormAuthenticationSettingModel
     */
    public function getFormAuthenticationSetting(): ?FormAuthenticationSettingModel
    {
        return $this->formAuthenticationSetting;
    }

    /**
     * Represents a model for carrying out form authentication settings.
     *
     * @param FormAuthenticationSettingModel $formAuthenticationSetting
     *
     * @return self
     */
    public function setFormAuthenticationSetting(?FormAuthenticationSettingModel $formAuthenticationSetting): self
    {
        $this->formAuthenticationSetting = $formAuthenticationSetting;

        return $this;
    }

    /**
     * Represents a model for carrying out header authentication setttings.
     *
     * @return HeaderAuthenticationModel
     */
    public function getHeaderAuthentication(): ?HeaderAuthenticationModel
    {
        return $this->headerAuthentication;
    }

    /**
     * Represents a model for carrying out header authentication setttings.
     *
     * @param HeaderAuthenticationModel $headerAuthentication
     *
     * @return self
     */
    public function setHeaderAuthentication(?HeaderAuthenticationModel $headerAuthentication): self
    {
        $this->headerAuthentication = $headerAuthentication;

        return $this;
    }

    /**
     * Represents a class that carries out imported links.
     *
     * @return ImportedLinksSetting
     */
    public function getImportedLinks(): ?ImportedLinksSetting
    {
        return $this->importedLinks;
    }

    /**
     * Represents a class that carries out imported links.
     *
     * @param ImportedLinksSetting $importedLinks
     *
     * @return self
     */
    public function setImportedLinks(?ImportedLinksSetting $importedLinks): self
    {
        $this->importedLinks = $importedLinks;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether max scan duration is enabled.
    This is only used for scheduled group scan and regular group scan.
     *
     * @return bool
     */
    public function getIsMaxScanDurationEnabled(): ?bool
    {
        return $this->isMaxScanDurationEnabled;
    }

    /**
     * Gets or sets a value indicating whether max scan duration is enabled.
    This is only used for scheduled group scan and regular group scan.
     *
     * @param bool $isMaxScanDurationEnabled
     *
     * @return self
     */
    public function setIsMaxScanDurationEnabled(?bool $isMaxScanDurationEnabled): self
    {
        $this->isMaxScanDurationEnabled = $isMaxScanDurationEnabled;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether this instance is primary.
     *
     * @return bool
     */
    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
    }

    /**
     * Gets or sets a value indicating whether this instance is primary.
     *
     * @param bool $isPrimary
     *
     * @return self
     */
    public function setIsPrimary(?bool $isPrimary): self
    {
        $this->isPrimary = $isPrimary;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether this instance is shared.
     *
     * @return bool
     */
    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    /**
     * Gets or sets a value indicating whether this instance is shared.
     *
     * @param bool $isShared
     *
     * @return self
     */
    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;

        return $this;
    }

    /**
     * Gets or sets the maximum duration of the scan in hours.
     *
     * @return int
     */
    public function getMaxScanDuration(): ?int
    {
        return $this->maxScanDuration;
    }

    /**
     * Gets or sets the maximum duration of the scan in hours.
     *
     * @param int $maxScanDuration
     *
     * @return self
     */
    public function setMaxScanDuration(?int $maxScanDuration): self
    {
        $this->maxScanDuration = $maxScanDuration;

        return $this;
    }

    /**
     * Gets or sets the scan policy identifier. This property is required if CreateType is Website.
     *
     * @return string
     */
    public function getPolicyId(): ?string
    {
        return $this->policyId;
    }

    /**
     * Gets or sets the scan policy identifier. This property is required if CreateType is Website.
     *
     * @param string $policyId
     *
     * @return self
     */
    public function setPolicyId(?string $policyId): self
    {
        $this->policyId = $policyId;

        return $this;
    }

    /**
     * Gets or sets the profile identifier.
     *
     * @return string
     */
    public function getProfileId(): ?string
    {
        return $this->profileId;
    }

    /**
     * Gets or sets the profile identifier.
     *
     * @param string $profileId
     *
     * @return self
     */
    public function setProfileId(?string $profileId): self
    {
        $this->profileId = $profileId;

        return $this;
    }

    /**
     * Gets or sets a name for this instance.
     *
     * @return string
     */
    public function getProfileName(): ?string
    {
        return $this->profileName;
    }

    /**
     * Gets or sets a name for this instance.
     *
     * @param string $profileName
     *
     * @return self
     */
    public function setProfileName(?string $profileName): self
    {
        $this->profileName = $profileName;

        return $this;
    }

    /**
     * Gets or sets the report policy identifier. This property is required if CreateType is Website.
     *
     * @return string
     */
    public function getReportPolicyId(): ?string
    {
        return $this->reportPolicyId;
    }

    /**
     * Gets or sets the report policy identifier. This property is required if CreateType is Website.
     *
     * @param string $reportPolicyId
     *
     * @return self
     */
    public function setReportPolicyId(?string $reportPolicyId): self
    {
        $this->reportPolicyId = $reportPolicyId;

        return $this;
    }

    /**
     * Gets or sets the save scan profile.
     *
     * @return bool
     */
    public function getSaveScanProfile(): ?bool
    {
        return $this->saveScanProfile;
    }

    /**
     * Gets or sets the save scan profile.
     *
     * @param bool $saveScanProfile
     *
     * @return self
     */
    public function setSaveScanProfile(?bool $saveScanProfile): self
    {
        $this->saveScanProfile = $saveScanProfile;

        return $this;
    }

    /**
     * Represents a class that carries out scope settings.
     *
     * @return ScopeSetting
     */
    public function getScopeSetting(): ?ScopeSetting
    {
        return $this->scopeSetting;
    }

    /**
     * Represents a class that carries out scope settings.
     *
     * @param ScopeSetting $scopeSetting
     *
     * @return self
     */
    public function setScopeSetting(?ScopeSetting $scopeSetting): self
    {
        $this->scopeSetting = $scopeSetting;

        return $this;
    }

    /**
     * Gets or sets the agent selections for the websites that use custom agent. This property is needed for Gorup Scans.
     *
     * @return AgentSelectionModel[]
     */
    public function getSelectedAgents(): ?array
    {
        return $this->selectedAgents;
    }

    /**
     * Gets or sets the agent selections for the websites that use custom agent. This property is needed for Gorup Scans.
     *
     * @param AgentSelectionModel[] $selectedAgents
     *
     * @return self
     */
    public function setSelectedAgents(?array $selectedAgents): self
    {
        $this->selectedAgents = $selectedAgents;

        return $this;
    }

    /**
     * Gets or sets the selected scan profile identifier.
     *
     * @return string
     */
    public function getSelectedScanProfileId(): ?string
    {
        return $this->selectedScanProfileId;
    }

    /**
     * Gets or sets the selected scan profile identifier.
     *
     * @param string $selectedScanProfileId
     *
     * @return self
     */
    public function setSelectedScanProfileId(?string $selectedScanProfileId): self
    {
        $this->selectedScanProfileId = $selectedScanProfileId;

        return $this;
    }

    /**
     * Gets or sets the name of the selected scan profile.
     *
     * @return string
     */
    public function getSelectedScanProfileName(): ?string
    {
        return $this->selectedScanProfileName;
    }

    /**
     * Gets or sets the name of the selected scan profile.
     *
     * @param string $selectedScanProfileName
     *
     * @return self
     */
    public function setSelectedScanProfileName(?string $selectedScanProfileName): self
    {
        $this->selectedScanProfileName = $selectedScanProfileName;

        return $this;
    }

    /**
     * Gets or sets the target website URL. This property is required if CreateType is Website.
     *
     * @return string
     */
    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }

    /**
     * Gets or sets the target website URL. This property is required if CreateType is Website.
     *
     * @param string $targetUrl
     *
     * @return self
     */
    public function setTargetUrl(?string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;

        return $this;
    }

    /**
     * Represents a class that carries out url rewrite settings.
     *
     * @return UrlRewriteSetting
     */
    public function getUrlRewriteSetting(): ?UrlRewriteSetting
    {
        return $this->urlRewriteSetting;
    }

    /**
     * Represents a class that carries out url rewrite settings.
     *
     * @param UrlRewriteSetting $urlRewriteSetting
     *
     * @return self
     */
    public function setUrlRewriteSetting(?UrlRewriteSetting $urlRewriteSetting): self
    {
        $this->urlRewriteSetting = $urlRewriteSetting;

        return $this;
    }

    /**
     * Gets or sets the user identifier.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Gets or sets the user identifier.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Gets or sets the website group identifier. This property is required if CreateType is WebsiteGroup.
     *
     * @return string
     */
    public function getWebsiteGroupId(): ?string
    {
        return $this->websiteGroupId;
    }

    /**
     * Gets or sets the website group identifier. This property is required if CreateType is WebsiteGroup.
     *
     * @param string $websiteGroupId
     *
     * @return self
     */
    public function setWebsiteGroupId(?string $websiteGroupId): self
    {
        $this->websiteGroupId = $websiteGroupId;

        return $this;
    }
}
