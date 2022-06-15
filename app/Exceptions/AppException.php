<?php

namespace App\Exceptions;

use Exception;

class AppException extends Exception
{
    private function __construct(public string $errorMessage, public int $errorCode) {
        parent::__construct($errorMessage, $errorCode);
    }

    public static function BadRequest(
        string $message = 'Bad Request',
        int $errorCode = 400,
    ): AppException {
        return new AppException($message, $errorCode);
    }
}
