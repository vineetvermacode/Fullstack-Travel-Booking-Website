<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Blog</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Blog</li>
      <li class="breadcrumb-item active">All Blog</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">All Blog</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Blog Title</th>
                        <th scope="col">Headline</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Description</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Post Type</th>
                        <th scope="col">Post By</th>
                        <th scope="col">Post Date</th>
                        <th scope="col">Image URL</th>
                    </tr>
                </thead>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM blog_posts";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $row["post_id"] . "</th>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["headline"] . "</td>";
                            // echo "<td>" . $row["shot_desc"] . "</td>";
                            
                            echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#overviewModalshort-" . $row["post_id"] . "'>View</button></td>";
                            echo "<div class='modal fade' id='overviewModalshort-" . $row["post_id"] . "' tabindex='-1' role='dialog' aria-labelledby='overviewModalLabel' aria-hidden='true'>";
                            echo "  <div class='modal-dialog' role='document'>";
                            echo "    <div class='modal-content'>";
                            echo "      <div class='modal-header'>";
                            echo "        <h5 class='modal-title' id='overviewModalLabel'>Overview</h5>";
                            echo "        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                            echo "      </div>";
                            echo "      <div class='modal-body'>";
                            echo         $row["shot_desc"];
                            echo "      </div>";
                            echo "      <div class='modal-footer'>";
                            echo "        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                            echo "      </div>";
                            echo "    </div>";
                            echo "  </div>";
                            echo "</div>";
                            
                            
                            
                            
                            echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#overviewModal-" . $row["post_id"] . "'>View</button></td>";
                            echo "<div class='modal fade' id='overviewModal-" . $row["post_id"] . "' tabindex='-1' role='dialog' aria-labelledby='overviewModalLabel' aria-hidden='true'>";
                            echo "  <div class='modal-dialog' role='document'>";
                            echo "    <div class='modal-content'>";
                            echo "      <div class='modal-header'>";
                            echo "        <h5 class='modal-title' id='overviewModalLabel'>Overview</h5>";
                            echo "        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                            echo "      </div>";
                            echo "      <div class='modal-body'>";
                            echo         $row["description"];
                            echo "      </div>";
                            echo "      <div class='modal-footer'>";
                            echo "        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                            echo "      </div>";
                            echo "    </div>";
                            echo "  </div>";
                            echo "</div>";
                            echo "<td>" . $row["tag"] . "</td>";
                            echo "<td>" . $row["post_type"] . "</td>";
                            echo "<td>" . $row["post_by"] . "</td>";
                            echo "<td>" . $row["post_date"] . "</td>";
                            echo "<td><img style='width:80px;' src='../" . $row["blog_image"] . "' alt='Image'></td>";
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