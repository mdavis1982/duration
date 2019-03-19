<?php

declare(strict_types = 1);

namespace MatthewDavis\Duration;

interface DurationInterface
{
    const SECONDS_IN_MINUTE = 60;
    const SECONDS_IN_HOUR = 60 * self::SECONDS_IN_MINUTE;
    const SECONDS_IN_DAY = 24 * self::SECONDS_IN_HOUR;
    const SECONDS_IN_WEEK = 7 * self::SECONDS_IN_DAY;

    public static function second(): self;
    public static function seconds(int $seconds): self;

    public static function minute(): self;
    public static function minutes(int $minutes): self;

    public static function hour(): self;
    public static function hours(int $hours): self;

    public static function day(): self;
    public static function days(int $days): self;

    public static function week(): self;
    public static function weeks(int $weeks): self;

    public function inSeconds(): int;
    public function inMinutes(): float;
    public function inHours(): float;
    public function inDays(): float;
    public function inWeeks(): float;
}
