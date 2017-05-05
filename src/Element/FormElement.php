<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class FormElement extends HtmlElement
{

  /**
   * FormElement constructor.
   *
   * @param string     $action
   * @param string     $method
   * @param bool|false $multipart
   * @param            $content
   * @param array      $attributes
   */
  public function __construct($action = '/', $method = 'get', $multipart = false, $content = null, array $attributes = [])
  {
    parent::__construct('form', $attributes, null);

    $this
      ->setAttribute('action', $action)
      ->setAttribute('method', strtoupper($method));

    if ($multipart === true) {
      $this->setAttribute('enctype', 'multipart/form-data');
    }

    $this->setContent($content);
  }

}