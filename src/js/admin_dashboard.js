//side bar hide and show
//hide and show
var request = document.getElementById('request_div');
var active = document.getElementById('active_div');
var oraganization = document.getElementById('org_div');
var request2 = document.getElementById('orgreq_div');
var banner = document.getElementById('banner_div');
var update = document.getElementById('slider_div');
var faq = document.getElementById('faq_div');
var states = document.getElementById('statistics');

var request_btn = document.getElementById('request_btn');
var active_btn = document.getElementById('active_btn');
var organization_btn = document.getElementById('org_btn');
var request_btn2 = document.getElementById('orgreq_btn');
var banner_btn = document.getElementById('banner_btn');
var faqs_btn = document.getElementById('faq_btn');
var update_btn = document.getElementById('slider_btn');

request_btn.onclick = function() {
    request.classList.remove('hidden');
    active.classList.add('hidden');
    oraganization.classList.add('hidden');
    states.classList.remove('hidden');
    request2.classList.add('hidden');
    banner.classList.add('hidden');
    update.classList.add('hidden');
    faq.classList.add('hidden');
    request_btn.classList.add('text-gray-800','bg-gray-100');
    request_btn.classList.remove('text-gray-100','bg-transparent');
    active_btn.classList.remove('text-gray-800','bg-gray-100');
    organization_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn2.classList.remove('text-gray-800','bg-gray-100');
    banner_btn.classList.remove('text-gray-800','bg-gray-100');
    faqs_btn.classList.remove('text-gray-800','bg-gray-100');
    update_btn.classList.remove('text-gray-800','bg-gray-100');
}

active_btn.onclick = function() {
    request.classList.add('hidden');
    active.classList.remove('hidden');
    oraganization.classList.add('hidden');
    states.classList.remove('hidden');
    request2.classList.add('hidden');
    banner.classList.add('hidden');
    update.classList.add('hidden');
    faq.classList.add('hidden');
    request_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn.classList.add('text-gray-100','bg-transparent');
    active_btn.classList.add('text-gray-800','bg-gray-100');
    organization_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn2.classList.remove('text-gray-800','bg-gray-100');
    banner_btn.classList.remove('text-gray-800','bg-gray-100');
    faqs_btn.classList.remove('text-gray-800','bg-gray-100');
    update_btn.classList.remove('text-gray-800','bg-gray-100');
}

organization_btn.onclick = function() {
    request.classList.add('hidden');
    active.classList.add('hidden');
    oraganization.classList.remove('hidden');
    states.classList.remove('hidden');
    request2.classList.add('hidden');
    banner.classList.add('hidden');
    update.classList.add('hidden');
    faq.classList.add('hidden');
    request_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn.classList.add('text-gray-100','bg-transparent');
    active_btn.classList.remove('text-gray-800','bg-gray-100');
    organization_btn.classList.add('text-gray-800','bg-gray-100');
    request_btn2.classList.remove('text-gray-800','bg-gray-100');
    banner_btn.classList.remove('text-gray-800','bg-gray-100');
    faqs_btn.classList.remove('text-gray-800','bg-gray-100');
    update_btn.classList.remove('text-gray-800','bg-gray-100');
}
request_btn2.onclick = function() {
    request.classList.add('hidden');
    active.classList.add('hidden');
    oraganization.classList.add('hidden');
    states.classList.remove('hidden');
    request2.classList.remove('hidden');
    banner.classList.add('hidden');
    update.classList.add('hidden');
    faq.classList.add('hidden');
    request_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn.classList.add('text-gray-100','bg-transparent');
    active_btn.classList.remove('text-gray-800','bg-gray-100');
    organization_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn2.classList.add('text-gray-800','bg-gray-100');
    banner_btn.classList.remove('text-gray-800','bg-gray-100');
    faqs_btn.classList.remove('text-gray-800','bg-gray-100');
    update_btn.classList.remove('text-gray-800','bg-gray-100');
}
banner_btn.onclick = function() {
    request.classList.add('hidden');
    active.classList.add('hidden');
    oraganization.classList.add('hidden');
    states.classList.add('hidden');
    request2.classList.add('hidden');
    banner.classList.remove('hidden');
    update.classList.add('hidden');
    faq.classList.add('hidden');
    request_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn.classList.add('text-gray-100','bg-transparent');
    active_btn.classList.remove('text-gray-800','bg-gray-100');
    organization_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn2.classList.remove('text-gray-800','bg-gray-100');
    banner_btn.classList.add('text-gray-800','bg-gray-100');
    faqs_btn.classList.remove('text-gray-800','bg-gray-100');
    update_btn.classList.remove('text-gray-800','bg-gray-100');
}
faqs_btn.onclick = function() {
    request.classList.add('hidden');
    active.classList.add('hidden');
    oraganization.classList.add('hidden');
    request2.classList.add('hidden');
    states.classList.add('hidden');
    banner.classList.add('hidden');
    update.classList.add('hidden');
    faq.classList.remove('hidden');
    request_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn.classList.add('text-gray-100','bg-transparent');
    active_btn.classList.remove('text-gray-800','bg-gray-100');
    organization_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn2.classList.remove('text-gray-800','bg-gray-100');
    banner_btn.classList.remove('text-gray-800','bg-gray-100');
    faqs_btn.classList.add('text-gray-800','bg-gray-100');
    update_btn.classList.remove('text-gray-800','bg-gray-100');
}
update_btn.onclick = function() {
    request.classList.add('hidden');
    active.classList.add('hidden');
    oraganization.classList.add('hidden');
    request2.classList.add('hidden');
    states.classList.add('hidden');
    banner.classList.add('hidden');
    update.classList.remove('hidden');
    faq.classList.add('hidden');
    request_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn.classList.add('text-gray-100','bg-transparent');
    active_btn.classList.remove('text-gray-800','bg-gray-100');
    organization_btn.classList.remove('text-gray-800','bg-gray-100');
    request_btn2.classList.remove('text-gray-800','bg-gray-100');
    banner_btn.classList.remove('text-gray-800','bg-gray-100');
    faqs_btn.classList.remove('text-gray-800','bg-gray-100');
    update_btn.classList.add('text-gray-800','bg-gray-100');
}
//side bar hide and show end
//search
function search_request() {
    var input = document.getElementById("search_requesting");
    var filter = input.value.toLowerCase();
    var y = document.getElementsByClassName('data_requests');
    var count = 0;
    for(i = 0; i < y.length; i++){
        if (y[i].innerText.toLowerCase().includes(filter)){
            y[i].classList.remove('hidden');
            count++;
        }else{
            y[i].classList.add('hidden');
        }
        document.getElementById('total_requests').innerHTML = count;
    }  
    }
    var c_require = document.getElementsByClassName('data_requests').length;
    document.getElementById('total_requests').innerHTML = c_require;

//search for varified camp
function search_varified() {
    var input = document.getElementById("search_varified_camp");
    var filter = input.value.toLowerCase();
    var y = document.getElementsByClassName('data_varified');
    var count = 0;
    for(i = 0; i < y.length; i++){
        if (y[i].innerText.toLowerCase().includes(filter)){
            y[i].classList.remove('hidden');
            count++;
        }else{
            y[i].classList.add('hidden');
        }
        document.getElementById('total_varified').innerHTML = count;
    }  
    }
    var c_varify = document.getElementsByClassName('data_varified').length;
    document.getElementById('total_varified').innerHTML = c_varify;

//search box for organization
function search_org() {
    var input = document.getElementById("search_org");
    var filter = input.value.toLowerCase();
    var y = document.getElementsByClassName('data_org');
    var count = 0;
    for(i = 0; i < y.length; i++){
        if (y[i].innerText.toLowerCase().includes(filter)){
            y[i].classList.remove('hidden');
            count++;
        }else{
            y[i].classList.add('hidden');
        }
        document.getElementById('total_org').innerHTML = count;
    }  
    }
    var c_org = document.getElementsByClassName('data_org').length;
    document.getElementById('total_org').innerHTML = c_org;
    //statastic card total organization
    document.getElementById('organizations').innerHTML = c_org;

function search_request2() {
    var input = document.getElementById("search_request");
    var filter = input.value.toLowerCase();
    var y = document.getElementsByClassName('data_request');
    var count = 0;
    for(i = 0; i < y.length; i++){
        if (y[i].innerText.toLowerCase().includes(filter)){
            y[i].classList.remove('hidden');
            count++;
        }else{
            y[i].classList.add('hidden');
        }
        document.getElementById('total_request').innerHTML = count;
    }  
}
var c_req = document.getElementsByClassName('data_request').length;
document.getElementById('total_request').innerHTML = c_req;
//search box for organization end

//image upload
// Slide 1
let browse1 = document.querySelector('.select'), // text option fto run input 
imageInput1 = document.querySelector('.upload_form input'); // file input 
uploadForm1 = document.querySelector('.upload_form'); // form ( drag area ) 

var uploadedImage1 = "";

browse1.addEventListener('click', () => imageInput1.click()); 

imageInput1.addEventListener("change", () => {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploadedImage1 = reader.result;
        uploadForm1.style.backgroundImage = `url(${uploadedImage1})`;
    });
    reader.readAsDataURL(imageInput1.files[0]);
});
// Slide 1 end

// SLide 2
let browse2 = document.querySelector('.select2'), // text option fto run input 
imageInput2 = document.querySelector('.upload_form2 input'); // file input 
uploadForm2 = document.querySelector('.upload_form2'); // form ( drag area ) 

var uploadedImage2 = "";

browse2.addEventListener('click', () => imageInput2.click()); 

imageInput2.addEventListener("change", () => {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploadedImage2 = reader.result;
        uploadForm2.style.backgroundImage = `url(${uploadedImage2})`;
    });
    reader.readAsDataURL(imageInput2.files[0]);
});
// SLide 2 end

// SLide 2
let browse3 = document.querySelector('.select3'), // text option fto run input 
imageInput3 = document.querySelector('.upload_form3 input'); // file input 
uploadForm3 = document.querySelector('.upload_form3'); // form ( drag area ) 

var uploadedImage3 = "";

browse3.addEventListener('click', () => imageInput3.click()); 

imageInput3.addEventListener("change", () => {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploadedImage3 = reader.result;
        uploadForm3.style.backgroundImage = `url(${uploadedImage3})`;
    });
    reader.readAsDataURL(imageInput3.files[0]);
});
// SLide 2 end
//image upload end

$("tr").on("click", function () {
    window.location = $(this).data("href");    
});


