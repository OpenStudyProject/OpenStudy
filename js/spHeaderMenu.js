const button = document.getElementById("open-menu");
const checkbox1 = document.getElementById("abc");
const checkbox2 = document.getElementById("trigger-checkbox2");

button.addEventListener('click', () => {
    let flag2 = checkbox2.checked;
    if (!flag2) {checkbox2.checked = true;}
    if (flag2) {checkbox2.checked = false;}
    console.log("2 has checked.");
})

button.addEventListener('click', () => {
    let flag1 = checkbox1.checked;
    if (!flag1) {checkbox1.checked = true;}
    if (flag1) {checkbox1.checked = false;}
    console.log("1 has checked.");
})