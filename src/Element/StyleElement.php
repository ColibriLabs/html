<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

/**
 * Class StyleElement
 * @package Colibri\Html\Element
 */
class StyleElement extends HtmlElement
{
  
  /**
   * StyleElement constructor.
   * @param null $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('style', $attributes, null);
    
    $this->setSingle(false)->setContent($content);
  }
  
}