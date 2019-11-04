<?php


namespace r39u1\redirect\source;


interface RedirectSourceInterface
{
    public function findUrl(string $currentUrl);

    public function getRedirectUrl();

    public function getStatusCode();
}