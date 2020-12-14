<?php
include_once './Build.php';

include_once './Television.php';
include_once './NoteBook.php';
include_once './TabletPC.php';
include_once './MacBook.php';

use Product\Electronic\Television;
use Product\Electronic\NoteBook;
use Product\Electronic\TabletPC;
use Product\Electronic\MacBook;

$obj = new Television();
$obj->getProduct();

$obj2 = new NoteBook();
$obj2->getProduct();

$obj3 = new TabletPC();
$obj3->getProduct();

$obj4 = new MacBook();
$obj4->getProduct();