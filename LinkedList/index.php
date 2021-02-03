<?php
include_once "LinkedList.php";
$linkedList = new LinkedList();
$linkedList->addFirst('O');
$linkedList->addFirst('L');
$linkedList->addFirst('L');
$linkedList->addFirst('E');
$linkedList->addFirst('H');
$linkedList->addLast('W');
$linkedList->add(1, "G");
$linkedList->add(2, "A");
$linkedList->deleteFirst();
$linkedList->deleteLast();
$linkedList->delete(2);
echo $linkedList->totalNode();
echo "<br>";

echo $linkedList->find("G");
echo "<br>";
print_r($linkedList->indexOf("L"));

echo "<pre>";
print_r($linkedList->getLinkedList());
echo "</pre>";
