<?php

namespace MatthewDavis\Duration;

class Duration
{
    const SECONDS_IN_MINUTE = 60;

    const SECONDS_IN_HOUR = 3600;

    const SECONDS_IN_DAY = 86400;

    const SECONDS_IN_WEEK = 604800;

    /** @var int */
    protected $seconds;

    protected function __construct(int $seconds)
    {
        $this->seconds = $seconds;
    }

    public static function second(): self
    {
        return static::seconds(1);
    }

    public static function seconds(int $seconds): self
    {
        return new self($seconds);
    }

    public static function minute(): self
    {
        return static::minutes(1);
    }

    public static function minutes(int $minutes): self
    {
        return new self($minutes * self::SECONDS_IN_MINUTE);
    }

    public static function hour(): self
    {
        return static::hours(1);
    }

    public static function hours(int $hours): self
    {
        return new self($hours * self::SECONDS_IN_HOUR);
    }

    public static function day(): self
    {
        return static::days(1);
    }

    public static function days(int $days): self
    {
        return new self($days * self::SECONDS_IN_DAY);
    }

    public static function week(): self
    {
        return static::weeks(1);
    }

    public static function weeks(int $weeks): self
    {
        return new self($weeks * self::SECONDS_IN_WEEK);
    }

    public function inSeconds(): int
    {
        return $this->seconds;
    }

    public function inMinutes(): float
    {
        return $this->seconds / self::SECONDS_IN_MINUTE;
    }

    public function inHours(): float
    {
        return $this->seconds / self::SECONDS_IN_HOUR;
    }

    public function inDays(): float
    {
        return $this->seconds / self::SECONDS_IN_DAY;
    }

    public function inWeeks(): float
    {
        return $this->seconds / self::SECONDS_IN_WEEK;
    }
}
