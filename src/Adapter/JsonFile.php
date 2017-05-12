<?php
namespace PHPomodoro\Adapter;

use PHPomodoro\Adapter\AdapterInterface;

class JsonFile implements AdapterInterface
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function read()
    {
        $data = file_get_contents($this->file);
        $content = json_decode($data, true);

        if (is_null($content)) {
            throw new \RuntimeException("File isn't a valid json.");
        }

        return $content;
    }

    public function write(array $data)
    {
        //
    }
}
