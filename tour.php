<?php include 'include/head.php'; ?>
    <?php include 'include/navbar.php'; ?>
    
    <?php
        $id = $_GET['location'];
        $sql = "SELECT * FROM internal_exchange_location WHERE location_id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               $location_name = $row['location_name'];
            }
        }

    ?>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo $location_name; ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><?php echo $location_name; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="dest-sort-bar">
                <!-- <div class="row gy-3 align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <p class="result">Showing 8 out of 24 tour</p>
                    </div>
                    <div class="col-sm-auto">
                        <form class="tour-ordering" method="get"><select name="orderby"
                                class="orderby form-select nice-select" aria-label="Tour order">
                                <option value="menu_order" disabled="disabled" selected="selected">Default Sorting
                                </option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select></form>
                    </div>
                </div> -->
            </div>
            <div class="row">
            <?php
                $sql = "SELECT * FROM internal_exc_resort WHERE  location_name='$id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                        <div class="trip-box">
                            <div class="trip-box__img"><img style="width:308px !important;height:375px !important;" src="<?php echo $row['image_url']; ?>" alt="Trip image"></div>
                            <div class="trip-box__content">
                                <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                        href="tour-details.php?resort=<?php echo $row['ie_resort_id']; ?>"><?php echo $row['resort_name']; ?></a></h2><span class="trip-box__count"><?php echo $location_name; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
            ?>
                
            </div>
            <!-- <div class="ot-pagination mt-3 text-center">
                <ul>
                    <li><a href="blog.html">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html">3</a></li>
                    <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div> -->
        </div>
    </section>    
    
    <?php
    include 'include/footer.php';
    ?>
</body>
</html>



