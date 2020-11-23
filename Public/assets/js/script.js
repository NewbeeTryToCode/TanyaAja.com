const showPass = document.querySelector("#showpass");
let state = true;
const passInput = document.querySelector("#password");
let passwordStrength = document.getElementById("password-strength");
let lowerUpperCase = document.querySelector(".low-upper-case i")
let number = document.querySelector(".one-number i")
let specialChar = document.querySelector(".one-special-char i")
let eightchar = document.querySelector(".eight-character i")
const form = document.querySelector("form")
showPass.addEventListener("click", () => {

    if (state) {
        passInput.setAttribute("type", "text")
        state = false;
    } else {
        passInput.setAttribute("type", "password")
        state = true;
    }
    showPass.classList.toggle("fa-eye-slash")
})
passInput.addEventListener("keyup", () => {
    let pass = passInput.value;
    checkStrenth(pass);
})

function checkStrenth(passInput) {
    let strength = 0;

    //if passInput contains lowed and uppercase
    if (passInput.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
        strength += 1;
        lowerUpperCase.classList.remove("fa-circle")
        lowerUpperCase.classList.add("fa-check")
    } else {
        lowerUpperCase.classList.add("fa-circle")
        lowerUpperCase.classList.remove("fa-check")
    }
    //if passInput has a number 
    if (passInput.match(/([0-9])/)) {
        strength += 1;
        number.classList.remove("fa-circle")
        number.classList.add("fa-check")
    } else {
        number.classList.add("fa-circle");
        number.classList.remove("fa-check")
    }
    //if passInput has a special char
    if (passInput.match(/([!,@,#,$,%,^,&,*,(,),_,-,+,=])/)) {
        strength += 1;
        specialChar.classList.remove("fa-circle")
        specialChar.classList.add("fa-check")
    } else {
        specialChar.classList.add("fa-circle")
        specialChar.classList.remove("fa-check")
    }
    // if passInput contains 8 character
    if (passInput.length > 7) {
        strength += 1;
        eightchar.classList.remove("fa-circle");
        eightchar.classList.add("fa-check");
    } else {
        eightchar.classList.add("fa-circle");
        eightchar.classList.remove("fa-check");
    }

    if (strength == 0) {
        passwordStrength.style = "width: 0%";
    } else if (strength == 1 || strength == 2) {
        passwordStrength.classList.remove("progress-bar-warning")
        passwordStrength.classList.remove("progress-bar-success")
        passwordStrength.classList.add("progress-bar-danger");
        passwordStrength.style = "width: 10%"
    } else if (strength == 3) {
        passwordStrength.classList.remove("progress-bar-danger")
        passwordStrength.classList.remove("progress-bar-success")
        passwordStrength.classList.add("progress-bar-warning")
        passwordStrength.style = "width: 60%";
    } else if (strength == 4) {
        passwordStrength.classList.remove("progress-bar-danger")
        passwordStrength.classList.remove("progress-bar-warning")
        passwordStrength.classList.add("progress-bar-success")
        passwordStrength.style = "width: 100%";
    } else {
        passwordStrength.classList.remove("progress-bar-danger")
        passwordStrength.classList.remove("progress-bar-warning")
        passwordStrength.classList.remove("progress-bar-success")
        passwordStrength.style = "width:100%"

    }
}