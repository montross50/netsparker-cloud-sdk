<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class AuthVerificationApiResult
{
    /**
     * Gets or sets the suggested logout keywords.
     *
     * @var string[]
     */
    protected $keywords;
    /**
     * Gets or sets the login image in base64 encoded format.
     *
     * @var string
     */
    protected $loginImageBase64;
    /**
     * Gets or sets the login required URL.
     *
     * @var string
     */
    protected $loginRequiredUrl;
    /**
     * Gets or sets the logout image in base64 encoded format.
     *
     * @var string
     */
    protected $logoutImageBase64;
    /**
     * Gets or sets the type of the logout signature.
     *
     * @var string
     */
    protected $logoutSignatureType;
    /**
     * Gets or sets the redirect location.
     *
     * @var string
     */
    protected $redirectLocation;

    /**
     * Gets or sets the suggested logout keywords.
     *
     * @return string[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * Gets or sets the suggested logout keywords.
     *
     * @param string[] $keywords
     *
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Gets or sets the login image in base64 encoded format.
     *
     * @return string
     */
    public function getLoginImageBase64(): ?string
    {
        return $this->loginImageBase64;
    }

    /**
     * Gets or sets the login image in base64 encoded format.
     *
     * @param string $loginImageBase64
     *
     * @return self
     */
    public function setLoginImageBase64(?string $loginImageBase64): self
    {
        $this->loginImageBase64 = $loginImageBase64;

        return $this;
    }

    /**
     * Gets or sets the login required URL.
     *
     * @return string
     */
    public function getLoginRequiredUrl(): ?string
    {
        return $this->loginRequiredUrl;
    }

    /**
     * Gets or sets the login required URL.
     *
     * @param string $loginRequiredUrl
     *
     * @return self
     */
    public function setLoginRequiredUrl(?string $loginRequiredUrl): self
    {
        $this->loginRequiredUrl = $loginRequiredUrl;

        return $this;
    }

    /**
     * Gets or sets the logout image in base64 encoded format.
     *
     * @return string
     */
    public function getLogoutImageBase64(): ?string
    {
        return $this->logoutImageBase64;
    }

    /**
     * Gets or sets the logout image in base64 encoded format.
     *
     * @param string $logoutImageBase64
     *
     * @return self
     */
    public function setLogoutImageBase64(?string $logoutImageBase64): self
    {
        $this->logoutImageBase64 = $logoutImageBase64;

        return $this;
    }

    /**
     * Gets or sets the type of the logout signature.
     *
     * @return string
     */
    public function getLogoutSignatureType(): ?string
    {
        return $this->logoutSignatureType;
    }

    /**
     * Gets or sets the type of the logout signature.
     *
     * @param string $logoutSignatureType
     *
     * @return self
     */
    public function setLogoutSignatureType(?string $logoutSignatureType): self
    {
        $this->logoutSignatureType = $logoutSignatureType;

        return $this;
    }

    /**
     * Gets or sets the redirect location.
     *
     * @return string
     */
    public function getRedirectLocation(): ?string
    {
        return $this->redirectLocation;
    }

    /**
     * Gets or sets the redirect location.
     *
     * @param string $redirectLocation
     *
     * @return self
     */
    public function setRedirectLocation(?string $redirectLocation): self
    {
        $this->redirectLocation = $redirectLocation;

        return $this;
    }
}
