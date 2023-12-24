<?php 

namespace App\Controllers\Pages;
use \App\Utils\View;

class Page {
  /**
   * Method that renderize header html
   * @return string 
  */
  private static function getHeader() {
    return View::render("/Pages/header");
  }

  /**
   * Method that renderize footer html
   * @return string 
  */
  private static function getFooter() {
    return View::render("/Pages/footer");
  }
  /**
   * Method that return page content
   * @return string 
  */
  public static function indexPage($title, $content) {
    return View::render('/Pages/page', [
      'title'=> $title,
      'header'=> self::getHeader(),
      'content'=> $content,
      'footer'=> self::getFooter()     
    ]);
  }
}