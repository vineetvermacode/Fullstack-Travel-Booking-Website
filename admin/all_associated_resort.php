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
      <li class="breadcrumb-item active">All Associated Resort</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">All Resort</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Location Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Resort Name</th>
                        <th scope="col">Overview</th>
                        <th scope="col">Free WiFi</th>
                        <th scope="col">Reservation</th>
                        <th scope="col">Credit Card</th>
                        <th scope="col">Air Conditioner</th>
                        <th scope="col">Car Parking</th>
                        <th scope="col">Swimming Pool</th>
                        <th scope="col">Image URL</th>
                    </tr>
                </thead>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM associate_resort";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $row["resort_id"] . "</th>";
                            echo "<td>" . $row["location_name"] . "</td>";
                            echo "<td>" . $row["type"] . "</td>";
                            echo "<td>" . $row["resort_name"] . "</td>";
                            echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#overviewModal-" . $row["resort_id"] . "'>View Overview</button></td>";
                            echo "<div class='modal fade' id='overviewModal-" . $row["resort_id"] . "' tabindex='-1' role='dialog' aria-labelledby='overviewModalLabel' aria-hidden='true'>";
                            echo "  <div class='modal-dialog' role='document'>";
                            echo "    <div class='modal-content'>";
                            echo "      <div class='modal-header'>";
                            echo "        <h5 class='modal-title' id='overviewModalLabel'>Overview</h5>";
                            echo "        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                            echo "      </div>";
                            echo "      <div class='modal-body'>";
                            echo         $row["overview"];
                            echo "      </div>";
                            echo "      <div class='modal-footer'>";
                            echo "        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                            echo "      </div>";
                            echo "    </div>";
                            echo "  </div>";
                            echo "</div>";
                            echo "<td>" . ($row["free_wifi"] ? 'Yes' : 'No') . "</td>";
                            echo "<td>" . ($row["reservation"] ? 'Yes' : 'No') . "</td>";
                            echo "<td>" . ($row["credit_card"] ? 'Yes' : 'No') . "</td>";
                            echo "<td>" . ($row["air_conditioner"] ? 'Yes' : 'No') . "</td>";
                            echo "<td>" . ($row["car_parking"] ? 'Yes' : 'No') . "</td>";
                            echo "<td>" . ($row["swimming_pool"] ? 'Yes' : 'No') . "</td>";
                            echo "<td><img style='width:80px;' src='../" . $row["image_url"] . "' alt='Image'></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='19'>No data found</td></tr>";
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