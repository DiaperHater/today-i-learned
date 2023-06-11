<?php

require_once "classes/FileWriter.php";


FileWriter::writesCount();

$file = __DIR__ .  '/out.txt';

$fileWriter = new FileWriter( $file );

$fileWriter->write( "Another line of data" );

FileWriter::writesCount();