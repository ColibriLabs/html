<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class ImgElement extends HtmlElement
{

  /**
   * ImgElement constructor.
   *
   * @param null  $src
   * @param array $attributes
   */
  public function __construct($src = null, array $attributes = [])
  {
    parent::__construct('img', $attributes, null);
    $this->setAttribute('src', $src)->isSingle(true);
  }

}