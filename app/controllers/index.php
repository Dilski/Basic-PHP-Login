<?php

/**
 * Created by: Dilski
 * Date: 16/11/2016
 * Time: 21:10
 */
class controller
{

    private $methods = ['say_my_name'];

    public function methodExists($method)
    {

        return in_array($method, $this->methods);
    }

    public function say_my_name()
    {
        return json_encode(array('Name' => "Dillon"));
    }

    public function render()
    {
        require PATH_VIEWS . 'index/index.php';
    }
}