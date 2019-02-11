<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class UpdateScanNotificationApiModel
{
    /**
     * Gets or sets the scan notification identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Represents a model for carrying out a new scan notification recipient data.
     *
     * @var NewScanNotificationRecipientApiModel
     */
    protected $recipients;
    /**
     * Gets or sets the website group identifier associated with this scan notification.
     *
     * @var string
     */
    protected $websiteGroupName;
    /**
     * Gets or sets the website identifier associated with this scan notification.
     *
     * @var string
     */
    protected $websiteRootUrl;
    /**
     * Gets or sets a value indicating whether this Scan Notification is disabled.
     *
     * @var bool
     */
    protected $disabled;
    /**
     * Gets or sets the event name. This property determines when this rule will be executed.
     *
     * @var string
     */
    protected $event;
    /**
     * Gets or sets the lowest severity. This property determines when this rule will be executed and is only used for Scan.
    Completion Notification
     *
     * @var string
     */
    protected $lowestSeverity;
    /**
     * Gets or sets the name.
     *
     * @var string
     */
    protected $name;
    /**
     * Gets or sets the Website Scope.
    This property indicates whether this rule will be executed for a specific Website, WebsiteGroup or All Websites.
     *
     * @var string
     */
    protected $scope;

    /**
     * Gets or sets the scan notification identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Gets or sets the scan notification identifier.
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
     * Represents a model for carrying out a new scan notification recipient data.
     *
     * @return NewScanNotificationRecipientApiModel
     */
    public function getRecipients(): ?NewScanNotificationRecipientApiModel
    {
        return $this->recipients;
    }

    /**
     * Represents a model for carrying out a new scan notification recipient data.
     *
     * @param NewScanNotificationRecipientApiModel $recipients
     *
     * @return self
     */
    public function setRecipients(?NewScanNotificationRecipientApiModel $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Gets or sets the website group identifier associated with this scan notification.
     *
     * @return string
     */
    public function getWebsiteGroupName(): ?string
    {
        return $this->websiteGroupName;
    }

    /**
     * Gets or sets the website group identifier associated with this scan notification.
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

    /**
     * Gets or sets the website identifier associated with this scan notification.
     *
     * @return string
     */
    public function getWebsiteRootUrl(): ?string
    {
        return $this->websiteRootUrl;
    }

    /**
     * Gets or sets the website identifier associated with this scan notification.
     *
     * @param string $websiteRootUrl
     *
     * @return self
     */
    public function setWebsiteRootUrl(?string $websiteRootUrl): self
    {
        $this->websiteRootUrl = $websiteRootUrl;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether this Scan Notification is disabled.
     *
     * @return bool
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    /**
     * Gets or sets a value indicating whether this Scan Notification is disabled.
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
     * Gets or sets the event name. This property determines when this rule will be executed.
     *
     * @return string
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * Gets or sets the event name. This property determines when this rule will be executed.
     *
     * @param string $event
     *
     * @return self
     */
    public function setEvent(?string $event): self
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Gets or sets the lowest severity. This property determines when this rule will be executed and is only used for Scan.
    Completion Notification
     *
     * @return string
     */
    public function getLowestSeverity(): ?string
    {
        return $this->lowestSeverity;
    }

    /**
     * Gets or sets the lowest severity. This property determines when this rule will be executed and is only used for Scan.
    Completion Notification
     *
     * @param string $lowestSeverity
     *
     * @return self
     */
    public function setLowestSeverity(?string $lowestSeverity): self
    {
        $this->lowestSeverity = $lowestSeverity;

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
     * Gets or sets the Website Scope.
    This property indicates whether this rule will be executed for a specific Website, WebsiteGroup or All Websites.
     *
     * @return string
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * Gets or sets the Website Scope.
    This property indicates whether this rule will be executed for a specific Website, WebsiteGroup or All Websites.
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }
}
