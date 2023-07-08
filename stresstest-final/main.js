// Will code later
$(document).ready(() => {

    console.log("started");
    $(".questions-div-div").hide();
    $(".next-div").hide();
    $(".error").hide();
    $(".submit-div").hide();

    //NEXT BUTTON CLICKED, SHOW NEXT SECTION
    $("#next-button").click((event) => {
        event.preventDefault();
        $(".info-div").hide();
        $(".questions-div-div").show();
        $("form").removeClass("completed");
    });


    //PREVENT THE ENTER KEY FROM SUBMITTING FORM
    $(document).keypress(function (event) {

        let keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            event.preventDefault();

        }
        event.stopPropagation();
    });


    //REGEX TO FIND IF NAMES ARE VALID OR NOT?!?
    function isName(input) {
        return !/\d/.test(input);
    }
    function isDate(input) {
        let dateRegex = /^\d{4}-\d{2}-\d{2}$/;
        return dateRegex.test(input);
    }
    function isEmail(email) {
        let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    function isStreet(input) {
        let streetRegex = /^[a-zA-Z0-9\s.-]+$/;
        return streetRegex.test(input);
    }
    function isCity(input) {
        return !/\d/.test(input);
    }

    //FRONT END VALIDATION FOR THE TEXT ON THE PERSONAL PAGE AND JQUERY STYLIST CHANGE

    $("form .info-div input, form .info-div select").change(() => {

        let allFieldsFilled = true;

        $("form .info-div input").each(function () {
            if ($(this).val() === "") {
                allFieldsFilled = false;
                return false;
            }
        });


        if ($("form .info-div select").val() == null) {
            console.log("HId");
            allFieldsFilled = false;
            $('#gender-error').show();
        } else { $('#gender-error').hide(); }

        if (isName($("form .info-div #name").val()) == false) {

            allFieldsFilled = false;
            $('#name-error').show();
        } else { $('#name-error').hide(); }

        if (isDate($("form .info-div #dob").val()) == false) {
            allFieldsFilled = false;
            $('#date-error').show();
        } else { $('#date-error').hide(); }

        if (isEmail($("form .info-div #email").val()) == false) {
            allFieldsFilled = false;
            $('#email-error').show();
        } else { $('#email-error').hide(); }

        if (isStreet($("form .info-div #street").val()) == false) {
            allFieldsFilled = false;
            $('#street-error').show();
        } else { $('#street-error').hide(); }

        if (isCity($("form .info-div #city").val()) == false) {
            allFieldsFilled = false;
            $('#city-error').show();
        } { $('#city-error').hide(); }


        if (allFieldsFilled) {
            $(".next-div").show();
            $("form").addClass("completed");

        } else {
            $(".next-div").hide();
        }

    })

    //FRONT END VALIDATION FOR THE RADIO BUTTONS ON THE QUIZ PAGE AND JQUERY STYLIST CHANGE

    $("form .questions-div-div input[type='radio']").change(() => {
        let allFieldsFilled = true;


        $("form .questions-div-div input[type='radio']").each(function () {
            let groupName = $(this).attr('name');


            if (!$('input[name="' + groupName + '"]').is(':checked')) {
                console.log($(this));
                allFieldsFilled = false;
                return false;
            }
        });

        if (allFieldsFilled) {
            $(".submit-div").show();
            $("form").addClass("completed");

        } else {
            $(".submit-div").hide();
        }

    })


});
