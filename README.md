# Netsparker Cloud PHP SDK

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package creates an SDK to integrate with Netsparker Cloud. It is intended to work with Laravel. Hence the service provider. If someone really needs a non laravel version I could do that but this is my use case. The package uses [Jane Open Api](https://packagist.org/packages/jane-php/open-api) to generate the raw SDK. 

## Install

Via Composer

``` bash
$ composer require montross50/netsparker-cloud-sdk
```

## Usage

``` php
$api = app(NetsparkerCloudInterface::class);
$result = $api->scansResult('foobar');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

The integration tests expect you to create a phpunit.xml.dist and place your credentials in the env.

```xml
    <php>
        <env name="NETSPARKER_USERNAME" value="user"/>
        <env name="NETSPARKER_PASSWORD" value="pass"/>
        <env name="NETSPARKER_URL" value="url"/>
        <env name="INTEGRATION_TEST_USER_EMAIL" value="api user email"/>
        <env name="INTEGRATION_TEST_SCAN_ID" value="some scan id"/>
    </php>
```
``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sch43228@gmail.com instead of using the issue tracker.

## Credits

- [Trent Schmidt][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/montross50/netsparker-cloud-sdk.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/montross50/netsparker-cloud-sdk/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/montross50/netsparker-cloud-sdk.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/montross50/netsparker-cloud-sdk.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/montross50/netsparker-cloud-sdk.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/montross50/netsparker-cloud-sdk
[link-travis]: https://travis-ci.org/montross50/netsparker-cloud-sdk
[link-scrutinizer]: https://scrutinizer-ci.com/g/montross50/netsparker-cloud-sdk/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/montross50/netsparker-cloud-sdk
[link-downloads]: https://packagist.org/packages/montross50/netsparker-cloud-sdk
[link-author]: https://github.com/montross50
[link-contributors]: ../../contributors
