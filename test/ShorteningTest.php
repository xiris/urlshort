<?php

require_once __DIR__ . '/../src/OriginalUrl.php';
require_once __DIR__ . '/../src/Shortening.php';

/**
 * Source code file for ${CLASS_NAME} test.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class ShorteningTest extends PHPUnit_Framework_TestCase
{
    public function testCreation()
    {
        $dbService = $this->getMockBuilder(ShorteningService::class);
        $originalUrl = new Url('google.com', $dbService);
        $shortening = new Shortening($originalUrl);

        self::assertInstanceOf(Shortening::class, $shortening);
    }

    public function testHasShortUrl()
    {
        $originalUrl = new Url('google.com');
        $shortening = new Shortening($originalUrl);

        $shortUrl = $shortening->getShortUrl();

        self::assertStringStartsWith('urlbitches.com/', $shortUrl);
    }


}
