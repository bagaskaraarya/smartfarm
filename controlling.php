<?php

	session_start();
	if (empty($_SESSION['username'])) {
		header('location:login.php?pesan=belum_login');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Parameter</title>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Controlling</a></li>
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

    <?php
        include 'koneksi.php';
        $idMesin = $_GET['idMesin'];
        $query = mysqli_query($konek, "SELECT * FROM mesin WHERE idMesin = '$idMesin'");
        $data = mysqli_fetch_array($query);
    ?>

    <section class="inputParamter">
        <h1 class="judul">INPUT PARAMETER TANAMAN</h1>
        <div class="line-index"></div>
        <section class="header-login">
            <div class="container-fluid login">
                <div class="line"></div>
                <div class="body-container-login">
                    <br>
                    <form action="input.php" method="POST">
                        <input type="hidden" name = "nutrisi" value="<?php echo $data['NamaIOT']; ?>">
                        <input type="hidden" name = "nutrisi" value="<?php echo $data['Nutrisi']; ?>">
                        <input type="hidden" name = "ph" value = "<?php echo $data['Ph']; ?>">
                        <input type="hidden" name = "suhu" value = "<?php echo $data['Suhu']; ?>">
                        <input type="hidden" name = "iduser" value = "<?php echo $_SESSION['id']; ?>">
                        <label for="">Nama Tanaman</label>
                        <br>
                        <input type="text" name="namaTanaman" class="namaTanaman">
                        <br>
                        <br>
                        <label for="">Paramater Nutrisi</label>
                        <br>
                         <input type="text" name="pmNutrisi" class="pmNutrisi">
                        <br>
                        <br>
                        <label for="">Parameter Ph</label>
                        <br>
                        <input type="text" name="pmPh" class="pmPh">
                        <br>
                        <br>
                        <label for="">Parameter Suhu</label>
                        <br>
                        <input type="text" name="pmSuhu" class="pmSuhu">
                        <br>
                        <br>
                        <input type="submit" value="Submit" class="btnSubmit">
                    </form>
                </div>
            </div>
    </section>


    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>