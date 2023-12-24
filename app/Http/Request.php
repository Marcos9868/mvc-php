<?php 

namespace App\Http;

class Request {
  /**
   * HTTP requisition method
   * @var string 
  */
  private $httpMethod;
  private $uri;
  /**
   * URL parameters
   * @var array
  */
  private $queryParams = [];
  /**
   * Received POST variables
  */
  private $postVars = [];
  /**
   * Header requisition
   * @var array
  */
  private $headers = [];
  public function __construct() {
    $this->queryParams = $_GET ?? [];
    $this->postVars = $_POST ?? [];
    $this->headers = getallheaders();
    $this->httpMethod = $_SERVER["REQUEST_METHOD"] ??"GET";
    $this->uri = $_SERVER["REQUEST_URI"] ??"";
  }

  public function getHttpMethod() {
    return $this->httpMethod;
  }
  public function getUri() {
    return $this->uri;
  }
  public function getHeades() {
    return $this->headers;
  }
  public function getQueryParams() {
    return $this->queryParams;
  }
  public function getPostVars() {
    return $this->postVars;
  }
}