<?php
namespace Keyi1688\com\alibaba\openapi\client\exception;

class OceanException extends \RuntimeException
{
    private $errorCode;
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }
    public function getErrorCode()
    {
        return $this->errorCode;
    }
}
