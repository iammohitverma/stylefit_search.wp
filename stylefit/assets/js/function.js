jQuery(document).ready(function () {
    /**** header toggler hamburger ***/
    jQuery("header .hamburger").click(function () {
        jQuery(this).toggleClass("is-active");
    });

    if (window.matchMedia("(max-width: 992px)").matches) {
        jQuery(".menu-item-has-children a").click(function () {
            jQuery(this).next(".sub-menu").slideToggle();
        });
    }

    // var productSearch = jQuery(".product-search");
    // productSearch.show();
    // jQuery(".sb-product-filter .elementor-shortcode").prepend(productSearch);
});

window.addEventListener("load", addFilterIcon);

function addFilterIcon() {
    let filterHeadingAppend = `<span class="sb-filter-toggel"><i class="fas fa-chevron-down"></i></span>`;
    //   jQuery(".wpf_item_name").append(filterHeadingAppend);
    jQuery(".wpf_submenu").parent().prepend(filterHeadingAppend);
    jQuery(".sb-filter-toggel").click(function () {
        jQuery(this).parent().find(".wpf_submenu").slideToggle();
        jQuery(this).toggleClass("show-after");
    });
}

jQuery(document).ajaxStop(function () {
    addFilterIcon();
});

jQuery(document).ready(function (jQuery) {
    jQuery(document).ready(function () {
        //hide on refresh page
        jQuery(
            "#integrations, #introduction , #platform , #plans-and-pricing"
        ).hide();
        jQuery("#files").addClass("active");
        //files and formats button
        jQuery("#files").click(function () {
            jQuery(".st-active a").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(
                "#integrations, #introduction, #platform, #plans-and-pricing"
            ).hide();
            jQuery("#files-formats").show();
        });
        //integrations button
        jQuery("#int").click(function () {
            jQuery(".st-active a").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(
                "#files-formats, #introduction, #platform, #plans-and-pricing"
            ).hide();
            jQuery("#integrations").show();
        });

        //Introduction to 3D & AR button
        jQuery("#intro").click(function () {
            jQuery(".st-active a").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(
                "#files-formats, #integrations, #platform, #plans-and-pricing"
            ).hide();
            jQuery("#introduction").show();
        });

        //Platform capabilities button
        jQuery("#plat").click(function () {
            jQuery(".st-active a").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(
                "#files-formats, #integrations, #introduction, #plans-and-pricing"
            ).hide();
            jQuery("#platform").show();
        });

        //plans and pricing button
        jQuery("#plans").click(function () {
            jQuery(".st-active a").removeClass("active");
            jQuery(this).addClass("active");
            jQuery("#files-formats, #integrations, #introduction, #platform").hide();
            jQuery("#plans-and-pricing").show();
        });
    });
});

if (jQuery(window).width() < 992.98) {
    jQuery(".sb-product-filter").css("display", "none");
    let filterBtn = `<button class="filter-btn" id="fiterBtn"><i class="fas fa-sliders-h"></i> <span>Filter</span> </button>`;
    let closeBtn = `<button class="close-btn" id="closeBtn"><i class="fas fa-times"></i></button>`;
    let wooCommerceDivCheck = document.querySelector(".sb-product-section .woocommerce");
    if(!wooCommerceDivCheck) {
        jQuery(".sb-product-section > div ").prepend(filterBtn);
        jQuery(".sb-product-section > div ").css("position", "relative")
    } else {
        jQuery(".sb-product-section .woocommerce ").prepend(filterBtn);
    }
    console.log(wooCommerceDivCheck);

    jQuery("#fiterBtn").click(function () {
        jQuery(".sb-product-filter").toggle("slide");
    });

    // jQuery(".sb-product-filter > div").css("position", "relative");
    jQuery(".sb-product-filter > div").prepend(closeBtn);

    jQuery("#closeBtn").click(function () {
        jQuery(".sb-product-filter").toggle("slide");
    });
}

var mobSlider = tns({
    container: ".mob-slider > div",
    items: 1,
    nav: true,
    navPosition: "bottom",
    arrowKeys: false,
    controls: false,
    autoplay: true,
    speed: 300,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    autoplayButtonOutput: false,
    responsive: {
        640: {
            autoplay: false,
            edgePadding: 20,
            gutter: 20,
            items: 3,
        },
    },
});

function copyShortLink() {
    document.getElementById("copiedMsg").style.display = "inline";
    document.getElementById("shrtLnkCopy").select();
    var copyText = document.getElementById("shrtLnkCopy");
    copyText.select();
    document.execCommand("copy");
}
