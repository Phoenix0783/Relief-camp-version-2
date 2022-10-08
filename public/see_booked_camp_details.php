<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Booked Camps</title>
    <link rel="stylesheet" href="../src/css/tailwind.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        main {
            background-color: #E5F6FA;
        }
        @media (max-width: 600px) {
            #reached_head {
                flex-wrap: wrap;
            }
            #reached_head h1 {
                text-align: center;
                width: 100%;
            }
            #reached_head #search_reached {
                margin-top: 1rem;
                width: 100%;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <nav class="px-5 shadow sticky top-0 z-50" style="background-color: #004e64;">
            <div class="flex justify-between items-center">
              <!--Logo-->
              <span class="text-xl font-oswald cursor-pointer text-white my-4">
                <a href="index.html">RE<f style="color: #9fffcb;">LIE</f>F CAMP</a>
              </span>
              <!--home icon-->
                    <div class="flex items-center justify-between">
                        <div class="relative">
                            <button class="flex mx-4 text-white focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                  </svg>
                            </button>
                        </div>

                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block h-7 w-7 rounded-full overflow-hidden shadow focus:outline-none">
                                <img class="h-full w-full object-cover"
                                    src="https://thumbs.dreamstime.com/b/default-avatar-profile-vector-user-profile-default-avatar-profile-vector-user-profile-profile-179376714.jpg"
                                    alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                                style="display: none;">
                                <p class="px-4 py-2 font-montserrat font-medium text-base text-gray-900">User Name</p>
                                <div class="bg-gray-500" style="padding: 0.5px 0px;"></div>
                                <a href=""
                                    class="block px-4 py-2 font-montserrat text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                  
                  <div class="bg-white rounded-md w-auto m-4 cursor-default">
                      <div>
                        <div class="flex justify-between items-center p-2 bg-slate-100">
                            <h3 class="font-oswald text-xl sm:text-2xl px-2">Booked Camp</h3>
                            <button class="text-xs text-black border border-black px-4 py-2 font-montserrat rounded hover:bg-red-400 hover:text-white hover:border-red-200 focus:text-black focus:bg-transparent">Leave Camp</button>
                        </div>
                      </div>
                    <div class="p-4">
                        <h1 class="font-medium font-oswald text-3xl mt-5 mb-10 text-center">Camp Title</h1>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:mx-10 my-5">
                            <div>
                                <div class="w-full px-5 mb-6">
                                    <label class="block uppercase font-montserrat tracking-wide text-gray-700 text-base font-bold">
                                      Address
                                    </label>
                                    <p class="text-gray-700 font-montserrat text-sm mb-4">Address Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</p>
                                    <p class="text-gray-700 font-montserrat text-base font-semibold mb-2">Total Capacity: <f class="font-normal">20</f></p>
                                    <p class="text-gray-700 font-montserrat text-base font-semibold mb-4">Remaining space: <f class="font-normal text-green-600">15</f></p>                                
                                    <label class="block uppercase font-montserrat tracking-wide text-gray-700 text-base font-bold">
                                        Discription
                                      </label>
                                      <p class="text-gray-700 font-montserrat text-sm mb-4">Address Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016 Address Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</p>    
                                      <p class="text-gray-700 font-montserrat text-base font-semibold mb-4">Contact Number : <f class="font-normal">9876543452</f></p>                                
                                </div>
                            </div>
                            <div class="px-4">
                                <iframe class="w-full h-full sm:max-h-64" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                                     frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>          
                        <section class="text-gray-600 my-10 lg:mx-10">
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-5">
                                <div>
                                    <img alt="gallery" class="w-full object-cover object-center block" src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                                </div>
                                <div>
                                    <img alt="gallery" class="w-full object-cover object-center block" src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                                </div>
                                <div>
                                    <img alt="gallery" class="w-full object-cover object-center block" src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                                </div>
                                <div>
                                    <img alt="gallery" class="w-full object-cover object-center block" src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                                </div>
                                <div>
                                    <img alt="gallery" class="w-full object-cover object-center block" src="https://cdn.pixabay.com/photo/2016/02/19/20/57/iceland-1211171_960_720.jpg">
                                </div>
                            </div>
                        </section>
                </main>
                <footer class="lg:text-left cursor-default">
                    <div class="text-center p-3 footer-bottom" style="background-color: #004e64;">
                      <span class="text-white font-oswald">© 2022 Copyright:</span>
                      <a class="text-white font-montserrat" href="index.html">Relief Camp</a>
                    </div>
                  </footer>
            <script>
                //search for appeared
                function search_arrived() {
                var input = document.getElementById("search_arrived_people");
                var filter = input.value.toLowerCase();
                var y = document.getElementsByClassName('data_arrived');
                var count = 0;
                for(i = 0; i < y.length; i++){
                    if (y[i].innerText.toLowerCase().includes(filter)){
                        y[i].classList.remove('hidden');
                        count++;
                    }else{
                        y[i].classList.add('hidden');
                    }
                    document.getElementById('total_arrived').innerHTML = count;
                }  
                }
                var c_arrive = document.getElementsByClassName('data_arrived').length;
                document.getElementById('total_arrived').innerHTML = c_arrive;

            </script>
    </body>
</html>