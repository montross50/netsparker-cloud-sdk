<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class UpdateWebsiteGroupApiModel
{
    /**
     * Gets or sets the website group identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Gets or sets the website group name.
     *
     * @var string
     */
    protected $name;

    /**
     * Gets or sets the website group identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Gets or sets the website group identifier.
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
     * Gets or sets the website group name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Gets or sets the website group name.
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
}