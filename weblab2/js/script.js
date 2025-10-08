const thumbs = document.querySelectorAll(".book-thumbs img");
const mainBook = document.getElementById("main-book");

thumbs.forEach(thumb => {
  thumb.addEventListener("click", () => {
    thumbs.forEach(t => t.classList.remove("active"));
    thumb.classList.add("active");
    mainBook.src = thumb.src;
  });
});