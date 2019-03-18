<?php

namespace MatthewDavis\Duration\Test;

use PHPUnit\Framework\TestCase;
use MatthewDavis\Duration\Duration;

class DurationHoursTest extends TestCase
{
    /** @test */
    public function it_returns_a_duration_created_in_hours_in_seconds()
    {
        $seconds = Duration::hours(2)->inSeconds();

        $this->assertEquals(7200, $seconds);
    }

    /** @test */
    public function it_returns_a_duration_created_in_hours_in_minutes()
    {
        $minutes = Duration::hours(2)->inMinutes();

        $this->assertEquals(120, $minutes);
    }

    /** @test */
    public function it_returns_a_duration_created_in_hours_in_hours()
    {
        $oneHour = Duration::hours(1)->inHours();
        $threeHours = Duration::hours(3)->inHours();

        $this->assertEquals(1, $oneHour);
        $this->assertEquals(3, $threeHours);
    }

    /** @test */
    public function it_returns_a_duration_created_in_hours_in_days()
    {
        $oneDay = Duration::hours(24)->inDays();
        $threeDays = Duration::hours(72)->inDays();

        $this->assertEquals(1, $oneDay);
        $this->assertEquals(3, $threeDays);
    }

    /** @test */
    public function it_returns_a_duration_created_in_hours_in_weeks()
    {
        $oneWeek = Duration::hours(168)->inWeeks();
        $threeWeeks = Duration::hours(504)->inWeeks();

        $this->assertEquals(1, $oneWeek);
        $this->assertEquals(3, $threeWeeks);
    }

    /** @test */
    public function it_can_be_instantiated_with_a_single_hour()
    {
        $hours = Duration::hour()->inHours();

        $this->assertEquals(1, $hours);
    }
}
