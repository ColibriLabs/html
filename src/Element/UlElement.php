<?php

namespace Colibri\Html\Element;

use Colibri\Html\HtmlElement;

class UlElement extends HtmlElement
{

  /**
   * UlElement constructor.
   *
   * @param array $userList
   * @param array $attributes
   */
  public function __construct(array $userList = [], array $attributes = [])
  {
    parent::__construct('ul', $attributes, null);
    $this->setSingle(false)->setContent($userList);
  }

}