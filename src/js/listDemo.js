let id; 

let getId = (buttonId) => {
    id =  buttonId;
}

function accept_req() {
    console.log(id);
    $.ajax({
        type: "POST",
        url: "listDemo.php",
        data: {id: id},
        success: function (msg) {
        }
    });
}

function reject_req() {
    console.log(id);
    $.ajax({
        type: "POST",
        url: "listDemo.php",
        data: {ids: id},
        success: function (response) {
        }
    });
}
