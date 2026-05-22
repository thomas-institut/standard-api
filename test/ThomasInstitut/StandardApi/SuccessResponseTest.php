<?php

namespace ThomasInstitut\StandardApi;

use PHPUnit\Framework\TestCase;

class SuccessResponseTest extends TestCase
{
    public function testConstructorSetsCorrectResult(): void
    {
        $response = new SuccessResponse();
        $this->assertEquals(ApiResult::Success, $response->result);
    }

    public function testConstructorSetsTimeStamp(): void
    {
        $response = new SuccessResponse();
        $this->assertGreaterThan(0, $response->timeStamp);
        $this->assertLessThanOrEqual(time(), $response->timeStamp);
    }

    public function testWithTimeStampNowUpdatesTimeStamp(): void
    {
        $response = new SuccessResponse();
        $response->timeStamp = 123;
        $result = $response->withTimeStampNow();

        $this->assertSame($response, $result);
        $this->assertGreaterThanOrEqual(time(), $response->timeStamp);
    }
}
