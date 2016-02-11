<?php
use App\ValueObject\Url;

/**
 * Source code file for DbService.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class ShorteningService
{

    public function shorten(Url $url) : Url
    {
        return $url;
    }
}
