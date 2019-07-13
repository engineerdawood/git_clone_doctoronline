window.addEventListener("load", function() {
    $(document).ready(function() {
        $("#box").on("click", function() {
            var adminname = $("#adminname").val();
            var adminemail = $("#adminemail").val();
            var adminmobile = $("#adminmobile").val();
            var adminpassword = $("#adminpassword").val();

            if (adminname.length > 10) {
                document.getElementById("err-adminname").innerHTML =
                    "Admin Name Must Not Exceed 10 Chrachters * ";
            }

            if (adminname.length < 1) {
                document.getElementById("err-adminname").innerHTML =
                    "Please Enter Admin Name * ";
            }
            if (adminemail.length < 1) {
                document.getElementById("err-adminemail").innerHTML =
                    "Please Enter The Email * ";
            }

            if (adminmobile.length < 11) {
                document.getElementById("err-adminmobile").innerHTML =
                    "Please Enter The Admin Name * ";
            }

            if (adminmobile.length < 1) {
                document.getElementById("err-adminmobile").innerHTML =
                    "Please Enter The mobile * ";
            }
            if (adminpassword.length > 1) {
                document.getElementById("err-adminpassword").innerHTML =
                    "Mobile Number Must Not Exceed 11 Chrachters * ";
            }

            if (adminpassword.length < 8) {
                document.getElementById("err-adminpassword").innerHTML =
                    "Password Must Not Be Less Than  8 Chrachters * ";
            }
        });
    });
});
/*eslint-env jquery*/
