 <?php
 function htmlPage(){
  return '
  <body>
  	<div class="container">
	    <div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="navbar-inner">
	      	<div class="container">
	          <div class="btn-group pull-right">
						  <a class="btn btn-small" href="#"><i class="icon-user"></i> Martin Nilsson</a>
						  <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
						  <ul class="dropdown-menu">
						    <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
						    <li><a href="#"><i class="icon-off"></i> Logout</a></li>
						    <li class="divider"></li>
						    <li class="li">62.3MB of 2.5GB used</li>
						    <li class="progress progress-striped active" style="height: 10px; margin: 0 10px 10px 10px">
						    	<div class="bar" style="width: 40%;"></div>
						    </li>
						  </ul>
						</div>
					</div>
		    </div>
	    </div>
    
      <!-- Example row of columns -->
      <div class="row">
        <div class="span3">
          <h2>News</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span9">
          <table class="table table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Created</th>
                </tr>
              </thead>
              <tbody>
              	<tr>
              		
	              		<td class="td-img"></td>
	                  <td>E-shop</td>
	                  <td>Folder</td>
	                  <td>2013-03-05</td>
                  </a>
                </tr>
                <tr>
                	<td class="td-img"></td>
                  <td>Portfolio</td>
                  <td>Folder</td>
                  <td>2013-03-05</td>
                </tr>
                <tr>
                	<td class="td-img"></td>
                  <td>test.txt</td>
                  <td>TEXT</td>
                  <td>2013-03-02</td>
                </tr>
                <tr>
                	<td class="td-img"></td>
                  <td>index.php</td>
                  <td>PHP</td>
                  <td>2013-02-25</td>
                </tr>
                <tr>
                	<td class="td-img"></td>
                  <td>style.css</td>
                  <td>CSS</td>
                  <td>2013-02-18</td>
                </tr>
              </tbody>
            </table>
       </div>
      </div>

      <hr>
    ';
  }