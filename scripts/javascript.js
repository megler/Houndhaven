$(document).ready(function() {

    var phone = document.getElementById("phone");

    //properly format phone number event
    $( "#phone" ).keyup(function(){
        phoneNum();
    }); 
   

    // lightbox for homepage slider
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true,
            showArrows: true,
            onShown: function() {
                console.log('Checking our the events huh?');
            },
            onNavigate: function(direction, itemIndex) {
                console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
            }
        });

    });

    // functions

    // set active link in nav
    // credit: https://www.johnmorrisonline.com/add-active-navigation-class-to-menu-item-based-on-url-using-jquery/
    function active() {
        // Get current path and find target link
        var path = window.location.pathname.split("/").pop();

        // Account for home page with empty path
        if (path == '') {
            path = 'index.php';
        }
        var target = $('nav a[href="' + path + '"]');
        // Add active class to target link
        target.addClass('active');
    }
    active();




    // form validation

    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    $("#adoptForm").validate({
        rules: {
            name: {
                required: true
            },
            streetAddress: {
                required: true
            },
            city: {
                required: true
            },
            inputState: {
                required: true
            },
            phone: {
                required: true,
                phoneUS: true
            },
            emailAddress: {
                required: true,
                email: true
            },
            dogName: {
                required: true
            },
            whyThisDog: {
                required: true
            },
            peopleInHome: {
                required: true
            }
        }
    });

    // I couldn't make the plugin properly format the phone number so I wrote this
    function phoneNum() {
        $("#phone").val($("#phone").val().replace(/^(\d{3})(\d{3})(\d{4})$/, "$1-$2-$3"));
    }
});