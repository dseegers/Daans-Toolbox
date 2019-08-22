<?php

namespace Flx\Toolbox\Helper;

class GetTag
{

    public function getTitle($value)
    {
        return "<h1>$value</h1>";
    }

    public function getCheckbox($name, $array)
    {
        $items = [];

        foreach ($array as $index => $item) {
            echo "<input type=\"checkbox\" name=\"$index\" value=\"value\"> $item<br>";
        }

        $response = ['blabla' => 'sdadas', 'dsa' => 'dasdas'];

        $posts = ['hello' => 'world'];
        $json_data = json_encode($response);
        file_put_contents(__dir__ . 'myfile.json', $json_data);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //save checkbox

        } else {
            //get checkbox inc data
        }
    }

}