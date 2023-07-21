let $ = document
let liContainer = $.querySelector(".autocom-box")
let inputElem = $.querySelector("input")
let searchInput = $.querySelector(".search-input")

let suggestions = [
    "Jakarta Barat",
    "Jakarta Selatan",
    "Jakarta Timur",
    "Jakarta Pusat",
    "Jakarta Utara",
    "Tangerang",
    "Tangerang Selatan",
    "Bekasi",
];

inputElem.addEventListener("keyup", function () {
    let inputValue = inputElem.value
    if (inputValue) {
        searchInput.classList.add("active")
        let filteredWord = suggestions.filter(function (word) {
            return word.toLowerCase().includes(inputValue.toLowerCase())
            // return word.toLowerCase().startsWith(inputValue.toLowerCase())
        })

        suggestionWordsGenerator(filteredWord)

    } else {
        searchInput.classList.remove("active")
    }

})

let customListItem

function suggestionWordsGenerator(wordArray) {
    let suggestionWord = wordArray.map(function (word) {
        return "<li>" + word + "</li>"
    }).join("")

    if (suggestionWord) {
        liContainer.innerHTML = suggestionWord
    } else {
        liContainer.innerHTML = "<li>" + inputElem.value + "</li>"
    }
    Select()
}

function Select() {
    let allListItems = liContainer.querySelectorAll("li")
    allListItems.forEach(function (wordItem) {
        wordItem.addEventListener("click", function (e) {
            inputElem.value = e.target.textContent
            searchInput.classList.remove("active")
        })
    })
}