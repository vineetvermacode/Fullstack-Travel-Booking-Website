<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> GPPV | BLOG</title>
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
    

    <?php include 'include/navbar.php'; ?>
    
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Post</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Blog Post</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    
                    <?php
                    $data = array();
            
                    $sql = "SELECT * FROM blog_posts ORDER BY post_id DESC";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            
                            <div class="ot-blog blog-single has-post-thumbnail">
                                <div class="blog-img"><a href="blog-details.php?blog=<?php echo $row['post_id']; ?>"><img src="<?php echo $row['blog_image']; ?>"
                                            alt="Blog Image"></a></div>
                                <div class="blog-content">
                                    <div class="blog-meta"><a href="blog-details.php?blog=<?php echo $row['post_id']; ?>"><i class="fa-solid fa-user"></i><?php echo $row['post_by']; ?></a> <a href="blog.php"><i class="fa-solid fa-calendar-days"></i><?php echo $row['post_date']; ?></a> <a href="blog.php"><i class="fa-solid fa-tag"></i><?php echo $row['tag']; ?></a></div>
                                    <h2 class="blog-title"><a href="blog-details.php?blog=<?php echo $row['post_id']; ?>"><?php echo $row['headline']; ?></a></h2>
                                    <p class="blog-text"><?php echo $row['shot_desc']; ?>
                                    </p><a href="blog-details.php?blog=<?php echo $row['post_id']; ?>" class="ot-btn">Read More<i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            
                            <?php
                        }
                    }
                    ?>
                    
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="blog.php">New York</a></li>
                                <li><a href="blog.php">Europe</a></li>
                                <li><a href="blog.php">Life Style</a></li>
                                <li><a href="blog.php">Trip & Tricket</a></li>
                                <li><a href="blog.php">Swizerland</a></li>
                            </ul>
                        </div>
                        
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <?php
                                    $data = array();
                            
                                    $sql = "SELECT * FROM blog_posts ORDER BY post_id DESC LIMIT 5";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                                <div class="recent-post">
                                                    <div class="media-img"><a href="blog-details.php?blog=<?php echo $row['post_id']; ?>"><img
                                                                src="<?php echo $row['blog_image']; ?>" alt="Blog Image"></a></div>
                                                    <div class="media-body">
                                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.php?blog=<?php echo $row['post_id']; ?>"><?php echo $row['headline']; ?></a></h4>
                                                        <div class="recent-post-meta"><a href="blog.php"><i
                                                                    class="fas fa-calendar-days"></i><?php echo $row['post_date']; ?></a></div>
                                                    </div>
                                                </div>
                                            
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud"><a href="blog.php">Adventure</a> <a href="blog.php">Beach</a> <a
                                    href="blog.php">Destinations</a> <a href="blog.php">Parks</a> <a
                                    href="blog.php">Lifestyle</a> <a href="blog.php">Tourisms</a> <a
                                    href="blog.php">Hotels</a> <a href="blog.php">Transport</a> <a
                                    href="blog.php">Tourist</a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>


    
    
    <?php
    include 'include/footer.php';
    ?>
</body>
</html>