<?php 

namespace App\Controllers\Pages;
use \App\Utils\View;
use \App\Models\Entity\Organization;

class Home extends Page{
  /**
   * Method that return home content
   * @return string 
  */
  public static function index() {
    $obOrganization = new Organization;
    $content = View::render('/Pages/home', [
      'name' => $obOrganization->name,
      'description'=> $obOrganization->description,
      'site'=> $obOrganization->website,
    ]);

    return parent::indexPage('Codetech Soluções em Software', $content);
  }
}