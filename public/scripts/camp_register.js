let isUserOk;
let isPhoneOk;
let validated;

function allVal(val) {
    validated = val;
}

function userx(user) {
    isUserOk = user;
}

function phoney(phone) {
    isPhoneOk = phone;
}

function finall() {
    let user = isUserOk;
    let phone = isPhoneOk;
    let valid = validated;
    if (user === 1 && phone === 1 && valid === 1) {
        document.getElementById('otp-model').style.display = "flex";
    } else {
        document.getElementById('otp-model').style.display = "none";
    }
}

/*feild validations*/
const username = document.getElementById("user_name");
const phone = document.getElementById("phone");
const password = document.getElementById("pass");
const repass = document.getElementById("conf_pass");
const otp = document.getElementById("otp");
let phone_val = 0;
let user_val = 0;
let pass_val = 0;
let conf_val = 0;

function sendOtpAjax() {
    const otpValue = otp.value;
    // const usernameValue = username.value;
    // const phoneValue = phone.value;
    // const passwordValue = password.value;
    $.ajax({
        url: "ajax/data_camp_register.php",
        type: "POST",
        data: {
            otp: otpValue,
            // username: usernameValue,
            // phone: phoneValue,
            // password: passwordValue,
        },
        success: function (otpMessage) {
            console.log(otpMessage);
            if (otpMessage != '0') {
                $('#otp_alert').html(`<span class="text-red-600">You have entered wrong OTP, please try again!</span>`);
                $('#otp').removeClass('border-green-600');
                $('#otp').addClass('border-red-600');
                $('#conf-btn').attr("disable", true);

            } else {
                alert("Registration Successful, now enter camp details!");
                window.location = "create_camp.php";
            }
        }
    });
}

function u_name() {
    var filter = username.value;
    if (filter.length == 0 || filter.length < 5) {
        document.querySelector('#user_alert span').innerHTML = "username must be 5 charecter long";
        document.querySelector('#user_alert span').style.color = "red";
        username.classList.remove('border-green-600');
        username.classList.add('border-red-600');
        user_val = 1;
    } else if (filter.length > 4) {
        document.querySelector('#user_alert span').innerHTML = "minimum character requirement is reached";
        document.querySelector('#user_alert span').style.color = "green";
        username.classList.add('border-green-600');
        username.classList.remove('border-red-600');
        user_val = 0;
    }
}

//phone validation
function phone_no() {
    let phoneno = /^\d{10}$/;
    let filter = phone.value;
    if (filter.match(phoneno) && filter.length == 10) {
        document.querySelector('#phone_alert span').innerHTML = "phone number is valid";
        document.querySelector('#phone_alert span').style.color = "green";
        phone.classList.add('border-green-600');
        phone.classList.remove('border-red-600');
        phone_val = 0;
    } else if (!filter.match(phoneno)) {
        document.querySelector('#phone_alert span').innerHTML = "invalid phone number";
        document.querySelector('#phone_alert span').style.color = "red";
        phone.classList.remove('border-green-600');
        phone.classList.add('border-red-600');
        phone_val = 1;
    }
    if (filter.length == 0) {
        document.querySelector('#phone_alert span').innerHTML = "phone number must be 10 digits in length";
        document.querySelector('#phone_alert span').style.color = "red";
        phone.classList.remove('border-green-600');
        phone.classList.add('border-red-600');
        phone_val = 1;
    }
}

function pass_word() {
    let filter = password.value;
    if (filter.length == 0 || filter.length < 8) {
        document.getElementById('pass_alert').innerHTML = "password must be 8 charecter long";
        document.getElementById('pass_alert').style.color = "red";
        password.classList.remove('border-green-600');
        password.classList.add('border-red-600');
        pass_val = 1;
    } else if (filter.length > 7) {
        document.getElementById('pass_alert').innerHTML = "minimum character requirement is reached";
        document.getElementById('pass_alert').style.color = "green";
        password.classList.add('border-green-600');
        password.classList.remove('border-red-600');
        pass_val = 0;
    }
}

function confirm_pass() {
    let pass = password.value;
    let filter = repass.value;
    if (filter != pass) {
        document.getElementById('conf_alert').innerHTML = "password don't match";
        document.getElementById('conf_alert').style.color = "red";
        repass.classList.remove('border-green-600');
        repass.classList.add('border-red-600');
        conf_val = 1;
    } else if (filter == pass) {
        document.getElementById('conf_alert').innerHTML = "password verified";
        document.getElementById('conf_alert').style.color = "green";
        repass.classList.add('border-green-600');
        repass.classList.remove('border-red-600');
        conf_val = 0;
    }
    if (filter.length == 0 || filter.length < 8) {
        document.getElementById('conf_alert').innerHTML = "password must be 8 charecter long";
        document.getElementById('conf_alert').style.color = "red";
        repass.classList.remove('border-green-600');
        repass.classList.add('border-red-600');
        conf_val = 1;
    }
}

function validate(form) {
    if (phone_val == 1 || user_val == 1 || pass_val == 1 || conf_val == 1) {
        // document.getElementById('otp-model').style.display = "none";
        allVal(0);
        return false;
    } else if (phone_val == 0 || user_val == 0 || pass_val == 0 || conf_val == 0) {
        // document.getElementById('otp-model').style.display = "flex";
        allVal(1);
        finall();
        const usernameValue = username.value;
        const phoneValue = phone.value;
        const passwordValue = password.value;
        $.ajax({
            url: "ajax/data_camp_register.php",
            type: "POST",
            data: {
                username: usernameValue,
                phone: phoneValue,
                password: passwordValue,
            },
            success: function (res) {
                console.log(res);
            }
        });
        return true;
    }
}

//open close modal
document.getElementById("mainForm").addEventListener("submit",
    function (e) {
        e.preventDefault();
    });
document.getElementById("otp_form").addEventListener("submit",
    function (e) {
        e.preventDefault();
    });
document.getElementById('close').addEventListener('click',
    function () {
        document.getElementById('otp-model').style.display = 'none';
    });
//open close end

$('#user_name').blur(function () {
    let userName = $(this).val();

    $.ajax({
        url: 'ajax/data_camp_register.php',
        method: "POST",
        data: {
            user_name: userName
        },
        success: function (data) {
            if (data != '0') {
                $('#user_alert').html('<span class="text-red-600">Username not available!</span>');
                $('#user_name').removeClass('border-green-600');
                $('#user_name').addClass('border-red-600');
                $('#sub-btn').attr("disable", true);
                userx(0);
            } else if (data == '0' && userName.length > 4) {
                $('#user_alert').html('<span class="text-green-600">Username available!</span>');
                $('#user_name').removeClass('border-red-600');
                $('#user_name').addClass('border-green-600');
                $('#sub-btn').attr("disable", false);
                userx(1);
            }
        }
    });
});
$('#phone').blur(function () {
    let phoneNum = $(this).val();
    let phoneno = /^\d{10}$/;

    $.ajax({
        url: 'ajax/data_camp_register.php',
        method: "POST",
        data: {
            phone_num: phoneNum
        },
        success: function (data) {
            if (data != '0') {
                $('#phone_alert').html('<span class="text-red-600">Phone number already in use!</span>');
                $('#phone').removeClass('border-green-600');
                $('#phone').addClass('border-red-600');
                $('#sub-btn').attr("disable", true);
                phoney(0);
            } else {
                if (phoneNum.match(phoneno) && phoneNum.length == 10) {
                    $('#phone_alert').html('<span class="text-green-600">Phone number is valid</span>');
                    $('#phone').removeClass('border-red-600');
                    $('#phone').addClass('border-green-600');
                    $('#sub-btn').attr("disable", false);
                    phoney(1);
                } else {
                    $('#phone_alert').html('<span class="text-red-600">Invalid phone number</span>');
                    $('#phone').removeClass('border-green-600');
                    $('#phone').addClass('border-red-600');
                    $('#sub-btn').attr("disable", true);
                    phoney(0);
                }
            }
        }
    });
});
