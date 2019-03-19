<?php

namespace MatthewDavis\Duration\Test;

use MatthewDavis\Duration\Duration;
use PHPUnit\Framework\TestCase;

class DurationSecondsTest extends TestCase
{
    /** @test */
    public function it_returns_a_duration_created_in_seconds_in_seconds()
    {
        $seconds = Duration::seconds(300)->inSeconds();

        $this->assertEquals(300, $seconds);
    }

    /** @test */
    public function it_returns_a_duration_created_in_seconds_in_minutes()
    {
        $oneMinute   = Duration::seconds(60)->inMinutes();
        $fiveMinutes = Duration::seconds(300)->inMinutes();

        $this->assertEquals(1, $oneMinute);
        $this->assertEquals(5, $fiveMinutes);
    }

    /** @test */
    public function it_returns_a_duration_created_in_seconds_in_hours()
    {
        $oneHour    = Duration::seconds(3600)->inHours();
        $threeHours = Duration::seconds(10800)->inHours();

        $this->assertEquals(1, $oneHour);
        $this->assertEquals(3, $threeHours);
    }

    /** @test */
    public function it_returns_a_duration_created_in_seconds_in_days()
    {
        $oneDay    = Duration::seconds(86400)->inDays();
        $threeDays = Duration::seconds(259200)->inDays();

        $this->assertEquals(1, $oneDay);
        $this->assertEquals(3, $threeDays);
    }

    /** @test */
    public function it_returns_a_duration_created_in_seconds_in_weeks()
    {
        $oneWeek    = Duration::seconds(604800)->inWeeks();
        $threeWeeks = Duration::seconds(1814400)->inWeeks();

        $this->assertEquals(1, $oneWeek);
        $this->assertEquals(3, $threeWeeks);
    }

    /** @test */
    public function it_can_be_instantiated_with_a_single_second()
    {
        $seconds = Duration::second()->inSeconds();

        $this->assertEquals(1, $seconds);
    }
}
