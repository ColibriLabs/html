<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class BoldElement extends HtmlElement
{

  /**
   * BoldElement constructor.
   *
   * @param       $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('b', $attributes, null);
    $this->setContent($content);
  }

}