const button = document.getElementById("open-menu");
const checkbox = document.getElementById("hidden-checkbox");

button.addEventListener('click', () => {
    let flag = checkbox.checked;
    if (!flag) {checkbox.checked = true;}
    if (flag) {checkbox.checked = false;}
})