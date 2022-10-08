// Progress Bar
const totalCapacity = document.getElementById("total-capacity").innerHTML;
const remainingSpace = document.getElementById("remaining-space").innerHTML;
const progressBar = document.getElementById("progress-bar");

// Converting abover variables into number
const totalCapacityNum = parseInt(totalCapacity);
const remainingSpaceNum = parseInt(remainingSpace);
// Converting capacity into percentage
let capacityInPercent = (remainingSpaceNum / totalCapacityNum) * 100;

progressBar.innerHTML = `${capacityInPercent}%`;
progressBar.style.width = `${capacityInPercent}%`;
// Progress Bar end