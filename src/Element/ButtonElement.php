<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class ButtonElement extends HtmlElement
{

  /**
   * ButtonElement constructor.
   *
   * @param       $name
   * @param mixed $value
   * @param array $attributes
   */
  public function __construct($name, $value = null, array $attributes = [])
  {
    parent::__construct('button', $attributes, null);
    $this->setAttribute('name', $name)->setContent($value);
  }

}