<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> GPPV | Resort Details</title>
    <meta name="author" content="GSVP">
    <meta name="description" content="Welcome to Grand Pacific Park Vacation, your passport to personalized vacations. We redefine travel with flexibility and convenience. Our commitment to excellence ensures access to a diverse array of top-tier resorts worldwide, tailored to suit your unique preferences">
    <meta name="keywords" content="Grand Pacific Park Vacation -  personalized vacations.">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta property="og:title" content="Grand Pacific Park Vacation">
    <meta property="og:description" content="Welcome to Grand Pacific Park Vacation, your passport to personalized vacations. We redefine travel with flexibility and convenience. Our commitment to excellence ensures access to a diverse array of top-tier resorts worldwide, tailored to suit your unique preferences">
    <meta property="og:image" content="assets/logo/logo.png">
    <meta property="og:image:alt" content="assets/logo/logo.png">
    <meta property="og:url" content="https://grandpacificparkvacation.com/">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <?php include 'include/head.php';?>
</head>
<body>
    <?php
        $id = $_GET['resort'];
        $sql = "SELECT `resort_id`, `location_name`, `type`, `resort_name`, `overview`, `free_wifi`, `reservation`, `credit_card`, `air_conditioner`, `car_parking`, `swimming_pool`, `image_url` FROM `associate_resort` WHERE resort_id ='$id'";
        $result = $conn->query($sql);
        
        $data = [];
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['resort_id'] = $row['resort_id'];
                $data['location_name'] = $row['location_name'];
                $data['type'] = $row['type'];
                $data['resort_name'] = $row['resort_name'];
                $data['overview'] = $row['overview'];
                $data['free_wifi'] = $row['free_wifi'];
                $data['reservation'] = $row['reservation'];
                $data['credit_card'] = $row['credit_card'];
                $data['air_conditioner'] = $row['air_conditioner'];
                $data['car_parking'] = $row['car_parking'];
                $data['swimming_pool'] = $row['swimming_pool'];
                $data['image_url'] = $row['image_url'];
            }
        }
    ?>
    <?php include 'include/navbar.php'; ?>
    

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo $data['resort_name']; ?> details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><?php echo $data['resort_name']; ?> details</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="tour-details">
                        <div class="tour-header">
                            <h2 class="tour-title"><?php echo $data['resort_name']; ?></h2>
                        </div>
                        <div class="tour-img"><img src="<?php echo $data['image_url']; ?>" alt="Tour Image"></div>
                        <!--<ul class="nav tour-tab" id="tourTab" role="tablist">-->
                        <!--    <li class="nav-item" role="presentation"><a class="nav-link ot-btn active"-->
                        <!--            id="description-tab" data-bs-toggle="tab" href="#tourDescription" role="tab"-->
                        <!--            aria-controls="tourDescription" aria-selected="true">Information</a></li>-->
                        <!--    <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="plan-tab"-->
                        <!--            data-bs-toggle="tab" href="#plan" role="tab" aria-controls="plan"-->
                        <!--            aria-selected="false">Tour Plan</a></li>-->
                        <!--    <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="photos-tab"-->
                        <!--            data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos"-->
                        <!--            aria-selected="false">Tour Photos</a></li>-->
                        <!--    <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="location-tab"-->
                        <!--            data-bs-toggle="tab" href="#location" role="tab" aria-controls="location"-->
                        <!--            aria-selected="false">Location</a></li>-->
                        <!--</ul>-->
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="tourDescription" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="tour-description">
                                    <h3 class="inner-title">Overview</h3>
                                    <p class="mt-n2 mb-4">
                                        
                                        <?php echo $data['overview']; ?>
                                        
                                    </p>
                                    <div class="description-table-wrap">
                                        <table class="description-table">
                                            <tbody>
                                                <tr>
                                                    <th>Free Wi-fi</th>
                                                    <td><?php echo ($data['free_wifi'] == 1) ? 'Yes' : 'No'; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Reservations</th>
                                                    <td><?php echo ($data['reservation'] == 1) ? 'Yes' : 'No'; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Credit cards</th>
                                                    <td><?php echo ($data['credit_card'] == 1) ? 'Yes' : 'No'; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Air conditioner</th>
                                                    <td><?php echo ($data['air_conditioner'] == 1) ? 'Yes' : 'No'; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Swimming pool</th>
                                                    <td><?php echo ($data['swimming_pool'] == 1) ? 'Yes' : 'No'; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Car parking</th>
                                                    <td><?php echo ($data['car_parking'] == 1) ? 'Yes' : 'No'; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                                <div class="tour-plan">
                                    <h3 class="inner-title">Tour Plan</h3>
                                    <div class="accordion" id="planAccordion">
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-1"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                                    aria-expanded="false" aria-controls="collapse-1">Day 01:
                                                    Departure</button></div>
                                            <div id="collapse-1" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-1" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card active">
                                            <div class="accordion-header" id="collapse-item-2"><button
                                                    class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="true"
                                                    aria-controls="collapse-2">Day 02: Adventure Begins</button></div>
                                            <div id="collapse-2" class="accordion-collapse collapse show"
                                                aria-labelledby="collapse-item-2" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-3"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                    aria-expanded="false" aria-controls="collapse-3">Day 03: Airplain
                                                    Tour</button></div>
                                            <div id="collapse-3" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-3" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-4"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                    aria-expanded="false" aria-controls="collapse-4">Day 04: Jungle
                                                    Sufary</button></div>
                                            <div id="collapse-4" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-4" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-5"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                    aria-expanded="false" aria-controls="collapse-5">Day 05: Explore
                                                    Culloden</button></div>
                                            <div id="collapse-5" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-5" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-6"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                    aria-expanded="false" aria-controls="collapse-6">Day 06: Loch Ness
                                                    and the Isle of Skye</button></div>
                                            <div id="collapse-6" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-6" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-7"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-7"
                                                    aria-expanded="false" aria-controls="collapse-7">Day 07: Walk the
                                                    Walls of Stirling Castle</button></div>
                                            <div id="collapse-7" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-7" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-8"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-8"
                                                    aria-expanded="false" aria-controls="collapse-8">Day 08: Journey to
                                                    Thriving Glasgow</button></div>
                                            <div id="collapse-8" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-8" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-9"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-9"
                                                    aria-expanded="false" aria-controls="collapse-9">Day 09: Farewell
                                                    Glasgow</button></div>
                                            <div id="collapse-9" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-9" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-10"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-10"
                                                    aria-expanded="false" aria-controls="collapse-10">Day 10:
                                                    Return</button></div>
                                            <div id="collapse-10" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-10" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                                <div class="tour-photos">
                                    <div class="row g-4 masonary-active">
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_1.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_2.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_3.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_4.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_5.jpg"
                                                    alt="Image"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                                <div class="tour-location"><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                                        allowfullscreen="" loading="lazy"></iframe></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_book">
                            <div class="widget-tour-book">
                                <div class="top">
                                    <h4 class="title">Send me a message</h4>
                                </div>
                                <form id="myForm" action="database/process_form.php" method="POST" class="widget-form">
                                    <div class="form-group"><input type="hidden" class="form-control" name="from_page" id="from_page" value="<?php echo $data['resort_name']; ?>"> <i class="fal fa-user"></i></div>
                                    <div class="form-group"><input type="text" class="form-control" name="name" id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                                    <div class="form-group"><input type="email" class="form-control" name="email" id="email" placeholder="Your Email"> <i class="fal fa-envelope"></i></div>
                                    <div class="form-group"><input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                                    <div class="form-group"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea> <i class="fal fa-pencil"></i></div>
                                    <div class="form-btn"><button class="ot-btn w-100">Send</button></div>
                                    <p class="form-messages mb-0 mt-3"></p>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Similar places</h3>
                            <div class="recent-post-wrap">
                                
                                <?php
                                    $id = $_GET['resort'];
                                    $sql = "SELECT * FROM `associate_resort` ORDER BY resort_id DESC LIMIT 5";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    
                                            echo '<div class="recent-post">';
                                            echo '<div class="media-img"><a href="blog-details.html"><img src="' . $row['image_url'] . '" alt="Blog Image"></a></div>';
                                            echo '<div class="media-body">';
                                            echo '<h4 class="post-title"><a class="text-inherit" href="blog-details.html">' . $row['resort_name'] . '</a></h4>';
                                            echo '<span class="tour-price">Rating <span class="price"> 4.2</span></span>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                    }
                                    ?>

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            
        </div>
    </section>
    
    <?php
    include 'include/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault();
        
                var formData = $(this).serialize();
        
                $.ajax({
                    type: "POST",
                    url: "database/process_form.php",
                    data: formData,
                    success: function (response) {
                        Swal.fire({
                            title: 'Form Submitted',
                            text: response,
                            icon: 'success',
                        }).then(function () {
                            location.reload(); // Reload the page after the alert is closed
                        });
                    },
                    error: function (error) {
                        console.log(error);
                        Swal.fire({
                            title: 'Error',
                            text: 'Something went wrong.',
                            icon: 'error',
                        });
                    },
                });
            });
        });
    </script>
</body>
</html>