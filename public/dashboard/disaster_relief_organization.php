<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../src/css/tailwind.css">
    <link rel="stylesheet" href="../../src/css/dashboard/camp_dashboard.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../../src/js/dashboard.js" defer></script>
</head>

<body class="bg-gray-100">
    <!-- This is an example component -->
    <div>
        <nav class="border-b border-gray-200 fixed z-30 w-full">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                            class="lg:hidden mr-2 text-gray-100 cursor-pointer p-2 rounded">
                            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden text-gray-100" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <a class="text-xl font-bold flex items-center lg:ml-2.5">
                            <span class="self-center whitespace-nowrap">Relief Camp</span>
                        </a>
                    </div>
                    <div class="flex items-center justify-end">
                        <button id="toggleSidebarMobileSearch" type="button"
                            class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                        </button>
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
        <div class="flex overflow-hidden bg-white pt-16">
            <aside id="sidebar"
                class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
                aria-label="Sidebar" style="background-color: #004e64;">
                <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto" style="background-color: #004e64;">
                        <div class="flex-1 px-3 divide-y space-y-1">
                            <ul class="space-y-2 pb-2">
                                <li>
                                    <a id="requirement_btn" class="cursor-pointer text-base text-gray-800 bg-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Requirements</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="alerts_btn" class="cursor-pointer text-base text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">People in need</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=""
                                        class="text-base text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6 text-gray-100 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full relative overflow-y-auto lg:ml-64">
                <main class="min-h-screen">
                    <!-- Statistics Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 p-4 gap-4">
                        <div
                            class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div
                                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl">1,257</p>
                                <p>In Camps</p>
                            </div>
                        </div>
                        <div
                            class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div
                                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                  </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl">557</p>
                                <p>Total Camps</p>
                            </div>
                        </div>
                        <div
                            class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div
                                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl">11,257</p>
                                <p>Rescued People</p>
                            </div>
                        </div>
                        <div
                            class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div
                                class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                  </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl">1,257</p>
                                <p>Emergency Alerts</p>
                            </div>
                        </div>
                    </div>
                    <!-- ./Statistics Cards -->

                    <!--requirements-->
                    <div id="requirement_div" class="">
                        <div class="flex justify-between items-center px-4 mt-4">
                            <div class="w-fit">
                                   <select class="form-select text-base font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                      <option selected disabled hidden>Select Catagory</option>
                                      <option value="food">Food</option>
                                      <option value="meds">Medicine</option>
                                      <option value="other">Other</option>
                                   </select>
                                </div>
                               <div class="w-full md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                                  <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                  </svg>
                                  <input id="search_requirements" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none"
                                   onkeyup="search_require()" placeholder="Search here..."/>
                               </div>
                        </div>
                        <div class="flex flex-col mb-14">
                            <div class="py-4 px-4 overflow-x-auto">
                                <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                                    <table class="min-w-full">
                                        <thead class="sticky top-0 z-10 font-oswald">
                                            <tr class="">
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Camp</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Catagory</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Requirements</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Date</th>
                                            </tr>
                                        </thead>
            
                                        <tbody class="font-montserrat">
                                            <tr class="data_require">
                                                <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                                 <div class="ml-2">
                                                            <div class="text-sm leading-5 font-medium text-gray-900">John Dude
                                                            </div>
                                                            <div class="text-sm leading-5 text-gray-500">Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">Food</div>
                                                </td>
                                                 <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">Good food means that it enhances the condition of is consumers and growers; its production maintains the health of the environment while generating a profit for the grower</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">15-01-2023</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                                        <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3"> Total : <p id="total_requirement" class="font-montserrat font-semibold text-gray-500">100</p></span>                                                                      
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!--requirements ends-->

                    <!-- people in need -->
                    <div id="alert_div" class="hidden">
                        <div class="flex justify-end items-center px-4 mt-4">
                               <div class="w-full md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                                  <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                  </svg>
                                  <input id="search_need" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none"
                                   onkeyup="search_ineed()" placeholder="Search here..."/>
                                </div>
                        </div>
                        <div class="flex flex-col mb-14">
                            <div class="py-4 px-4 overflow-x-auto">
                                <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                                    <table class="min-w-full">
                                        <thead class="sticky top-0 z-10 font-oswald">
                                            <tr class="">
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Area</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Alerts</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Date</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Action</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    </th>
                                            </tr>
                                        </thead>
            
                                        <tbody class="font-montserrat">
                                            <tr class="data_need">
                                                <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                                 <div class="ml-2">
                                                            <div class="text-sm leading-5 font-medium text-gray-900">Area 51
                                                            </div>
                                                    </div>
                                                </td>
                                                 <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">23</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">15-01-2023</div>
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    <button class="bg-green-500 text-white px-4 py-2 font-montserrat rounded">Rescued</button>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                                    <button title="remove" class="text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                      </svg>
                                                    </button>
                                                   </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                                    <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3"> Total : <p id="total_need" class="font-montserrat font-semibold text-gray-500">100</p></span>                                                                      
                                </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- people in need end -->

                    <!-- people in history need -->
                    <div id="alerthistory_div" class="hidden">
                        <div class="flex flex-col">
                            <div class="py-4 px-4 overflow-x-auto mb-14">
                                <h1 class="font-oswald mb-4">Rescued History</h1>
                                <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                                    <table class="min-w-full">
                                        <thead class="sticky top-0 z-10 font-oswald">
                                            <tr class="">
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Area</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Alerts</th>
                                                <th
                                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Date</th>
                                            </tr>
                                        </thead>
            
                                        <tbody class="font-montserrat">
                                            <tr class="">
                                                <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                                 <div class="ml-2">
                                                            <div class="text-sm leading-5 font-medium text-gray-900">Area 51
                                                            </div>
                                                    </div>
                                                </td>
                                                 <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">23</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                    <div class="text-sm leading-5 text-gray-900">15-01-2023</div>
                                                </td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                    <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                                        <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3"> Total : <p id="total_arrived" class="font-montserrat font-semibold text-gray-500">100</p></span>                                                                      
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- people in need history end -->


    <footer class="lg:text-left absolute bottom-0 w-full cursor-default">
        <div class="text-center p-3 footer-bottom" style="background-color: #004e64;">
            <span class="text-white font-oswald">© 2022 Copyright:</span>
            <a class="text-white font-montserrat" href="index.html">Relief Camp</a>
        </div>
    </footer>
    </main>
    </div>
    <script>
        //hide and show
                var requirement = document.getElementById('requirement_div');
                var alerts = document.getElementById('alert_div');
                var alerthistory = document.getElementById('alerthistory_div');
                
                var requirement_btn = document.getElementById('requirement_btn');
                var alerts_btn = document.getElementById('alerts_btn');

                
                requirement_btn.onclick = function() {
                    requirement.classList.remove('hidden');
                    alerts.classList.add('hidden');
                    alerthistory.classList.add('hidden');
                    requirement_btn.classList.add('text-gray-800','bg-gray-100');
                    requirement_btn.classList.remove('text-gray-100','bg-transparent');
                    alerts_btn.classList.remove('text-gray-800','bg-gray-100');
                }
                alerts_btn.onclick = function() {
                    requirement.classList.add('hidden');
                    alerts.classList.remove('hidden');
                    alerthistory.classList.remove('hidden');
                    requirement_btn.classList.remove('text-gray-800','bg-gray-100');
                    requirement_btn.classList.add('text-gray-100','bg-transparent');
                    alerts_btn.classList.add('text-gray-800','bg-gray-100');
                }
                

                //search for requirements
                function search_require() {
                var input = document.getElementById("search_requirements");
                var filter = input.value.toLowerCase();
                var y = document.getElementsByClassName('data_require');
                var count = 0;
                for(i = 0; i < y.length; i++){
                    if (y[i].innerText.toLowerCase().includes(filter)){
                        y[i].classList.remove('hidden');
                        count++;
                    }else{
                        y[i].classList.add('hidden');
                    }
                    document.getElementById('total_requirement').innerHTML = count;
                }  
                }
                var c_require = document.getElementsByClassName('data_require').length;
                document.getElementById('total_requirement').innerHTML = c_require;


                //search for in need
                function search_ineed() {
                var input = document.getElementById("search_need");
                var filter = input.value.toLowerCase();
                var y = document.getElementsByClassName('data_need');
                var count = 0;
                for(i = 0; i < y.length; i++){
                    if (y[i].innerText.toLowerCase().includes(filter)){
                        y[i].classList.remove('hidden');
                        count++;
                    }else{
                        y[i].classList.add('hidden');
                    }
                    document.getElementById('total_need').innerHTML = count;
                }  
                }
                var c_need = document.getElementsByClassName('data_need').length;
                document.getElementById('total_need').innerHTML = c_need;
    </script>
    </body>
</html>