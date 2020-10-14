<!DOCTYPE html>
<html>
 <head>
  <title>Pendaftar</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center"></h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
    <tr>
        <th>No</th>
        <th>Email</th> 
        <th>Bukti</th>
        <th>Select</th>
        <th>Action</th>
    </tr>
    <?php
   include 'config.php';
    $query = mysqli_query($db, "SELECT * FROM bukti2");
   $nomor = 1;
     while($data = mysqli_fetch_array($query)){
         ?>
         <td><?php echo $nomor++; ?></td>
         <td> <?php echo $data['fname']?></td>
         <td><img src="/<?php echo $data['images'];?>" width="100" height="100"></td>
         <td><input type="checkbox" name="single_select" class="single_select" data-email="<?php echo $data['email'];?>" data-name="<?php echo $data['nama'];?>" /></td>
         <td><button type="button" name="email_button" class="btn btn-info btn-xs email_button" id="<?php echo $nomor?>" data-email="<?php echo $data['fname'];?>" data-name="<?php echo $data['nama'];?>" data-action="single">Send Single</button></td>
     </tr>
     <?php } ?>
     <tr>
      <td colspan="4"></td>
      <td><button type="button" name="bulk_email" class="btn btn-info email_button" id="bulk_email" data-action="bulk">Send Bulk</button></td></td>
     </td>
    </table>

   </div>
  </div>
 </body>
</html>

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
   url:"send_mail.php",
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
</script>