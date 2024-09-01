<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Page Form</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Page Form</li>
      <li class="breadcrumb-item active">All Page Form Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Page Form Data</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Page From</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Message</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM form_entries";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $row["id"] . "</th>";
                        echo "<td>" . $row["from_page"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["number"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo "<td><button class='btn btn-danger' onclick='deleteRecord(" . $row["id"] . ")'>Delete</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No data found</td></tr>";
                }
                ?>
            </tbody>
            
            <script>
                function deleteRecord(recordId) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            performDelete(recordId);
                        }
                    });
                }
            
                function performDelete(recordId) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'db/delete_page_form.php', true);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            showDeleteResponse(response);
                        }
                    };
                    xhr.send('recordId=' + recordId);
                }
            
                function showDeleteResponse(response) {
                    if (response.status === "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        }).then(function () {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                        });
                    }
                }
            </script>


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