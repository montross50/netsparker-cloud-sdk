<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ScanTimeWindowViewModel
{
    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @var bool
     */
    protected $isEnabled;
    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @var bool
     */
    protected $isEnabledForWebsite;
    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @var bool
     */
    protected $isEnabledForWebsiteGroup;
    /**
     * Gets or sets the time range items.
     *
     * @var ScanTimeWindowItemViewModel[]
     */
    protected $items;
    /**
     * Gets or sets the scan create type.
     *
     * @var string
     */
    protected $scanCreateType;

    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @return bool
     */
    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @return bool
     */
    public function getIsEnabledForWebsite(): ?bool
    {
        return $this->isEnabledForWebsite;
    }

    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @param bool $isEnabledForWebsite
     *
     * @return self
     */
    public function setIsEnabledForWebsite(?bool $isEnabledForWebsite): self
    {
        $this->isEnabledForWebsite = $isEnabledForWebsite;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @return bool
     */
    public function getIsEnabledForWebsiteGroup(): ?bool
    {
        return $this->isEnabledForWebsiteGroup;
    }

    /**
     * Gets or sets a value indicating whether scan time window is enabled.
     *
     * @param bool $isEnabledForWebsiteGroup
     *
     * @return self
     */
    public function setIsEnabledForWebsiteGroup(?bool $isEnabledForWebsiteGroup): self
    {
        $this->isEnabledForWebsiteGroup = $isEnabledForWebsiteGroup;

        return $this;
    }

    /**
     * Gets or sets the time range items.
     *
     * @return ScanTimeWindowItemViewModel[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Gets or sets the time range items.
     *
     * @param ScanTimeWindowItemViewModel[] $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Gets or sets the scan create type.
     *
     * @return string
     */
    public function getScanCreateType(): ?string
    {
        return $this->scanCreateType;
    }

    /**
     * Gets or sets the scan create type.
     *
     * @param string $scanCreateType
     *
     * @return self
     */
    public function setScanCreateType(?string $scanCreateType): self
    {
        $this->scanCreateType = $scanCreateType;

        return $this;
    }
}