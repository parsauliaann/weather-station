<?php 
  include 'config.php';
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
  }

  if(isset($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
    
    header("Location: index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Dashboard Weather Station S475
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/b7f80dc676.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-500 bg-primary position-absolute w-100"></div> 
  <main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h1 class="text-white">S475 Weather Station</h1> 
          <h6 class="font-weight-bolder text-white mb-0">Unnamed Road, 66Q5+5WX, Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292, Indonesia UG Techno Park</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">      
            <li class="nav-item d-flex align-items-center">
              <form action="" method="POST">
                <button class="btn nav-link text-white font-weight-bold px-0 shadow-none" name="logout">
                  <i class="fa fa-sign-out me-sm-1"></i>
                  <span class="d-sm-inline d-none">Log out</span>
                </button>
              </form>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="row">

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Wind Speed</p>
                    <h3 class="font-weight-bolder">
                      0.0 m/s
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#windSpeedModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fa-solid fa-wind" style='font-size:24px'></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="windSpeedModal" tabindex="-1" aria-labelledby="windSpeedModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="windSpeedModalLabel">Wind Speed</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">Wind Speed</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">1.0 m/s</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">1.2 m/s</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">2.0 m/s</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">2.1 m/s</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center">1.7 m/s</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">1.4 m/s</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">2.2 m/s</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">1.0 m/s</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Wind Direction</p>
                    <h3 class="font-weight-bolder">
                      261°
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#windDirection">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <!-- <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-location-arrow" style="color: #ffffff; font-size:24px" ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="windDirection" tabindex="-1" aria-labelledby="windDirectionLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="windSpeedModalLabel">Wind Direction</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">Wind Direction</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">73°</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">80°</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">75°</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">79°</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center">88°</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">81°</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">85°</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">88°</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Temperature</p>
                    <h3 class="font-weight-bolder">
                      29.9 °C
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#temperatureModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <!-- <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i> -->
                    <i style='font-size:24px' class='fas'>&#xf76b;</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="temperatureModal" tabindex="-1" aria-labelledby="temperatureModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="temperatureModalLabel">Temperature</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">Temperature</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">34.1 °C</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">32.5 °C</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">31.1 °C</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">30.9 °C</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center">28.8 °C</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">28.4 °C</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">27.7 °C</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">25.6 °C</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Humidity</p>
                    <h3 class="font-weight-bolder">
                      75.9%
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#humidity">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <!-- <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-droplet" style="color: #ffffff; font-size: 24px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="humidity" tabindex="-1" aria-labelledby="humidityLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="humidityLabel">Humidity</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">Humidity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">54%</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">52%</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">48%</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">47%</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center">43%</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">44%</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">42%</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">40%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Pressure</p>
                    <h3 class="font-weight-bolder">
                      0.9812
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#pressureModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="pressureModal" tabindex="-1" aria-labelledby="pressureModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="pressureModalLabel">Pressure</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">Pressure</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">0.9642</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">0.9286</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">0.9734</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">0.9853</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center">0.9.6931</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">0.9773</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">0.9935</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">0.9124</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Rainfall</p>
                    <h3 class="font-weight-bolder">
                      0.00mm
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#rainfallModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-secondary shadow-secondary text-center rounded-circle">
                    <!-- <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-cloud-showers-heavy" style="color: #ffffff; font-size: 24px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="rainfallModal" tabindex="-1" aria-labelledby="rainfallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="rainfallModalLabel">Rainfall</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">Rainfall</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">0.0mm</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Solar Radiaton</p>
                    <h3 class="font-weight-bolder">
                      523
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#solarRadiationModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                    <!-- <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class="fa-solid fa-sun" style="color: #ffffff; font-size: 24px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="solarRadiationModal" tabindex="-1" aria-labelledby="solarRadiationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="solarRadiationModalLabel">Solar Radiation</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">Solar Radiation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">268</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">283</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">242</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">218</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center">249</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">276</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">266</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">296</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">PAR Sensor</p>
                    <h3 class="font-weight-bolder">
                      1120 w/m²
                    </h3>
                    <a href="" style="font-size: 0.9em" data-bs-toggle="modal" data-bs-target="#parSensorModal">See detail</a>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="parSensorModal" tabindex="-1" aria-labelledby="parSensorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="parSensorModalLabel">PAR Sensor</h1>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                  </button>
                </div>
                <div class="modal-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Time</th>
                        <th scope="col" class="text-center">PAR Sensor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">14.00</td>
                        <td class="text-center">320 w/m²</td>
                      </tr>
                      <tr>
                        <td class="text-center">13.00</td>
                        <td class="text-center">397 w/m²</td>
                      </tr>
                      <tr>
                        <td class="text-center">12.00</td>
                        <td class="text-center">315 w/m2</td>
                      </tr>
                      <tr>
                        <td class="text-center">11.00</td>
                        <td class="text-center">398 w/m²</td>
                      </tr>
                      <tr>
                        <td class="text-center">10.00</td>
                        <td class="text-center"> w/396m²</td>
                      </tr>
                      <tr>
                        <td class="text-center">09.00</td>
                        <td class="text-center">356 w/m²</td>
                      </tr>
                      <tr>
                        <td class="text-center">08.00</td>
                        <td class="text-center">377 w/m²</td>
                      </tr>
                      <tr>
                        <td class="text-center">07.00</td>
                        <td class="text-center">318 w/m²</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Real-time curve</h6>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Alarm Notify</h6>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-12">
                  <div class="card shadow-sm">
                    <div class="card-body p-3">
                      <h6 class="text-capitalize">Alarm 1</h6>
                      <p>Deskripsi</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mt-3">
                  <div class="card shadow-sm">
                    <div class="card-body p-3">
                      <h6 class="text-capitalize">Alarm 2</h6>
                      <p>Deskripsi</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mt-3">
                  <div class="card shadow-sm">
                    <div class="card-body p-3">
                      <h6 class="text-capitalize">Alarm 3</h6>
                      <p>Deskripsi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Sales by Country</h6>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center ">
                <tbody>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="./assets/img/icons/flags/US.png" alt="Country flag">
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">Country:</p>
                          <h6 class="text-sm mb-0">United States</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                        <h6 class="text-sm mb-0">2500</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                        <h6 class="text-sm mb-0">$230,900</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                        <h6 class="text-sm mb-0">29.9%</h6>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="./assets/img/icons/flags/DE.png" alt="Country flag">
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">Country:</p>
                          <h6 class="text-sm mb-0">Germany</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                        <h6 class="text-sm mb-0">3.900</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                        <h6 class="text-sm mb-0">$440,000</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                        <h6 class="text-sm mb-0">40.22%</h6>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="./assets/img/icons/flags/GB.png" alt="Country flag">
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">Country:</p>
                          <h6 class="text-sm mb-0">Great Britain</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                        <h6 class="text-sm mb-0">1.400</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                        <h6 class="text-sm mb-0">$190,700</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                        <h6 class="text-sm mb-0">23.44%</h6>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="w-30">
                      <div class="d-flex px-2 py-1 align-items-center">
                        <div>
                          <img src="./assets/img/icons/flags/BR.png" alt="Country flag">
                        </div>
                        <div class="ms-4">
                          <p class="text-xs font-weight-bold mb-0">Country:</p>
                          <h6 class="text-sm mb-0">Brasil</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                        <h6 class="text-sm mb-0">562</h6>
                      </div>
                    </td>
                    <td>
                      <div class="text-center">
                        <p class="text-xs font-weight-bold mb-0">Value:</p>
                        <h6 class="text-sm mb-0">$143,960</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      <div class="col text-center">
                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                        <h6 class="text-sm mb-0">32.14%</h6>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Categories</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-mobile-button text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Devices</h6>
                      <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-tag text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                      <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-box-2 text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                      <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="ni ni-satisfied text-white opacity-10"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                      <span class="text-xs font-weight-bold">+ 430</span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      <!-- <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["07.00", "08.00", "09.00", "10.00", "11.00", "12.00", "13.00", "14.00", "15.00"],
        datasets: [
          {
            label: "Wind Speed",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#5e72e4",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [1000, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6
          },
          {
            label: "Wind Direction",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#ff6721",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [450, 150, 700, 50, 600, 250, 120, 350, 780],
            maxBarThickness: 6
          },
          {
            label: "Temperature",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#21b1ff",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [27.5, 14.3, 32.8, 19.6, 25.2, 8.9, 36.7, 22.1, 30.4],
            maxBarThickness: 6
          },
          {
            label: "Humidity",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#f5c842",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [80, 90, 100, 300, 900, 800, 100, 200, 300],
            maxBarThickness: 6
          },
          {
            label: "Pressure",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#40c6ff",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [105, 78, 120, 95, 110, 85, 130, 102, 115],
            maxBarThickness: 6
          },
          {
            label: "Rainfall",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cbeaf7",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [15.2, 30.7, 20.5, 32.1, 18.6, 25.8, 30.2, 21.4, 27.9, 19.0],
            maxBarThickness: 6
          },
          {
            label: "Solar Radiation",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#464e52",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [150.3, 280.7, 200.5, 320.1, 180.6, 250.8, 300.2, 210.4, 270.9, 190.0 ],
            maxBarThickness: 6
          },
          {
            label: "Par Sensor",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#bfb10f",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [482, 763, 215, 689, 374, 921, 150, 567, 842, 103],
            maxBarThickness: 6
          }
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>