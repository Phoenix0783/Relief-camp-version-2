<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../src/css/tailwind.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  <style>
    #sub-btn {background-color: #004e64; color:#FFFFFF;}
    #sub-btn:hover {background-color:#00a5cf; color:#004e64;}
    .link {color:#004e64; cursor: pointer;}
    .link:hover {color:#00a5cf}
    #ggl-btn:hover {border-color: #202020; background-color: #58d8ff33;}
    .fa-google {
        background: linear-gradient(to bottom left,transparent 49%,#fbbc05 50%) 0 25%/48% 40%,
                    linear-gradient(to top    left,transparent 49%,#fbbc05 50%) 0 75%/48% 40%,
                    linear-gradient(-40deg ,transparent 53%,#ea4335 54%),
                    linear-gradient( 45deg ,transparent 46%,#4285f4 48%),#34a853;
                    background-repeat:no-repeat;
                    -webkit-background-clip: text;
                    background-clip: text;
                    color: transparent;
                    -webkit-text-fill-color: transparent;
                }
  </style>

</head>
<body>
        <!--main div-->
        <div class="min-h-screen flex flex-col">
            <!--main conatainer starts-->
            <div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <!--camp creator login-->
                <div class="px-6 py-8 rounded w-full cursor-default" id="camp-log-cont">
                    <h3 class="mb-5 text-3xl font-oswald text-center" style="color: #202020;">Sign In</h3>
                    <h4 class="mb-10 text-xl font-oswald text-center" style="color: #202020;">Camp Creator</h4>
                    
                    <div class="text-center">
                        <button id="ggl-btn" class="w-full font-oswald bg-transparent py-2 px-4 border border-gray-500 rounded transition duration-150 ease-in-out" style="color: #202020;">
                            <i class="fab fa-google mr-2"></i>
                            Continue with Google
                        </button>
                    </div>
                    <div>
                        <p class="font-montserrat text-sm text-center my-4" style="color: #535353">
                            Or
                        </p>
                    </div>
                    <div>
                        <p class="font-montserrat text-xs text-center mb-3" style="color: #535353;">
                            Sign In using Email     
                        </p>
                    </div>
                    <!--form for camp creator starts-->
                    <form action="" method="POST" class="">
                        <!--Email feild-->
                        <input 
                            type="text"
                            class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-5 outline-none focus:border-black"
                            name="user_id"
                            placeholder="UserId" style="color: #535353;" required/>
                        <!--pass feild-->
                        <input 
                            type="password"
                            class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-1 outline-none focus:border-black"
                            name="password"
                            placeholder="Password" style="color: #535353;" required/>
                            <div class="flex justify-end">
                              <a class="link font-montserrat transition duration-150 ease-in-out" href="#">
                                Forgot Password? 
                              </a>
                            </div>
                        <button
                            type="submit"
                            id="sub-btn"
                            class="w-full text-center font-oswald py-3 rounded text-white focus:outline-none mt-3 my-1 transition duration-150 ease-in-out uppercase">Log In</button>                           
                    </form>
                    <div class="text-center font-montserrat text-xs text-grey-dark mt-3" style="color: #535353;">
                        <a id="org-log-link" class="link underline text-base font-montserrat text-grey-dark transition duration-150 ease-in-out">
                          Log in as Disaster relief organization
                        </a>
                    </div>
                </div>
    
                <div id="end-msg-camp" class="cursor-default text-grey-dark text-sm font-montserrat mb-6" style="color: #535353;">
                    Don't have an account? 
                    <a href="register.html" class="link underline cursor-pointer text-base font-montserrat transition duration-150 ease-in-out" >
                        Sign Up
                    </a>.
                </div>
                <!--camp creator login ends-->

                <!--organization login starts-->
                <div class="hidden px-6 py-8 rounded w-full cursor-default" id="org-log-cont">
                    <h3 class="mb-5 text-3xl font-oswald text-center" style="color: #202020;">Sing In</h3>
                    <h4 class="mb-10 text-xl font-oswald text-center" style="color: #202020;">Disaster relief organization</h4>
                    
                    <!--form for disaster relief organization starts-->
                    <form action="" method="POST">
                        <!--Email feild-->
                        <input 
                            type="text"
                            class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-5 outline-none focus:border-black"
                            name="user_alert"
                            placeholder="UserId" style="color: #535353;" required/>
                        <!--pass feild-->
                        <input 
                            type="password"
                            class="block border font-montserrat border-gray-400 w-full p-3 rounded mb-1 outline-none focus:border-black"
                            name="password"
                            placeholder="Password" style="color: #535353;" required/>
                            <div class="flex justify-end">
                                <a class="link font-montserrat transition duration-150 ease-in-out" href="#">
                                Forgot Password? 
                                </a>
                            </div>
                        <button
                            type="submit"
                            id="sub-btn"
                            class="w-full text-center font-oswald py-3 rounded text-white focus:outline-none mt-3 my-1 transition duration-150 ease-in-out uppercase">Log In</button>
                    </form>
                    <div class="text-center font-montserrat text-xs text-grey-dark mt-3" style="color: #535353;">
                        <a id="camp-log-link" class="link underline text-base font-montserrat text-grey-dark transition duration-150 ease-in-out">
                            Log in as Camp Creator 
                        </a>  
                    </div>
                </div>

                <div id="end-msg-org" class="cursor-default hidden text-center text-grey-dark text-sm font-montserrat mb-6" style="color: #535353;">
                    Haven't register your organization? 
                    <a href="register.html" class="link underline cursor-pointer text-base font-montserrat transition duration-150 ease-in-out" >
                        Register Now
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
      <script>
        // for login containers
        const creator = document.getElementById('camp-log-link');
        const organization = document.getElementById('org-log-link');
        const creator_cont = document.getElementById('camp-log-cont');
        const organization_cont = document.getElementById('org-log-cont');
        const endmsg1 = document.getElementById('end-msg-camp');
        const endmsg2 = document.getElementById('end-msg-org');

        //link clicks
        creator.onclick = function () {
            creator_cont.classList.remove('hidden');
            endmsg1.classList.remove('hidden');
            organization_cont.classList.add('hidden');
            endmsg2.classList.add('hidden');
        }
        organization.onclick = function () {
            creator_cont.classList.add('hidden');
            endmsg1.classList.add('hidden');
            organization_cont.classList.remove('hidden');
            endmsg2.classList.remove('hidden');
        }
    </script>    
</body>
</html>