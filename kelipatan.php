<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Cari Kelipatan</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  html{
    overflow-x: hidden;
    height: 100% !important;
    width: 100% !important;
    margin: 0;
    padding: 0;
}

body{
    background-image: url("https://wallpaperaccess.com/full/2413551.jpg");
    background-size: cover;
    background-position: center;
}

.card{
    background: none !important;
}

.card-header{
    color: #fff;
    background: #d633309f;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.01);
    backdrop-filter: blur(5.7px);
    -webkit-backdrop-filter: blur(5.7px);
}

.card-body{
    background: rgba(25, 25, 25, 0.64);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.01);
    backdrop-filter: blur(5.7px);
    -webkit-backdrop-filter: blur(5.7px);
}

.btn{
    box-shadow: 2px 2px 0px #fff;
}

.btn:hover{
    box-shadow: 0px 0px 0px #000;
    color: #fff;
}

.myBtn{
    background-color: #D63230;
    color: #fff;
}

.myBtn1{
    background-color: #272727;
    color: #fff;
}

.myAlert{
    background-color: #40BCD8;
}

.myAlert1{
    background-color: #272727;
    color: #fff;
}

.myAlert2{
    background-color: #D63230;
    color: #fff;
}

label{
    color: #fff;
}
</style>

<body>

  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-3 col-sm-0"></div>

      <div class="col-lg-6 col-sm-12">
        <div class="card bg-none border-0 shadow rounded-4" data-aos="fade-down" data-aos-duration="1500">
          <div class="card-header text-center">
            <h2>Cari Kelipatan</h2>
          </div>
          <div class="card-body">
            <form action="" method="post" class="form-group">
              <label for="limit">Limit Kelipatan</label>
              <input type="number" name="limit" id="limit" class="form-control">
              <label for="kelipatan" class="mt-2">Kelipatan</label>
              <input type="number" name="kelipatan" id="kelipatan" class="form-control">

              <div class="d-flex justify-content-center mt-3">
                <div class="">
                  <input type="submit" value="Cari Kelipatan" name="hitung" class="btn myBtn">
                  <a href="" class="btn myBtn1">Reset</a>
                </div>
              </div>
            </form>

            <div class="hasil mt-3">
              <?php
              $alert = "";
              if (isset($_POST['hitung'])) {
                if (!empty($_POST['limit']) && !empty($_POST['kelipatan'])) {
                  $limit = $_POST['limit'];
                  $kelipatan = $_POST['kelipatan'];
                  $num = 1;

              ?>
                  <div class="alert myAlert1" data-aos="fade-in" data-aos-duration="1500">
                    Mencari Kelipatan <?php echo $kelipatan; ?> dari 1 sampai <?php echo $limit; ?>
                  </div>

                  <?php

                  $alert = "sukses";

                  for ($i = 1; $i <= $limit; $i++) {
                    if ($i % $kelipatan == 0) {
                  ?>
                      <div class="alert myAlert" data-aos="fade-in" data-aos-offset="100" data-aos-duration="700">
                        Hasil dari kelipatan ke <?php echo $num++; ?> adalah <b><?php echo $i; ?></b>
                      </div>
                  <?php
                    }
                  }
                } else {
                  $alert = "gagal";
                  ?>
                  <div class="alert myAlert2">
                    Masukkan limit dan kelipatan !!
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-0"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <?php
  if ($alert == "sukses") {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Berhasil menampilkan hasil',
        showConfirmButton: false,
        timer: 1500
      })
    </script>
  <?php
  } else if ($alert == "gagal") {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Semua data harus diisi',
        showConfirmButton: false,
        timer: 5500
      })
    </script>
  <?php
  }
  ?>
</body>

</html>