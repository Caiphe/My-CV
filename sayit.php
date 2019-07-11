<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets/css/main.css" />
    <link rel="stylesheet" href="Assets/css/animate.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"> </script>

    <link href="https://unpkg.com/ionicons@4.5.9-1/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.9-1/dist/ionicons.js"></script>

    <!-- <link rel="stylesheet" href="assets/css/ionicons.css" /> -->
    <!-- <script type="text/javascript" src="Assets//js/ionicons.js"></script> -->

    <link rel="apple-touch-icon" sizes="57x57" href="Assets/flavicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Assets/flavicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Assets/flavicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Assets/flavicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Assets/flavicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Assets/flavicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Assets/flavicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Assets/flavicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Assets/flavicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="Assets/flavicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/flavicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Assets/flavicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Assets/flavicon/favicon-16x16.png">
    <link rel="manifest" href="Assets/flavicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Assets/flavicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Marc | Testimonials</title>

</head>

<body>
    <div class=" testimonials_body">


        <div class=""></div>

        <div class="top-container animated slideInDown">
            <img src="Assets/images/testimonials.png">
        </div>

        <a class="back-home-a  " href="welcome-home">
            <div class="back_home animated slideInDown">
                Home
            </div>
        </a>

        <div class="form-container">
            <div class="title">Testimonials</div>

            <!-- On Success Mesage and Erro message #success -->
            <div class="all-saved-meddage none_display success animated slideInUp" id="success">
            </div>

            <form class="testimonials-form" id="testimonials_form" method="POST">
                <div class="form-fields">
                    <input id="fullname" name="fullname" placeholder="Full Name" class="name-fields">

                    <label class="icons-message error_icons animtated slideInLeft" id="error_name" style="margin-top: 4px;">
                        <ion-icon name="close-circle"></ion-icon>
                    </label>

                    <label class="icons-message success_icons animated" id="success_name">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </label>

                </div>

                <div class="form-fields" required>
                    <select id="relations" name="relationship">
                        <option value="hide">Select Relationship</option>
                        <option value="client">Client</option>
                        <option value="collegue">Collegue</option>
                        <option value="fiend">Friend</option>
                        <option value="manager">Manager</option>
                        <option value="mentor">Mentor</option>
                        <option value="partner">Partner</option>
                        <!-- <option value="other">Other</option> -->
                    </select>

                    <label class="icons-message error_icons animtated" id="error_select">
                        <ion-icon name="close-circle"></ion-icon>
                    </label>

                    <label class="icons-message success_icons animated" id="success_select">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </label>
                </div>

                <div class="form-fields">
                    <textarea id="messagebox" name="messagebox" class="textaria" placeholder="Message"></textarea>

                    <label class="icons-message error_icons animtated" id="error_message">
                        <ion-icon name="close-circle"></ion-icon>
                    </label>

                    <label class="icons-message success_icons animated" id="success_message">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </label>
                </div>
                <div class="form-fields">
                    <button type="submit" name="submit-btn" class="button-submit">Submit</button>
                </div>
            </form>
        </div>

        <div class="bootom-footer animated slideInUp">
            <div class="contact-me" align="center">
                www.marcilunga.co.za | +27 064 202 5417
            </div>
        </div>
    </div>

</body>

<script>
    $('select').each(function() {
        var $this = $(this),
            numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children('li');

        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function() {
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });

        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
        });

        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });
    });

    // Process Testimonials Form
    var errorName = false;
    var errorSelect = false
    var errorComment = false

    var testimonials = $('#testimonials-form');

    $('#fullname').keyup(function() {
        CheckName();
    });

    $('#messagebox').keyup(function() {
        CheckMessages();
    });


    function CheckName() {
        if ($('#fullname').val().length < 2) {
            $('#fullname').removeClass('success_validate_input');
            $('#fullname').addClass('error_validate_input');
            //$('#error_name').fadeIn()
            $('#error_name').css('display', 'block');
            $('#success_name').fadeOut()
            var errorName = true;

        } else {
            $('#fullname').removeClass('error_validate_input');
            $('#fullname').addClass('success_validate_input');
            $('#error_name').fadeOut()
            $('#success_name').fadeIn()
        }
    }

    function CheckMessages() {
        if ($('#messagebox').val().length < 2) {
            $('#messagebox').removeClass('success_validate_input');
            $('#messagebox').addClass('error_validate_input');
            $('#error_message').fadeIn()
            $('#success_message').fadeOut()
            var errorComment = true;
        } else {
            $('#messagebox').removeClass('error_validate_input');
            $('#messagebox').addClass('success_validate_input');
            $('#error_message').fadeOut()
            $('#success_message').fadeIn()
        }
    }


    $('#testimonials_form').submit(function(el) {
        el.preventDefault();
        var errorName = false;
        var errorComment = false

        var option = $('.select-styled').html();

        //error_select
        if (option == 'Select Relationship') {
            $('#error_select').fadeIn()
            $('#success_select').css('display', 'none');
            $('.select-styled').removeClass('success_validate_input')
            $('.select-styled').addClass('error_validate_input')
        } else {
            $('#error_select').css('display', 'none')
            $('#success_select').fadeIn()
            $('.select-styled').removeClass('error_validate_input')
            $('.select-styled').addClass('success_validate_input')
        }


        CheckName();
        CheckMessages();

        if (errorName == false && errorComment == false && option != 'Select Relationship') {

            var fullname = $('#fullname').val();
            var relationship = $('.select-styled').html();
            var messagebox = $('#messagebox').val();

            $.ajax({
                url: 'action.php',
                type: "POST",
                data: {
                    fullname: fullname,
                    relationship: relationship,
                    messagebox: messagebox
                },
                success: function(data) {
                    $('#testimonials_form').trigger('reset');
                    $('.select-styled').removeClass('success_validate_input')
                    $('#fullname').removeClass('success_validate_input');
                    $('#success_message').fadeOut()
                    $('#success').fadeIn().html(data);
                    setTimeout(function function_name() {
                        $('#success').fadeOut(900);
                    }, 3000);

                }
            });
            return true;

        } else {
            return false;
        }
    });
</script>

</html>