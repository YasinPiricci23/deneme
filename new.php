<?php
// Veritabanı bağlantısı için bilgiler
$servername = "localhost";
$username = "kullanici_adiniz";
$password = "parolaniz";
$dbname = "kutuphane";

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Kullanıcıdan gelen kitap bilgileri
$kitapAdi = "PHP Öğreniyorum";
$yazar = "John Doe";
$yayinEvi = "Tech Publications";
$yil = 2023;

// Kitap eklemek için SQL sorgusu
$sql = "INSERT INTO kitaplar (kitap_adi, yazar, yayin_evi, yayin_yili) 
        VALUES ('$kitapAdi', '$yazar', '$yayinEvi', $yil)";

// Sorguyu çalıştır ve sonucu kontrol et
if ($conn->query($sql) === TRUE) {
    echo "Yeni kitap başarıyla eklendi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
