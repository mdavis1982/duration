<?php

namespace MatthewDavis\Duration\Test;

use PHPUnit\Framework\TestCase;
use MatthewDavis\Duration\Duration;

class DurationMinutesTest extends TestCase
{
    /** @test */
    public function it_returns_a_duration_created_in_minutes_in_seconds()
    {
        $seconds = Duration::minutes(5)->inSeconds();

        $this->assertEquals(300, $seconds);
    }

    /** @test */
    public function it_returns_a_duration_created_in_minutes_in_minutes()
    {
        $minutes = Duration::minutes(300)->inMinutes();

        $this->assertEquals(300, $minutes);
    }

    /** @test */
    public function it_returns_a_duration_created_in_minutes_in_hours()
    {
        $oneHour = Duration::minutes(60)->inHours();
        $threeHours = Duration::minutes(180)->inHours();

        $this->assertEquals(1, $oneHour);
        $this->assertEquals(3, $threeHours);
    }

    /** @test */
    public function it_returns_a_duration_created_in_minutes_in_days()
    {
        $oneDay = Duration::minutes(1440)->inDays();
        $threeDays = Duration::minutes(4320)->inDays();

        $this->assertEquals(1, $oneDay);
        $this->assertEquals(3, $threeDays);
    }

    /** @test */
    public function it_returns_a_duration_created_in_minutes_in_weeks()
    {
        $oneWeek = Duration::minutes(10080)->inWeeks();
        $threeWeeks = Duration::minutes(30240)->inWeeks();

        $this->assertEquals(1, $oneWeek);
        $this->assertEquals(3, $threeWeeks);
    }

    /** @test */
    public function it_can_be_instantiated_with_a_single_minute()
    {
        $minutes = Duration::minute()->inMinutes();

        $this->assertEquals(1, $minutes);
    }
}
