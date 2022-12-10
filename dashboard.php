<!doctype html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: ./login.php");
}
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/user.png">

  <title>Dashboard</title>
</head>

<body>
  <!-- Navbar -->
  <div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-3 shadow-lg">
      <div class="container-md">
        <a class="navbar-brand" href="./dashboard.php">
          <h2>Dashboard</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.html">
                <h5>Home</h5>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">
                <h5>Log Out</h5>
              </a>
            </li>
        </div>
    </nav>
  </div>
  <!-- Navbar -->

  <!-- Main content -->
  <section class="db_content" id="db_content" style="margin-top: 125px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6 mt-2">
          <div class="card bg-dark p-3 shadow-lg">
            <div class=" text-center p-2 text-center text-white">
              <h3>150</h3>
              <p>Data Transaksi</p>
            </div>
            <h6 class="card-footer text-white">More info <i class="fa fa-arrow-circle-right text-white"></i></h6>
          </div>
        </div>

        <div class="col-lg-3 col-6 mt-2">
          <div class="card bg-dark p-3 shadow-lg">
            <div class=" text-center p-2 text-white">
              <h3>53</h3>
              <p> Sewa Bulanan</p>
            </div>
            <h6 class="card-footer text-white">More info <i class="fa fa-arrow-circle-right text-white"></i></h6>
          </div>
        </div>

        <div class="col-lg-3 col-6 mt-2">
          <div class="card bg-dark p-3 shadow-lg">
            <div class=" text-center p-2 text-white">
              <h3>44</h3>
              <p> Sewa Tahunan</p>
            </div>
            <h6 class="card-footer text-white">More info <i class="fa fa-arrow-circle-right text-white"></i></h6>
          </div>
        </div>

        <div class="col-lg-3 col-6 mt-2">
          <div class="card bg-dark p-3 shadow-lg">
            <div class=" text-center p-2 text-white">
              <h3>65</h3>
              <p>Data User</p>
            </div>
            <h6 class="card-footer text-white">More info <i class="fa fa-arrow-circle-right text-white"></i></h6>
          </div>
        </div>
      </div>
      <br>
      <div class="row mt-4 ">
        <div class="col-lg-6 mb-">
          <div class="card p-4 position-absolute top-50 start-0 translate-middle-y" style="margin-top: 5%; margin-left: 1%;">
            <h3>User Information</h3>
            <img class="mt-4 mb-5" src="./assets/user.png" width="150px" alt="">
            <table>
              <thead>
                <tr>
                  <td width="20%">Nama</td>
                  <td>: <?php echo $_SESSION["username"]; ?></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Gender</td>
                  <td>: <?php echo $_SESSION["gender"]; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>: <?php echo $_SESSION["email"]; ?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td>: <?php echo $_SESSION["address"]; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <br><br><br><br><br>
      </div>
    </div>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"></svg>
    <style>
      .path-0 {
        animation: pathAnim-0 4s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
      }

      @keyframes pathAnim-0 {
        0% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 62.88354517347992,119.85400206114737 125.76709034695983,106.70800412229474 203,107 C 280.23290965304017,107.29199587770526 371.81518378564067,121.02198557196839 447,118 C 522.1848162143593,114.97801442803161 580.9721745104775,95.20405358983169 633,99 C 685.0278254895225,102.79594641016831 730.2961181724494,130.16180006870493 803,144 C 875.7038818275506,157.83819993129507 975.8433527997252,158.1487461353487 1041,148 C 1106.1566472002748,137.8512538646513 1136.33047062865,117.24321538990037 1197,113 C 1257.66952937135,108.75678461009963 1348.834764685675,120.87839230504981 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        25% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 69.94984541394709,130.44005496392992 139.89969082789418,127.88010992785985 203,119 C 266.1003091721058,110.11989007214015 322.3510821023703,94.91961525249056 400,108 C 477.6489178976297,121.08038474750944 576.6959807626245,162.44142906217795 647,172 C 717.3040192373755,181.55857093782205 758.8649948471315,159.31466849879766 823,151 C 887.1350051528685,142.68533150120234 973.8440398488492,148.2998969426314 1050,145 C 1126.1559601511508,141.7001030573686 1191.7588457574718,129.48574373067675 1255,126 C 1318.2411542425282,122.51425626932325 1379.120577121264,127.75712813466163 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        50% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 65.20096186877363,109.01511508072826 130.40192373754726,85.03023016145654 191,97 C 251.59807626245274,108.96976983854346 307.5932669185846,156.8941944349021 387,162 C 466.4067330814154,167.1058055650979 569.2250085881142,129.3929920989351 640,113 C 710.7749914118858,96.6070079010649 749.5066987289589,101.5338371693576 803,111 C 856.4933012710411,120.4661628306424 924.7481964960496,134.4716592236345 1001,150 C 1077.2518035039504,165.5283407763655 1161.500515286843,182.5795259361044 1236,180 C 1310.499484713157,177.4204740638956 1375.2497423565785,155.2102370319478 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        75% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 80.12985228443833,149.06526966678118 160.25970456887666,165.13053933356235 219,177 C 277.74029543112334,188.86946066643765 315.0910340089316,196.5431123325318 376,171 C 436.9089659910684,145.4568876674682 521.3761593953969,86.69701133631054 609,88 C 696.6238406046031,89.30298866368946 787.4043284094811,150.66884232222603 843,177 C 898.5956715905189,203.33115767777397 919.0065269666782,194.6276193747853 990,167 C 1060.9934730333218,139.3723806252147 1182.5695637238061,92.82068017863277 1266,84 C 1349.4304362761939,75.17931982136723 1394.715218138097,104.08965991068362 1440,133 C 1440,133 1440,400 1440,400 Z");
        }

        100% {
          d: path("M 0,400 C 0,400 0,133 0,133 C 62.88354517347992,119.85400206114737 125.76709034695983,106.70800412229474 203,107 C 280.23290965304017,107.29199587770526 371.81518378564067,121.02198557196839 447,118 C 522.1848162143593,114.97801442803161 580.9721745104775,95.20405358983169 633,99 C 685.0278254895225,102.79594641016831 730.2961181724494,130.16180006870493 803,144 C 875.7038818275506,157.83819993129507 975.8433527997252,158.1487461353487 1041,148 C 1106.1566472002748,137.8512538646513 1136.33047062865,117.24321538990037 1197,113 C 1257.66952937135,108.75678461009963 1348.834764685675,120.87839230504981 1440,133 C 1440,133 1440,400 1440,400 Z");
        }
      }
    </style>
    <defs>
      <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
        <stop offset="5%" stop-color="#868b8e"></stop>
        <stop offset="95%" stop-color="#b9b7bd"></stop>
      </linearGradient>
    </defs>
    <path d="M 0,400 C 0,400 0,133 0,133 C 62.88354517347992,119.85400206114737 125.76709034695983,106.70800412229474 203,107 C 280.23290965304017,107.29199587770526 371.81518378564067,121.02198557196839 447,118 C 522.1848162143593,114.97801442803161 580.9721745104775,95.20405358983169 633,99 C 685.0278254895225,102.79594641016831 730.2961181724494,130.16180006870493 803,144 C 875.7038818275506,157.83819993129507 975.8433527997252,158.1487461353487 1041,148 C 1106.1566472002748,137.8512538646513 1136.33047062865,117.24321538990037 1197,113 C 1257.66952937135,108.75678461009963 1348.834764685675,120.87839230504981 1440,133 C 1440,133 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    <style>
      .path-1 {
        animation: pathAnim-1 4s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
      }

      @keyframes pathAnim-1 {
        0% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 79.11645482652008,262.5997938852628 158.23290965304017,259.1995877705256 217,268 C 275.76709034695983,276.8004122294744 314.1848162143594,297.8014428031604 377,286 C 439.8151837856406,274.1985571968396 527.0278254895223,229.59464101683272 606,219 C 684.9721745104777,208.40535898316728 755.7038818275508,231.81999312950882 822,255 C 888.2961181724492,278.1800068704912 950.1566472002746,301.1253864651322 1023,295 C 1095.8433527997254,288.8746135348678 1179.66952937135,253.67846100996223 1251,244 C 1322.33047062865,234.32153899003777 1381.165235314325,250.16076949501888 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        25% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 67.4647887323944,257.43043627619375 134.9295774647888,248.86087255238752 208,251 C 281.0704225352112,253.13912744761248 359.74647887323937,265.9869460666437 418,258 C 476.25352112676063,250.01305393335628 514.0845070422536,221.19134318103747 583,228 C 651.9154929577464,234.80865681896253 751.9154929577466,277.24768120920646 821,274 C 890.0845070422534,270.75231879079354 928.2535211267607,221.81793198213674 992,221 C 1055.7464788732393,220.18206801786326 1145.0704225352113,267.48059086224663 1224,283 C 1302.9295774647887,298.51940913775337 1371.4647887323945,282.2597045688767 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        50% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 44.19993129508761,248.54208175884577 88.39986259017522,231.0841635176915 168,241 C 247.60013740982478,250.9158364823085 362.6004809343867,288.20542768807974 449,303 C 535.3995190656133,317.79457231192026 593.1982136722776,310.0941257299897 655,292 C 716.8017863277224,273.9058742700103 782.6066643765029,245.4180693919615 856,236 C 929.3933356234971,226.5819306080385 1010.3751288217106,236.23359670216422 1066,247 C 1121.6248711782894,257.7664032978358 1151.892820336654,269.64754379938165 1210,273 C 1268.107179663346,276.35245620061835 1354.053589831673,271.1762281003092 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        75% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 82.69048436963243,266.39093095156306 165.38096873926486,266.78186190312607 239,261 C 312.61903126073514,255.21813809687393 377.166609412573,243.26348333905875 439,242 C 500.833390587427,240.73651666094125 559.9525936104432,250.16420474063898 621,270 C 682.0474063895568,289.835795259361 745.0230161456545,320.0796976983854 806,311 C 866.9769838543455,301.9203023016146 925.955341806939,253.51700446581927 992,241 C 1058.044658193061,228.48299553418073 1131.1556166265889,251.85228443833734 1207,262 C 1282.8443833734111,272.14771556166266 1361.4221916867054,269.0738577808313 1440,266 C 1440,266 1440,400 1440,400 Z");
        }

        100% {
          d: path("M 0,400 C 0,400 0,266 0,266 C 79.11645482652008,262.5997938852628 158.23290965304017,259.1995877705256 217,268 C 275.76709034695983,276.8004122294744 314.1848162143594,297.8014428031604 377,286 C 439.8151837856406,274.1985571968396 527.0278254895223,229.59464101683272 606,219 C 684.9721745104777,208.40535898316728 755.7038818275508,231.81999312950882 822,255 C 888.2961181724492,278.1800068704912 950.1566472002746,301.1253864651322 1023,295 C 1095.8433527997254,288.8746135348678 1179.66952937135,253.67846100996223 1251,244 C 1322.33047062865,234.32153899003777 1381.165235314325,250.16076949501888 1440,266 C 1440,266 1440,400 1440,400 Z");
        }
      }
    </style>
    <defs>
      <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
        <stop offset="5%" stop-color="#868b8e"></stop>
        <stop offset="95%" stop-color="#b9b7bd"></stop>
      </linearGradient>
    </defs>
    <path d="M 0,400 C 0,400 0,266 0,266 C 79.11645482652008,262.5997938852628 158.23290965304017,259.1995877705256 217,268 C 275.76709034695983,276.8004122294744 314.1848162143594,297.8014428031604 377,286 C 439.8151837856406,274.1985571968396 527.0278254895223,229.59464101683272 606,219 C 684.9721745104777,208.40535898316728 755.7038818275508,231.81999312950882 822,255 C 888.2961181724492,278.1800068704912 950.1566472002746,301.1253864651322 1023,295 C 1095.8433527997254,288.8746135348678 1179.66952937135,253.67846100996223 1251,244 C 1322.33047062865,234.32153899003777 1381.165235314325,250.16076949501888 1440,266 C 1440,266 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
    </svg>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>