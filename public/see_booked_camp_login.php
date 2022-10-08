<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/css/tailwind.css">
  <style>
    #sub-btn {background-color: #004e64; color:#FFFFFF;}
    #sub-btn:hover {background-color:#00a5cf; color:#004e64;}
    #link {color:#004e64; cursor: pointer;}
    #link:hover {color:#00a5cf}
  </style>
</head>
<body>
        <!--main div-->
        <div class="min-h-screen flex flex-col">
            <!--conatainer starts-->
            <div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center px-2">
              <h3 class="mb-5 text-3xl font-oswald text-center" style="color: #202020;">Sign Up</h3>
                <div class="px-6 py-8 rounded w-full">
                    <!--form starts-->
                    <form action="" method="POST" class="" onsubmit="return validate(this)">
                        <!--phone feild-->
                        <input 
                            type="text"
                            id="phone" onkeyup="phone_no()"
                            class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-2 outline-none focus:border-black"
                            name="phone"
                            placeholder="Valid 10 digit mobile number" style="color: #535353;" required/>
                            <p id="phone_alert" class="mb-5 text-xs"></p>
                        <button
                            type="submit"
                            id="sub-btn"
                            class="w-full text-center font-oswald py-3 rounded text-white focus:outline-none my-1 transition duration-150 ease-in-out uppercase">Submit</button>
                    </form>
                </div>
                <div class="cursor-default text-grey-dark text-sm font-montserrat mb-6" style="color: #535353;">
                  Haven't booked any camp yet? 
                  <a id="link" class="underline cursor-pointer text-base font-montserrat transition duration-150 ease-in-out" >
                      See Camps
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
        //for menu
        const toggle = document.getElementById('menu_icon');
        const sidebar = document.getElementById('drop_menu');
        const cross = document.getElementById('cross_icon');
        const line = document.getElementById('line_icon');
        //if click outside it will close autometically
        document.onclick = function (e) {
          if (e.target.id !== 'menu_icon' && e.target.id !== 'drop_menu' && e.target.id !== 'select') {
            sidebar.classList.remove('active');
            cross.classList.remove('active');
            line.classList.remove('deactive');
          }
        }
        //toggle menu 
        toggle.onclick = function () {
          sidebar.classList.toggle('active');
          cross.classList.toggle('active');
          line.classList.toggle('deactive');
        }
        //phone validation
        var phone_val = 0;
        function phone_no(){
          var phone = document.getElementById("phone");
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
        function validate(form){
            if (phone_val  == 1){
                return false;
            }
            else if (phone_val  == 0){
                return true;
            }
        }
    </script>    
</body>
</html>