<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ScanCustomReportApiModel
{
    /**
     * If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be.
    used for vulnerabilities XML report.
    Default: false
     *
     * @var bool
     */
    protected $excludeIgnoreds;
    /**
     * Gets or sets the scan identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Gets or sets report name. Report name also keeps report type in it.
     *
     * @var string
     */
    protected $reportName;
    /**
     * Gets or sets the report type.
     *
     * @var string
     */
    protected $type;

    /**
     * If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be.
    used for vulnerabilities XML report.
    Default: false
     *
     * @return bool
     */
    public function getExcludeIgnoreds(): ?bool
    {
        return $this->excludeIgnoreds;
    }

    /**
     * If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be.
    used for vulnerabilities XML report.
    Default: false
     *
     * @param bool $excludeIgnoreds
     *
     * @return self
     */
    public function setExcludeIgnoreds(?bool $excludeIgnoreds): self
    {
        $this->excludeIgnoreds = $excludeIgnoreds;

        return $this;
    }

    /**
     * Gets or sets the scan identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Gets or sets the scan identifier.
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
     * Gets or sets report name. Report name also keeps report type in it.
     *
     * @return string
     */
    public function getReportName(): ?string
    {
        return $this->reportName;
    }

    /**
     * Gets or sets report name. Report name also keeps report type in it.
     *
     * @param string $reportName
     *
     * @return self
     */
    public function setReportName(?string $reportName): self
    {
        $this->reportName = $reportName;

        return $this;
    }

    /**
     * Gets or sets the report type.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Gets or sets the report type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}