<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ScopeSetting
{
    /**
     * Gets or sets the excluded links.
     *
     * @var ExcludedLinkModel[]
     */
    protected $excludedLinks;
    /**
     * Gets or sets a value indicating whether links should be excluded/included.
     *
     * @var bool
     */
    protected $excludeLinks;
    /**
     * Gets or sets the disallowed http methods.
     *
     * @var string[]
     */
    protected $disallowedHttpMethods;
    /**
     * Gets or sets the scan scope.
     *
     * @var string
     */
    protected $scope;

    /**
     * Gets or sets the excluded links.
     *
     * @return ExcludedLinkModel[]
     */
    public function getExcludedLinks(): ?array
    {
        return $this->excludedLinks;
    }

    /**
     * Gets or sets the excluded links.
     *
     * @param ExcludedLinkModel[] $excludedLinks
     *
     * @return self
     */
    public function setExcludedLinks(?array $excludedLinks): self
    {
        $this->excludedLinks = $excludedLinks;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether links should be excluded/included.
     *
     * @return bool
     */
    public function getExcludeLinks(): ?bool
    {
        return $this->excludeLinks;
    }

    /**
     * Gets or sets a value indicating whether links should be excluded/included.
     *
     * @param bool $excludeLinks
     *
     * @return self
     */
    public function setExcludeLinks(?bool $excludeLinks): self
    {
        $this->excludeLinks = $excludeLinks;

        return $this;
    }

    /**
     * Gets or sets the disallowed http methods.
     *
     * @return string[]
     */
    public function getDisallowedHttpMethods(): ?array
    {
        return $this->disallowedHttpMethods;
    }

    /**
     * Gets or sets the disallowed http methods.
     *
     * @param string[] $disallowedHttpMethods
     *
     * @return self
     */
    public function setDisallowedHttpMethods(?array $disallowedHttpMethods): self
    {
        $this->disallowedHttpMethods = $disallowedHttpMethods;

        return $this;
    }

    /**
     * Gets or sets the scan scope.
     *
     * @return string
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * Gets or sets the scan scope.
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
