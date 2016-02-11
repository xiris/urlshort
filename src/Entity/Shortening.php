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
        return 'urlbitches.com/short';
    }
}
