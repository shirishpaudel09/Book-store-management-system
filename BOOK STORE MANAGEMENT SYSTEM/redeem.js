function searchBooks() {
    var searchQuery = document.getElementById("book-search").value.toLowerCase();
    var bookEntries = document.querySelectorAll(".book-entry");

    bookEntries.forEach(function (bookEntry) {
        var bookTitle = bookEntry.querySelector("h3").innerText.toLowerCase();

        if (bookTitle.includes(searchQuery)) {
            bookEntry.style.display = "block";
        } else {
            bookEntry.style.display = "none";
        }
    });
}