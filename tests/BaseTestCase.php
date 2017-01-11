<?php


namespace Zxurian\AdobeSign\Tests;


use Zxurian\AdobeSign\AdobeSign;
use Mockery as m;
use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    protected $adobeSign;

    protected $provider;

    protected $request;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->request = m::mock('Psr\Http\Message\RequestInterface');
        $this->provider = m::mock('Zxurian\OAuth2\Client\AdobeSign');
        $this->adobeSign = new AdobeSign($this->provider);
    }
}