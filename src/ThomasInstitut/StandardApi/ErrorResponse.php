<?php

namespace ThomasInstitut\StandardApi;


class ErrorResponse extends ApiResponse
{
    public string $message = '';
    public int $httpStatus = 500;
    public function __construct(string $message, int $httpStatus = 500)
    {
        parent::__construct();
        $this->result = ApiResult::Error;
        $this->message = $message;
        $this->httpStatus = $httpStatus;
    }
}