<?php

class Model {

    public function __construct($datas) {
        $this->id = $datas->pk;
        foreach ($datas->fields as $key => $value) { $this->$key = $value; }
    }

    public function __toString()
    {
        $attrs = get_object_vars($this);
        $content = "";
        $content .= '<br>';
        $content .= '----------' . get_class($this) . '----------';
        $content .= '<br>';
        $content .= '<pre>';
        $content .= '<code>';
        foreach ($attrs as $key => $value) {
            if (gettype($value) == "array") {
                $content .= $key . " : <br>";
                foreach ($value as $v) {
                    $content .= "    " . $v . "<br>";
                }
            } else {
                $content .= $key . " : " . $value . "<br>";
            }

        }
        $content .= '</code>';
        $content .= '</pre>';
        return $content;
    }

}