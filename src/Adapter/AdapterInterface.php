<?php
namespace PHPomodoro\Adapter;

interface AdapterInterface
{
    /**
     * Read a json file, outputing an array;
     * @return array
     */
    public function read();

    /**
     * Receive an array data and output writing a json file
     * @var array $data
     * @return json
     */
    public function write(array $data);
}
