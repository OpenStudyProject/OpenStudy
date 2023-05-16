const button = document.getElementById("js-header-button");
const headerCheckbox = document.getElementById("js-header-checkbox");

button.addEventListener('click', () => {
    let flag = headerCheckbox.checked;

    if (!flag) {
        headerCheckbox.checked = true;
        console.log("checked");
    }

    if (flag) {
        headerCheckbox.checked = false;
        console.log("not checked")
    }
})