const showPass = document.querySelector("#showpass");
let state = true;
const passInput = document.querySelector("#password");
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