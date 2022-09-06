<?php include 'header.php'; ?>

<div class="container">
  <div class="row ">
    <div class="offset-md-0 col-md-12 ">
      <center>
        <h4 class="mt-3"><b>Welcome Mr. <?= $_SESSION['name'] ?></b></h4>
         <?php 
              if (isset($_SESSION['msg'])) { ?>
                <label  class="<?= $_SESSION['bg'];?> text-white text-center" style='width: 100%'>
                 <b> <h3><?= $_SESSION['msg']; ?></h3></b>
                </label>
              <?php unset($_SESSION['msg']); unset($_SESSION['bg']); } ?>
        <h1 class="mt-8">Select Venue</h1>
      </center>
      <div class="row">
    
    <?php 
    $venue_select=mysqli_query($db,"SELECT * FROM `venue` ORDER BY id DESC");

    while ($venue=mysqli_fetch_array($venue_select)) { ?>
       <!-- Card Start -->
        <div class="col-md-4 mb-5">
         <div class="card" style="margin-right:10px; height: 400px; width: 288px !important">
          <div class="card-header" style="background-color: #e5523d; color:white; ">
            <h5 class="" style=""><?= $venue['name'].' - '.substr($venue['address'], 0, 35)?></h5>
          </div>
          <div class="card-img">
            <center>
              <img class="mt-2" src="assets/img/1.png" alt="Venue thumb" style="width: 140px; height: 150px">
            </center>
          </div>
          <div class="">
            <p class=""  style="padding-left: 5px"><b>Credits:</b> 0 <br>No description...</p>
            <button class="btn btn-primary btn-sm" style="height: 50px;margin-left: 5px">Connect stripe</button>
          </div>
        </div>
        </div>
        <!-- End of Card -->
     <?php }?>
     
              
      
      </div>
    </div>

    
  </div>
</div>
<div style="position: fixed; bottom: 10px; margin-left: 10px">
      <a class="btn btn-primary btn-sm" href="add-venue.php">Add Venue</a> &nbsp; &nbsp;
      <a class="btn btn-primary btn-sm" href="logout.php">Logout</a>
    </div>
     
  <?php include 'footer.php'; ?>