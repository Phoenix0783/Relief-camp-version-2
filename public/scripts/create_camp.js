/*Search plugin initialization*/
    let place;
    let optional_config = {
        location: [28.61, 77.23], 
    };
    new MapmyIndia.search(document.getElementById("autoAddress"), optional_config, callback);
    function callback(data) {
        if (data) {
        if (data.error) {
            if (data.error.indexOf('responsecode:401') !== -1) {
            }
            console.warn(data.error);
        } else {
            let dt = data[0];
            if (!dt) {
            return false;
            } else {
            place = dt.placeName + (dt.placeAddress ? ", " + dt.placeAddress : "");
        }
        }
    }
    }

//form data
const campTitle = document.getElementById("campTitle");
const campDescription = document.getElementById("description");
const campCapacity = document.getElementById("capacity");

// let validated;

// function allVal(val) {
//     validated = val;
// }

function finall(validated) {
    let valid = validated;
    if (valid === 1) {
        document.getElementById('success-model').style.display = "flex";
    } else {
        document.getElementById('success-model').style.display = "none";
    }
}

$("#createCamp").on('submit', (function (e) {
    e.preventDefault();
    let camp_title= campTitle.value;
    let camp_desc= campDescription.value;
    let camp_capacity= campCapacity.value;
    $.ajax({
        url: "ajax/data_create_camp.php",
        type: "POST",
        data: {
            camp_title: camp_title,
            camp_desc: camp_desc,
            camp_capacity: camp_capacity,
            places: place,
        },
        success: function (json) {
            //console.log(flag);
            // allVal(1);
            finall(1);
            document.getElementById("close-btn").addEventListener("click", function () {
                window.location = "index.php";
            });
        },
        error: function (error) {
            console.log(error);
        }
    });
    $.ajax({
        url: "ajax/create_camp_img.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function () {
        },
        error: function (error) {
            console.log(error);
        }
    });
}));
