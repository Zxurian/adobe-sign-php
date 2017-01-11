<?php

namespace Zxurian\AdobeSign\Operations;

use Zxurian\AdobeSign\AdobeSign;

class BaseUris extends AdobeSign
{
    /**
     * Gets the base uri to access other APIs. In case other APIs are accessed from a different end point, it will be considered an invalid request
     * 
     */
    public function getBaseUris()
    {
        $request = $this->provider->getAuthenticatedRequest(
            'GET',
            "$this->baseUri/$this->version/base_uris",
            $this->accessToken
        );
        
        $response = $this->provider->getResponse($request);
        
        return $this->parseResponse(get_class($this), 'BaseUriInfo', $response);
    }
}