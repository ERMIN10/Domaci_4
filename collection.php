<?php

namespace Zadaci4;

abstract class Collection implements HTMLRenderable {


      
      public $items;
    public $count;

      public function __construct()
    {
          $this->items = [];
        $this->count = 0;
    }

    protected function add($element, $position)
    {
          if ($position >= $this->count)
        {
            throw new CollectionOverflowException("Stanje da li je validno. ");
        }
        $this->items[$position] = $element;
        $this->count++;
    }

       protected abstract function getIterator(): Iterator;

    

    public function toHtml(): string
    {
        $html = "<ul>";
        foreach ($this->items as $item)
        {
              $html .= "<li>" . $item . "</li>";
        }
        $html .= "</ul>";
        return $html;
    }

    public function getItems()
    {
        return $this->items;
    }
}