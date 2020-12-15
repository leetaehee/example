<?php
include_once './Build.php';
include_once './Factory.php';
include_once './Manual.php';

include_once './Television.php';
include_once './NoteBook.php';
include_once './TabletPC.php';
include_once './MacBook.php';

use Product\Electronic\Television;
use Product\Electronic\NoteBook;
use Product\Electronic\TabletPC;
use Product\Electronic\MacBook;

use Product\Manual;

$manual = new Manual(new NoteBook());
$manual->introduce();