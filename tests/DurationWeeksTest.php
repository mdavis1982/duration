<?php

namespace MatthewDavis\Duration\Test;

use PHPUnit\Framework\TestCase;
use MatthewDavis\Duration\Duration;

class DurationWeeksTest extends TestCase
{
    /** @test */
    public function it_returns_a_duration_created_in_weeks_in_seconds()
    {
        $seconds = Duration::weeks(2)->inSeconds();

        $this->assertEquals(1209600, $seconds);
    }

    /** @test */
    public function it_returns_a_duration_created_in_weeks_in_minutes()
    {
        $minutes = Duration::weeks(2)->inMinutes();

        $this->assertEquals(20160, $minutes);
    }

    /** @test */
    public function it_returns_a_duration_created_in_weeks_in_hours()
    {
        $oneWeekInHours = Duration::weeks(1)->inHours();
        $threeWeeksInHours = Duration::weeks(3)->inHours();

        $this->assertEquals(168, $oneWeekInHours);
        $this->assertEquals(504, $threeWeeksInHours);
    }

    /** @test */
    public function it_returns_a_duration_created_in_weeks_in_days()
    {
        $oneWeekInDays = Duration::weeks(1)->inDays();
        $threeWeeksInDays = Duration::weeks(3)->inDays();

        $this->assertEquals(7, $oneWeekInDays);
        $this->assertEquals(21, $threeWeeksInDays);
    }

    /** @test */
    public function it_returns_a_duration_created_in_weeks_in_weeks()
    {
        $oneWeek = Duration::weeks(1)->inWeeks();
        $threeWeeks = Duration::weeks(3)->inWeeks();

        $this->assertEquals(1, $oneWeek);
        $this->assertEquals(3, $threeWeeks);
    }

    /** @test */
    public function it_can_be_instantiated_with_a_single_week()
    {
        $weeks = Duration::week()->inWeeks();

        $this->assertEquals(1, $weeks);
    }
}
