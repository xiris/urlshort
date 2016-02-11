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
    /** @var  string */
    private $shortUrl = '';

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
}
