    <?php include 'database/config.php'; 
    
        $sql = "SELECT * FROM `setting` ";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $address = $row['address'];
            $logo = $row['logo'];
            $icon = $row['icon'];
            $facebook = $row['facebook'];
            $instagram = $row['instagram'];
            $twitter = $row['twitter'];
            $linkedin = $row['linkdhin'];
            $youtube = $row['youtube'];

            mysqli_free_result($result);
        } 
    ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $icon; ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $icon; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $icon; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $icon; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $icon; ?>">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $icon; ?>">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

