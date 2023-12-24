<?php 

namespace App\Utils;

class View {
  /**
   * Method that return view content
   * @param string $view
   * @return string
  */
  private static function getContentView($view) {
    $file = __DIR__ ."/../../resources/View/". $view .".html";
    return file_exists($file) ? file_get_contents($file) : "";
  }
  /**
   * Method that return a rendered view content
   * @param string $view
   * @return string 
  */
  public static function render($view) {
    // View content
    $contentView = self::getContentView($view);
    return $contentView;
  }
}