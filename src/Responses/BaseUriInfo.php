<?php

namespace Zxurian\AdobeSign\Responses;

/**
 * Response Class for BaseUris operation
 * 
 * @author rgoodrow
 *
 */
class BaseUriInfo
{
    /** @var string The access point from where other APIs need to be accessed. In case other APIs are accessed from a different end point, it will be considered an invalid request. */
    public $apiAccessPoint = null;
    
    /** @var string The access point from where Adobe Sign website can be be accessed. */
    public $webAccessPoint = null;
    
    public function __construct($jsonResponse)
    {
        $this->apiAccessPoint = $values['api_access_point'];
        $this->webAccessPoint = $values['web_access_point'];
    }
}