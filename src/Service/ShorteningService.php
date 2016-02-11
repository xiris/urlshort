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
        return $this->generateHash($url)
    }

    private function generateHash($url) : string
    {
        session_start();
        $this->sha1 = sha1($url);
        $_SESSION['urls'][] = $this->sha1;
        return $this->sha1;
    }
}
