<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class SensitiveKeywordSettingModel
{
    /**
     * Gets or sets the pattern.
     *
     * @var string
     */
    protected $pattern;

    /**
     * Gets or sets the pattern.
     *
     * @return string
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * Gets or sets the pattern.
     *
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }
}
