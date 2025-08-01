/*
    Theme: Vedeshra Technologies
    Author: Vedeshra Technologies
    Version: 1.0
*/

$(document).ready(function(){

    // Services Slider JS

    $(".services-slider").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 4000,
        arrows: false,
        cssEase: 'linear',
        focusOnSelect: true,
        pauseOnHover:true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })

    $(".industries-slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 7000,
        arrows: false,
        cssEase: 'linear',
        focusOnSelect: true,
        pauseOnHover:true
    })


    function tabbedContent() {
        // Get all tab link elements
        var $tabs = $(".tab-link");
        // Get all tab content elements
        var $tabContents = $(".tab-content");

        // Add click event listener to all tab links
        $tabs.on("click", function () {
            // Remove 'current' class from all tabs and tab contents
            $tabs.removeClass("current");
            $tabContents.removeClass("current");

            // Add 'current' class to the clicked tab
            $(this).addClass("current");

            // Get data-tab attribute of the clicked tab
            var matchingTab = $(this).data("tab");

            // Add 'current' class to the corresponding tab content
            $("#" + matchingTab).addClass("current");
        });
    }

    tabbedContent();

    // JS For Other Service Field

    $('#selectservices').on('change', function () {
        const $otherservicesField = $('#otherservices');
        if ($(this).val() === 'others') {
            $otherservicesField.show();
        } else {
            $otherservicesField.hide().val(''); // Hide and clear the value if hidden
        }
    });

    // JS For Closing Popup

    $('.mainpopupoverlay, .mainpopupclosebutton').on('click', function() {
        $('.mainpopupcontainerbox').css('display', 'none');
    });

    // JS For Opening Popup

    $('.get-in-touch-popup-box').on('click', function() {
        $('.mainpopupcontainerbox').css('display', 'block');
    });

    // JS For Mobile Menu Open
    $(".mobilemenuicon").on("click", function () {
        $(".mobilenavigationmenucontainerbox").toggleClass("active");
    });

    // JS For Mobile Menu Close
    $(".mobilenavigationmenuclosebutton").on("click", function () {
        $(".mobilenavigationmenucontainerbox").removeClass("active");
    });

    // JS For FAQ Accordion
    $(".faq-accordion-question").click(function () {
        // Close all answers, remove active class, and reset plus/minus
        $(".faq-accordion-answer").slideUp(300).removeClass("active");
        $(".faq-accordion-question").removeClass("active");
        $(".faq-accordion-toggle .plusminus").text('+');

        // Toggle only the clicked one
        if (!$(this).next(".faq-accordion-answer").is(':visible')) {
            $(this).next(".faq-accordion-answer").slideDown(300).addClass("active");
            $(this).addClass("active");
            $(this).children(".faq-accordion-toggle").children(".plusminus").text('-');
        }
    });
})
