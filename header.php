<?php
/* Contains header */
?>

<!DOCTYPE html>
<html <?php language_attributes(); // lang="en"
        ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); // Brings in important WP links and scripts, etc 
    ?>
</head>

<body <?php body_class(); // WP provides some default body classes 
        ?>>