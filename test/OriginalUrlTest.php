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

        $originalUrl = new Url($this->validUrl);

        self::assertInstanceOf(Url::class, $originalUrl);
    }

    public function testToString()
    {

        $this->validUrl = 'google.com';

        $originalUrl = new Url($this->validUrl);

        $this->assertEquals($this->validUrl, (string)$originalUrl);
    }

}
