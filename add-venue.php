
<?php include 'header.php';
error_reporting(0);
if (isset($_POST['add_venue'])) {
$name =$_POST['name'];
$category =$_POST['category'];
$address =$_POST['address'];
$delivery =$_POST['delivery'];
$preorder =$_POST['preorder'];
$pickup =$_POST['pickup'];
$booking =$_POST['booking'];

$venue_sql="INSERT INTO `venue`( `name`, `category`, `address`, `delivery`, `preorder`, `pickup`, `booking`) VALUES ('$name','$category','$address','$delivery','$preorder','$pickup','$booking') LIMIT 1";
$venue_insert=mysqli_query($db, $venue_sql);

if ($venue_insert) {

  $_SESSION['msg']='<b>Success</b> Venue Added';
  $_SESSION['bg']='bg-success';
  
}else{
  $_SESSION['msg']='<b>Problem</b> Problem in Adding';
  $_SESSION['bg']='bg-danger';
 
}
}
 ?>
<style type="text/css">
  .map-responsive{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>
<div class="container-fluid" style="background-image: url('assets/img/bg.png'); background-size: cover; height: 100vh">
  <div class="row">
    <div class="offset-md-4 col-md-4">
      <div class="card bg-light mt-5">
        <div class="card-body ">
         
          <h2 class="card-title text-center" >Venue Management</h2>
          <h2 class="card-subtitle mb-2 text-muted text-center">Add Venue</h2>
          <form method="POST" action="">
            <label class="form-label">Venue Name</label>
            <input type="text" name="name" class="form-control" style="height: 38px">

 <label class="form-label">Category</label>
            <select name="category" class="form-control" placeholder="Select Venue Category" style="height: 45px; padding: 0px !important; padding-left: 10px">
              <option >Arabic</option>
              <option >Asian Fusion</option>
              <option >Bar</option>
              <option >Bowling</option>
              <option >Brasserie And Bistro</option>
              <option >Cafe</option>
              <option >Casual Dining</option>
              <option >Chinese</option>
              <option >Cinema</option>
              <option >Club</option>
              <option >Coffee Shop</option>
              <option >Fast Food</option>
              <option >Fine Dining</option>
              <option >French</option>
              <option >Fusion</option>
              <option >Greek</option>
              <option >Healthy</option>
              <option >Ice Cream</option>
              <option >Indian</option>
              <option >Italian</option>
              <option >Japanese</option>
              <option >Lebanese</option>
              <option >Lounge</option>
              <option >Lunch</option>
              <option >Nightlife</option>
              <option >Other</option>
              <option >Pub</option>
              <option >Recreational</option>
              <option >Shisha</option>
              <option >Steak House</option>
              <option >Teppanyaki</option>
              <option >Turkish</option>
              <option >Moroccan</option>
              <option >Spanish</option>
              <option >Burrito</option>
              <option >Lebanese</option>
              <option >Sushi</option>
              <option >European</option>
              <option >Irish</option>
              <option >Tapas</option>
              <option >Vegan</option>
              <option >Hotel</option>
              <option >Mediterranean</option>
              <option >Barber</option>
              <option >Hairdresser</option>
              <option >Beauty</option>
            </select>
  <label class="form-label">Address</label>
   <input id="map-input" type="text" placeholder="Search Box" oninput='address();' class="form-control" name="address" style="height: 38px"/><br>
    <div class="map-responsive">

   <iframe id='imap' src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Kamra-pakistan" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<p>
  What features of @VM do you want to be enabled for your venue? You can change this easily at any time in the settings tab.
</p>
<table width="80%">
  <tr>
    <td><input type="checkbox" name="delivery" value="delivery"> &nbsp;delivery</td>
    <td><input type="checkbox" name="preorder" value="preorder"> &nbsp;pre-order</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="pickup" value="pickup"> &nbsp;pick-up</td>
    <td><input type="checkbox" name="booking" value="booking"> &nbsp;booking</td>
  </tr>
</table>

<input type="submit" class="btn btn-primary btn-sm mt-5" name='add_venue' value="Add Venue" height="38px">
<a href="select-venue.php" class="text-primary btn mt-5">back</a>


           
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>
<script type="text/javascript">
function  address(){
    var i = document.getElementById('map-input').value;
  alert(i);
  document.getElementbyId('imap').setAttribute("src", "https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q="+i);
  document.getElementById('imap').contentWindow.location.reload();
}

</script>
<?php include 'footer.php'; ?>