<?php

namespace Zxurian\AdobeSign\Exceptions;

class BaseUrisException extends AdobeSignException
{
    const NO_ACCESS_TOKEN_HEADER = 'Access token header not provided.';
    const INVALID_ACCESS_TOKEN = 'Access token provided is invalid or has expired.';
}