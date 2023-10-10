function signUp() {
    if (document.getElementById("cb_privacy").checked) {
        var email = document.getElementById("su_email");
        var fname = document.getElementById("su_fname");
        var lname = document.getElementById("su_lname");
        var mobile = document.getElementById("su_mobile");
        var password = document.getElementById("su_password");

        var form = new FormData();
        form.append("email", email.value);
        form.append("fname", fname.value);
        form.append("lname", lname.value);
        form.append("mobile", mobile.value);
        form.append("password", password.value);

        var request = new XMLHttpRequest();
        request.open("POST", "signup-process.php", true);
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                var alert = document.getElementById("su_error");
                var errMsg = document.getElementById("su_error_msg");

                if (request.responseText == "success") {
                    window.location = "index.php";
                } else {
                    errMsg.innerHTML = request.responseText;

                    alert.classList.remove("d-none");
                }
            }
        };
        request.send(form);
    } else {
        alert("Please accept the privacy policiy");
    }
}

function signIn() {
    var email = document.getElementById("si_email");

    var password = document.getElementById("si_password");

    var form = new FormData();

    form.append("email", email.value);
    form.append("password", password.value);

    var request = new XMLHttpRequest();
    request.open("POST", "signIn-process.php", true);

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {


            var resp = request.responseText;
            if (resp == "success") {
                window.location = "index.php";
            } else {

                var si_error = document.getElementById("si_error");
                var si_error_msg = document.getElementById("si_error_msg");

                si_error_msg.innerHTML = resp;

                si_error.classList.remove("d-none");
            }
        }
    };

    request.send(form);
}


function sendVerificationEmail() {

    var si_error = document.getElementById("si_error");
    var si_error_msg = document.getElementById("si_error_msg");

    var email = document.getElementById("email");
    var btn = document.getElementById("svc-btn");
    btn.innerHTML = "Loading";


    var request = new XMLHttpRequest();
    request.open("GET", "send-verification-email-process.php?email=" + email.value, true);

    request.onreadystatechange = function () {
        if (request.readyState == 4) {

            if (request.status == 200) {
                var response = request.responseText;
                if (response == "success") {
                    si_error.classList.add("d-none");
                    var sendVerifyDiv = document.getElementById("sendVerificationDiv");
                    var verifyDiv = document.getElementById("verifyDiv");
                    sendVerifyDiv.classList.add("d-none");
                    verifyDiv.classList.remove("d-none");

                    console.log(response);
                } else {
                    btn.innerHTML = "Send Verification Code";

                    si_error_msg.innerHTML = response;
                    si_error.classList.remove("d-none");
                }
            } else {
                //  request.status = 200 neme nm
                alert(request.status);
            }
        }
    }
    request.send();
}


function verify() {

    var verifyDiv = document.getElementById("verifyDiv");
    var newPasswordDiv = document.getElementById("newPasswordDiv");
    var vcode = document.getElementById("v-code");
    var form = new FormData();
    form.append("vcode", vcode.value);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            if (response == "Success") {
                verifyDiv.classList.add("d-none");
                newPasswordDiv.classList.remove("d-none");

            } else {
                si_error_msg.innerHTML = response;
                si_error.classList.remove("d-none");
            }

        }
    }
    request.open("POST", "verify-code-process.php", true);
    request.send(form);

}


function resetPassword() {
    var newPassword = document.getElementById("newPassword");
    var confirmPassword = document.getElementById("confirmPassword");
    var email = document.getElementById("email");


    var form = new FormData();
    form.append("newPassword", newPassword.value);
    form.append("confirmPassword", confirmPassword.value);
    form.append("email",email.value);
    var request = new XMLHttpRequest();
    request.open("POST", "reset-password-process.php", true);
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            if(response=="Success"){
                window.location = "login.php";
            }else {
                alert(response);
            }
        }
    }

    request.send(form);


}

