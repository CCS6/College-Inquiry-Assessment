(function ($) {

    // Init Wow
    wow = new WOW( {
        animateClass: 'animated',
        offset:       100
    });
    wow.init();

    // Navigation scrolls
    $('.navbar-nav li a').bind('click', function(event) {
        $('.navbar-nav li').removeClass('active');
        $(this).closest('li').addClass('active');
        var $anchor = $(this);
        var nav = $($anchor.attr('href'));
        if (nav.length) {
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');

        event.preventDefault();
        }
    });

    // About section scroll
    $(".overlay-detail a").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
            window.location.hash = hash;
        });
    });

    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar-default").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    // Testimonials Slider
    $('.bxslider').bxSlider({
      adaptiveHeight: true,
      mode: 'fade'
    });

    // Sign-Up Validation
    /*$('form[name=registration-form]').submit(function(e){
        e.preventDefault();
        alert("Test.");
        return false;
        var firstName=$('.form-firstname').val();
        var lastName=$('.form-lastname').val();
        var username=$('.form-username').val();
        var password=$('.form-password').val();
        var confpass=$('.form-confpass').val();

        if(!firstName){
            alert('First Name is required.');
        }
        return false;

    });*/

    /*$("form[name=registration-form]").submit(function() {
        $(":input", this).each(function() {
            if ($(this).val() == "")
                alert("Empty Fields!!");
                location.reload();
        });
    });*/

    // Registration request.

    $('form[name=registration-form]').submit(function(e){
        e.preventDefault();
        var firstName=$('input[name=form-firstname]').val();
        var lastName=$('input[name=form-lastname]').val();
        var userName=$('input[name=form-username]').val();
        var passWord=$('input[name=form-password]').val();
        var confPass=$('input[name=form-confpass]').val();

        /*alert("Test.");
        return false;*/
        $.ajax({
            url: 'actions/login.php',
            type: 'POST',
            //Use datatype option when either data pass is xml,json,etc.
            //dataType: json,
            data: {firstname: firstName, lastname: lastName, username: userName, password: passWord, confpass: confPass},
            //Submit data as an array.
            //data: 'firstname='+firstName+'&lastname='+lastName+'&username='+username+'&password='+password+'&confpass='+confpass,
            success: function(data){
                if(data == "Success!"){
                    confirmMessage('alert-success','Record successfully added.');
                    clearRegistrationForm();
                }
                else{
                    confirmMessage('alert-warning','Username already exists.');
                    clearRegistrationForm();
                }
            }
        });
    });

    function confirmMessage(className,message){
        var htmlText = '';

        if(className =='alert-success'){
            htmlText = '<strong>Well done!</strong> '+message;
            if ($('.alert').hasClass('alert-warning')){
                $('.alert').removeClass('alert-warning');
            }
            $('.alert').addClass(className);
            $('.alert').html(htmlText).fadeIn('slow');
        }
        else{
            htmlText = '<strong>Oops!</strong> '+message;
            if ($('.alert').hasClass('alert-success')){
                $('.alert').removeClass('alert-success');
            }
            $('.alert').addClass(className);
            $('.alert').html(htmlText).fadeIn('slow');
        }
        setTimeout(timeout('.alert', htmlText),2000);
    }

    function timeout(obj,htmlText){
        $(obj).html(htmlText).fadeOut('slow');
    }

    function clearRegistrationForm(){
        $("form[name=registration-form] :input").each(function() {
            $(this).val('');
        });
        /*$("form[name=registration-form] :input[type=password]").each(function() {
            $(this).val('');
        });*/
        $('input.form-firstname').focus();
    };

})(jQuery);
