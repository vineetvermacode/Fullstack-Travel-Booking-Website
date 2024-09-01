<div class="preloader"><button class="ot-btn style3 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    <div class="ot-menu-wrapper">
        <div class="ot-menu-area text-center"><button class="ot-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="index.php"><img style="width: 150px !important;" src="<?php echo $logo; ?>"
                                        alt="GPPV"></a></div>
            <div class="ot-mobile-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li class="menu-item-has-children"><a href="#">Associated Resorts</a>
                        <ul class="sub-menu">
                            <?php
                            $sql = "SELECT * FROM associated_resort_location";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?><li><a href="destination.php?location=<?php echo $row['location_id']; ?>"><?php echo $row['location_name']; ?></a></li><?php
                                }
                            } else {
                                echo "<tr><td colspan='3'>No data found</td></tr>";
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Internal Exchange</a>
                        <ul class="sub-menu">
                            <?php
                            $sql = "SELECT * FROM internal_exchange_location";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?><li><a href="tour.php?location=<?php echo $row['location_id']; ?>"><?php echo $row['location_name']; ?></a></li><?php
                                }
                            } else {
                                echo "<tr><td colspan='3'>No data found</td></tr>";
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Membership</a>
                        <ul class="sub-menu">
                            <li><a href="privileges.php">Privileges</a></li>
                            <li><a href="packages.php">Packages</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pay Now</a></li>
                    <li><a href="#">Carrer</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="ot-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fal fa-phone"></i><a href="tel:+<?php echo $mobile; ?>"><?php echo $mobile; ?></a></li>
                                <li class="d-none d-xl-inline-block"><i class="fal fa-envelope"></i><a
                                        href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                                <li><i class="fal fa-location-dot"></i><?php echo $address; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <!-- <li class="d-none d-lg-inline-block"><i class="far fa-user"></i>
                                <a
                                        href="contact.php">Login / Register</a></li>
                                <li> -->
                                    <div class="header-social"><span class="social-title">Follow Us:</span> <a
                                            href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a> <a
                                            href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a> <a
                                            href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin-in"></i></a> <a
                                            href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a> <a
                                            href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="index.php"><img style="width: 80px !important;" src="<?php echo $logo; ?>"
                                        alt="GSPV"></a></div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">Associated Resorts</a>
                                        <ul class="sub-menu">
                                        <?php
                                            $sql = "SELECT * FROM associated_resort_location";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    ?><li><a href="destination.php?location=<?php echo $row['location_id']; ?>"><?php echo $row['location_name']; ?></a></li><?php
                                                }
                                            } else {
                                                echo "<tr><td colspan='3'>No data found</td></tr>";
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Internal Exchange</a>
                                        <ul class="sub-menu">
                                            <?php
                                            $sql = "SELECT * FROM internal_exchange_location";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    ?><li><a href="tour.php?location=<?php echo $row['location_id']; ?>"><?php echo $row['location_name']; ?></a></li><?php
                                                }
                                            } else {
                                                echo "<tr><td colspan='3'>No data found</td></tr>";
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Membership</a>
                                        <ul class="sub-menu">
                                            <li><a href="privileges.php">Privileges</a></li>
                                            <li><a href="packages.php">Packages</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pay Now</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </nav><button type="button" class="ot-menu-toggle d-inline-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
                <div class="logo-bg" style="width:18% !important;"></div>
            </div>
        </div>
    </header>