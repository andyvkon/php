<?php

// Будем передавать PDF
header('Content-Type: application/pdf');

// Он будет называться downloaded.pdf
header('Content-Disposition: attachment; filename="11.pdf"');

// Исходный PDF-файл original.pdf
readfile('original.pdf');
