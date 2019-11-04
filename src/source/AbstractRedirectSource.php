<?php


namespace r39u1\redirect\source;


abstract class AbstractRedirectSource implements RedirectSourceInterface
{
    protected $redirectUrl;
    protected $statusCode;

    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}