<?php 

namespace App\Controllers\Pages;
use \App\Utils\View;

class Home extends Page{
  /**
   * Method that return home content
   * @return string 
  */
  public static function index() {
    $content = View::render('/Pages/home', [
      'name' => 'Codetech Soluções em Software',
      'description'=> 'Tornamos suas idéias de negócio em realidade',
      'site'=> 'https://www.codetechbr.net.br',
    ]);

    return parent::indexPage('Codetech Soluções em Software', $content);
  }
}