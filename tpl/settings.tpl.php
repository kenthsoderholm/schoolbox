<div class="well">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#home">Accountinfo</a></li>
    <li><a href="#profile">Accountsettings</a></li>
  </ul>
   
  <div class="tab-content">
    <div class="tab-pane active" id="home">Accountinfo</div>
    <div class="tab-pane" id="profile">Accountsettings</div>
  </div>
</div>

 
<script>
 $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>