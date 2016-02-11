<?php

use App\Entity\Shortening;
use App\ValueObject\Url;

require_once __DIR__ . '/../src/ValueObject/Url.php';
require_once __DIR__ . '/../src/Entity/Shortening.php';

/**
 * Source code file for ${CLASS_NAME} test.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class ShorteningTest extends PHPUnit_Framework_TestCase
{
    /** @var  Shortening */
    private $shortening;

    public function setUp()
    {
        $dbService = $this->getMockBuilder(DbService::class);

        $originalUrl = new Url('google.com', $dbService);
        $this->shortening = new Shortening($originalUrl);
    }
    public function testCreation()
    {
        self::assertInstanceOf(Shortening::class, $this->shortening);
    }

    public function testHasShortUrl()
    {
        $this->shortening->setShortUrl('urlbitches.com/absd');
        self::assertEquals('urlbitches.com/absd', $this->shortening->getShortUrl());
    }

    public function testSetShortUrl()
    {
        $this->shortening->setShortUrl('urlbitches.com/absd');

        self::assertEquals('urlbitches.com/absd', $this->shortening->getShortUrl());
    }
}
