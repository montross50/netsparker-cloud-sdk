<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class FileCache
{
    /**
     * Gets or sets the key of the cached file data.
     *
     * @var string
     */
    protected $key;
    /**
     * Gets or sets the name of the file.
     *
     * @var string
     */
    protected $fileName;

    /**
     * Gets or sets the key of the cached file data.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Gets or sets the key of the cached file data.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Gets or sets the name of the file.
     *
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * Gets or sets the name of the file.
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }
}
