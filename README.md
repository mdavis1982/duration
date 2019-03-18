# Duration
Duration is a PHP library for converting between different types of durations. 

For example, you might want to cache something for 2 days, but your cache configuration is in seconds. Duration makes this super easy to read in your code and does away with the magic numbers.

## Installation

Install the package using Composer:

```bash
composer require matthewdavis/duration
```

## Usage

```php
use MatthewDavis\Duration\Duration;

$seconds = Duration::days(3)->inSeconds(); // 259,200
```

The library has the following static constructors:

```php
// Seconds
Duration::second();
Duration::seconds(int $seconds);

// Minutes
Duration::minute();
Duration::minutes(int $minutes);

// Hours
Duration::hour();
Duration::hours(int $hours);

// Days
Duration::day();
Duration::days(int $days);

// Weeks
Duration::week();
Duration::weeks(int $weeks);
```

You can convert between any of the units by using the getter methods:

```php
$duration = Duration::week();

$duration->inSeconds(); // 604,800
$duration->inMinutes(); // 10,080
$duration->inHours(); // 168
$duration->inDays(); // 7
$duration->inWeeks(); // 1
```

You can also chain the call (as you would likely do when setting a config value):

```php
// In some configuration file...
'cache_ttl' => Duration::days(2)->inSeconds(),
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
