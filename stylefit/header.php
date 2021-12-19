<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stylefit-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="container-fluid px-0 main-header">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <nav class="navbar navbar-expand-lg tm-menu">
                            <div class="container-fluid px-0">

                                <a href="<?php echo get_home_url() ?>" class="svg_logo">
                                    <?php /*

												$custom_logo_id = get_theme_mod( 'custom_logo' );
												$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
												echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Site Logo" class="logo tm-logoBrand">';
										*/ ?>

                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                    <svg width="100%" height="100%" viewBox="0 0 449 121" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                                        <g transform="matrix(1,0,0,1,3.04e-05,3.04e-05)">
                                            <g transform="matrix(1,0,0,1,420.448,82.461)">
                                                <g>
                                                    <path d="M0,-25.287L6.301,-25.287L6.301,-4.257C6.301,-0.256 7.748,3.065 10.644,5.704C13.538,8.344 17.114,9.706 21.371,9.706L27.927,9.706L27.927,-0.425L22.393,-0.425C19.242,-0.425 16.944,-2.725 16.944,-5.79L16.944,-25.287L27.927,-25.287L27.927,-34.566L16.944,-34.566L16.944,-43.25L6.301,-43.25L6.301,-34.566L0,-34.566L0,-25.287ZM-10.726,-38.483C-6.725,-38.483 -3.916,-41.463 -3.916,-45.294C-3.916,-49.125 -6.896,-52.021 -10.726,-52.021C-14.559,-52.021 -17.454,-49.125 -17.454,-45.294C-17.454,-41.463 -14.559,-38.483 -10.726,-38.483M-5.363,-34.566L-16.005,-34.566L-16.005,9.706L-5.363,9.706L-5.363,-34.566ZM-66.92,-49.891L-66.92,9.706L-55.511,9.706L-55.511,-15.154L-27.671,-15.154L-27.671,-25.712L-55.511,-25.712L-55.511,-39.335L-22.987,-39.335L-22.987,-49.891L-66.92,-49.891ZM-109.318,-16.773C-107.701,-22.307 -102.847,-26.053 -97.313,-26.053C-91.525,-26.053 -86.585,-22.307 -84.884,-16.773L-109.318,-16.773ZM-74.24,-8.514C-73.986,-10.217 -73.901,-11.494 -73.901,-12.431C-73.901,-19.071 -76.114,-24.605 -80.626,-29.118C-85.053,-33.631 -90.588,-35.843 -97.143,-35.843C-103.699,-35.843 -109.233,-33.631 -113.746,-29.118C-118.173,-24.689 -120.387,-19.156 -120.387,-12.431C-120.387,-5.704 -118.088,-0.17 -113.576,4.343C-108.978,8.769 -103.273,10.983 -96.463,10.983C-87.522,10.983 -79.86,6.555 -75.773,-0.511L-86.076,-3.491C-88.629,-0.34 -92.121,1.192 -96.463,1.192C-102.677,1.192 -107.785,-2.725 -109.404,-8.514L-74.24,-8.514ZM-127.794,-54.149L-138.436,-54.149L-138.436,9.706L-127.794,9.706L-127.794,-54.149ZM-172.747,11.92C-174.536,16.431 -177.942,18.731 -183.05,18.731L-184.753,18.731L-184.753,28.862L-183.05,28.862C-173.258,28.862 -167.469,24.775 -163.723,15.496L-143.715,-34.566L-154.698,-34.566L-166.277,-4.683L-177.601,-34.566L-188.583,-34.566L-171.556,8.855L-172.747,11.92ZM-219.32,-25.287L-213.019,-25.287L-213.019,-4.257C-213.019,-0.256 -211.573,3.065 -208.677,5.704C-205.782,8.344 -202.206,9.706 -197.95,9.706L-191.393,9.706L-191.393,-0.425L-196.927,-0.425C-200.078,-0.425 -202.377,-2.725 -202.377,-5.79L-202.377,-25.287L-191.393,-25.287L-191.393,-34.566L-202.377,-34.566L-202.377,-43.25L-213.019,-43.25L-213.019,-34.566L-219.32,-34.566L-219.32,-25.287ZM-224.853,-37.802C-226.046,-41.633 -228.599,-44.868 -232.43,-47.337C-236.261,-49.891 -240.86,-51.168 -246.052,-51.168C-252.013,-51.168 -256.865,-49.466 -260.696,-46.146C-264.442,-42.825 -266.316,-38.483 -266.316,-33.119C-266.316,-27.074 -263.421,-22.477 -257.717,-19.412C-255.248,-18.135 -250.479,-16.432 -243.328,-14.304C-241.03,-13.538 -240.689,-13.538 -238.561,-12.515C-237.454,-12.004 -236.602,-11.494 -236.092,-11.069C-235.069,-10.132 -233.962,-8.6 -233.962,-6.897C-233.962,-2.809 -238.645,-0 -244.69,-0C-250.906,-0 -255.674,-3.15 -256.61,-6.897L-268.019,-3.491C-266.741,0.68 -264.017,4.086 -259.845,6.896C-255.674,9.621 -250.565,10.983 -244.69,10.983C-238.134,10.983 -232.857,9.281 -228.77,5.875C-224.597,2.383 -222.554,-2.214 -222.554,-7.918C-222.554,-12.601 -224.511,-16.602 -226.555,-18.731C-227.578,-19.838 -229.024,-20.945 -230.813,-21.881C-234.473,-23.839 -236.006,-24.18 -239.667,-25.201C-244.604,-26.649 -247.841,-27.67 -249.458,-28.352C-253.118,-29.884 -254.907,-31.757 -254.907,-33.97C-254.907,-37.462 -250.906,-40.271 -245.882,-40.271C-241.114,-40.271 -237.198,-37.632 -236.261,-34.481L-224.853,-37.802Z" style="fill:rgb(32,73,93);" />
                                                </g>
                                            </g>
                                        </g>
                                        <g transform="matrix(1,0,0,1,3.04e-05,3.04e-05)">
                                            <g transform="matrix(85.3088,-85.3088,-85.3088,-85.3088,17.7442,103.053)">
                                                <g>
                                                    <path d="M0.692,0.462C0.63,0.487 0.565,0.5 0.5,0.5C0.435,0.5 0.37,0.487 0.308,0.462C0.249,0.438 0.194,0.401 0.146,0.354C0.142,0.349 0.137,0.344 0.132,0.338C0.127,0.333 0.122,0.327 0.118,0.322C0.114,0.318 0.11,0.313 0.107,0.309C0.103,0.304 0.1,0.3 0.096,0.295C0.094,0.291 0.094,0.287 0.097,0.284L0.343,0.038C0.346,0.035 0.351,0.035 0.354,0.038L0.462,0.146C0.465,0.149 0.465,0.154 0.462,0.157L0.321,0.298C0.348,0.315 0.377,0.327 0.407,0.335C0.437,0.343 0.469,0.348 0.5,0.348C0.531,0.348 0.563,0.343 0.593,0.335C0.623,0.327 0.652,0.315 0.679,0.298L0.242,-0.139C0.239,-0.142 0.239,-0.146 0.241,-0.15C0.247,-0.161 0.254,-0.171 0.262,-0.182C0.27,-0.192 0.279,-0.202 0.288,-0.211C0.297,-0.221 0.307,-0.229 0.318,-0.238C0.329,-0.246 0.34,-0.253 0.351,-0.26C0.354,-0.262 0.358,-0.261 0.361,-0.258L0.5,-0.119L0.639,-0.258C0.642,-0.261 0.646,-0.261 0.649,-0.259C0.661,-0.253 0.672,-0.246 0.682,-0.238C0.693,-0.229 0.703,-0.221 0.712,-0.211C0.721,-0.202 0.73,-0.192 0.738,-0.182C0.746,-0.171 0.753,-0.16 0.76,-0.149C0.762,-0.146 0.761,-0.142 0.758,-0.139L0.619,-0L0.798,0.179C0.808,0.162 0.817,0.145 0.823,0.128C0.83,0.11 0.836,0.092 0.84,0.073C0.844,0.055 0.846,0.037 0.847,0.018C0.848,-0 0.848,-0.019 0.846,-0.037C0.845,-0.04 0.846,-0.042 0.848,-0.044L0.962,-0.158C0.965,-0.161 0.97,-0.161 0.974,-0.158C0.975,-0.157 0.975,-0.156 0.976,-0.155C0.989,-0.112 0.997,-0.067 0.999,-0.023C1.002,0.022 0.998,0.067 0.988,0.111C0.977,0.156 0.961,0.2 0.938,0.242C0.916,0.282 0.888,0.32 0.854,0.354C0.806,0.401 0.751,0.438 0.692,0.462ZM0.805,-0.186C0.802,-0.183 0.797,-0.183 0.794,-0.186C0.793,-0.187 0.793,-0.187 0.793,-0.188C0.787,-0.197 0.781,-0.206 0.774,-0.214C0.767,-0.223 0.76,-0.231 0.753,-0.239C0.744,-0.248 0.735,-0.257 0.725,-0.265C0.715,-0.273 0.705,-0.281 0.695,-0.288C0.671,-0.304 0.646,-0.317 0.62,-0.326C0.594,-0.336 0.566,-0.343 0.538,-0.346C0.511,-0.349 0.483,-0.348 0.456,-0.345C0.429,-0.341 0.403,-0.335 0.377,-0.325L0.375,-0.325L0.371,-0.323C0.361,-0.319 0.35,-0.314 0.339,-0.309C0.329,-0.303 0.319,-0.297 0.309,-0.291C0.299,-0.284 0.29,-0.277 0.28,-0.27C0.271,-0.262 0.263,-0.254 0.254,-0.246C0.235,-0.227 0.219,-0.207 0.205,-0.185C0.191,-0.162 0.18,-0.139 0.171,-0.114C0.163,-0.09 0.157,-0.065 0.155,-0.039C0.152,-0.014 0.152,0.011 0.154,0.037C0.155,0.04 0.154,0.042 0.152,0.044L0.038,0.158C0.035,0.161 0.03,0.161 0.026,0.158C0.025,0.157 0.025,0.156 0.024,0.154C0.011,0.112 0.003,0.067 0.001,0.023C-0.002,-0.022 0.002,-0.067 0.012,-0.111C0.023,-0.156 0.039,-0.2 0.062,-0.242C0.084,-0.282 0.112,-0.32 0.146,-0.354C0.194,-0.401 0.249,-0.438 0.308,-0.462C0.37,-0.487 0.435,-0.5 0.5,-0.5C0.565,-0.5 0.63,-0.487 0.692,-0.462C0.751,-0.438 0.806,-0.401 0.854,-0.354C0.858,-0.349 0.863,-0.344 0.868,-0.338C0.873,-0.333 0.878,-0.327 0.882,-0.322C0.886,-0.318 0.89,-0.313 0.893,-0.309C0.897,-0.304 0.9,-0.3 0.904,-0.295C0.906,-0.291 0.906,-0.287 0.903,-0.284L0.805,-0.186Z" style="fill:rgb(249,165,111);fill-rule:nonzero;" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                                    <div class="hamburger" id="hamburger-1">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>

                                </button>
                                <div class="collapse navbar-collapse w-100 justify-content-lg-end" id="navbarSupportedContent">
                                    <?php
									wp_nav_menu(
										array(
											'theme_location'   =>     'header',
											'menu'             =>     'header-menu',
											'menu_class'       =>     'navbar-nav',
											'menu_id'          =>     'primary-menu',
											'container_class'  =>     'menu-inner',
										)
									)
									?>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-4 header_btns">
                        <ul>
                            <li>
                                <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjIwMjgiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D" class="ap-dark-btn">Get a Demo</a>
                            </li>

                            <?php global $current_user; wp_get_current_user(); ?>
                            <?php if ( is_user_logged_in() ) { ?>  
                            <li>
                                <a href="?_wpnonce=2bbbac43a8&customer-logout=true" class="ap-dark-btn">Logout</a>
                            </li>
                            <?php }else { ?>
                            <li>
                                <a href="/login" class="ap-dark-btn">Login</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>
        </header>
