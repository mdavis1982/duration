<?php

namespace MatthewDavis\Duration\Test;

use MatthewDavis\Duration\Duration;
use PHPUnit\Framework\TestCase;

class DurationDaysTest extends TestCase
{
    /** @test */
    public function it_returns_a_duration_created_in_days_in_seconds()
    {
        $seconds = Duration::days(2)->inSeconds();

        $this->assertEquals(172800, $seconds);
    }

    /** @test */
    public function it_returns_a_duration_created_in_days_in_minutes()
    {
        $minutes = Duration::days(2)->inMinutes();

        $this->assertEquals(2880, $minutes);
    }

    /** @test */
    public function it_returns_a_duration_created_in_days_in_hours()
    {
        $twentyFourHours = Duration::days(1)->inHours();
        $seventyTwoHours = Duration::days(3)->inHours();

        $this->assertEquals(24, $twentyFourHours);
        $this->assertEquals(72, $seventyTwoHours);
    }

    /** @test */
    public function it_returns_a_duration_created_in_days_in_days()
    {
        $oneDay    = Duration::days(1)->inDays();
        $threeDays = Duration::days(3)->inDays();

        $this->assertEquals(1, $oneDay);
        $this->assertEquals(3, $threeDays);
    }

    /** @test */
    public function it_returns_a_duration_created_in_days_in_weeks()
    {
        $oneWeek    = Duration::days(7)->inWeeks();
        $threeWeeks = Duration::days(21)->inWeeks();

        $this->assertEquals(1, $oneWeek);
        $this->assertEquals(3, $threeWeeks);
    }

    /** @test */
    public function it_can_be_instantiated_with_a_single_day()
    {
        $days = Duration::day()->inDays();

        $this->assertEquals(1, $days);
    }
}
