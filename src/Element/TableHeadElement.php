<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class TableHeadElement extends HtmlElement
{

  /**
   * TableHeadElement constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('thead', $attributes, null);
    $this->setContent($content);
  }

}