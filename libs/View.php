<?php

class view {
    public function __construct() {
    }
    public function render($name) {
        require 'views/'.$name.'.php';
    }
}