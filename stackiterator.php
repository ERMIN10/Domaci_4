<?php
namespace Zadaci4;

class StackIterator implements Iterator
{
    private $stack;

    public function __construct($stack)
    {
        $this->stack = $stack;
    }

    public function next()
    {
        $nextItem = next($this->stack->items);
        return $nextItem;
    }

   
}