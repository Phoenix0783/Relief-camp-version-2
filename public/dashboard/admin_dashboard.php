<?php
require_once("../includes/db_connect.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../src/css/tailwind.css">
    <link rel="stylesheet" href="../../src/css/dashboard/camp_dashboard.css">
    <link rel="stylesheet" href="../../src/css/dashboard/admin_dashboard.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../../src/js/admin_dashboard.js" defer></script>
    <script src="../../src/js/dashboard.js" defer></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">
    <!-- This is an example component -->
    <div>
        <nav class="border-b border-gray-200 fixed z-30 w-full">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-100 cursor-pointer p-2 rounded">
                            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden text-gray-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <a href="https://demo.themesberg.com/windster/" class="text-xl font-bold flex items-center lg:ml-2.5">
                            <span class="self-center whitespace-nowrap">Relief Camp</span>
                        </a>
                    </div>
                    <div class="flex items-center justify-end">
                        <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                        </button>
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block h-7 w-7 rounded-full overflow-hidden shadow focus:outline-none">
                                <img class="h-full w-full object-cover" src="https://thumbs.dreamstime.com/b/default-avatar-profile-vector-user-profile-default-avatar-profile-vector-user-profile-profile-179376714.jpg" alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                            <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10" style="display: none;">
                                <p class="px-4 py-2 font-montserrat font-medium text-base text-gray-900">User Name</p>
                                <div class="bg-gray-500" style="padding: 0.5px 0px;"></div>
                                <a href="" class="block px-4 py-2 font-montserrat text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
        <div class="flex overflow-hidden bg-white pt-16">
            <aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar" style="background-color: #004e64;">
                <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto" style="background-color: #004e64;">
                        <div class="flex-1 px-3 divide-y space-y-1">
                            <ul class="space-y-2 pb-2">
                                <li>
                                    <a class="cursor-default text-base text-gray-100 font-normal rounded-lg flex items-center p-2 group ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Camps</span>
                                    </a>

                                <li>
                                    <a id="request_btn" class="cursor-pointer text-base text-gray-800 bg-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-7 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                        <span class="pl-2">Camp Requests</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="active_btn" class="cursor-pointer text-base text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-7 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                        <span class="pl-2">Active Camps</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="org_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0 transition duration-75" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                        </svg>
                                        <span class="ml-3">Organization</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="orgreq_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-7 h-6 w-6 flex-shrink-0 transition duration-75" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span class="pl-2">Requests</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="banner_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 hover:text-gray-800 group">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-7 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span class="pl-2">Banner</span>
                                    </a>
                                </li>

                                </li>
                                <li>
                                    <a id="slider_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Change Content</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="faq_btn" class="text-base cursor-pointer text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">FAQ | News</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-base text-gray-100 font-normal rounded-lg hover:bg-gray-100 hover:text-gray-800 flex items-center p-2 group ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
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
                    <!-- Statistics card -->
                    <div id="statistics" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 p-4 gap-4">
                        <div class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl" id="organizations"></p>
                                <p>Total Organizations</p>
                            </div>
                        </div>
                        <div class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl">557</p>
                                <p>Total Camps</p>
                            </div>
                        </div>
                        <div class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl">11,257</p>
                                <p>Current in Camps</p>
                            </div>
                        </div>
                        <div class="shadow-sm hover:shadow-lg rounded-md flex items-center justify-between p-3 font-medium group">
                            <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl">1,257</p>
                                <p>Total Visitors</p>
                            </div>
                        </div>
                    </div>
                    <!-- Statistics card end -->

                    <!--camp request-->
                    <div id="request_div" class="">
                        <div class="flex justify-end items-center px-4 mt-4">
                            <div class="w-full md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                                <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <input id="search_requesting" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none" onkeyup="search_request()" placeholder="Search here..." />
                            </div>
                        </div>
                        <div class="flex flex-col mb-14">
                            <div class="py-4 px-4 overflow-x-auto">
                                <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                                    <table class="min-w-full">
                                        <thead class="sticky top-0 z-10 font-oswald">
                                            <tr class="">
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Camp</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Date</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Status</th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody class="font-montserrat">
                                            <?php
                                            $query = "SELECT `camp_title`, `camp_address`, `Status`, `Date` FROM `create_camp`";
                                            $result = mysqli_query($connect, $query);
                                            while ($row = mysqli_fetch_array($result)) { ?>
                                                <tr data-href="camp_request_detail.php?campTitle=<?php echo $row["camp_title"] ?>" class="data_requests">
                                                    <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="ml-2">
                                                            <div class="text-sm leading-5 font-medium text-gray-900"><?php echo $row["camp_title"] ?>
                                                            </div>
                                                            <div class="text-sm leading-5 text-gray-500"><?php echo $row["camp_address"] ?></div>
                                                        </div>
                                </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900"><?php echo $row["Date"] ?></div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                    <span class="px-2 py-1.5 font-montserrat font-semibold text-sm leading-tight text-yellow-700 bg-yellow-100 rounded-full whitespace-nowrap"><?php echo $row["Status"] ?></span>
                                </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                <button title="arrived" class="mr-2 text-green-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg></button>
                                <button title="remove" class="text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </td>
                            <?php } ?>
                        </tr>
                            </tbody>
                            </table>
                            <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                                <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3"> Total : <p id="total_requests" class="font-montserrat font-semibold text-gray-500">100</p></span>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!--camp request ends-->
            <!--verified camp-->
            <div id="active_div" class="hidden">
                <div class="flex justify-end items-center px-4 mt-4">
                    <div class="w-full md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                        <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input id="search_varified_camp" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none" onkeyup="search_varified()" placeholder="Search here..." />
                    </div>
                </div>
                <div class="flex flex-col mb-14">
                    <div class="py-4 px-4 overflow-x-auto">
                        <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                            <table class="min-w-full">
                                <thead class="sticky top-0 z-10 font-oswald">
                                    <tr class="">
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Camp</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            People</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Date</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Status</th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="font-montserrat">
                                    <tr class="data_varified">
                                        <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="ml-2">
                                                <div class="text-sm leading-5 font-medium text-gray-900">John Dude
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500">9834562343 9834562343 9834562343 9834562343 9834562343</div>
                                            </div>
                        </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">20</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            <span class="px-2 py-1.5 font-montserrat text-sm font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full">Active</span>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                            <button class="bg-red-500 text-white px-4 py-2 font-montserrat rounded">Remove</button>
                        </td>
                        </tr>

                        </tbody>
                        </table>
                        <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                            <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3"> Total : <p id="total_varified" class="font-montserrat font-semibold text-gray-500">100</p></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--verified camp end-->
        <!-- current organizations -->
        <div id="org_div" class="hidden">
            <div class="flex justify-end items-center px-4 mt-4">
                <div class="w-full md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                    <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input id="search_org" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none" onkeyup="search_org()" placeholder="Search here..." />
                </div>
            </div>
            <div class="flex flex-col mb-14">
                <div class="py-4 px-4 overflow-x-auto">
                    <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                        <table class="min-w-full">
                            <thead class="sticky top-0 z-10 font-oswald">
                                <tr class="">
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Organization</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Type</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Date</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Contact No</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Action</th>
                                </tr>
                            </thead>

                            <tbody class="font-montserrat">
                                <tr class="data_org">
                                    <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="ml-2">
                                            <div class="text-sm leading-5 font-medium text-gray-900">Our
                                                Organization
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">Navsari, Gujarat
                                            </div>
                                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">Government</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5">
                        <span class="px-2 py-1.5 font-montserrat text-sm font-normal text-gray-900 leading-tight rounded-full">9876543210</span>
                    </td>

                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                        <button class="bg-red-500 text-white px-4 py-2 font-montserrat rounded">Remove</button>
                    </td>
                    </tr>

                    </tbody>
                    </table>
                    <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                        <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3">
                            Total : <p id="total_org" class="font-montserrat font-semibold text-gray-500">100</p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- current organization end -->

    <!-- Organization requests -->
    <div id="orgreq_div" class="hidden">
        <div class="flex justify-end items-center px-4 mt-4">
            <div class="w-full md:w-1/3 flex items-center bg-white rounded border border-solid border-gray-700">
                <svg class="relative w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input id="search_request" type="text" class="md:text-xs lg:text-base form-control font-montserrat w-full rounded pl-2 pr-1.5 py-1.5 outline-none" onkeyup="search_request2()" placeholder="Search here..." />
            </div>
        </div>
        <div class="flex flex-col mb-14">
            <div class="py-4 px-4 overflow-x-auto">
                <div class="table-container align-middle max-h-screen overflow-y-auto inline-block min-w-full shadow sm:rounded-lg border-b border-gray-200" style="scrollbar-width: thin;">
                    <table class="min-w-full">
                        <thead class="sticky top-0 z-10 font-oswald">
                            <tr class="">
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Organization</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Type</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Date</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Contact No</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>

                        <tbody class="font-montserrat">
                            <tr class="data_request">
                                <td class="p-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="ml-2">
                                        <div class="text-sm leading-5 font-medium text-gray-900">Our
                                            Organization
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">Navsari, Gujarat
                                        </div>
                                    </div>
                </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-900">Government</div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-900">15-01-2021</div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5">
                    <span class="px-2 py-1.5 font-montserrat text-sm font-normal text-gray-900 leading-tight rounded-full">9876543210</span>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                    <button title="varify" class="mr-2 text-green-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg></button>
                    <button title="remove" class="text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </td>
                </tr>

                </tbody>
                </table>
                <div class="px-4 py-3 bg-gray-50 sticky bottom-0 z-10">
                    <span class="flex text-gray-600 items-center text-sm font-montserrat font-semibold col-span-3">
                        Total : <p id="total_request" class="font-montserrat font-semibold text-gray-500">100</p></span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Organization requests end-->

    <!--banner div-->
    <div id="banner_div" class="hidden">
        <div class="mb-14 p-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                <div class="relative">
                    <img alt="gallery" class="w-full object-cover object-center rounded" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white absolute top-0 right-0 mr-1 mt-1 cursor-pointer opacity-50 hover:opacity-100 transition ease-in-out duration-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="relative">
                    <img alt="gallery" class="w-full object-cover object-center rounded" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white absolute top-0 right-0 mr-1 mt-1 cursor-pointer opacity-50 hover:opacity-100 transition ease-in-out duration-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="relative">
                    <img alt="gallery" class="w-full object-cover object-center rounded" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white absolute top-0 right-0 mr-1 mt-1 cursor-pointer opacity-50 hover:opacity-100 transition ease-in-out duration-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="relative">
                    <img alt="gallery" class="w-full object-cover object-center rounded" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white absolute top-0 right-0 mr-1 mt-1 cursor-pointer opacity-50 hover:opacity-100 transition ease-in-out duration-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="relative">
                    <img alt="gallery" class="w-full object-cover object-center rounded" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white absolute top-0 right-0 mr-1 mt-1 cursor-pointer opacity-50 hover:opacity-100 transition ease-in-out duration-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="relative">
                    <img alt="gallery" class="w-full object-cover object-center rounded" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white absolute top-0 right-0 mr-1 mt-1 cursor-pointer opacity-50 hover:opacity-100 transition ease-in-out duration-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2">
                <div class="upload_card_v my-4 overflow-hidden p-2 rounded w-full">
                    <div class="upload_form_v rounded relative flex justify-center items-center">
                        <span class="inner_v select_v">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                        </span>
                        <input name="file_v" type="file" class="file_v" multiple />
                    </div>
                    <div class="w-full card_top_v flex items-center justify-end mt-5">
                        <button type="button" class="font-oswald font-normal px-3 py-1.5 rounded">Upload</button>
                    </div>
                </div>
                <div class="md:col-span-3 mt-6">
                    <div class="img_container_v grid grid-cols-2 md:grid-cols-3 gap-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner div end-->

    <!-- Slider content -->
    <div id="slider_div" class="hidden">
        <div class="w-full flex flex-col px-4 mt-10 mb-14">
            <h3 class="my-10 text-3xl font-oswald text-center font-medium" style="color: #202020;">
                Slider Content</h3>
            <div class="">
                <div class="py-6 my-8 rounded w-full" style="background-color: rgba(0, 165, 207, 0.1);">
                    <h3 class="mb-10 text-2xl font-oswald text-center font-medium" style="color: #202020;">
                        Slide 1</h3>
                    <!--form starts-->
                    <form action="" method="POST" class="">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="">
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Title</label>
                                        <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Title of Slide">
                                    </div>
                                </div>
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Description</label>
                                        <textarea class="mt-3 h-28 block font-montserrat w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Description of Slide"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Button</label>
                                        <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Button Text">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Update Picture</label>
                                        <div class="upload_card my-4 bg-gray-200">
                                            <div class="card_top">
                                                <p class="font-oswald">Drag & drop image</p>
                                                <button type="button" class="font-oswald font-normal">Upload</button>
                                            </div>
                                            <div class="upload_form bg-cover bg-center bg-no-repeat">
                                                <span class="inner font-montserrat">Drag & drop image here or <span class="select font-oswald">Browse</span></span>
                                                <input name="file" type="file" class="file" />
                                            </div>
                                            <div class="img-container">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">

                            <button id="sub-btn" class="font-normal font-oswald py-2 px-4 rounded mr-2 outline-none" type="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
                <div class="py-6 my-8 rounded w-full" style="background-color: rgba(0, 165, 207, 0.1);">
                    <h3 class="mb-10 text-2xl font-oswald text-center font-medium" style="color: #202020;">
                        Slide 2</h3>
                    <form action="" method="POST" class="">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="">
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Title</label>
                                        <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Title of Slide">
                                    </div>
                                </div>
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Description</label>
                                        <textarea class="mt-3 h-28 block font-montserrat w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Description of Slide"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Button</label>
                                        <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Button Text">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Update
                                            Picture</label>
                                        <div class="upload_card2 my-4 bg-gray-200">
                                            <div class="card_top2">
                                                <p class="font-oswald">Drag & drop image</p>
                                                <button type="button" class="font-oswald font-normal">Upload</button>
                                            </div>
                                            <div class="upload_form2 bg-cover bg-center bg-no-repeat">
                                                <span class="inner2 font-montserrat">Drag & drop image here or <span class="select2 font-oswald">Browse</span></span>
                                                <input name="file2" type="file" class="file2" />
                                            </div>
                                            <div class="img-container2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">

                            <button id="sub-btn" class="font-normal font-oswald py-2 px-4 rounded mr-2 outline-none" type="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
                <div class="py-6 my-8 rounded w-full" style="background-color: rgba(0, 165, 207, 0.1);">
                    <h3 class="mb-10 text-2xl font-oswald text-center font-medium" style="color: #202020;">
                        Slide 3</h3>
                    <form action="" method="POST" class="">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="">
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Title</label>
                                        <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Title of Slide">
                                    </div>
                                </div>
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Description</label>
                                        <textarea class="mt-3 h-28 block font-montserrat w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Description of Slide"></textarea>
                                    </div>
                                </div>
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Button</label>
                                        <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Button Text">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-wrap mx-3 mb-6">
                                    <div class="w-full">
                                        <label class="text-black font-normal text-lg font-oswald">Update
                                            Picture</label>
                                        <div class="upload_card3 my-4 bg-gray-200">
                                            <div class="card_top3">
                                                <p class="font-oswald">Drag & drop image</p>
                                                <button type="button" class="font-oswald font-normal">Upload</button>
                                            </div>
                                            <div class="upload_form3 bg-cover bg-center bg-no-repeat">
                                                <span class="inner3 font-montserrat">Drag & drop image here or <span class="select3 font-oswald">Browse</span></span>
                                                <input name="file3" type="file" class="file3" />
                                            </div>
                                            <div class="img-container3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">

                            <button id="sub-btn" class="font-normal font-oswald py-2 px-4 rounded mr-2 outline-none" type="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider content end -->

    <!-- Faq -->
    <div id="faq_div" class="hidden">
        <div class="py-6 mt-8 rounded w-full px-4 mb-14">
            <!--form starts-->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="">
                    <form action="" method="POST" class="">
                        <div class="flex flex-wrap mx-3 mb-6">
                            <h2 class="font-normal font-oswald mb-4 text-4xl mx-auto">FAQ</h2>
                            <div class="w-full">
                                <label class="text-black font-normal text-lg font-oswald">Question</label>
                                <input class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Your Question">
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full">
                                <label class="text-black font-normal text-lg font-oswald">Answer</label>
                                <textarea rows="5" class="mt-3 block font-montserrat w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Your Answer"></textarea>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <button id="sub-btn" class="font-normal font-oswald py-2 px-4 rounded mr-2 outline-none" type="submit">
                                Post
                            </button>
                        </div>
                    </form>
                </div>
                <div class="self-end">
                    <form action="" method="POST" class="">
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full">
                                <label class="text-black font-normal text-center text-lg font-oswald">Send Emails</label>
                                <textarea rows="10" class="mt-3 block font-montserrat w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Write here..."></textarea>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <button id="sub-btn" class="font-normal font-oswald py-2 px-4 rounded mr-2 outline-none" type="submit">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq end -->
    <footer class="absolute bottom-0 w-full lg:text-left cursor-default">
        <div class="text-center p-3 footer-bottom" style="background-color: #004e64;">
            <span class="text-white font-oswald">© 2022 Copyright:</span>
            <a class="text-white font-montserrat" href="index.html">Relief Camp</a>
        </div>
    </footer>
    </main>
    </div>
</body>

</html>