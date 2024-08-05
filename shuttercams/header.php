<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/site.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <!-- desktop header -->
 <div class="d-none d-lg-block">
        <header class="d-flex justify-content-between align-items-center">
            <a href="#" class="logo">shuttercams.</a>
            <ul class="main-menu">
                <li>
                    <a href="/" class="active">Homme</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/artsy.click_photography/">About Me</a>
                </li>
                <li>
                    <a href="/my-profile">My Profile</a>
                </li>
                <li>
                    <a href="/portfolio">Portfolio</a>
                </li>
            </ul>
            <a href="https://api.whatsapp.com/send?phone=971563004118&amp;text=How%20may%20I%20assist%20you%20today?" class="btn-contact gap-1 align-items-center" target="_blank"><i class="ti ti-brand-whatsapp"></i>Connect Me</a>
        </header>
    </div>

    <!-- mobile-header -->
    <div class="d-lg-none">
        <header class="d-flex justify-content-between align-items-center">
            <a href="#" class="logo">shuttercams.</a>
            <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                aria-controls="offcanvasWithBothOptions"><i class="ti ti-menu-4"></i></button>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-body d-flex flex-column justify-content-between align-items-center">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x text-white"></i></button>
                    <ul class="main-menu">
						<li>
							<a href="/" class="active">Homme</a>
						</li>
						<li>
							<a href="https://www.instagram.com/artsy.click_photography/">About Me</a>
						</li>
						<li>
							<a href="/my-profile">My Profile</a>
						</li>
						<li>
							<a href="/portfolio">Portfolio</a>
						</li>
					</ul>
                    <a href="https://api.whatsapp.com/send?phone=971563004118&amp;text=How%20may%20I%20assist%20you%20today?" class="btn-contact gap-1 align-items-center" target="_blank"><i class="ti ti-brand-whatsapp"></i>Connect Me</a>
                </div>
            </div>
        </header>
    </div>
