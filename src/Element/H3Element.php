<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

/**
 * Class H3Element
 *
 * @package Colibri\Html\Element
 */
class H3Element extends HtmlElement
{

  /**
   * H3Element constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('h3', $attributes, null);

    $this->setContent($content);
  }

}