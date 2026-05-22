<?php

namespace ThomasInstitut\StandardApi;

enum ApiResult: string
{
    case Success = 'Success';
    case Error = 'Error';
    case Undefined = 'Undefined';
}


abstract class ApiResponse
{
    public ApiResult $result = ApiResult::Undefined;
    public int $timeStamp = -1;

    public function __construct()
    {
        $this->withTimeStampNow();
    }

    public function withTimeStampNow(): self
    {
        $this->timeStamp = time();
        return $this;
    }
}