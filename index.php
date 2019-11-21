<?php
require_once 'htmlrenderable.php';
require_once 'iterator.php';
require_once 'collection.php';
require_once 'queue.php';
require_once 'stack.php';
require_once 'stackiterator.php';
require_once 'queueIterator.php';

use Zadaci4\Stack;
use Zadaci4\Queue;



if (!$stack->isEmpty())
{

    echo $stack->toHtml();
}

$stackIterator = $stack->getIterator();

while ($stackIterator->hasNext())
{
    $current = current($stack->items);
    echo "Current element: " . $current;
    $stackIterator->next();
}

