<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class H5Element extends HtmlElement
{

  /**
   * H5Element constructor.
   *
   * @param null  $content
   * @param array $attributes
   */
  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('h5', $attributes, null);
    $this->setContent($content);
  }

}