<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Associated Resort</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Associated Resort</li>
      <li class="breadcrumb-item active">Add Resort</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Resort</h5>

        <form action="db/associate_resort.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="inputText" class="col-form-label">Location Name</label>
                    <div class="">
                        <select name="location_name" class="form-control">
                            <option> Select Location </option>
                            <?php

                            $sql = "SELECT location_name FROM associated_resort_location";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row["location_id"] . "'>" . $row["location_name"] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="inputText" class="col-form-label">Type</label>
                    <div class="">
                    <select name="type" class="form-control">
                            <option> Select Type </option>
                            <option> Hotel </option>
                            <option> Resort </option>
                            
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="inputText" class="col-form-label">Resort Name</label>
                    <div class="">
                        <input type="text" name="resort_name" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="inputText" class="col-form-label">Image URL</label>
                    <div class="">
                        <input type="file" name="image_url" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="col-form-label">Free WiFi</label>
                    <div class="">
                        <input type="checkbox" name="free_wifi" value="1">
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="col-form-label">Reservation</label>
                    <div class="">
                        <input type="checkbox" name="reservation" value="1">
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="col-form-label">Credit Card</label>
                    <div class="">
                        <input type="checkbox" name="credit_card" value="1">
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="col-form-label">Air Conditioner</label>
                    <div class="">
                        <input type="checkbox" name="air_conditioner" value="1">
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="col-form-label">Car Parking</label>
                    <div class="">
                        <input type="checkbox" name="car_parking" value="1">
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="col-form-label">Swimming Pool</label>
                    <div class="">
                        <input type="checkbox" name="swimming_pool" value="1">
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputText" class="col-form-label">Overview</label>
                    <div class="">
                        <textarea name="overview" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-lg-4 mx-auto">
                    <center><button type="submit" class="btn btn-primary">Add</button></center>
                </div>
            </div>
        </form>



        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php
include 'footer.php';
?>