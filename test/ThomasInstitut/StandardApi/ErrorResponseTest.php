<?php

namespace ThomasInstitut\StandardApi;

use PHPUnit\Framework\TestCase;

class ErrorResponseTest extends TestCase
{
    public function testConstructorSetsCorrectValues(): void
    {
        $message = 'An error occurred';
        $status = 404;
        $response = new ErrorResponse($message, $status);

        $this->assertEquals(ApiResult::Error, $response->result);
        $this->assertEquals($message, $response->message);
        $this->assertEquals($status, $response->httpStatus);
    }

    public function testConstructorUsesDefaultHttpStatus(): void
    {
        $message = 'Default error';
        $response = new ErrorResponse($message);

        $this->assertEquals(500, $response->httpStatus);
        $this->assertEquals($message, $response->message);
    }

    public function testConstructorSetsTimeStamp(): void
    {
        $response = new ErrorResponse('error');
        $this->assertGreaterThan(0, $response->timeStamp);
        $this->assertLessThanOrEqual(time(), $response->timeStamp);
    }
}
