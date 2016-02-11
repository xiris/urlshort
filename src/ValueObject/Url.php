<?php

namespace App\ValueObject;

/**
 * Source code file for OriginalUrl.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class Url
{
    /** @var  string */
    private $originalUrl;

    public function __construct($originalUrl)
    {
        $this->originalUrl = $originalUrl;
    }

    public function __toString()
    {
        return $this->originalUrl;
    }
}
