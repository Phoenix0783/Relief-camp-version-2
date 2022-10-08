<?php
session_start();
if(!isset($_SESSION["campUser"])){
header("refresh:0; url=camp_register.php");}

$url = "https://outpost.mapmyindia.com/api/security/oauth/token";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
  "accept: application/json",
  "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "grant_type=client_credentials&client_id=33OkryzDZsK7L3zdLvORZtfft7ocHQBmGeXePqBvlO30pZGSlTVBeZY8CRvK_9WVl3chk3Vuw74v4xQIHlSELNfSY-x0-UyW&client_secret=lrFxI-iSEg8K5SiwXS_SxHsqBfdbJkRd1IURhGO_4Z8kCwu5kXcRaj0jqrjtY4secMcEcMfUOJwW5_GEhKDFGNAdLQ-pZR8xEVzg49yIhKQ=";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

$json = json_decode(utf8_decode($resp), true);
$access_token = $json["access_token"];
$_SESSION["access_token"] = $access_token;
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="desciption" content="Mapmyindia Search Plugin">
  <link rel="stylesheet" href="../src/css/tailwind.css">
  <style>
    #sub-btn {
      background-color: #004e64;
      color: #FFFFFF;
    }

    #sub-btn:hover {
      opacity: 0.8;
    }

    #rst-btn {
      background-color: #25a18e;
      color: #FFFFFF;
    }

    #rst-btn:hover {
      opacity: 0.8;
    }
    #close-btn {background-color: #004e64; color:#FFFFFF;}
    #close-btn:hover {background-color:#00a5cf; color:#004e64;}     
    .upload_card {
      width: 100%;
      padding: 2rem;
      border-radius: 5px;
      overflow: hidden;
      background-color: rgba(196, 200, 207, 0.336);
    }

    .upload_form {
      width: 100%;
      height: 10rem;
      border-radius: 5px;
      border: 2px dashed #a0a0ac;
      color: #a0a0ac;
      font-size: 0.9rem;
      font-weight: 500;
      position: relative;
      background: #dfe3f259;
      display: flex;
      justify-content: center;
      align-items: center;
      user-select: none;
      margin-top: 1.5rem;
    }

    .upload_form .select {
      color: #5256ad;
      margin-left: 0.5rem;
      cursor: pointer;
    }

    .upload_form input {
      opacity: 0;
      width: 1px;
    }

    .upload_form.dragover {
      border-style: solid;
      font-size: 1rem;
      color: #c8c9dd;
      font-weight: 600;
      background: rgba(0, 0, 0, 0.34);
    }

    .img-container {
      width: 100%;
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
      flex-wrap: wrap;
      position: relative;
      height: auto;
      margin-top: 1.25rem;
      max-height: 18rem;
      overflow-y: auto;
    }

    .img-container .image {
      height: 6rem;
      width: 6rem;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      position: relative;
      margin-bottom: 0.5rem;
      margin-right: 0.5rem;
    }

    .img-container .image:nth-child(4n) {
      margin-right: 0;
    }

    .img-container .image img {
      height: 100%;
      width: 100%;
    }

    .img-container .image span {
      position: absolute;
      top: -0.3rem;
      right: 0.3rem;
      cursor: pointer;
      font-size: 1.5rem;
      color: #fff;
    }

    .img-container .image span:hover {
      opacity: 0.8;
    }
  </style>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://apis.mapmyindia.com/advancedmaps/api/<?php echo $access_token ?>/map_sdk_plugins"></script>
  <script src="scripts/create_camp.js" defer></script>
</head>

<body>
  <!--main div-->
  <div class="min-h-screen flex flex-col">
    <!--conatainer starts-->
    <div class="container max-w-2xl mx-auto flex-1 flex flex-col items-center justify-center px-2 mt-10">
      <h3 class="mb-5 text-3xl font-oswald text-center font-medium mt-10" style="color: #202020;">Create Camp</h3>
      <div class="px-6 py-8 rounded w-full">
        <!--form starts-->
        <form action="" method="POST" id="createCamp" class="">
          <div class="flex flex-wrap mx-3 mb-6">
            <div class="w-full">
              <label class="text-black font-normal text-lg font-oswald">Title</label>
              <input id="campTitle" class="max-w-sm appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Title of your camp" required>
            </div>
          </div>
          <div class="bg-gray-600 mb-5" style="padding: 0.5px 0;"></div>
          <div class="flex flex-wrap mx-3 mb-6">
            <div class="w-full">
              <label class="text-black font-normal text-lg font-oswald">Location</label>
              <input id="autoAddress" name="auto" class="max-w-sm appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mt-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Search places..">
            </div>
          </div>
          <div class="bg-gray-600 mb-5" style="padding: 0.5px 0;"></div>
          <div class="flex flex-wrap mx-3 mb-6">
            <div class="w-full">
              <label class="text-black font-normal text-lg font-oswald">Description</label>
              <textarea id="description" class="max-w-lg mt-3 h-28 block font-montserrat w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mb-3" placeholder="Write something about your camp..." required></textarea>
            </div>
            <div class="w-full sm:w-1/2 my-6">
              <label class="block uppercase font-oswald tracking-wide text-gray-700 text-xs font-bold mb-2">
                Capacity
              </label>
              <input id="capacity" class="appearance-none font-montserrat block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="capacity in numbers" required>
            </div>
          </div>
          <div class="bg-gray-600 mb-5" style="padding: 0.5px 0;"></div>
          <div class="flex flex-wrap mx-3 mb-6">
            <div class="w-full">
              <label class="text-black font-normal text-lg font-oswald">Upload Pictures</label>
              <div class="upload_card my-4">
                <div class="upload_form">
                  <span class="inner font-montserrat">Drag & drop image here or <span class="select font-oswald">Browse</span></span>
                  <input name="fileUpload[]" id="chooseFile" type="file" class="images" multiple accept=".jpg, .jpeg, .png" required/>
                </div>
                <div class="img-container">
                </div>
              </div>
            </div>
            <!-- <div class="alerts">
              <span></span>
            </div> -->
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
      </div>
    </div>
  </div>
  <!-- popup model -->
  <div id="success-model" aria-hidden="true" class="fixed right-0 left-0 z-50 justify-center items-center h-full inset-0" style="background-color:rgba(0, 0, 0, 0.3); display: none;">
            <div class="relative px-5 w-full max-w-md h-auto">
                <div class="relative bg-white rounded-lg cursor-default shadow">
                    <div class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8">
                        <div class="flex justify-center items-center">
                            <div class="w-fit mt-5 rounded-full bg-green-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 m-2 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-oswald text-center font-medium" style="color: #202020;">Registration Completed</h3>
                        <p class="text-center font-montserrat"style="color: #202020;">Your request of creating a camp with provided details is sent for varification</p>
                        <div class="flex justify-center items-center">
                            <button id="close-btn" class="rounded text-sm w-fit px-5 py-2.5 text-center">CLOSE</button>
                        </div>
                    </div>
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
    
   //file upload
    let files = [], // will store images 
        form = document.querySelector('.upload_form'), // form ( drag area ) 
        container = document.querySelector('.img-container'), // container in which image will be insert 
        text = document.querySelector('.inner'), // inner text of form 
        browse = document.querySelector('.select'), // text option fto run input 
        input = document.querySelector('.upload_form input'); // file input 

    browse.addEventListener('click', () => input.click());

    // input change event
    input.addEventListener('change', () => {
        let file = input.files;
        for (let i = 0; i < file.length; i++) {
            if (files.every(e => e.name !== file[i].name)) files.push(file[i])
        }
        showImages();
    })

    const showImages = () => {
        let images = '';
        files.forEach((e, i) => {
            images += `<div class="image"> 
                        <img src="${URL.createObjectURL(e)}" alt="image"> 
                        <span onclick="delImage(${i})">×</span> 
                        </div>`
        })
        container.innerHTML = images;
    }

    const delImage = index => {
        files.splice(index, 1)
        showImages()
    }
    // drag and drop 
    form.addEventListener('dragover', e => {
        e.preventDefault()
        form.classList.add('dragover')
        text.innerHTML = 'Drop images here'
    })

    form.addEventListener('dragleave', e => {
        e.preventDefault()
        form.classList.remove('dragover')
        text.innerHTML = 'Drag & drop image here or <span class="select">Browse</span>'
    })

    form.addEventListener('drop', e => {
        e.preventDefault()
        form.classList.remove('dragover')
        text.innerHTML = 'Drag & drop image here or <span class="select">Browse</span>'
        let file = e.dataTransfer.files;
        for (let i = 0; i < file.length; i++) {
            if (files.every(e => e.name !== file[i].name)) files.push(file[i])
        }
        showImages();
    })
  </script>
</body>

</html>