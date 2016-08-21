<?php

/**
 * The Base Controller.
 *
 *
 * @package  app
 * @extends  Controller_Hybrid
 */
class Controller_Base extends Controller_Hybrid {
    public $template = 'templates/template';

    public function before() {
        parent::before();
    }

    public function after($response) {
        $response = parent::after($response);
        return $response;
    }
}