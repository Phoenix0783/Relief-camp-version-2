<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../src/css/tailwind.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <style>
            #sub-btn {background-color: #004e64; color:#FFFFFF;}
            #sub-btn:hover {opacity: 0.8;}
            #rst-btn {background-color: #25a18e; color:#FFFFFF;}
            #rst-btn:hover {opacity: 0.8;}
            #link {color:#004e64}
            #link:hover {color:#00a5cf}
                #reg_doc::-webkit-file-upload-button {
                    border-radius: 0.25rem;
                    padding: 0.25rem 0.5rem;
                    outline: none;
                    border-width: 1px;
                    border-color: #818181;
                    background-color: #c1c2c5;
                    cursor: pointer;   
                }
        </style>
    </head>
    <body>
        <!--main div-->
        <div class="min-h-screen flex flex-col">
            <!--conatainer starts-->
            <div class="container md:max-w-2xl lg:max-w-4xl mx-auto flex-1 flex flex-col items-center justify-center px-2 mt-10">
                <h3 class="mb-5 text-3xl font-oswald text-center font-medium mt-10" style="color: #202020;">Register Organization</h3>
                <div class="px-3 sm:px-6 py-8 rounded w-full">
                    <!--form starts-->
                    <form action="" method="POST" class="" onsubmit="return validate(this)">
                        <div class="flex flex-wrap mx-3 mb-2">
                            <div class="w-full sm:w-1/2 px-3 mb-6">
                                <label class="block font-oswald tracking-wide text-gray-700 text-lg mb-2">
                                    Name of Organization
                                </label>
                                <input class="appearance-none text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Enter Organization Name" required>
                            </div>
                            <div class="w-full sm:w-1/2 px-3 mb-6">
                                <label class="block font-oswald tracking-wide text-gray-700 text-lg mb-2">
                                    Type of Organization
                                </label>
                                <select class="form-select text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                    <option selected>Select</option>
                                    <option value="gov">Government</option>
                                    <option value="pvt">Private</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-1/2 px-3 mb-6">
                                <label class="block font-oswald tracking-wide text-gray-700 text-lg mb-2">
                                  Enter Registeration Number
                                </label>
                                <input class="appearance-none text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Enter Valid Document Number" required>
                            </div>
                            <div class="w-full sm:w-1/2 px-3 mb-6">
                                <label class="block font-oswald tracking-wide text-gray-700 text-lg mb-2">
                                  Upload proof of Registeration
                                </label>
                                <input id="reg_doc" class="form-control text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" required>
                            </div>
                        </div>
                        <div class="bg-gray-600 mb-5" style="padding: 0.5px 0;"></div>
                        <div class="flex flex-wrap mx-3 mb-2">
                            <h3 class="text-gray-800 text-xl font-oswald mx-3 mb-4">Details of Person Registering on behalf of the Organization</h3>
                            <div class="w-full sm:w-1/2 px-3 mb-6">
                                <label class="block font-oswald tracking-wide text-gray-700 text-lg mb-2">
                                    Name
                                </label>
                                <input class="appearance-none text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Enter Name" required>
                            </div>
                            <div class="w-full sm:w-1/2 px-3 mb-6">
                                <label class="block font-oswald tracking-wide text-gray-700 text-lg mb-2">
                                    Phone number
                                </label>
                                <input id="phone" onkeyup="phone_no()" class="appearance-none text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Enter valid mobile number">
                                <p id="phone_alert" class="text-xs"></p>
                            </div>
                            <div class="w-full sm:w-2/3 px-3 mb-6">
                                <label class="block font-oswald tracking-wide text-gray-700 text-lg mb-2">
                                    Email address
                                </label>
                                <input id="email" onkeyup="email_add()" class="appearance-none text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Enter valid email">
                                <p id="email_alert" class="text-xs"></p>
                            </div>
                        </div>
                        <div class="flex items-center justify-end my-4">
                            <button id="rst-btn" class="font-normal font-oswald py-2 px-5 rounded mr-2 outline-none" type="reset">
                                Reset
                            </button>
                            <button id="sub-btn" class="font-normal font-oswald py-2 px-4 rounded ml-2 outline-none" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                    <div class="text-center font-montserrat text-sm mt-5 mb-3" style="color: #202020;">
                        By signing up, you agree to the 
                        <a class="underline font-montserrat transition duration-150 ease-in-out" href="#" id="link">
                            Terms of Service
                        </a>
                    </div>
                    <div class="text-center text-sm font-montserrat mb-6" style="color: #202020;">
                        Already registered? 
                        <a href="#" class="underline cursor-pointer text-base font-montserrat text-blue transition duration-150 ease-in-out" id="link">
                            Sign in
                        </a>.
                    </div>
                </div>
            </div>
        </div>
    
        <footer class="lg:text-left cursor-default">
            <div class="text-center p-3 footer-bottom" style="background-color: #004e64;">
                <span class="text-white font-oswald">© 2022 Copyright:</span>
                <a class="text-white font-montserrat" href="index.html">Relief Camp</a>
            </div>
        </footer>
    <script>
        var email = document.getElementById("email");
        var phone = document.getElementById("phone");
        var phone_val = 0;
        var email_val = 0;
        
        function phone_no(){
          var phoneno = /^\d{10}$/;
            var filter = phone.value;
            if (filter.match(phoneno) && filter.length == 10) {
                document.getElementById('phone_alert').innerHTML = "phone number is valid";
                document.getElementById('phone_alert').style.color = "green";
                phone.classList.add('border-green-600');
                phone.classList.remove('border-red-600');
                phone_val = 0;
            }
            else if (!filter.match(phoneno)) {
                document.getElementById('phone_alert').innerHTML = "invalid phone number";
                document.getElementById('phone_alert').style.color = "red";
                phone.classList.remove('border-green-600');
                phone.classList.add('border-red-600');
                phone_val = 1;
            }
            if (filter.length == 0) {
                document.getElementById('phone_alert').innerHTML = "phone number must be 10 digits in length";
                document.getElementById('phone_alert').style.color = "red";
                phone.classList.remove('border-green-600');
                phone.classList.add('border-red-600') ;
                phone_val = 1;
            }
        }
        function email_add(){
            var re = /\S+@\S+\.\S+/;
            var filter = email.value;
            if (filter.match(re) && filter.length > 0) {
                document.getElementById('email_alert').innerHTML = "valid email format";
                document.getElementById('email_alert').style.color = "green";
                email.classList.add('border-green-600');
                email.classList.remove('border-red-600');
                email_val = 0;
            }
            else if (!filter.match(re)) {
                document.getElementById('email_alert').innerHTML = "invalid email";
                document.getElementById('email_alert').style.color = "red";
                email.classList.remove('border-green-600');
                email.classList.add('border-red-600');
                email_val = 1;
            }
            if (filter.length == 0) {
                document.getElementById('email_alert').innerHTML = "email address required";
                document.getElementById('email_alert').style.color = "red";
                email.classList.remove('border-green-600');
                email.classList.add('border-red-600') ;
                email_val = 1;
            }
        }
        function validate(form){
            if (phone_val  == 1 || email_val == 1){
                return false;
            }
            else if (phone_val  == 0 || email_val == 0){
                return true;
            }
        }
    </script>    
    </body>
</html>