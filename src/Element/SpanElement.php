<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class SpanElement extends HtmlElement
{

  public function __construct($content = null, array $attributes = [])
  {
    parent::__construct('span', $attributes, null);
    $this->setSingle(false)->setContent($content);
  }

}