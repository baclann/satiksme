const wrapper = document.querySelector(".wrapper_select"),
selectBtn = wrapper.querySelector(".select-btn"),
searchInp = wrapper.querySelector("input"),
options = wrapper.querySelector(".options");
var countries;

window.onload = function(e) {
$.ajax({
    type: "GET",
    url: "php/load_select_routes.php",
    dataType: "json",
    success: function(response) {
        countries = response;
        console.log(countries);
        addCountry(); 
    }
});
}

function addCountry(selectedCountry) {
options.innerHTML = "";
countries.forEach(country => {
    let isSelected = country == selectedCountry ? "selected" : "";
    let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
    options.insertAdjacentHTML("beforeend", li);
});
}

function updateName(selectedLi) {
searchInp.value = "";
addCountry(selectedLi.innerText);
wrapper.classList.remove("active");
selectBtn.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
let arr = [];
let searchWord = searchInp.value.toLowerCase();
arr = countries.filter(data => {
    return data.toLowerCase().startsWith(searchWord);
}).map(data => {
    let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
    return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
}).join("");
options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Noradīta pietura netika atrasta</p>`;
});

selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));