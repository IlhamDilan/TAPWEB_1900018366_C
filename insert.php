<?php
    require_once('server.php');

    if(isset($_POST['submit'])){
        $id_barang = $_POST['id_barang'];
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $tanggal = $_POST['tanggal'];

        $tambah = "INSERT INTO daftar VALUES ('$id_barang', '$nama', '$jumlah', '$tanggal')";
        mysqli_query($koneksi, $tambah);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Akhir PWEB</title>
    <link href="bulma/css/bulma.css" rel="stylesheet" >
    <link href="fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet" >
</head>
<body class="has-background-link-light">

<section class="hero is-small">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="tittle is-size-3">
                Form Tambah Barang Laboratorium Informatika
                </p>
                <p class="subtittle is-size-5">
                Universitas Ahmad Dahlan
                </p>
                <p class="subtittle is-size-6">
                Teknik Informatika
                </p>
            </div>
        </div>   
        <div class="hero-foot">
          <div class="tabs is-centered">
                <ul>
                    <li>
                        <a href="index.php">
                            <span class="icon is-small"><i class="fas fa-door-open" aria-hidden="true"></i></span>
                            <span>Back to Inventories</span>
                        </a>
                    </li>
             </div>        
        </div>
    </section>

    <form action="insert.php" method="POST">
        <div class="container">
            <div class="columns">
                <div class="column is-half">
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="Label"> ID Barang </label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                <input class="input" type="text" name="id_barang">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-id-card"></i>
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="columns">
                <div class="column is-half">
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="Label"> Nama </label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                <input class="input" type="text" name="nama">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="Label"> Jumlah </label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                <input class="input" type="number" name="jumlah">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-number"></i>
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="Label"> Tanggal </label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                <input class="input" type="datetime-local" name="tanggal">
                                <span class="icon is-small is-calendar">
                                    <i class="fas fa-user"></i>
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="buttons are-small">
                <input class="button" name ="submit" type="submit" value="Submit input">
                <input class="button" type="reset" value="Reset input">       
            </div>

        </div>               
    </form>
 
</body>
</html>