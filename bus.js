console.log("bus.js");
document.querySelector(".change").addEventListener("click", function (e) {
  /* 
soon!
*/
});
for (let i = 0; i < 40; i++) {
  document
    .querySelector(`.seat_now${i + 1}`)
    .addEventListener("click", function () {
      let val = document.querySelector(`.seat_now${i + 1}`).value;
      document.querySelector(".seat_name").value = val;
    });
}

