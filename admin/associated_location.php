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
      <li class="breadcrumb-item active">Add Associated Location</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Associated Resort Location</h5>

            <form action="db/associate_location.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Location Name</label>
                        <div class="">
                            <input type="text" name="location_name" class="form-control" >
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputEmail" class="col-form-label">Country</label>
                        <div class="">
                            <input type="text" name="country" class="form-control">
                        </div>
                    </div>

                <div class="row mt-3 mb-3">
                    <div class="col-lg-4 mx-auto">
                        <center><button type="submit" class="btn btn-primary">Save</button></center>
                    </div>
                </div>
            </form>

        </div>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Associated Resort Location</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Location</th>
                <th scope="col">Country</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM associated_resort_location";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $row["location_id"] . "</th>";
                        echo "<td>" . $row["location_name"] . "</td>";
                        echo "<td>" . $row["country"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }
                ?>
            </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
        </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


<?php
include 'footer.php';
?>