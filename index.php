<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”icon” href=”duar.jpg>
    <link href="bulma/css/bulma.css" rel="stylesheet" >
    <link href="fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet" >
    <title>Tugas Akhir PWEB</title>
</head>
<body class="has-background-link-light">
    <section class="hero is-small">
        <div class="hero-head">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-small is-dark">
                            <strong>Log Out</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="tittle is-size-3">
                Daftar Barang Laboratorium Informatika
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
                        <a>
                            <span class="icon is-small"><i class="fas fa-home" aria-hidden="true"></i></span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="insert.php">
                            <span class="icon is-small"><i class="fas fa-plus" aria-hidden="true"></i></span>
                            <span>Insert Data</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <span class="icon is-small"><i class="fas fa-question" aria-hidden="true"></i></span>
                            <span>Info</span>
                        </a>               
                    </li>
                    
                </ul>
             </div>        
        </div>
    </section>
    <br>
    
    <br>

    <div class="container is-justify-content-center">
        <div class="table has-text-centered">
            <table class="table is-bordered is-striped is-narrow is-fullwidth " table_>
                <tr>
                        <td class="has-text-primary-dark">No</td>
                        <td class="has-text-primary-dark">ID Barang</td>
                        <td class="has-text-primary-dark">Nama Barang</td>
                        <td class="has-text-primary-dark">Jumlah Tersedia</td>
                        <td class="has-text-primary-dark">Tanggal</td>
                        <td class="has-text-primary-dark">Action</td>
                </tr>

                <?php
                include 'server.php';
                include 'tgl-indo.php';
                date_default_timezone_get("ASIA/JAKARTA");
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM daftar");
                while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_barang'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['jumlah'];?></td>
                        <td><?php echo tgl_indonesia($d['tanggal'])?></td>
                        <td>
                            <a href="#"><button class="button is-small is-danger is-light">
                            <span class="icon is-small"><i class="fas fa-trash" aria-hidden="true"></i></span>
                            <span>Delete</span>
                            </button></a>
                            <a href="#"><button class="button is-small is-info is-light">
                            <span class="icon is-small"><i class="fas fa-pen" aria-hidden="true"></i></span>
                            <span>Edit</span>
                            </button></a>
                        </td>
                </tr>
                <?php
                }
                ?>
            </table>   
        </div>  
        <footer class="footer has-background-link-light">
            <div class="content has-text-centered">
                <p>
                
                </p>
            </div>
        </footer>  
    </div>    
   
</body>
</html>