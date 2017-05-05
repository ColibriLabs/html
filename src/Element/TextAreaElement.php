<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

/**
 * Class TextAreaElement
 *
 * @package Colibri\Html\Element
 */
class TextAreaElement extends HtmlElement
{

  /**
   * TextAreaElement constructor.
   *
   * @param array $attributes
   * @param array $content
   */
  public function __construct(array $attributes, $content)
  {
    parent::__construct('textarea', $attributes, $content);
  }

}