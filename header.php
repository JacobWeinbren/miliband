<html lang="en-GB">

<?php $directory = get_bloginfo("template_directory"); ?>

<head>
    <!--Defines language-->
    <meta charset="UTF-8">
    <!--Establishes viewport for mobile or tablet devices-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--IE/Edge browsers should run in the latest possible version-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--TSR is based in the UK-->
    <meta name="geo.region" content="GB" />
    <!--Details for search engines bots-->
    <meta name="robots" content="index,follow">
    <!--TSR Call to Action-->
    <meta name="description" content="Read articles from new and established voices from all left of centre political traditions on the Labour party, trade unions, local government, the climate crisis and much more in The Social Review.">
    <!--Favicon icon in browsers-->
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo $directory; ?>/assets/images/favicon.ico" />
    <!--Title Tag support in Wordpress-->
    <title><?php bloginfo("name"); ?></title>
    <!--For plugins and functions that rely on the header-->
    <?php wp_head(); ?>
</head>

<body>

    <div class="nav-container">
        <nav class="primary" aria-label="Primary">
            <a href="/" class="logo">
                <span class="screen-reader-text">
                    The Social Review Home
                </span>
                <img class="logo_default" alt="The Social Review Logo" src="<?php echo $directory; ?>/assets/images/logo.png" />
            </a>
            <div class="nav-links right">
                <a href="/">Podcast</a>
                <a href="/">Newsletter</a>
                <a href="/">Donate</a>
                <a href="/">Submissions</a>
                <a href="/">Contact</a>
            </div>
        </nav>
        <nav class="secondary" aria-label="Secondary">
            <div class="nav-links left">
                <a href="/">The Month Ahead</a>
                <div class="link-divider"></div>
                <a href="/">Beyond Wesminster</a>
                <a href="/">Trade Unions</a>
                <a href="/">Beyond the UK</a>
            </div>
            <div class="nav-links right ">
                <a href="/">Categories</a>
                <a href="/">Authors</a>
            </div>
        </nav>
    </div>