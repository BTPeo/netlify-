const dropDowns = document.querySelectorAll(".dropdown-overlay");
const dropDownToggles = document.querySelectorAll(".dropdown-icon")
function acitveClass (a) {
    console.log(a.nextElementSibling);
    a.nextElementSibling.classList.add("active");
}

for ( let dropDown of dropDowns ) {
    dropDown.addEventListener('click', function() {
        dropDown.nextElementSibling.classList.toggle("active")
    } ) 
}
