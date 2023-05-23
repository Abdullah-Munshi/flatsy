<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/img/favicon.ico"
      type="image/x-icon"
    />
    <title>Rostoo - Reset your Password</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap Css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Main Css  -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>
  <body>

  <?php
    // Define variable and set to empty values
    $formIsValid = true;
    $email = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = test_input($_POST['email']);

      // check the user inputs 
      if($email == 'stackbind@gmail.com') {
        $formIsValid = true;
      } else {
        $formIsValid = false;
      } 
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
    <header class="header-area type-2 bg-white d-flex align-items-center">
      <div class="container-fluid px-4 px-lg-5">
        <div class="row align-items-center">
          <div class="col-8 d-flex align-items flex-wrap">
            <a href="./" class="d-inline-block logo">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="162.322"
                height="32"
                viewBox="0 0 162.322 32"
              >
                <defs>
                  <style>
                    .a {
                      fill: #00f098;
                    }
                    .b {
                      fill: #ffffff;
                    }
                  </style>
                </defs>
                       <path
                  d="M167.829,29.64a12.42,12.42,0,0,1-5.115-10.584,12.644,12.644,0,0,1,25.263,1.085,12.43,12.43,0,0,1-5.427,9.719,12.985,12.985,0,0,1-1.328.881c-.134-.183,0-.3.053-.426a.755.755,0,0,0-.282-1.026,9.84,9.84,0,0,0-1.271-.822,11.729,11.729,0,0,0-1.89-.949,1.835,1.835,0,0,0-1.048-.1,14.447,14.447,0,0,0-2.614.871,1.6,1.6,0,0,0-.639.656,1.212,1.212,0,0,1-1.127.581c-.349-.023-.506-.212-.365-.531a4.288,4.288,0,0,1,1.378-2.01c.8-.55,1.631-1.053,2.468-1.547a1.747,1.747,0,0,1,1.342-.073,4.092,4.092,0,0,1,.636.2,1.683,1.683,0,0,0,1.31.1h0a7.129,7.129,0,0,0-3.514-13.209,7.2,7.2,0,0,0-7.545,6.831,7.126,7.126,0,0,0,3.575,6.48h0l.006,0,.014.008c.1.056.266.113.359.168a1.146,1.146,0,0,0,1.195.027,3.9,3.9,0,0,1,.71-.254.2.2,0,0,1,.26.114c.037.105-.068.152-.136.2a4.207,4.207,0,0,1-.631.413,4.025,4.025,0,0,0-1.868,2.288.882.882,0,0,0,.971,1.3,1.534,1.534,0,0,0,1.081-.6,2.5,2.5,0,0,1,1.2-.87c.552-.17,1.084-.4,1.645-.552a2,2,0,0,1,1.464.158,25.767,25.767,0,0,1,2.511,1.512.456.456,0,0,1,.176.709c-.239.37-.576.527-.882.38a7.589,7.589,0,0,0-1.117-.539c-.165-.049-.334-.205-.436.053-.087.222.12.287.262.366.3.167.6.317.9.487.257.147.634.235.417.672a.84.84,0,0,1-1.037.448c-.4-.188-.787-.412-1.18-.62a1.746,1.746,0,0,0-.316-.161c-.14-.04-.307-.07-.393.1s.029.268.169.343c.378.2.752.417,1.135.61.338.171.319.383.1.632a1.034,1.034,0,0,1-1.215.233c-.308-.14-.595-.325-.9-.462-.154-.069-.365-.241-.49.038-.1.225.094.306.252.391.2.106.4.2.587.317.29.179.284.355-.017.511a1.615,1.615,0,0,1-1.219.037,9.1,9.1,0,0,1-2.78-1.465c-1.262-.9-2.531-1.786-3.864-2.6q-.413-.251-.8-.526Z"
                  transform="translate(-53.869 -2.329)"
                  class="a"
                ></path>
               
                <path
                  d="M37.816,10.895q2.377-3.653,8.365-3.653v5.175a7.057,7.057,0,0,0-1.277-.131,6.694,6.694,0,0,0-5.019,1.848,7.314,7.314,0,0,0-1.8,5.327V30.723h-5.5V7.5h5.239Z"
                  transform="translate(-7.9 -2.372)"
                  class="b"
                ></path>
                <path
                  d="M217.72,31.027a13.47,13.47,0,0,1-6.428-1.522,11.17,11.17,0,0,1-4.469-4.24,11.854,11.854,0,0,1-1.607-6.153,11.74,11.74,0,0,1,1.607-6.131,11.216,11.216,0,0,1,4.469-4.218,14.427,14.427,0,0,1,12.9,0,11.227,11.227,0,0,1,4.468,4.218,11.74,11.74,0,0,1,1.607,6.131,11.854,11.854,0,0,1-1.607,6.153,11.181,11.181,0,0,1-4.468,4.24A13.568,13.568,0,0,1,217.72,31.027Zm0-4.653a6.765,6.765,0,0,0,5.018-2,7.15,7.15,0,0,0,1.981-5.261,7.15,7.15,0,0,0-1.981-5.261,6.765,6.765,0,0,0-5.018-2,6.7,6.7,0,0,0-5,2,7.2,7.2,0,0,0-1.959,5.261,7.2,7.2,0,0,0,1.959,5.261A6.7,6.7,0,0,0,217.72,26.375Z"
                  transform="translate(-165 -2.372)"
                  class="b"
                ></path>
                <path
                  d="M110.976,31.027a21.288,21.288,0,0,1-5.591-.739,14.155,14.155,0,0,1-4.359-1.87l2.113-4.131a13.659,13.659,0,0,0,3.808,1.674,16.008,16.008,0,0,0,4.38.631q4.932,0,4.931-2.566a1.715,1.715,0,0,0-1.255-1.7,21.871,21.871,0,0,0-4.028-.913,33.057,33.057,0,0,1-4.733-1,7.277,7.277,0,0,1-3.17-1.978,5.484,5.484,0,0,1-1.343-3.935,6.165,6.165,0,0,1,2.8-5.283,12.84,12.84,0,0,1,7.55-1.979,22.047,22.047,0,0,1,4.843.544,13.689,13.689,0,0,1,3.963,1.457l-2.113,4.131a13.162,13.162,0,0,0-6.736-1.739,7.544,7.544,0,0,0-3.676.717,2.139,2.139,0,0,0-1.255,1.891,1.891,1.891,0,0,0,1.342,1.848,21.578,21.578,0,0,0,4.161,1.022,32.463,32.463,0,0,1,4.623,1,7.249,7.249,0,0,1,3.1,1.913,5.291,5.291,0,0,1,1.3,3.826,6.038,6.038,0,0,1-2.862,5.218A13.625,13.625,0,0,1,110.976,31.027Z"
                  transform="translate(-33.449 -2.372)"
                  class="b"
                ></path>
                <path
                  d="M151.521,27.051a6.5,6.5,0,0,1-2.356,1.174,10.718,10.718,0,0,1-2.927.392,8.372,8.372,0,0,1-5.987-2,7.642,7.642,0,0,1-2.113-5.827V9.615h-3.874V5.267h3.874v-5.3h5.5v5.3h6.3V9.615h-6.3V20.659a3.643,3.643,0,0,0,.836,2.587,3.161,3.161,0,0,0,2.421.892,4.876,4.876,0,0,0,3.082-.957Z"
                  transform="translate(-44.453 0.038)"
                  class="b"
                ></path>
                <path
                  d="M217.72,31.027a13.47,13.47,0,0,1-6.428-1.522,11.17,11.17,0,0,1-4.469-4.24,11.854,11.854,0,0,1-1.607-6.153,11.74,11.74,0,0,1,1.607-6.131,11.216,11.216,0,0,1,4.469-4.218,14.427,14.427,0,0,1,12.9,0,11.227,11.227,0,0,1,4.468,4.218,11.74,11.74,0,0,1,1.607,6.131,11.854,11.854,0,0,1-1.607,6.153,11.181,11.181,0,0,1-4.468,4.24A13.568,13.568,0,0,1,217.72,31.027Zm0-4.653a6.765,6.765,0,0,0,5.018-2,7.15,7.15,0,0,0,1.981-5.261,7.15,7.15,0,0,0-1.981-5.261,6.765,6.765,0,0,0-5.018-2,6.7,6.7,0,0,0-5,2,7.2,7.2,0,0,0-1.959,5.261,7.2,7.2,0,0,0,1.959,5.261A6.7,6.7,0,0,0,217.72,26.375Z"
                  transform="translate(-67.945 -2.372)"
                  class="b"
                ></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </header>
    <main class="overflow-hidden">
      <div
        class="access-page f_montserrat d-flex align-items-center position-relative overflow-hidden"
      >
      <div class="fm-alert position-absolute w-100 top-0 start-0 text-center alert alert-success <?php echo $formIsValid ?  'show':  ''?>"
              role="alert">An email will be send!</div>
      <div class="fm-alert position-absolute w-100 top-0 start-0 text-center alert alert-danger <?php echo !$formIsValid ?  'show':  ''?>"
              role="alert">Oups ! Il y a des erreurs à corriger.</div>
        <div class="mx-width mx-auto position-relative z-index-1">
          <div class="access-title text-center">
            <p class="mb-0">My Account</p>
            <h2 class="text-uppercase">New Password</h2>

            <h4>
              Enter your email to reset your password
            </h4>
          </div>

          <form class="access-fm login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <div class="has-validation">
              <div class="invalid-feedback">Please choose a username.</div>
            </div>

            <div class="input-inside">
            <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                autocomplete="off"
                placeholder="Adresse Email"
                required
              />
            </div>

            <div class="access-btns">
              <a href="login" class="btn border-style text-uppercase">Go Back</a>
              <button type="submit" class="btn submit-btn text-uppercase">
                Reset My Password
              </button>
            </div>

            <div class="ut-contents text-center">
              <p>
                <strong>
                  Discover our service :<a
                    href="inspection"
                    class="d-inline-block ms-1"
                    > Vehicle Inspection</a
                  >
                </strong>
              </p>
              <p>
                Do you want to join our community ?<a
                  href="become-specialist"
                  class="d-inline-block ms-1"
                  >Become a specialist</a
                >
              </p>
            </div>
          </form>
        </div>
      </div>
    </main>

    <!-- Bootstrap Js and popper js (for dropdown and modals) -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>

    <!-- Reference: Bootstrap 5 form validation  -->
    <script src="assets/js/formValidation.js"></script>
  </body>
</html>
