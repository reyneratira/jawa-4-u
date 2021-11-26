<?php 
    session_start();
    if(isset($_POST["aksi"])){
        include 'koneksi.php';

        $email = $_POST["email"];
        $namalengkap = $_POST["name"];
        $pesan = $_POST["pesan"];

        $query = "INSERT INTO contact_us VALUES(null, '$email', '$namalengkap', '$pesan')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
                //echo "Data berhasil ditambahkan <a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }
        
    }
    
    header("location:index.php");
        exit();

?>