<?php
use App\ValueObject\Url;

/**
 * Source code file for DbService.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class ShorteningService
{
    private $sha1;

    /**
     * @param Url $url
     * @return Url
     */
    public function shorten(Url $url) : Url
    {
        return $this->generateHash($url);
    }

    /**
     * @param $url
     * @return string
     */
    private function generateHash($url) : string
    {
        session_start();
        $this->sha1 = sha1($url);
        $_SESSION['urls'][] = $this->sha1;
        return $this->sha1;
    }
}
