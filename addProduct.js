
var dvd = document.querySelector(".dvd");
var furniture = document.querySelector(".furniture");
var book = document.querySelector(".book");
// This function tests which option is selected to display types measures.
function test() {

    var selectedOption = document.querySelector("#productType option:checked");

    if (selectedOption.text == "DVD") {
        furniture.classList.add("displaynone");
        book.classList.add("displaynone");
        dvd.classList.remove("displaynone");
    } else if (selectedOption.text == "Furniture") {
        furniture.classList.remove("displaynone");
        book.classList.add("displaynone");
        dvd.classList.add("displaynone");
    } else if (selectedOption.text == "Book") {
        furniture.classList.add("displaynone");
        book.classList.remove("displaynone");
        dvd.classList.add("displaynone");
    }
}
