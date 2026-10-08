<?php

require_once __DIR__ . '/Mahasiswa.php';

// Constructor tanpa parameter
$mhsInt1 = new Mahasiswa();
$mhsInt1->setNama("Paolo Dicanio");
$mhsInt1->setNim("INT12345");
$mhsInt1->setUmur(21);
$mhsInt1->tampilkanInfo();

echo PHP_EOL;

// Constructor dengan 4 parameter (nama, nim, umur, negara)
$mhsInt2 = new Mahasiswa("Sarah", "INT67890", 22, "Australia");
$mhsInt2->tampilkanInfo();

echo PHP_EOL;

// Constructor dengan 4 parameter (nama, nim, umur, negara)
$mhsInt3 = new Mahasiswa("David", "INT54321", 23, "UK");
$mhsInt3->tampilkanInfo();