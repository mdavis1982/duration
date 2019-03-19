<?php
declare(strict_types=1);

namespace MatthewDavis\Duration;

class Duration implements DurationInterface
{
    /** @var int */
    protected $seconds;

    protected function __construct(int $seconds)
    {
        $this->seconds = $seconds;
    }

    public static function second(): DurationInterface
    {
        return static::seconds(1);
    }

    public static function seconds(int $seconds): DurationInterface
    {
        return new static($seconds);
    }

    public static function minute(): DurationInterface
    {
        return static::minutes(1);
    }

    public static function minutes(int $minutes): DurationInterface
    {
        return new static($minutes * DurationInterface::SECONDS_IN_MINUTE);
    }

    public static function hour(): DurationInterface
    {
        return static::hours(1);
    }

    public static function hours(int $hours): DurationInterface
    {
        return new static($hours * DurationInterface::SECONDS_IN_HOUR);
    }

    public static function day(): DurationInterface
    {
        return static::days(1);
    }

    public static function days(int $days): DurationInterface
    {
        return new static($days * DurationInterface::SECONDS_IN_DAY);
    }

    public static function week(): DurationInterface
    {
        return static::weeks(1);
    }

    public static function weeks(int $weeks): DurationInterface
    {
        return new static($weeks * DurationInterface::SECONDS_IN_WEEK);
    }

    public function inSeconds(): int
    {
        return $this->seconds;
    }

    public function inMinutes(): float
    {
        return $this->seconds / DurationInterface::SECONDS_IN_MINUTE;
    }

    public function inHours(): float
    {
        return $this->seconds / DurationInterface::SECONDS_IN_HOUR;
    }

    public function inDays(): float
    {
        return $this->seconds / DurationInterface::SECONDS_IN_DAY;
    }

    public function inWeeks(): float
    {
        return $this->seconds / DurationInterface::SECONDS_IN_WEEK;
    }
}
