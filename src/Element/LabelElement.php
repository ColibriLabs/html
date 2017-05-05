<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class LabelElement extends HtmlElement
{

  /**
   * LabelElement constructor.
   *
   * @param       $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('label', $attributes, null);
    $this->setSingle(false)->setContent($content);
  }

}