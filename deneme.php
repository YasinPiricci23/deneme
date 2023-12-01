<?php
// Veritabanı bağlantısı için bilgiler
$servername = "localhost";
$username = "kullanici_adi";
$password = "parola";
$dbname = "kullanicilar";

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Kullanıcı kayıt fonksiyonu
function registerUser($conn, $username, $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    
    if ($conn->query($sql) === TRUE) {
        return "Kullanıcı başarıyla kaydedildi.";
    } else {
        return "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// Kullanıcı giriş fonksiyonu
function loginUser($conn, $username, $password) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            return "Giriş başarılı. Hoş geldiniz, " . $username . "!";
        } else {
            return "Hatalı şifre. Tekrar deneyin.";
        }
    } else {
        return "Kullanıcı bulunamadı.";
    }
}

// Kullanıcı kayıt örneği
echo registerUser($conn, "kullanici1", "sifre123") . "<br>";

// Kullanıcı giriş örneği
echo loginUser($conn, "kullanici1", "sifre123") . "<br>";

// Veritabanı bağlantısını kapat
$conn->close();
?>

