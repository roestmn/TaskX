<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kasir";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM kasir";
$result = $conn->query($sql);
$sql = "SELECT * FROM kasir";
                        $result = $conn->query($sql);
                        $belanja = 0;
                        
                        while($row = $result->fetch_assoc()) { 
                            $total = $row["price"] * $row["quantity"];
                            $belanja = $belanja + $total;
                        }


?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--logo--> 
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

* { margin: 0; padding: 0; box-sizing: border-box; } 
a { text-decoration: none; } 
li { list-style: none; } 
html { overflow-x: hidden; } 
body.dark { background: #0C0C1E; color: #FBFBFB; } 
body { background: #eee; overflow-x: hidden; } 
nav { height: 56px; background: #F9F9F9; padding: 0 24px; display: flex; align-items: center; grid-gap: 290px; font-family: 'Lato', sans-serif; position: sticky; top: 0; left: 0; z-index: 1000; } 
nav::before { position: absolute; width: 40px; height: 40px; bottom: -40px; left: 0; border-radius: 50%; box-shadow: -20px -20px 0 #F9F9F9; } 
nav::after { position: absolute; width: 40px; height: 40px; bottom: -40px; right: 0; border-radius: 50%; box-shadow: 20px -20px 0 #F9F9F9; } 
nav a { color: #342E37; } 
nav .profile img { width: 36px; height: 36px; object-fit: cover; border-radius: 50%; flex: 1; } 
main { width: 100%; padding: 36px 24px; font-family: 'Poppins', sans-serif; max-height: calc(100vh - 56px); overflow-y: auto; } 
main .head-title { display: flex; align-items: center; justify-content: space-between; grid-gap: 16px; flex-wrap: wrap; } 
main .head-title .left h1 { font-size: 32px; font-weight: 600; margin-bottom: 10px; color: #342E37; } 
main .head-title .left .breadcrumb { display: flex; align-items: center; grid-gap: 16px; } 
main .box-info { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); grid-gap: 24px; margin-top: 36px; } 
main .box-info li { padding: 24px; background: #F9F9F9; border-radius: 20px; display: flex; align-items: center; grid-gap: 24px; } 
main .box-info li .bx { width: 80px; height: 80px; border-radius: 10px; font-size: 36px; display: flex; justify-content: center; align-items: center; } 
main .box-info li:nth-child(1) .bx { background: #FFE0D3; color: #FD7238; } 
main .box-info li .text h3 { font-size: 24px; font-weight: 600; color: #342E37; } 
main .box-info li .text p { color: #342E37; } 
main .table-data { display: flex; flex-wrap: wrap; grid-gap: 24px; margin-top: 24px; width: 100%; color: #342E37; } 
main .table-data > div { border-radius: 20px; background: #F9F9F9; padding: 26px; overflow-x: auto; } 
main .table-data .head { display: flex; align-items: center; grid-gap: 16px; margin-bottom: 24px; } 
main .table-data .head h3 { margin-right: auto; font-size: 24px; font-weight: 600; } 
main .table-data .head .bx { cursor: pointer; } 
main .table-data .order { flex-grow: 1; flex-basis: 500px; } 
main .table-data .order table { width: 100%; border-collapse: collapse; } 
main .table-data .order table th { padding-bottom: 12px; font-size: 13px; text-align: center; border-bottom: 1px solid #eee; } 
main .table-data .order table td { padding: 16px 12px; } 
main .table-data .order table tr td:first-child { display: flex; font-weight: bold; align-items: center; grid-gap: 12px; padding-left: 6px; } 
main .table-data .order table td img { width: 36px; height: 36px; border-radius: 25%; object-fit: cover; } 
main .table-data .order table tbody tr:hover { background: #eee; } 
main .table-data .order table tr td .hapus { font-size: 10px; padding: 6px 16px; color: #F9F9F9; border-radius: 20px; font-weight: 700; background: red; box-shadow: 0px 0px 13px red; }


</style>


	<title>Kelola Admin</title>
</head>
<body>
	<section id="content">
		
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="https://iamhealthy.eu.org/login" class="profile">
				<img src="https://raw.githubusercontent.com/Rustaman1280/Form/refs/heads/master/img/people.png">
			</a>
		</nav>
<main>
    <div class="head-title">
        
        <div class="left">
            
            <h1>Form Transaksi Alfamaret</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="#">Menu kasir</a>
                </li>
            </ul>
        </div>
    </div>

    

<ul class="box-info">
        <li>
            <i class='bx bxs-dollar-circle' ></i>
            <span class="text">
                <h3>Rp<?=number_format($belanja,0)?>,-</h3>
                <p>Total belanja</p>
            </span>
        </li>

    </ul>
    <div class="table-data">
        
        <div class="order">

            <div class="head">
                <h3>Daftar Belanja</h3>
                <i class='bx bx-plus' onclick="hitung()" ></i>
                <i class='bx bx-filter' ></i>
            </div>
            <!--data dummy-->
          
            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Action</th>
                      
                    </tr>
                </thead>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['aksi'])){
                        if($_GET["aksi"] == "hapus"){
                            $id = $_GET["id"];
                            $sql = "DELETE FROM kasir WHERE id=$id";
                            if ($conn->query($sql) === TRUE) {
                                echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Data berhasil dihapus');
                                window.location.href='halo.php';
                                </script>");
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        } 
                    }                    
                        $sql = "SELECT * FROM kasir";
                        $result = $conn->query($sql);
                        $belanja = 0;
                        
                        while($row = $result->fetch_assoc()) { 
                            $total = $row["price"] * $row["quantity"];
                            $belanja = $belanja + $total;


                       
                    ?>
                <tbody>
                  
  
  <tr>
    <td>
      <img src="<?=$row["foto"]?>" alt="Indomie" width="100">
      <p><?=$row["product"]?></p>
    </td>
    <td>Rp<?php echo number_format($row["price"],0)?></td>
    <td><?=$row["quantity"]?></td>
    <td>Rp<?=number_format($total,0)?></td>
    <td><a href="halo.php?aksi=hapus&id=<?=$row["id"]?>"><span class="hapus">Hapus</span></a></td>
  </tr>

                </tbody>
                <?php } 
                ?>
            </table>
            <!--sampai segini data dummy-->
        </div>
      
    </div>

  
</main>
</section>
<!-- Popupnya bikin puyeng keliling-->
<div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.8); opacity: 0; background: rgba(255, 255, 255, 0.35); padding: 20px; border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); z-index: 1000; transition: transform 0.3s ease, opacity 0.3s ease; width: 90%; max-width: 600px; backdrop-filter: blur(7px);">
    <h3 style="margin-bottom: 20px; font-size: 18px; font-family: 'Poppins', sans-serif;">Tambah Daftar Belanja</h3>
    
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label for="foto" style="font-family: 'Poppins', sans-serif;">Foto Produk:</label><br>
        <input type="text" name="foto" placeholder="Masukkan link foto produk" style="width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: 'Poppins', sans-serif;"><br>
        <label for="product" style="font-family: 'Poppins', sans-serif;">Nama Produk:</label><br>
        <input type="text" name="product" placeholder="Masukkan nama produk" style="width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: 'Poppins', sans-serif;"><br>
        <label for="price" style="font-family: 'Poppins', sans-serif;">Harga:</label><br>
        <input type="number" name="price" placeholder="Masukkan harga" style="width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: 'Poppins', sans-serif;"><br>
        <label for="quantity" style="font-family: 'Poppins', sans-serif;">Jumlah:</label><br>
        <input type="number" name="quantity" placeholder="Masukkan jumlah" style="width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: 'Poppins', sans-serif;"><br>
        <label for="pin" style="font-family: 'Poppins', sans-serif;">PIN Admin:</label><br>
        <input type="number" id="pin" placeholder="Masukkan PIN Admin" style="width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: 'Poppins', sans-serif;"><br>
        <p id="error" style="color: red; display: none; text-align: center; font-family: 'Poppins', sans-serif;">PIN Admin salah!</p>
        <div style="text-align: center;">
            <button type="submit" onclick="submitPopup()" style="padding: 10px 20px; background: green; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-family: 'Poppins', sans-serif;">Submit</button>
            <button type="button" onclick="closePopup()" style="padding: 10px 20px; background: #DE6633; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-family: 'Poppins', sans-serif; margin-left: 10px;">Batal</button>
        </div>
    </form>
    <?php
include('koneksi.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $foto = $_POST["foto"];
  $product = $_POST["product"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];

    $sql = "INSERT INTO kasir (foto, product, price, quantity)
    VALUES ('$foto', '$product','$price','$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Succesfully Updated');
        window.location.href='halo.php';
        </script>");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
?>

</div>

<script>
    function hitung() {
        const popup = document.getElementById("popup");
        popup.style.display = "block";
        setTimeout(() => {
            popup.style.opacity = "1";
            popup.style.transform = "translate(-50%, -50%) scale(1)";
        }, 10);
    }

    function closePopup() {
        const popup = document.getElementById("popup");
        popup.style.opacity = "0";
        popup.style.transform = "translate(-50%, -50%) scale(0.8)";
        setTimeout(() => {
            popup.style.display = "none";
        }, 300);
    }

    function submitPopup() {
        const error = document.getElementById("error");
        const pin = document.getElementById("pin").value;

        if (pin === "1234") {
            alert("Data sudah tersimpan!");
            closePopup();
        } else {
            error.style.display = "block";
        }
    }
</script>
<!--sampai segini untuk popupnya saja, yang mau, monggo-->





</body>
</html>