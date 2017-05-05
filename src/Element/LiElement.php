<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

/**
 * Class LiElement
 * @package Colibri\Html\Element
 */
class LiElement extends HtmlElement
{

  /**
   * LiElement constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('li', $attributes, null);
    $this->setSingle(false)->setContent($content);
  }

}