<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class OptionElement extends HtmlElement
{

  /**
   * OptionElement constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('option', $attributes, null);
    $this->setContent($content);
  }

}
