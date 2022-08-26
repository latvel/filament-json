# Filament Json

[![Latest Version on Packagist](https://img.shields.io/packagist/v/latvel/filament-json.svg?style=flat-square)](https://packagist.org/packages/latvel/filament-json)
[![Total Downloads](https://img.shields.io/packagist/dt/latvel/filament-json.svg?style=flat-square)](https://packagist.org/packages/latvel/filament-json)

## Installation

You can install the package via composer:

```bash
composer require latvel/filament-json
```

## Usage

```php
use Latvel\FilamentJson\Forms\Components\Json;

Json::make('meta')
    ->schema([])
```

### You need to add field to Model $casts property

```php
class YourModel extends Model {
    protected $casts = [
        'meta' => 'array'
    ]
}
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.