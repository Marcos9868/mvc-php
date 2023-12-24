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
   * @param array $data = (string/numeric)
   * @return string 
  */
  public static function render($view, $data = []) {
    // View content
    $contentView = self::getContentView($view);
    
    // array keys
    $keys = array_keys($data);
    $keys = array_map(function($item) {
      return '{{'.$item.'}}';
    }, $keys);

    return str_replace($keys, array_values($data), $contentView);
  }
}