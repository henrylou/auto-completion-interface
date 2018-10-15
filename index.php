<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Autocomplete</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style>
  .custom-bg {
    min-height: 100vh;
    position: relative;
    overflow: hidden;
    /*padding-top: calc(7rem + 72px);*/
    padding-bottom: 7rem;
    background: linear-gradient(0deg, #fcf3c4 0%, #f9e061 100%);
    /*background: url('http://placehold.it/1920x1080'); */
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: scroll;
    background-size: cover;
  }
  </style>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  </head>

  <body>
    <div class="custom-bg"> 
        <h1 class="text-center mt-5">Autocomplete</h1>
        <div class="content mt-5 row">
          <div class="col"></div>
          <div class="container col pl-0 pr-0">
            <input type="text" id="country_id" class="form-control" placeholder="Enter a keyword" onkeyup="autocomplet()">
          <ul class="mt-3" id="country_list_id" style="list-style: none;"></ul>
          </div>
          <div class="col"></div>
      </div>
      <p class="text-center mt-5">The autocomplete user interface predicts the rest of words a user is typing.</p>
    </div>
  </body>

  <footer class="footer py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">
    Copyright &copy; Autocomplete by <a class="text-warning" href="https://github.com/henrylou">Hengyu Lou</a>
      </p>
    </div>
  </footer>

</html>
