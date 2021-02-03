<?php
include_once "Mylist.php";
$myList = new MyList();
echo $myList->isEmpty();
$myList->add(5);
$myList->add(10);
$myList->add(-6);
$myList->add(7);
$myList->add(-9);
$myList->add(3);
echo "<br>";
echo $myList->isEmpty();
echo "<br>";
echo $myList->size();
echo "<br>";
$myList->remove(2);
echo "<br>";
echo $myList->get(3);
$myList->addAll([4, 7, 10]);
echo "<br>";
print_r($myList->indexOf(10));
$myList->sort();
$myList->insert(4, 6);


echo "<pre>";
print_r($myList->getElements());
echo "</pre>";