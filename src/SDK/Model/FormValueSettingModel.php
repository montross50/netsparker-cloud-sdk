<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class FormValueSettingModel
{
    /**
     * Gets or sets a value indicating whether force option is enabled.
     *
     * @var bool
     */
    protected $force;
    /**
     * Gets or sets the match type.
     *
     * @var string
     */
    protected $match;
    /**
     * Gets or sets the match target.
     *
     * @var string[]
     */
    protected $matchTarget;
    /**
     * Gets or sets the match target.
     *
     * @var string
     */
    protected $matchTargetValue;
    /**
     * Gets or sets the name.
     *
     * @var string
     */
    protected $name;
    /**
     * Gets or sets the pattern.
     *
     * @var string
     */
    protected $pattern;
    /**
     * Gets or sets the type.
     *
     * @var string
     */
    protected $type;
    /**
     * Gets or sets the value.
     *
     * @var string
     */
    protected $value;

    /**
     * Gets or sets a value indicating whether force option is enabled.
     *
     * @return bool
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }

    /**
     * Gets or sets a value indicating whether force option is enabled.
     *
     * @param bool $force
     *
     * @return self
     */
    public function setForce(?bool $force): self
    {
        $this->force = $force;

        return $this;
    }

    /**
     * Gets or sets the match type.
     *
     * @return string
     */
    public function getMatch(): ?string
    {
        return $this->match;
    }

    /**
     * Gets or sets the match type.
     *
     * @param string $match
     *
     * @return self
     */
    public function setMatch(?string $match): self
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Gets or sets the match target.
     *
     * @return string[]
     */
    public function getMatchTarget(): ?array
    {
        return $this->matchTarget;
    }

    /**
     * Gets or sets the match target.
     *
     * @param string[] $matchTarget
     *
     * @return self
     */
    public function setMatchTarget(?array $matchTarget): self
    {
        $this->matchTarget = $matchTarget;

        return $this;
    }

    /**
     * Gets or sets the match target.
     *
     * @return string
     */
    public function getMatchTargetValue(): ?string
    {
        return $this->matchTargetValue;
    }

    /**
     * Gets or sets the match target.
     *
     * @param string $matchTargetValue
     *
     * @return self
     */
    public function setMatchTargetValue(?string $matchTargetValue): self
    {
        $this->matchTargetValue = $matchTargetValue;

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

    /**
     * Gets or sets the type.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Gets or sets the type.
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

    /**
     * Gets or sets the value.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Gets or sets the value.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
