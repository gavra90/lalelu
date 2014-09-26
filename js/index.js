$(function () {
    // Closes the sidebar menu
    $("#menu-close").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    //alert("ads");
    // Scrolls to the selected menu item on the page
    //$('a[href*=#]:not([href=#])').click(function () {
    //    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

    //        var target = $(this.hash);
    //        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    //        if (target.length) {
    //            $('html,body').animate({
    //                scrollTop: target.offset().top
    //            }, 1000);
    //            return false;
    //        }
    //    }
    //});


    //$(".fancybox").fancybox();
    //  $('.flexslider').flexslider({
    //  animation: "slide"
    //});

    // fancybox
    //$(".fancybox").fancybox({
    //    padding: 0,
    //    autoResize: true,
    //    beforeShow: function () {
    //        this.title = $(this.element).attr('title');
    //        this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
    //    },
    //    helpers: {
    //        title: { type: 'inside' }
    //    }
    //});


    //scroll to top
    //$(window).scroll(function () {
    //    if ($(this).scrollTop() > 100) {
    //        $('.scrollup').fadeIn();
    //    } else {
    //        $('.scrollup').fadeOut();
    //    }
    //});
    //$('.scrollup').click(function () {
    //    $("html, body").animate({ scrollTop: 0 }, 1000);
    //    return false;
    //});
    //$('#post-slider').flexslider({
    //    // Primary Controls
    //    controlNav: false,              //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
    //    directionNav: true,              //Boolean: Create navigation for previous/next navigation? (true/false)
    //    prevText: "Previous",        //String: Set the text for the "previous" directionNav item
    //    nextText: "Next",            //String: Set the text for the "next" directionNav item

    //    // Secondary Navigation
    //    keyboard: true,              //Boolean: Allow slider navigating via keyboard left/right keys
    //    multipleKeyboard: false,             //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
    //    mousewheel: false,             //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
    //    pausePlay: false,             //Boolean: Create pause/play dynamic element
    //    pauseText: 'Pause',           //String: Set the text for the "pause" pausePlay item
    //    playText: 'Play',            //String: Set the text for the "play" pausePlay item

    //    // Special properties
    //    controlsContainer: "",                //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
    //    manualControls: "",                //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
    //    sync: "",                //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
    //    asNavFor: ""                //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
    //});

    //$('#main-slider').flexslider({
    //    namespace: "flex-",           //{NEW} String: Prefix string attached to the class of every element generated by the plugin
    //    selector: ".slides > li",    //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
    //    animation: "fade",            //String: Select your animation type, "fade" or "slide"
    //    easing: "swing",           //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
    //    direction: "horizontal",      //String: Select the sliding direction, "horizontal" or "vertical"
    //    reverse: false,             //{NEW} Boolean: Reverse the animation direction
    //    animationLoop: true,              //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
    //    smoothHeight: false,             //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
    //    startAt: 0,                 //Integer: The slide that the slider should start on. Array notation (0 = first slide)
    //    slideshow: true,              //Boolean: Animate slider automatically
    //    slideshowSpeed: 7000,              //Integer: Set the speed of the slideshow cycling, in milliseconds
    //    animationSpeed: 600,               //Integer: Set the speed of animations, in milliseconds
    //    initDelay: 0,                 //{NEW} Integer: Set an initialization delay, in milliseconds
    //    randomize: false,             //Boolean: Randomize slide order

    //    // Usability features
    //    pauseOnAction: true,              //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
    //    pauseOnHover: false,             //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
    //    useCSS: true,              //{NEW} Boolean: Slider will use CSS3 transitions if available
    //    touch: true,              //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
    //    video: false,             //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

    //    // Primary Controls
    //    controlNav: true,              //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
    //    directionNav: true,              //Boolean: Create navigation for previous/next navigation? (true/false)
    //    prevText: "Previous",        //String: Set the text for the "previous" directionNav item
    //    nextText: "Next",            //String: Set the text for the "next" directionNav item

    //    // Secondary Navigation
    //    keyboard: true,              //Boolean: Allow slider navigating via keyboard left/right keys
    //    multipleKeyboard: false,             //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
    //    mousewheel: false,             //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
    //    pausePlay: false,             //Boolean: Create pause/play dynamic element
    //    pauseText: 'Pause',           //String: Set the text for the "pause" pausePlay item
    //    playText: 'Play',            //String: Set the text for the "play" pausePlay item

    //    // Special properties
    //    controlsContainer: "",                //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
    //    manualControls: "",                //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
    //    sync: "",                //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
    //    asNavFor: ""                 //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
    //});
    $('.carousel').carousel('cycle');
    $(".cloud").on("mouseover", function () {
        $this = $(this);
        $this.css("cursor", "pointer");
    });

    $(".cloud").on("click", function () {
        $this = $(this);
        $href = $this.children().attr("href");
        alert($href);
    });
});