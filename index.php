<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Source+Code+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <h1 class="Logo1">Smart </h1><h1 class="Logo2">Farm</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="mesin.php">Controlling</a></li>
                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="border: none;"><i class="fa-solid fa-user" style="color: #222831; margin-left: 80px; margin-right: 20px;" ></i></button>
            </ul>
        </div>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header offcanvasheader">
                <i class="fa-solid fa-user" style="color: #EEEEEE; margin-left: 5px; margin-right: 5px;" ></i>
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" style="color: #EEEEEE; font-family: 'Poppins', sans-serif;">Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: #EEEEEE;"></button>
            </div>
            <div class="offcanvas-body offcanvassendiri">
                <div style="margin-top: 20px;">
                <div class="sep" style="display: flex">
                  <i class="fa-solid fa-pen-to-square"></i>
                  <p>Edit Profile</p>
                  <a href="edit.php?id=<?php echo $_SESSION['id']; ?>" type="button"><i class="fa-solid fa-greater-than position-absolute end-0" style="color: black;"></i></a>
                </div>
                <div class="sep" style="display: flex">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <p>Log Out</p>
                  <a href="logout.php" type="button"><i class="fa-solid fa-greater-than position-absolute end-0" style="color: black;"></i></a>
                </div>
                </div>
              </div>
            </div>
        </div>
        </div>
    </header>

    <section class="laporan">
        <h1 class="judul">LAPORAN CONTROLLING TANAMAN</h1>
        <div class="line-index"></div>
        <?php
            include 'koneksi.php';
            $query = mysqli_query($konek, "SELECT * FROM controlling");
            while($data = mysqli_fetch_array($query))  
        { ?>
        <div class="container-fluid pt-0 containerlaporan">
            <div class="lineTanaman">
                <h1 class="judultanaman"><?php echo $data['namaTanaman']; ?></h1>
                <table width = "100%">
                    <tr>
                        <td>Nama IOT :</td>
                        <td><?php echo $data['namaIOT']; ?></td>
                    </tr>
                    <tr>
                        <td>Parameter Nutrisi :</td>
                        <td><?php echo $data['pmNutrisi']; ?> ppm</td>
                    </tr>
                    <tr>
                        <td>Parameter Ph :</td>
                        <td><?php echo $data['pmPh']; ?></td>
                    </tr>
                    <tr>
                        <td>Parameter Suhu :</td>
                        <td><?php echo $data['pmSuhu']; ?>°C</td>
                    </tr>
                    <tr>
                        <td>Nutrisi :</td>
                        <td><?php echo $data['Nutrisi']; ?> ppm</td>
                    </tr>
                    <tr>
                        <td>Ph :</td>
                        <td><?php echo $data['Ph']; ?></td>
                    </tr>
                    <tr>
                        <td>Suhu :</td>
                        <td><?php echo $data['Suhu']; ?>°C</td>
                    </tr>
                </table>
                <a href="edit.php?idTanaman=<?php echo $data['idTanaman'];?>"><button type="button" class="btn btn-primary btn-sm" 
                style="margin-top: 20px; width: 100px; border-radius: 25px; font-weight: bold; text-align: center;
                background: #798777; color: #F8EDE3;">Edit</button></a>
                <a href="hapus.php?idTanaman=<?php echo $data['idTanaman'];?>"><button type="button" class="btn btn-primary btn-sm" style="margin-top: 20px; width: 100px; border-radius: 25px; 
                font-weight: bold; text-align: center;
                background: #A2B29F; color: #F8EDE3;">Hapus</button></a>
            </div>
        </div>
        <?php } ?>
    </section>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>