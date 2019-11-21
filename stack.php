<?php
namespace Zadaci4;

class Queue extends Collection {

    public function getIterator(): Iterator
    {
        return new QueueIterator($this);
    }

    
    public function enqueue($item)
    {

        array_unshift($this->items, $item);
        $this->count++;
    }

  
}