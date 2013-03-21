
<style type="text/css">
  #popupMenu {
    display: none;
    position: absolute;
  }
</style>

<div id="popupMenu">
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px;">
    <li><a tabindex="-1" href="#">Action</a></li>
    <li><a tabindex="-1" href="#">Another action</a></li>
    <li><a tabindex="-1" href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>

<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
  <div class="container">

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <!-- Responsive Navbar Mobile -->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div id="home" class="brand" style="cursor:pointer"><img src="css/img/logo.png" style="height: 20px;" /></div>

        <!-- Responsive Navbar Web -->
        <div class="nav-collapse collapse">
          <ul class="nav">
          </ul>

          <ul class="nav header-menu pull-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print($_SESSION['user']['name']); ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li id="home"><a style="cursor:pointer"><i class="icon-folder-close"></i> My documents</a></li>
                <li><a id="settingsButton" style="cursor:pointer"><i class="icon-wrench"></i> Settings</a></li>
                <li><a style="cursor:pointer" id="logoutButton"><i class="icon-off"></i> Logout</a></li>
                <li class="divider"></li>
                <li class="li"><?php print($_SESSION['user']['storageused']); ?>MB of 100MB used</li>
                <li class="progress progress-striped active" style="height: 10px; margin: 0 10px 10px 10px">
                  <div class="bar" style="width: <?php print($_SESSION['user']['storageused']); ?>%;"></div>


                </li>
              </ul>
            </li>
          </ul>

        </div><!--/.nav-collapse -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->
  </div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->


<!-- LOGGEDINVIEW
================================================== -->
<div class="container marketing">
<div class="user-sidebar ">
    <div class="row-fluid">
      <div class="span3">
        <div class="well sidebar-nav">
          <ul class="nav nav-list">
            <li class="nav-header">Document</li>
            <li><a href="#upload" role="button" data-toggle="modal"><i class="icon-file"></i>Upload File</a></li>
            <li><a href="#"><i class="icon-folder-close"></i>New folder</a></li>
          </ul>
        </div><!--/.well -->
        <div class="well hidden-phone hidden-tablet" style="height:340px;">
            <ul class="nav">
             <a class="twitter-timeline" href="https://twitter.com/schoolboxlive" data-widget-id="312519691287531521">Tweets av @schoolboxlive</a>
          </ul>
        </div><!--/.well -->
      </div><!--/span-->

<div class="span9">
  <div class="well">
  <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Filename</th>
          <th>Type</th>
          <th>Created</th>
        </tr>
      </thead>
      <tbody id="directorylisting">
        
      </tbody>
    </table>
</div><!--/span-->
</div><!--/well-->
</div><!--/row-->
</div><!-- /.container -->
<!-- FOOTER
================================================== -->
<div class="container">
<footer>
  <p>&copy; 2013 SchoolBox &middot; <a href="#terms">Privacy & Terms</a></p>
</footer>

</div><!-- /.container -->


<!-- Modal -->
<div id="upload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Upload a new file</h3>
  </div>
  <div class="modal-body">
    <form enctype="multipart/form-data">
      Choose file: <input name="uploaded" id="uploaded" type="file" /><br />
      <input type="submit" class="btn btn-success" id="uploadButton" value="Upload" />
    </form> 
  </div>
</div>

<script>
$('#logoutButton').click(function(){
    ajax('server/functions/user.php?logout', null, html);
  });
$('#home').click(function(){
    ajax('server/functions/user.php?check', null, html);
  });
$('#settingsButton').click(function(){
    ajax('server/functions/utils.php?settings', null, page);
  });
$('#uploadButton').click(function(){
    ajax('server/functions/files.php?uploadfile', null, directorylisting);
  });



$(document).ready(function(){
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
});

// Rightclick events
$(document).bind("contextmenu", function(e) {
    $('#popupMenu').css({
        top: e.pageY+'px',
        left: e.pageX+'px'
    }).show();

    return false;
});

$(document).ready(function() {
    $(document).click(function() {
        $('#popupMenu').hide();
    });
});
      
</script>
























