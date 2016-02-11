<?php
require_once __DIR__ . '/../src/OriginalUrl.php';
/**
 * Source code file for ${CLASS_NAME} test.
 *
 * @author Serge Kukharev <sergei.kukhariev@carmudi.com>
 */
class OriginalUrlTest extends PHPUnit_Framework_TestCase
{
    private $validUrl;

    public function testCreation()
    {
        $this->validUrl = 'google.com';

        $originalUrl = new OriginalUrl($this->validUrl);

        self::assertInstanceOf(OriginalUrl::class, $originalUrl);
    }

    public function testToString()
    {

        $this->validUrl = 'google.com';

        $originalUrl = new OriginalUrl($this->validUrl);

        $this->assertEquals($this->validUrl, (string)$originalUrl);
    }

}
