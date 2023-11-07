<?php

$tabel_harga_barang = array(
    1 => array("Produk" => "Minyak Telon", "Stok" => 20, "Harga" => 30000, "Jumlah" => 0),
    2 => array("Produk" => "Diapres", "Stok" => 15, "Harga" => 51000, "Jumlah" => 0),
    3 => array("Produk" => "Baby Oil", "Stok" => 10, "Harga" => 16000, "Jumlah" => 0),
    4 => array("Produk" => "Shampo Baby", "Stok" => 18, "Harga" => 20000, "Jumlah" => 0),
    5 => array("Produk" => "Bedak", "Stok" => 15, "Harga" => 15000, "Jumlah" => 0),
    6 => array("Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35000, "Jumlah" => 0),
    7 => array("Produk" => "Jumper", "Stok" => 25, "Harga" => 50000, "Jumlah" => 0)
);


$total_jumlah = 0;
$total_pembelian = 0;

foreach ($tabel_harga_barang as $key => $produk) {
    $tabel_harga_barang[$key]['Jumlah'] = $produk['Stok'] * $produk['Harga'];
    $total_jumlah += $produk['Jumlah'];
}



//  hasil
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($tabel_harga_barang as $key => $produk) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>{$produk['Produk']}</td>";
    echo "<td>{$produk['Stok']}</td>";
    echo "<td>{$produk['Harga']}</td>";
    echo "<td>{$produk['Jumlah']}</td>";
    echo "</tr>";
}
echo "</table>";

?>