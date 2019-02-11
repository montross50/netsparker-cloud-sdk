<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ScanReportApiModel
{
    /**
     * Gets or sets the content format. This parameter can only be used for vulnerabilities XML and JSON report.
     *
     * @var string
     */
    protected $contentFormat;
    /**
     * If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be.
    used for vulnerabilities XML report.
    Default: false
     *
     * @var bool
     */
    protected $excludeResponseData;
    /**
     * Gets or sets the report format.
    Crawled URLs, scanned URLs and vulnerabilities can be exported as XML, CSV or JSON.
    Scan detail, Owasp Top Ten 2013, PCI Compliance, HIPAA Compliance, Executive Summary and Knowledge Base reports can be
    exported as HTML or PDF.
    ModSecurity WAF Rules report can be exported as TXT.
     *
     * @var string
     */
    protected $format;
    /**
     * Gets or sets the scan identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Gets or sets the report type.
    FullScanDetail option corresponds to "Detailed Scan Report (Including addressed issues)".
    ScanDetail option corresponds to "Detailed Scan Report (Excluding addressed issues)".
     *
     * @var string
     */
    protected $type;

    /**
     * Gets or sets the content format. This parameter can only be used for vulnerabilities XML and JSON report.
     *
     * @return string
     */
    public function getContentFormat(): ?string
    {
        return $this->contentFormat;
    }

    /**
     * Gets or sets the content format. This parameter can only be used for vulnerabilities XML and JSON report.
     *
     * @param string $contentFormat
     *
     * @return self
     */
    public function setContentFormat(?string $contentFormat): self
    {
        $this->contentFormat = $contentFormat;

        return $this;
    }

    /**
     * If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be.
    used for vulnerabilities XML report.
    Default: false
     *
     * @return bool
     */
    public function getExcludeResponseData(): ?bool
    {
        return $this->excludeResponseData;
    }

    /**
     * If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be.
    used for vulnerabilities XML report.
    Default: false
     *
     * @param bool $excludeResponseData
     *
     * @return self
     */
    public function setExcludeResponseData(?bool $excludeResponseData): self
    {
        $this->excludeResponseData = $excludeResponseData;

        return $this;
    }

    /**
     * Gets or sets the report format.
    Crawled URLs, scanned URLs and vulnerabilities can be exported as XML, CSV or JSON.
    Scan detail, Owasp Top Ten 2013, PCI Compliance, HIPAA Compliance, Executive Summary and Knowledge Base reports can be
    exported as HTML or PDF.
    ModSecurity WAF Rules report can be exported as TXT.
     *
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * Gets or sets the report format.
    Crawled URLs, scanned URLs and vulnerabilities can be exported as XML, CSV or JSON.
    Scan detail, Owasp Top Ten 2013, PCI Compliance, HIPAA Compliance, Executive Summary and Knowledge Base reports can be
    exported as HTML or PDF.
    ModSecurity WAF Rules report can be exported as TXT.
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;

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
     * Gets or sets the report type.
    FullScanDetail option corresponds to "Detailed Scan Report (Including addressed issues)".
    ScanDetail option corresponds to "Detailed Scan Report (Excluding addressed issues)".
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Gets or sets the report type.
    FullScanDetail option corresponds to "Detailed Scan Report (Including addressed issues)".
    ScanDetail option corresponds to "Detailed Scan Report (Excluding addressed issues)".
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
