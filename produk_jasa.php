<?php

// Panggil file PropertyConstant
require_once('./jasa.php');

use Pbo\Marketplace\jasa;

//object 
$produk = new jasa();

$produk->setKode('P0001')->setNama('Leptop')->setHarga(10000000)->setStok(5);

//hasil
echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: Rp." . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp." . $produk->total();

echo "<br/>";
echo "Metode pembayaran: " .$produk->payment('qris');
