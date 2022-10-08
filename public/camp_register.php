<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #sub-btn {
            background-color: #004e64;
            color: #FFFFFF;
        }

        #sub-btn:hover {
            background-color: #00a5cf;
            color: #004e64;
        }

        #conf-btn {
            background-color: #004e64;
            color: #FFFFFF;
        }

        #conf-btn:hover {
            background-color: #00a5cf;
            color: #004e64;
        }

        #link {
            color: #004e64
        }

        #link:hover {
            color: #00a5cf
        }
    </style>
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../src/css/tailwind.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="scripts/camp_register.js" defer></script>
</head>

<body>
    <!--main div-->
    <div class="min-h-screen flex flex-col">
        <!--conatainer starts-->
        <div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="px-6 py-8 rounded w-full">
                <h3 class="mb-8 text-3xl font-oswald text-center" style="color: #202020;">Sign Up To Create Camp</h3>
                <div class="formMessage text-blackText"></div>
                <!--form starts-->
                <form id="mainForm" autocomplete="off" method="POST" class="" onsubmit="return validate(this)">
                    <!--username field-->
                    <div id="availability" class="font-montserrat mb-3"></div>
                    <input type="text" id="user_name" class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-3 outline-none  focus:border-black" name="username" onkeyup="u_name()" placeholder="User Name" style="color: #535353;" required />
                    <p id="user_alert" class="mb-3 text-xs font-montserrat"><span></span></p>
                    <!--Phone num feild-->
                    <input type="text" id="phone" onkeyup="phone_no()" class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-3 outline-none focus:border-black" name="phoneNum" placeholder="Enter valid 10 digit number" style="color: #535353;" required />
                    <p id="phone_alert" class="mb-3 text-xs font-montserrat"><span></span></p>
                    <!--pass feild-->
                    <input type="password" id="pass" class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-3 outline-none focus:border-black" name="password" onkeyup="pass_word()" placeholder="Password" style="color: #535353;" required />
                    <p id="pass_alert" class="mb-3 text-xs font-montserrat"></p>
                    <!--confirm pass feild-->
                    <input type="password" id="conf_pass" onkeyup="confirm_pass()" class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-3 outline-none focus:border-black" name="confirm_password" placeholder="Confirm Password" style="color: #535353;" required />
                    <p id="conf_alert" class="mb-3 text-xs font-montserrat"></p>
                    <button type="submit" onclick="" id="sub-btn" name="createAccount" class="w-full text-center font-oswald py-3 rounded text-white focus:outline-none my-1 transition duration-150 ease-in-out uppercase">Create Account</button>
                </form>
                <!--otp model starts-->
                <div id="otp-model" aria-hidden="true" class="fixed right-0 left-0 z-50 justify-center items-center h-full inset-0" style="background-color:rgba(0, 0, 0, 0.3); display: none;">
                    <div class="relative px-5 w-full max-w-md h-auto">
                        <div class="relative bg-white rounded-lg cursor-default shadow">
                            <div class="flex justify-end p-2">
                                <button id="close" type="button" class="text-gray-600 bg-transparent hover:bg-gray-400 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"></path>
                                    </svg>
                                </button>
                            </div>
                            <form id="otp_form" method="POST" class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" onsubmit="sendOtpAjax()">
                                <h3 class="text-xl font-oswald text-center font-medium" style="color: #202020;">Enter OTP</h3>
                                <div>
                                    <input type="text" name="otp" id="otp" class="bg-gray-200 border border-gray-400 focus:border-gray-800 focus:bg-gray-50 text-sm rounded block w-full p-2.5 outline-none placeholder:text-gray-600" placeholder="Enter 6 digit code" required>
                                    <p id="otp_alert" class="mb-3 text-xs font-montserrat"></p>
                                </div>
                                <div class="flex justify-center items-cente">
                                    <button id="conf-btn" type="submit" class="font-medium rounded-lg text-sm w-fit px-5 py-2.5 text-center">CONFIRM</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--otp model ends-->
                <div class="text-center font-montserrat text-xs text-grey-dark mt-3" style="color: #535353;">
                    By signing up, you agree to the
                    <a class="underline font-montserrat text-grey-dark transition duration-150 ease-in-out" href="#" id="link">
                        Terms of Service
                    </a>
                </div>
            </div>

            <div class="text-grey-dark text-sm font-montserrat mb-6" style="color: #535353;">
                Already have an account?
                <a href="login.html" class="underline cursor-pointer text-base font-montserrat text-blue transition duration-150 ease-in-out" id="link">
                    Sign in
                </a>.
            </div>
        </div>
    </div>
    <footer class="lg:text-left cursor-default">
        <div class="text-center p-3 footer-bottom" style="background-color: #004e64;">
            <span class="text-white font-oswald">© 2022 Copyright:</span>
            <a class="text-white font-montserrat" href="index.html">Relief Camp</a>
        </div>
    </footer>
</body>

</html>