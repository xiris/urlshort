<?php

/**
 * Source code file for Shortening.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class Shortening
{
    /**
     * @var OriginalUrl
     */
    private $url;

    public function __construct(OriginalUrl $url)
    {
        $this->url = $url;
    }

    public function getShortUrl()
    {
        return 'urlbitches.com/short';
    }
}
