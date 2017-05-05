<?php

    namespace Colibri\Html\Element;

    use Colibri\Html\HtmlElement;

    class TableBodyElement extends HtmlElement {

        /**
         * TableBodyElement constructor.
         * @param null $content
         * @param array $attributes
         */
        public function __construct($content = null, array $attributes = [])
        {
            parent::__construct('tbody', $attributes, null);
            $this->setContent($content);
        }

    }