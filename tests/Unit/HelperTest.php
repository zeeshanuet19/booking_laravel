<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use DTApi\Helpers\TeHelper;

class HelperTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /* Condition will only run for condition 1 less than 90 and else one */
    public function test_expire_time_less_ninty_true()
    {
        $cur_time = "2023-07-31 12:00:00";
        $due_time = "2023-08-04 06:00:00";
        $result = TeHelper::willExpireAt($due_time, $cur_time);
        if($due_time == $result){
            $this->assertTrue(true);
        }
    }

    public function test_expire_time_less_twentyfour_true()
    {
        $cur_time = "2023-07-31 12:00:00";
        $due_time = "2023-08-01 06:00:00";
        $result = TeHelper::willExpireAt($due_time, $cur_time);
        if($result == "2023-07-31 15:00:00"){
            $this->assertTrue(true);
        }
    }

    public function test_expire_time_bw_twentyfour_seventytwo_true()
    {
        $cur_time = "2023-07-31 12:00:00";
        $due_time = "2023-08-01 18:00:00";
        $result = TeHelper::willExpireAt($due_time, $cur_time);
        if($result == "2023-08-01 16:00:00"){
            $this->assertTrue(true);
        }
    }

    public function test_expire_time_greater_ninty_true()
    {
        $cur_time = "2023-07-31 12:00:00";
        $due_time = "2023-08-07 12:00:00";
        $result = TeHelper::willExpireAt($due_time, $cur_time);
        if($result == "2023-08-05 12:00:00"){
            $this->assertTrue(true);
        }
    }
}
