# Boatrace Analytics Purchaser

[![Latest Stable Version](https://poser.pugx.org/boatrace-analytics/purchaser/v/stable)](https://packagist.org/packages/boatrace-analytics/purchaser)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-analytics/purchaser/v/unstable)](https://packagist.org/packages/boatrace-analytics/purchaser)
[![License](https://poser.pugx.org/boatrace-analytics/purchaser/license)](https://packagist.org/packages/boatrace-analytics/purchaser)

## Installation
```
$ composer require boatrace-analytics/purchaser
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Analytics\Purchaser;

Purchaser::setDepositAmount(1000)
    ->setSubscriberNumber('xxxxxxxx')
    ->setPersonalIdentificationNumber('xxxx')
    ->setAuthenticationPassword('xxxxxx')
    ->setPurchasePassword('xxxxxx')
    ->purchase(24, 12, [123, 124, 125, 126]);
```

## License
The Boatrace Analytics Purchaser is open source software licensed under the [MIT license](LICENSE).
