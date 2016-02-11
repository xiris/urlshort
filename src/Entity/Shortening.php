<?php

namespace App\Entity;

use App\ValueObject\Url;

/**
 * Source code file for Shortening.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class Shortening
{
    /**
     * @var Url
     */
    private $url;

    public function __construct(Url $url)
    {
        $this->url = $url;
    }

    public function getShortUrl()
    {
        return $this->shortUrl;
    }

    public function setShortUrl($shortUrl)
    {
        $this->shortUrl = $shortUrl;
    }

    /** string */
    public function __toString()
    {
        return $this->shortUrl;
    }

    private function generateHash($url) : string
    {
        session_start();
        $this->sha1 = sha1($url);
        $_SESSION['urls'][] = $this->sha1;
        return $this->sha1;
    }
}
