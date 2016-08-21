<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Home Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Base
 */
class Controller_Home extends Controller_Base {
    public $template = 'templates/template';

    public function before() {
        parent::before();
        
        // set global variables
        View::set_global(array(
            'title' => 'Code Review Website',
            'header' => View::forge('templates/header'),
            'footer' => View::forge('templates/footer')
        ));
    }

    public function action_index() {
        $this->template->content = View::forge('home');


    }

}