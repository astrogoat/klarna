# A Klarna app for Stratum

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/klarna.svg?style=flat-square)](https://packagist.org/packages/astrogoat/klarna)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/klarna/run-tests?label=tests)](https://github.com/astrogoat/klarna/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/klarna/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/klarna/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/klarna.svg?style=flat-square)](https://packagist.org/packages/astrogoat/klarna)

## Installation

You can install the package via composer:

```bash
composer require astrogoat/klarna
```

## Usage
Include the script in your Blade file:
```php
@include('klarna::script')
```

When enabled this will add the Klarna javascript. You now have access to Klarna's placement elements.

See [Klarna documentation](https://docs.klarna.com/) for more info.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Laura Tonning](https://github.com/tonning)
- [All Contributors](../../contributors)

This klarna package is forked from the awesome [Spatie klarna package](https://github.com/spatie/package-klarna-laravel#support-us). Please go support them if you can.




## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
