<!DOCTYPE html>
<html>
<head>
    <title>admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login-admin.php?pesan=gagal");
	}
 
	?>
	
 
    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <div class="table-responsive">
       <a href="bukti2.php">Bukti</a>
    <table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Email</th>
        <th>Nama</th> 
        <th>Nama panggilan</th>
        <th>Tanggal lahir</th>
        <th>Jenis Kelamin</th>
        <th>Provinsi</th> 
        <th>Kota</th>
        <th>Kota tempat tanggal</th>
        <th>Nomor Whatsapp</th>
        <th>Nomor Telepon</th>
        <th>Kesibukan kamu sekarang</th>
        <th>Paket</th>
        <th>Done</th>
        <th>Select</th>
        <th>Action</th>
    </tr>
    <?php
   include 'config.php';
    $query = mysqli_query($db, "SELECT * FROM pendaftar2");
   $nomor = 1;
     while($data = mysqli_fetch_array($query)){
         ?>
         <td><?php echo $nomor++; ?></td>
         <td> <?php echo $data['email']?></td>
         <td> <?php echo $data['nama']?></td>
         <td> <?php echo $data['nama_panggilan']?></td>
         <td> <?php echo $data['tanggal_lahir']?></td>
         <td> <?php echo $data['gender']?></td>
         <td> <?php echo $data['provinsi']?></td>
         <td> <?php echo $data['kota']?></td>
         <td> <?php echo $data['kota_domisili']?></td>
         <td> <?php echo $data['wa']?></td>
         <td> <?php echo $data['mobile']?></td> 
         <td> <?php echo $data['kesibukan']?></td>
         <td> <?php echo $data['paket']?></td>
        <td> <input type="checkbox" class="save-cb-state" name="mycheckbox<?php echo $nomor++?>" value="yes"></td>
         <td><input type="checkbox" name="single_select" class="single_select" data-email="<?php echo $data['email'];?>" data-name="<?php echo $data['nama'];?>" /></td>
         <td><button type="button" name="email_button" class="btn btn-info btn-xs email_button" id="<?php echo $nomor?>" data-email="<?php echo $data['email'];?>" data-name="<?php echo $data['nama'];?>" data-action="single">Send Single</button></td>
     </tr>
     <?php } ?>
     <tr>
      <td colspan="14"></td>
      <td><button type="button" name="bulk_email" class="btn btn-info email_button" id="bulk_email" data-action="bulk">Send Bulk</button></td></td>
     </td>
    </table>
    <br> <a href="export1.php">Export to excel</a>
   </div>

	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
 
</body>
</html>
<script src="http://code.jquery.com/jquery.js"></script>
<script>
$(document).ready(function(){
 $('.email_button').click(function(){
  $(this).attr('disabled', 'disabled');
  var id = $(this).attr("id");
  var action = $(this).data("action");
  var email_data = [];
  if(action == 'single')
  {
   email_data.push({
    email: $(this).data("email"),
    name: $(this).data("nama")
   });
  }
  else
  {
   $('.single_select').each(function(){
    if($(this). prop("checked") == true)
    {
     email_data.push({
      email: $(this).data("email"),
      name: $(this).data('nama')
     });
    }
   });
  }
  
  $.ajax({
   url:"send_mail2.php",
   method:"POST",
   data:{email_data:email_data},
   beforeSend:function(){
    $('#'+id).html('Sending...');
    $('#'+id).addClass('btn-danger');
   },
   success:function(data){
    if(data = 'ok')
    {
     $('#'+id).text('Success');
     $('#'+id).removeClass('btn-danger');
     $('#'+id).removeClass('btn-info');
     $('#'+id).addClass('btn-success');
    }
    else
    {
     $('#'+id).text(data);
    }
    $('#'+id).attr('disabled', false);
   }
   
  });
 });
});
// save check

// Avoid scoping issues by encapsulating code inside anonymous function
(function() {
  // variable to store our current state
  var cbstate;
  
  // bind to the onload event
  window.addEventListener('load', function() {
    // Get the current state from localstorage
    // State is stored as a JSON string
    cbstate = JSON.parse(localStorage['CBState'] || '{}');
  
    // Loop through state array and restore checked 
    // state for matching elements
    for(var i in cbstate) {
      var el = document.querySelector('input[name="' + i + '"]');
      if (el) el.checked = true;
    }
  
    // Get all checkboxes that you want to monitor state for
    var cb = document.getElementsByClassName('save-cb-state');
  
    // Loop through results and ...
    for(var i = 0; i < cb.length; i++) {
  
      //bind click event handler
      cb[i].addEventListener('click', function(evt) {
        // If checkboxe is checked then save to state
        if (this.checked) {
          cbstate[this.name] = true;
        }
    
    // Else remove from state
        else if (cbstate[this.name]) {
          delete cbstate[this.name];
        }
    
    // Persist state
        localStorage.CBState = JSON.stringify(cbstate);
      });
    }
  });
})();

</script>