<?php
declare(strict_types=1);

namespace MatthewDavis\Duration;

interface DurationInterface
{
    const SECONDS_IN_MINUTE = 60;
    const SECONDS_IN_HOUR   = 60 * self::SECONDS_IN_MINUTE;
    const SECONDS_IN_DAY    = 24 * self::SECONDS_IN_HOUR;
    const SECONDS_IN_WEEK   = 7 * self::SECONDS_IN_DAY;

    public static function second(): DurationInterface;

    public static function seconds(int $seconds): DurationInterface;

    public static function minute(): DurationInterface;

    public static function minutes(int $minutes): DurationInterface;

    public static function hour(): DurationInterface;

    public static function hours(int $hours): DurationInterface;

    public static function day(): DurationInterface;

    public static function days(int $days): DurationInterface;

    public static function week(): DurationInterface;

    public static function weeks(int $weeks): DurationInterface;

    public function inSeconds(): int;

    public function inMinutes(): float;

    public function inHours(): float;

    public function inDays(): float;

    public function inWeeks(): float;
}
