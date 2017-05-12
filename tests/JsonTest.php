<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use PHPomodoro\Adapter\AdapterInterface;
use PHPomodoro\Adapter\JsonFile;

class JsonTest extends TestCase
{
    public function testClassImplementsAdapterInterface()
    {
        $file = "/tmp/test.json";
        $jsonFile = new JsonFile($file);
        $this->assertInstanceOf(AdapterInterface::class, $jsonFile);
    }

    public function testCanReadFile()
    {
        $file = "/tmp/test.json";
        file_put_contents($file, '{"foo": "bar"}');
        $jsonFile = new JsonFile($file);

        $this->assertEquals(["foo" => "bar"], $jsonFile->read());
    }

    /**
     * @expectedException RuntimeException
     * @expecterExceptionMessage File isn't a valid json.
     */
    public function testFilePassedIsJson()
    {
        $file = "/tmp/test.json";
        file_put_contents($file, "I'm not a json! =P");

        $jsonFile = new JsonFile($file);
        $jsonFile->read();
    }
}
