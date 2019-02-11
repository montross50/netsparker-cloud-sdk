<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class NewGroupScanApiModel
{
    /**
     * Gets or sets the scan policy identifier.
    Default: Default Security Checks.
     *
     * @var string
     */
    protected $policyId;
    /**
     * Gets or sets the report policy identifier.
     *
     * @var string
     */
    protected $reportPolicyId;
    /**
     * Represents a model for carrying out scan time window settings.
     *
     * @var ScanTimeWindowModel
     */
    protected $timeWindow;
    /**
     * Gets or sets the website group name.
     *
     * @var string
     */
    protected $websiteGroupName;

    /**
     * Gets or sets the scan policy identifier.
    Default: Default Security Checks.
     *
     * @return string
     */
    public function getPolicyId(): ?string
    {
        return $this->policyId;
    }

    /**
     * Gets or sets the scan policy identifier.
    Default: Default Security Checks.
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
     * Gets or sets the report policy identifier.
     *
     * @return string
     */
    public function getReportPolicyId(): ?string
    {
        return $this->reportPolicyId;
    }

    /**
     * Gets or sets the report policy identifier.
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
     * Gets or sets the website group name.
     *
     * @return string
     */
    public function getWebsiteGroupName(): ?string
    {
        return $this->websiteGroupName;
    }

    /**
     * Gets or sets the website group name.
     *
     * @param string $websiteGroupName
     *
     * @return self
     */
    public function setWebsiteGroupName(?string $websiteGroupName): self
    {
        $this->websiteGroupName = $websiteGroupName;

        return $this;
    }
}