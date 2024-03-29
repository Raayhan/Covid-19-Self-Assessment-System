<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Covid-19 Self Assessment System</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/753fbd11bf.js"
      crossorigin="anonymous"
    ></script>

    <!-- JQuery -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>

    <script>
      $.get("/layout/header.html", function (data) {
        $("#header").replaceWith(data);
      });
    </script>
  </head>
  <body>
    <!-- Navbar -->
    <div id="header"></div>

    <!-- jumbotron -->
    <div class="jumbotron text-center hoverable p-4 welcome">
      <!-- Grid row -->
      <div class="row front_page">
        <!-- Grid column -->
        <div class="col-md-4 offset-md-1 mx-3 my-3">
          <!-- Featured image -->
          <div class="view overlay row content-justify-center">
            <img
              src="img/welcome.png"
              class="img-fluid"
              alt="Sample image for first version of blog listing"
            />
            <a> </a>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-7 text-md-left ml-3 mt-3 animated slideInRight">
          <!-- Excerpt -->

          <h4 class="h5 pb-1"><i class="far fa-check-circle"></i> Welcome</h4>

          <h3 class="front_title mb-4">
            <i class="fas fa-virus"></i> COVID-19 Self Assessment System
          </h3>

          <br />
          <div style="text-align: justify !important;">
            <p class="font-weight-normal font-small brown-text">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The world is at its utmost crisis moments now. Due to COVID-19 we
              lost many lives and many have been facing financial crisis all
              over the world. Economics are down due to pandemic.It is suggested
              that we all should be at home to be safe from the virus. Even
              though we try to save ourselves but there might be chances to get
              affected by the virus anyway. This website will help you to detect
              whether you might be affected by Covid-19 or not.
            </p>

            <a href="/test/step_1.php" class="btn btn-dark-green submit_btn my-4"
              >GET STARTED</a
            >
          </div>

          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- jumbotron -->
    </div>
    <script>
      $.get("/layout/footer.html", function (data) {
        $("#footer").replaceWith(data);
      });
    </script>
    <div id="footer"></div>

    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    ></script>
  </body>
</html>
