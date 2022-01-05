<?php

class Datas {

    public $files = [
        "films",
        "people",
        "planets",
        "species",
        "transport",
        "vehicles",
    ];

    public function get_content($file)
    {

        if (!in_array($file, $this->files)) {
            return false;
        }

        $url = "swapi-datas/" . $file . ".json";
        $datas = json_decode(file_get_contents($url));

        return $datas;
    }

}