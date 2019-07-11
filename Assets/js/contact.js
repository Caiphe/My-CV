
var errorName = false;
var errorContact = false
var errorEmail = false
var errorComment = false;


$('#contactName').keyup(function () {
    CheckName();
});

$('#contactNumber').keyup(function () {
    CheckNumber();
});

$('#contactEmail').keyup(function () {
    CheckEmail();
});

$('#contactComment').keyup(function () {
    CheckMessage();
});

function CheckName() {
    if ($("#contactName").val().length < 2) {
        $("#contactName").removeClass('successContact');
        $('#nameError').addClass('fadeInUp');
        $('#nameError').removeClass('fadeOutLeft');
        $("#nameError").css('display', 'block');
        $("#successName").hide();
        errorName = true;
    } else {
        $('#nameError').removeClass('fadeInUp');
        $('#nameError').addClass('fadeOutLeft');
        $("#successName").show();
        $("#contactName").addClass('successContact');
    }
};

function CheckNumber() {
    if ($("#contactNumber").val().length < 9) {
        $('#contactNumber').removeClass('successContact');
        $('#contactError').addClass('fadeInUp');
        $('#contactError').removeClass('fadeOutLeft');
        $("#contactError").css('display', 'block');
        $("#successName").hide();
        errorContact = true;
    }
    else {
        $('#contactError').removeClass('fadeInUp');
        $('#contactError').addClass('fadeOutLeft');
        $("#contactNumber").addClass('successContact');
        $("#successName").show();
    }
};

function CheckEmail() {
    if ($("#contactEmail").val().length < 4) {
        $('#contactEmail').removeClass('successContact');
        $('#emailError').addClass('fadeInUp');
        $('#emailError').removeClass('fadeOutLeft');
        $("#emailError").css('display', 'block');
        $("#successName").hide();
        errorEmail = true;
    }
    else {
        $("#contactEmail").addClass('successContact');
        $('#emailError').removeClass('fadeInUp');
        $('#emailError').addClass('fadeOutLeft');
        $("#successName").show();
    }
};

function CheckMessage() {
    if ($("#contactComment").val().length < 4) {
        $('#contactComment').removeClass('successContact');
        $('#commentError').addClass('fadeInUp');
        $('#commentError').removeClass('fadeOutLeft');
        $("#commentError").css('display', 'block');
        $("#successName").hide();
        errorComment = true;
    }
    else {
        $("#contactComment").addClass('successContact');
        $('#commentError').removeClass('fadeInUp');
        $('#commentError').addClass('fadeOutLeft');
        $("#successMessage").show();
    }
};


$('.contactForm').submit(function () {
    errorName = false;
    errorContact = false
    errorEmail = false
    errorComment = false;

    CheckName();
    CheckNumber();
    CheckEmail();
    CheckMessage();

    if (errorName == false && errorContact == false && errorEmail == false && errorComment == false) {
        alert('emailSent');
        return true;
    }
    else {
        return false
    }
});


