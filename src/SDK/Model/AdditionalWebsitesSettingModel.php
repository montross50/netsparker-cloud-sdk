<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class AdditionalWebsitesSettingModel
{
    /**
     * Gets or sets the additional websites to scan.
     *
     * @var AdditionalWebsiteModel[]
     */
    protected $websites;

    /**
     * Gets or sets the additional websites to scan.
     *
     * @return AdditionalWebsiteModel[]
     */
    public function getWebsites(): ?array
    {
        return $this->websites;
    }

    /**
     * Gets or sets the additional websites to scan.
     *
     * @param AdditionalWebsiteModel[] $websites
     *
     * @return self
     */
    public function setWebsites(?array $websites): self
    {
        $this->websites = $websites;

        return $this;
    }
}