<style type="text/css">
      body {
        background: #fff!important;
        padding-top: 100px;
        padding-bottom: 40px;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

<div class="navbar-wrapper">
  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
  <div class="container">

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="brand" id="logo" style="cursor:pointer"><img src="css/img/logo.png" style="height: 20px;" /></div>

      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->
  </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->
<div class="container">

      <div class="alert alert-block alert-error">
        <div style="text-align:center"><h1>You're blocked!</h1>
         <h4>Welcome back at <?php print $_SESSION['user']['active']; ?></h4>
        </div>
      </div>

    </div> <!-- /container -->