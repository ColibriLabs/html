<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class TableHeadCellElement extends HtmlElement
{

  /**
   * TableHeadCellElement constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('th', $attributes, null);
    $this->setContent($content);
  }

}