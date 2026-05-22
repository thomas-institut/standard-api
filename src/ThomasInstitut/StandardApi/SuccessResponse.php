<?php

namespace ThomasInstitut\StandardApi;

class SuccessResponse extends ApiResponse
{
    public function __construct()
    {
        parent::__construct();
        $this->result = ApiResult::Success;
    }

}