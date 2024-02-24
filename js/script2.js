function showOptions(value) {
    var options = document.getElementById('options' + value);
    options.style.display = "block";
}

function hideOptions(value) {
    var options = document.getElementById('options' + value);
    options.style.display = "none";
    var select = document.getElementById('select1');
    select.value = "";
}