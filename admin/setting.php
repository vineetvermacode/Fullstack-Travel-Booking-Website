<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Web Setting</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Setting</li>
      <li class="breadcrumb-item active">Update Setting</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Web Setting</h5>

            <form action="db/update_setting.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="inputText" class="col-form-label">Name</label>
                        <div class="">
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputEmail" class="col-form-label">Email</label>
                        <div class="">
                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="tel" class="col-form-label">Mobile</label>
                        <div class="">
                            <input type="tel" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputNumber" class="col-form-label">address</label>
                        <div class="">
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputNumber" class="col-form-label">Logo</label>
                        <div class="">
                            <input class="form-control" name="logo" type="file" id="formFile">
                        </div>
                        <div class="">
                            <img  style="height:100px !important;" src="../<?php echo $logo; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputDate" class="col-form-label">Icon</label>
                        <div class="">
                            <input class="form-control" name="icon" type="file" id="formFile">
                        </div>
                        <div class="">
                            <img  style="height:100px !important;" src="../<?php echo $icon; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputTime" class="col-form-label">Facebook</label>
                        <div class="">
                            <input type="text" name="facebook" class="form-control" value="<?php echo $facebook; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputTime" class="col-form-label">Instagram</label>
                        <div class="">
                            <input type="text" name="instagram" class="form-control" value="<?php echo $instagram; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputTime" class="col-form-label">Twitter</label>
                        <div class="">
                            <input type="text" name="twitter" class="form-control" value="<?php echo $twitter; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputTime" class="col-form-label">Linkedin</label>
                        <div class="">
                            <input type="text" name="linkedin" class="form-control" value="<?php echo $linkedin; ?>">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="inputTime" class="col-form-label">Youtube</label>
                        <div class="">
                            <input type="text" name="youtube" class="form-control" value="<?php echo $youtube; ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-lg-4 mx-auto">
                        <center><button type="submit" class="btn btn-primary">Update Form</button></center>
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