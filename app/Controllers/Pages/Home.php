<?php 

namespace App\Controllers\Pages;
use \App\Utils\View;

class Home {
  /**
   * Method that return home content
   * @return string 
  */
  public static function index() {
    return View::render('/Pages/home');
  }
}