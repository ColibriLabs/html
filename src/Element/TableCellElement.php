<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

/**
 * Class TableCellElement
 *
 * @package Colibri\Html\Element
 */
class TableCellElement extends HtmlElement
{

  /**
   * TableCellElement constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('td', $attributes, null);

    $this->setContent($content);
  }

}
