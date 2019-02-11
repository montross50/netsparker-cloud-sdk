<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ProxySettingsModel
{
    /**
     * Gets or sets a value indicating whether custom proxy is enable .
     *
     * @var bool
     */
    protected $enableCustomProxy;
    /**
     * Gets or sets the proxy address.
     *
     * @var string
     */
    protected $proxyAddress;
    /**
     * Gets or sets a value indicating whether the proxy requires authentication.
     *
     * @var bool
     */
    protected $proxyAuthenticationRequired;
    /**
     * Gets or sets the proxy domain.
     *
     * @var string
     */
    protected $proxyDomain;
    /**
     * Gets or sets the proxy password.
     *
     * @var string
     */
    protected $proxyPassword;
    /**
     * Gets or sets the proxy port.
     *
     * @var int
     */
    protected $proxyPort;
    /**
     * Gets or sets the name of the proxy user.
     *
     * @var string
     */
    protected $proxyUsername;

    /**
     * Gets or sets a value indicating whether custom proxy is enable .
     *
     * @return bool
     */
    public function getEnableCustomProxy(): ?bool
    {
        return $this->enableCustomProxy;
    }

    /**
     * Gets or sets a value indicating whether custom proxy is enable .
     *
     * @param bool $enableCustomProxy
     *
     * @return self
     */
    public function setEnableCustomProxy(?bool $enableCustomProxy): self
    {
        $this->enableCustomProxy = $enableCustomProxy;

        return $this;
    }

    /**
     * Gets or sets the proxy address.
     *
     * @return string
     */
    public function getProxyAddress(): ?string
    {
        return $this->proxyAddress;
    }

    /**
     * Gets or sets the proxy address.
     *
     * @param string $proxyAddress
     *
     * @return self
     */
    public function setProxyAddress(?string $proxyAddress): self
    {
        $this->proxyAddress = $proxyAddress;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether the proxy requires authentication.
     *
     * @return bool
     */
    public function getProxyAuthenticationRequired(): ?bool
    {
        return $this->proxyAuthenticationRequired;
    }

    /**
     * Gets or sets a value indicating whether the proxy requires authentication.
     *
     * @param bool $proxyAuthenticationRequired
     *
     * @return self
     */
    public function setProxyAuthenticationRequired(?bool $proxyAuthenticationRequired): self
    {
        $this->proxyAuthenticationRequired = $proxyAuthenticationRequired;

        return $this;
    }

    /**
     * Gets or sets the proxy domain.
     *
     * @return string
     */
    public function getProxyDomain(): ?string
    {
        return $this->proxyDomain;
    }

    /**
     * Gets or sets the proxy domain.
     *
     * @param string $proxyDomain
     *
     * @return self
     */
    public function setProxyDomain(?string $proxyDomain): self
    {
        $this->proxyDomain = $proxyDomain;

        return $this;
    }

    /**
     * Gets or sets the proxy password.
     *
     * @return string
     */
    public function getProxyPassword(): ?string
    {
        return $this->proxyPassword;
    }

    /**
     * Gets or sets the proxy password.
     *
     * @param string $proxyPassword
     *
     * @return self
     */
    public function setProxyPassword(?string $proxyPassword): self
    {
        $this->proxyPassword = $proxyPassword;

        return $this;
    }

    /**
     * Gets or sets the proxy port.
     *
     * @return int
     */
    public function getProxyPort(): ?int
    {
        return $this->proxyPort;
    }

    /**
     * Gets or sets the proxy port.
     *
     * @param int $proxyPort
     *
     * @return self
     */
    public function setProxyPort(?int $proxyPort): self
    {
        $this->proxyPort = $proxyPort;

        return $this;
    }

    /**
     * Gets or sets the name of the proxy user.
     *
     * @return string
     */
    public function getProxyUsername(): ?string
    {
        return $this->proxyUsername;
    }

    /**
     * Gets or sets the name of the proxy user.
     *
     * @param string $proxyUsername
     *
     * @return self
     */
    public function setProxyUsername(?string $proxyUsername): self
    {
        $this->proxyUsername = $proxyUsername;

        return $this;
    }
}
