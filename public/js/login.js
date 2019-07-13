window.addEventListener("load", function() {
    var adminemail = $("#adminemail").val().length;
    var adminpassword = $("#adminpassword").val().length;
    var patientemail = $("#patientemail").val().length;
    var patientpassword = $("#patientpassword").val().length;

    if (adminemail < 1) {
        document.getElementById("err_adminemail").innerHTML =
            "admin email required *";
    }
    if (adminpassword < 1) {
        document.getElementById("err_adminpassword").innerHTML =
            "admin email required *";
    }
    if (patientemail < 1) {
        document.getElementById("err_patientemail").innerHTML =
            "admin email required *";
    }
    if (patientpassword < 1) {
        document.getElementById("err_patientpassword").innerHTML =
            "admin email required *";
    }
});

window.addEventListener("load", function validate() {
    var name = $("#name").val();
    var mobile = $("#mobile").val();
    var password = $("#password").val();
    var retypepassword = $("#retypepassword").val();
    var email = $("#email").val();
    var flag = 0;

    if (name.length > 30) {
        document.getElementById("error_name").innerHTML =
            "Patient Name Must Not Exceed 10 Chrachters * ";
        $("#box").prop("checked", false);
        flag = 1;
    }
    if (email.length < 1) {
        document.getElementById("error_email").innerHTML =
            "Please Enter The Email * ";

        $("#box").prop("checked", false);
        flag = 1;
    }

    if (name.length < 1) {
        document.getElementById("error_name").innerHTML =
            "Please Enter The Patient Name * ";
        $("#box").prop("checked", false);
        flag = 1;
    }
    if (mobile.length > 11) {
        document.getElementById("error_mobile").innerHTML =
            "Mobile Number Must Not Exceed 11 Chrachters * ";
        $("#box").prop("checked", false);
        flag = 1;
    }
    if (mobile.length < 1) {
        document.getElementById("error_mobile").innerHTML =
            "Please Enter The mobile * ";
        $("#box").prop("checked", false);
        flag = 1;
    }
    if (password.length < 8) {
        document.getElementById("error_password").innerHTML =
            "Password Must Not Be Less Than  8 Chrachters * ";
        $("#box").prop("checked", false);
        flag = 1;
    }
    if (retypepassword.length < 1) {
        document.getElementById("error_retypepassword").innerHTML =
            "Retype Password To Confirm it  * ";
        $("#box").prop("checked", false);
        flag = 1;
    }

    if (password != retypepassword) {
        document.getElementById("error_retypepassword").innerHTML =
            "Passwords Does not match * ";
        $("#box").prop("checked", false);
        flag = 1;
    }

    if (flag == 1) {
        return false;
    } else {
        return true;
    }
});

/*eslint-env jquery*/
