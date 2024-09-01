<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Add Blog</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Add Blog</li>
      <li class="breadcrumb-item active">Add Add Blog</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Add Blog</h5>

            <form action="db/add_blog.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Blog Title</label>
                        <div class="">
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
            
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Blog Headline</label>
                        <div class="">
                            <input type="text" name="headline" class="form-control">
                        </div>
                    </div>
            
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Shot Description</label>
                        <div class="">
                            <input type="text" name="shot_desc" class="form-control">
                        </div>
                    </div>
            
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Blog Image</label>
                        <label for="inputText" class="col-form-label"></label>
                        <div class="">
                            <input type="file" name="blog_image" class="form-control">
                        </div>
                    </div>
            
                    <div class="col-lg-12 mb-3">
                        <label for="inputText" class="col-form-label">Blog Description</label>
                        <div class="">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
            
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Tag</label>
                        <div class="">
                            <select name="tag" class="form-control">
                                <option>Select Tag</option>
                                <option>Beach</option>
                                <option>Adventure</option>
                                <option>Destinations</option>
                                <option>Parks</option>
                                <option>Lifestyle</option>
                                <option>Tourisms</option>
                                <option>Hotels</option>
                                <option>Transport</option>
                                <option>Tourist</option>
                            </select>
                        </div>
                    </div>
            
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Type</label>
                        <div class="">
                            <select name="post_type" class="form-control">
                                <option>Select Type</option>
                                <option>Travel</option>
                                <option>Adventure</option>
                            </select>
                        </div>
                    </div>
            
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Post By</label>
                        <div class="">
                            <input type="text" name="post_by" class="form-control">
                        </div>
                    </div>
            
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Post Date</label>
                        <label for="inputText" class="col-form-label"></label>
                        <div class="">
                            <input type="date" name="post_date" class="form-control">
                        </div>
                    </div>
                </div>
            
                <div class="row mt-3 mb-3">
                    <div class="col-lg-4 mx-auto">
                        <center><button type="submit" class="btn btn-primary">Add</button></center>
                    </div>
                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script>
                $(document).ready(function () {
                    $('form').submit(function (e) {
                        e.preventDefault();
            
                        console.log("Form submitted via AJAX");
            
                        $.ajax({
                            type: 'POST',
                            url: 'db/add_blog.php',
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                        })
                        .done(function(response) {
                            console.log("AJAX Success:", response);
            
                            try {
                                var result = JSON.parse(response);
            
                                Swal.fire({
                                    title: 'Response',
                                    text: result.message,
                                    icon: result.success ? 'success' : 'error',
                                    button: 'OK',
                                }).then(function() {
                                    location.reload();
                                });
                            } catch (e) {
                                console.error("Error parsing JSON response:", e);
                            }
                        })
                        .fail(function(error) {
                            console.error("AJAX error:", error);
            
                            Swal.fire({
                                title: 'Error',
                                text: 'An error occurred during the request.',
                                icon: 'error',
                                button: 'OK',
                            });
                        })
                        .always(function() {
                            console.log("AJAX request completed");
                        });
                    });
                });
            </script>




        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
include 'footer.php';
?>