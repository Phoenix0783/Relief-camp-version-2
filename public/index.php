<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../src/css/tailwind.css" rel="stylesheet">
  <link href="../src/css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f04b336dbc.js" crossorigin="anonymous"></script>
  <script src="../src/js/home.js" defer></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js" defer></script>
</head>

<body>
  <!--navigation start-->
  <nav id="site-navigation"
    class="font-oswald z-50 px-4 md:px-8 shadow-xl fixed top-0 w-full justify-between uppercase flex items-center text-white">
    <div class="nav-logo ease-linear">
      <h1><a href="">Relief Camp</a></h1>
    </div>
    <ul class="nav-links flex">
      <li class="">
        <a class="relative" href="#services">Services</a>
      </li>
      <li class="">
        <a class="relative" href="#steps">Steps</a>
      </li>
      <li class="">
        <a class="relative" href="#camps">Camps</a>
      </li>
      <li class="">
        <a class="relative" href="#faq">Faq's</a>
      </li>
      <li class="">
        <a class="relative" href="#contact">Contact</a>
      </li>
    </ul>
    <button class="register-btn border px-4 py-2 rounded">
      Register | Sign In
    </button>
    <div class="burger hidden cursor-pointer">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
  <!--navigation end-->

  <!-- Slider -->
  <div id="services" class="slideshow-container relative">
    <div class="mySlides hidden fade w-full h-screen relative bg-black">

      <img src="images/camps.jpg" class="block opacity-70 w-full h-full object-cover">

      <div class="info fade absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white text-center">
        <h1 style="color: white;" class="slide-title mb-6">Camps around you</h1>
        <p class="slide-description mb-10">Find the nearest rescue camp around you and get safety</p>
        <button class="slider-btn find-camp-btn relative">
          Find Camp
        </button>
      </div>
    </div>
    <div class="mySlides hidden fade w-full h-screen relative bg-black">
      <img src="images/Disaster.jpg" class="block opacity-60 w-full h-full object-cover">
      <div class="info fade absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white w-1/2 text-center">
        <h1 style="color: white;" class="slide-title mb-6">Help & Support</h1>
        <p class="slide-description mb-10">During these tough times, help those suffering and affected ones</p>
        <button class="slider-btn donate-btn relative">
          Donate Now
        </button>
      </div>
    </div>
    <div class="mySlides hidden fade w-full h-screen relative bg-black">
      <img src="images/create-camp.jpg" class="block opacity-70 w-full h-full object-cover">
      <div class="info fade absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white w-1/2 text-center">
        <h1 style="color: white;" class="slide-title mb-6">Join the community</h1>
        <p class="slide-description mb-10">Help us by creating more camps for the affected ones</p>
        <button class="slider-btn create-camp-btn relative">
          <a href="registration.html">Create Camp</a>
        </button>
      </div>
    </div>
    <a style="color: white;" class="prev cursor-pointer absolute text-white text-5xl"
      onclick="plusSlides(-1)">&#8592;</a>
    <a style="color: white;" class="next cursor-pointer absolute text-white text-5xl"
      onclick="plusSlides(1)">&#8594;</a>
  </div>
  <!-- SLider end -->

  <!-- Steps section -->
  <section id="steps" class="steps-section py-14 sm:py-14 lg:py-28 px-4 sm:px-8">
    <h1 class="text-center mb-16 text-4xl uppercase font-medium font-oswald" style="color: #202020">
      Find Camp in 4 easy steps
    </h1>
    <div class="container w-fit mx-auto flex flex-wrap flex-col">
      <div class="flex mx-auto flex-wrap mb-14 font-montserrat">
        <a id="tab-1" onclick="getIdName(this.getAttribute('id'));"
          class="tab tab-active sm:px-6 cursor-pointer py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none tracking-wider">
          STEP 1
        </a>
        <a id="tab-2" onclick="getIdName(this.getAttribute('id'));"
          class="tab sm:px-6 cursor-pointer py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none tracking-wider">
          STEP 2
        </a>
        <a id="tab-3" onclick="getIdName(this.getAttribute('id'));"
          class="tab sm:px-6 cursor-pointer py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none tracking-wider">
          STEP 3
        </a>
        <a id="tab-4" onclick="getIdName(this.getAttribute('id'));"
          class="tab sm:px-6 cursor-pointer py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none tracking-wider">
          STEP 4
        </a>
      </div>
      <div class="steps overflow-hidden">
        <div class="step step-active flex flex-col items-center">
          <img class="block mx-auto mb-10 object-cover object-center rounded" alt="hero" src="images/step-1.png"
            style="width: 200px; height: 200px;">
          <div class="flex flex-col text-center w-full sm:w-1/2 mx-auto">
            <h1 class="text-xl font-medium font-oswald title-font mb-4 text-gray-900">Search Camp</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed font-montserrat text-base">Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Atque praesentium, eius ad molestias porro id esse repellat ipsa nemo hic alias
              excepturi, quasi itaque saepe quidem dolore. Possimus, harum consectetur.</p>
          </div>
        </div>
        <div class="step flex flex-col items-center">
          <img class="block mx-auto mb-10 object-cover object-center rounded" alt="hero" src="images/step-2.png"
            style="width: 200px; height: 200px;">
          <div class="flex flex-col text-center w-full sm:w-1/2 mx-auto">
            <h1 class="text-xl font-medium font-oswald title-font mb-4 text-gray-900">Select and Register</h1>
            <p class="lg:w-2/3 mx-auto font-montserrat leading-relaxed text-base">Whatever cardigan tote bag tumblr
              hexagon brooklyn
              asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
              bun
              deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
          </div>
        </div>
        <div class="step flex flex-col items-center">
          <img class="block mx-auto mb-10 object-cover object-center rounded" alt="hero" src="images/step-3.png"
            style="width: 200px; height: 200px;">
          <div class="flex flex-col text-center w-full sm:w-1/2 mx-auto">
            <h1 class="text-xl font-medium font-oswald title-font mb-4 text-gray-900">Get Directions</h1>
            <p class="lg:w-2/3 mx-auto font-montserrat leading-relaxed text-base">Whatever cardigan tote bag tumblr
              hexagon brooklyn
              asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
              bun
              deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
          </div>
        </div>
        <div class="step flex flex-col items-center">
          <img class="block mx-auto mb-10 object-cover object-center rounded" alt="hero"
            src="images/step-4-modified.png" style="width: 200px; height: 200px;">
          <div class="flex flex-col text-center w-full sm:w-1/2 mx-auto">
            <h1 class="text-xl font-medium font-oswald title-font mb-4 text-gray-900">Verify</h1>
            <p class="lg:w-2/3 mx-auto font-montserrat leading-relaxed text-base">Whatever cardigan tote bag tumblr
              hexagon brooklyn
              asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
              bun
              deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Steps end -->

  <!-- Search by... section -->
  <section id="camps" class="search-by-section py-14 sm:py-14 lg:py-28 px-4 sm:px-8">
    <h1 class="text-center mb-16 text-4xl uppercase font-medium font-oswald" style="color: #202020">
      Search a Nearest Camp
    </h1>
    <div class="container w-fit mx-auto flex flex-wrap flex-col">
      <div class="flex mx-auto flex-wrap mb-14 font-montserrat">
        <a id="search-by-tab-1" onclick="getOptionIdName(this.getAttribute('id'));"
          class="search-tab uppercase search-tab-active sm:px-6 cursor-pointer py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none tracking-wider">
          By District
        </a>
        <a id="search-by-tab-2" onclick="getOptionIdName(this.getAttribute('id'));"
          class="search-tab uppercase sm:px-6 cursor-pointer py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none tracking-wider">
          By Pincode
        </a>
        <a id="search-by-tab-3" onclick="getOptionIdName(this.getAttribute('id'));"
          class="search-tab uppercase sm:px-6 cursor-pointer py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none tracking-wider">
          On Map
        </a>
      </div>
      <div class="search-by-content overflow-hidden">
        <div class="search-by-option search-by-active flex flex-wrap sm:flex-nowrap items-center justify-center">
          <div class="w-full sm:w-1/2 px-3 mb-6 sm:mb-0">
            <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
              State
            </label>
            <div class="relative">
              <select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt"
                class="block font-montserrat appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                required>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 px-3 mb-6 sm:mb-0">
            <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
              city
            </label>
            <div class="relative">
              <select id="state"
                class="block font-montserrat appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                required>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
              </div>
            </div>
          </div>
          <button id="search-btn" class="font-montserrat font-medium rounded text-white py-2 px-6 self-end">
            Search
          </button>
        </div>
        <div class="search-by-option flex items-center justify-center">
          <div class="w-full sm:w-1/2 px-3 mb-6">
            <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
              Pincode
            </label>
            <input
              class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              type="text" placeholder="pincode" required>
          </div>
          <button id="search-btn" class="font-montserrat font-medium rounded text-white py-2 px-6">
            Search
          </button>
        </div>
        <div class="search-by-option flex flex-col items-center">
          <img class="block mx-auto mb-10 object-cover object-center rounded" alt="hero" src="images/step-3.png"
            style="width: 200px; height: 200px;">
          <div class="flex flex-col text-center w-full sm:w-1/2 mx-auto">
            <h1 class="text-xl font-medium font-oswald title-font mb-4 text-gray-900">Get Directions</h1>
            <p class="lg:w-2/3 mx-auto font-montserrat leading-relaxed text-base">Whatever cardigan tote bag tumblr
              hexagon brooklyn
              asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
              bun
              deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Search by... end -->

  <!-- FAQ -->
  <section id="faq" class="faq-section py-14 sm:py-14 lg:py-28 px-4 sm:px-8">
    <div class="faq-container md:flex justify-center">
      <div class="faq-img-container mb-8 md:mb-0 md:w-2/5 flex items-center ml-auto mr-16 self-center">
        <img src="images/fAQ.png" class="" alt="faq img">
      </div>
      <div class="accordion-container w-full mr-auto">
        <h2 class="accordion__heading top-0 w-full">Frequently Asked Questions</h2>
        <div class="accordion overflow-y-auto overflow-x-hidden" style="max-height: 320px;">
          <div class="accordion__item">
            <button class="accordion__btn">

              <span class="accordion__caption"><i class="far fa-lightbulb"></i>How to Login for camps ?</span>
              <span class="accordion__icon"><i class="fa fa-caret-down"></i></span>
            </button>

            <div class="accordion__content">
              <p>The most important thing is that you want to learn something that interests you, because once you
                start learning, you'll be with this topic for a while. Choosing something just because it's popular
                or what others are doing isn't the way to go because if you don't have a true interest in it, you'll
                lose the motivation to learn! Spend some time seriously looking into the different tech career paths
                before choosing one to go down.</p>
            </div>
          </div>

          <div class="accordion__item">
            <button class="accordion__btn">

              <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is the requirement for Registering a camp ?</span>
              <span class="accordion__icon"><i class="fa fa-caret-down"></i></span>
            </button>

            <div class="accordion__content">
              <p>I usually tell most people to start by learning HTML and CSS, then move into learning JavaScript. The
                reason is that JavaScript is used everywhere: frontend, backend, and even to build mobile apps. It
                has many use cases, which is why I think it's smart to learn.</p>
            </div>
          </div>

          <div class="accordion__item">
            <button class="accordion__btn">

              <span class="accordion__caption"><i class="far fa-lightbulb"></i>Can donation be provided by the third party ?</span>
              <span class="accordion__icon"><i class="fa fa-caret-down"></i></span>
            </button>

            <div class="accordion__content">
              <p>If you have an interest in coding and graphic design, then there's nothing to say you shouldn't learn
                skills in both areas. They often work hand-in-hand, so having knowledge and skills in both areas
                could be desirable for certain career paths. You could also think about pursuing something in
                between like UI design, which is a very in-demand career right now!
                <br><br>
                In general, having design skills along with coding skills is helpful. But it's also okay to do one
                over the other. My advice would be to just get started! You can always change directions later… as
                long as you're changing directions to the final destination you're looking for!
              </p>
            </div>
          </div>

          <div class="accordion__item">
            <button class="accordion__btn">

              <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is the maximum capacity of a camp ?</span>
              <span class="accordion__icon"><i class="fa fa-caret-down"></i></span>
            </button>

            <div class="accordion__content">
              <p>Now, in 2020, it's a no-brainer: Python 3 is definitely the way to go. There are still some
                situations where picking up Python 2 might be advantageous, or you may just want to learn a little
                of the history and the differences between Python 2 and 3 for curiosity's sake, but job-wise, Python
                3 is the clear winner.</p>
            </div>
          </div>

          <div class="accordion__item">
            <button class="accordion__btn">

              <span class="accordion__caption"><i class="far fa-lightbulb"></i>How do i choose a camp ?</span>
              <span class="accordion__icon"><i class="fa fa-caret-down"></i></span>
            </button>

            <div class="accordion__content">
              <p>Personally, I'd say choose a path and stick to it! Learning too many things at once will slow you
                down. Here are a few ideas of things you can choose to focus on, and a little bit about each one.
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__btn">

              <span class="accordion__caption"><i class="far fa-lightbulb"></i>Are the camps provided by the government or it is owned by private users ?</span>
              <span class="accordion__icon"><i class="fa fa-caret-down"></i></span>
            </button>

            <div class="accordion__content">
              <p>Personally, I'd say choose a path and stick to it! Learning too many things at once will slow you
                down. Here are a few ideas of things you can choose to focus on, and a little bit about each one.
              </p>
            </div>
          </div>
          <div class="accordion__item">
            <button class="accordion__btn">

              <span class="accordion__caption"><i class="far fa-lightbulb"></i>What accommodations can I expect the camp to make for my child's needs ?</span>
              <span class="accordion__icon"><i class="fa fa-caret-down"></i></span>
            </button>

            <div class="accordion__content">
              <p>Personally, I'd say choose a path and stick to it! Learning too many things at once will slow you
                down. Here are a few ideas of things you can choose to focus on, and a little bit about each one.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Faq section end -->

  <!-- Contact form -->
  <section id="contact" class="contact-section grid grid-cols-1 py-14 sm:py-14 lg:py-28 px-4 sm:px-8">
    <!--conatainer starts-->
    <div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center">
      <div class="px-6 py-8 rounded w-full">
        <h3 class="text-3xl font-oswald text-center" style="color: #202020; margin-bottom: 1rem;">Contact Us</h3>
        <div class="relative mx-auto flex justify-between items-center w-fit" style="margin-bottom: 2rem;">
          <svg xmlns="http://www.w3.org/2000/svg" class="absolute h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
          </svg>
          <h6 class="font-oswald" style="color: #202020; margin-left: 1.5rem">: reliefcamp@helper.com</h6>
        </div>
        <!--form starts-->
        <form action="" method="POST" class="">
          <div class="">
            <!--name feild div-->
            <div>
              <span class="uppercase text-sm font-oswald font-medium" style="color: #202020;">Full Name</span>
              <input class="mt-2 block border font-montserrat border-gray-400 w-full p-3 rounded mb-4"
                  type="text" placeholder="Your Name">
            </div>
            <!--email feild div-->
            <div class="mt-8">
              <span class="uppercase text-sm font-oswald font-medium" style="color: #202020;">Email</span>
              <input class="mt-2 block border font-montserrat border-gray-400 w-full p-3 rounded mb-4"
                  type="text" placeholder="john.xyx@example.com">
              <!--message feild div-->
              <div class="mt-8">
                <span class="uppercase text-sm font-oswald font-medium" style="color: #202020;">Message</span>
                  <textarea class="mt-2 h-28 block border font-montserrat border-gray-400 w-full p-3 rounded mb-4" placeholder="Type your message here..."></textarea>
              </div>
              <!--send button div-->
              <div class="mt-9">
                <button id="send-btn" class="text-lg font-oswald text-white mt-3 py-2 px-6 rounded">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section>
  <!-- Contact form end -->
  <!-- slide show of organization -->
  <section class="py-8 sm:py-14 lg:py-28" style="background-color: rgba(0, 165, 207, 0.1);">
    <div>
        <h3 class="font-oswald py-3 text-center text-3xl">
            Organizations with us
        </h3>
    </div>
    <div class="m-auto w-11/12 sm:w-3/4 relative grid place-items-center overflow-hidden">
        <div class="slide-track flex py-8">
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
            <div class="slide">
                <img id="slide-img" src="https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png">
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center">
        <button id="reg-org" type="button" class="px-3 py-2 rounded-2xl border border-solid">Register Your Organization</button>
    </div>
</section>
  <!-- slide show of organization ends -->

  <footer class="lg:text-left cursor-default bg-sectionBlue">
    <div id="main" class="mx-6 pt-12 pb-8 sm:text-left">
      <div id="grid" class="grid lg:grid-cols-4 sm:grid-cols-2 gap-10">
        <div id="one">
          <h6 class="uppercase text-base font-oswald font-medium mb-4">
            Relief Camp
          </h6>
          <p class="font-montserrat text-sm sm:text-base">
            Relief camp is website in which people can see nearest camps
            at time of emergencies and natural disasters. also people can do
            activities like register camps and donate food, medicines and other
            necessary supplies through this website.
          </p>
        </div>
        <div id="two1" class="text-blackText">
          <h6 class="uppercase text-base font-medium font-oswald mb-4">
            Website
          </h6>
          <p class="mb-3 text-sm sm:text-base font-montserrat">
            <a href="#!">Help</a>
          </p>
          <p class="mb-3 text-sm sm:text-base font-montserrat">
            <a href="#!">About Us</a>
          </p>
          <p class="mb-3 text-sm sm:text-base font-montserrat">
            <a href="#!">Terms & Conditions</a>
          </p>
        </div>
        <div id="two2">
          <h6 class="uppercase text-base font-medium font-oswald mb-4">
            Quick links
          </h6>
          <p class="mb-3 text-sm sm:text-base font-montserrat">
            <a href="#!">Sign In</a>
          </p>
          <p class="mb-3 text-sm sm:text-base font-montserrat">
            <a href="#!">Camps</a>
          </p>
          <p class="mb-3 text-sm sm:text-base font-montserrat">
            <a href="#!">Contact Us</a>
          </p>
        </div>
        <div id="three">
          <form action="">
            <div class="md:ml-auto md:mb-6">
              <h6 class="uppercase font-medium font-oswald mb-4">
                Sign up to get updates
              </h6>
            </div>
            <div class="relative">
              <input type="text" class="block w-full px-3 py-1.5 text-sm
                                    bg-gray-100 border border-solid border-gray-400
                                      rounded transition ease-in-out m-0 font-montserrat 
                                      focus:text-body focus:bg-white" id="exampleFormControlInput1"
                placeholder="Email address" style="color:#202020" />
              <button id="sub-btn"
                class="absolute inset-y-0 right-0 rounded-r flex items-center px-4 font-bold text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg></button>
            </div>
        </div>
        </form>
      </div>
    </div>
    <div class="bg-white" style="padding: 1px 0;"></div>
    <div class="text-center p-3 footer-bottom">
      <span class="text-white text-sm sm:text-base font-oswald">© 2022 Copyright:</span>
      <a class="text-white text-sm sm:text-base font-montserrat" href="">Relief Camp</a>
    </div>
  </footer>

</body>

</html>