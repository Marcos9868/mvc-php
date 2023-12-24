<?php 

namespace App\Http;

class Response {
  /**
   * HTTP Status Code
   * @var integer 
  */
  private $httpCode = 200;
  /**
   * Received headers
   * @var array
  */
  private $headers = [];
  /**
   * Content-Type
   * @var string 
  */
  private $contentType = "text/html";
  private $body;

  public function __construct($httpCode, $body, $contentType = "text/html") {
    $this->httpCode = $httpCode;
    $this->body = $body;
    $this->setcontentType($contentType);
  }

  public function setContentType($contentType) {
    $this->contentType = $contentType;
    $this->addHeader('Content-Type', $contentType);    
  }

  public function addHeader($key, $value) {
    $this->headers[$key] = $value;
  }

  /**
   * Method that send user response 
  */
  public function sendResponse() {
    $this->sendHeaders();
    switch($this->contentType) {
      case 'text/html':
        echo $this->body;
        break;
    }
  }

  private function sendHeaders() {
    // Status
    http_response_code($this->httpCode);

    // Send headers
    foreach( $this->headers as $key => $value ) {
      header($key.': '.$value);
    }
  }
}