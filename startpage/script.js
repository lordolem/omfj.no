const welcomeBox = document.getElementById("welcomeBox");
const searchTerm = document.getElementById("searchTerm");

const today = new Date();
const hour = today.getHours();

console.log(hour);

let welcomeBoxMessage;
if (hour > 0 && hour <= 4) {
    welcomeBoxMessage = "Good night";
} else if (hour > 4 && hour <= 12) {
    welcomeBoxMessage = "Good morning";
} else if (hour > 12 && hour <= 18) {
    welcomeBoxMessage = "Good afternoon";
} else if (hour > 18 && hour <= 23) {
    welcomeBoxMessage = "Good evening";
} else {
    welcomeBoxMessage = "An error has occurred";
}

welcomeBox.innerHTML = "<p>" + welcomeBoxMessage + ", Ole Magnus.</p>";

const googleQuery = "https://google.com/search?q="
const goToSite = () => {
    window.open(googleQuery + searchTerm.value, "_self");
}

searchTerm.addEventListener("keyup", function(e) {
    // Number 13 is the "Enter" key on the keyboard
    if (e.key == "Enter" && searchTerm.value != "") {
      e.preventDefault();
      document.getElementById("searchButton").click();
    }
  });