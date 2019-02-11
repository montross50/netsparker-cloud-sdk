<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class BasicAuthenticationCredentialModel
{
    /**
     * Gets or sets the type of the authentication.
     *
     * @var string
     */
    protected $authenticationType;
    /**
     * Gets or sets the domain for basic authentication.
     *
     * @var string
     */
    protected $domain;
    /**
     * Gets or sets the password for basic authentication.
     *
     * @var string
     */
    protected $password;
    /**
     * Gets or sets the URI prefix.
     *
     * @var string
     */
    protected $uriPrefix;
    /**
     * Gets or sets the user name for basic authentication.
     *
     * @var string
     */
    protected $userName;

    /**
     * Gets or sets the type of the authentication.
     *
     * @return string
     */
    public function getAuthenticationType(): ?string
    {
        return $this->authenticationType;
    }

    /**
     * Gets or sets the type of the authentication.
     *
     * @param string $authenticationType
     *
     * @return self
     */
    public function setAuthenticationType(?string $authenticationType): self
    {
        $this->authenticationType = $authenticationType;

        return $this;
    }

    /**
     * Gets or sets the domain for basic authentication.
     *
     * @return string
     */
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * Gets or sets the domain for basic authentication.
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Gets or sets the password for basic authentication.
     *
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Gets or sets the password for basic authentication.
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets or sets the URI prefix.
     *
     * @return string
     */
    public function getUriPrefix(): ?string
    {
        return $this->uriPrefix;
    }

    /**
     * Gets or sets the URI prefix.
     *
     * @param string $uriPrefix
     *
     * @return self
     */
    public function setUriPrefix(?string $uriPrefix): self
    {
        $this->uriPrefix = $uriPrefix;

        return $this;
    }

    /**
     * Gets or sets the user name for basic authentication.
     *
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * Gets or sets the user name for basic authentication.
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }
}
