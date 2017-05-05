<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class H1Element extends HtmlElement
{

  /**
   * H1Element constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('h1', $attributes, null);
    $this->setContent($content);
  }

}