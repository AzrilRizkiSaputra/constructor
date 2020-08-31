<?php
class Produk{
	public $namaBarang,
	 	$merk,
	 		$harga,
	 			$warna;
	 public function getCetak(){
	 	return "$this->namaBarang, $this->merk, $this->warna, $this->harga";
	 
	 }
	 public function __construct($namaBarang="nama barang", $merk="merk", $warna="warna", $harga=0){
	 	$this->namaBarang = $namaBarang;
	 	$this->merk = $merk;
	 	$this->warna = $warna;
	 	$this->harga = $harga;
	 }
}

$produk1 = new Produk("Handphone","IPhone","Gold",8500000);
$produk2 = new Produk("Laptop","Acer Predator","Black",1200000);
$produk3 = new Produk("Headset","Razer Hammerhead","Green",1500000);
$produk4 = new Produk("Mouse","Logitech","Black",120000);

echo "Nama Barang : " . $produk1 -> getCetak();
echo "<br>";
echo "Nama Barang : " . $produk2 -> getCetak();
echo "<br>";
echo "Nama Barang : " . $produk3 -> getCetak();
echo "<br>";
echo "Nama Barang : " . $produk4 -> getCetak();