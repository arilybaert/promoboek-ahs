<footer class="o-footer row">
    <div class="col-12 col-sm-3 offset-sm-7 a-footer-img">
        <img src="/src/img/logo/ahs.png" alt="">
    </div>
</footer>
<script>
console.log('hello world');
// Get each modal and close button
const triggers = document.getElementsByClassName("trigger");
const triggerArray = Array.from(triggers).entries();
const modals = document.getElementsByClassName("a-modal");
const closeButtons = document.getElementsByClassName("close");

// Then use `for...of`-loop with the index of each item in `triggerArray` for listening to a click event which toggles each modal to open and close
for (let [index, trigger] of triggerArray) {
  let triggerIndex = index;
  function toggleModal() {
    // Optionally toggle a class for CSS animations
    modals[triggerIndex].classList.toggle("show");
  }
  trigger.addEventListener("click", toggleModal);
  closeButtons[triggerIndex].addEventListener("click", toggleModal);

  window.onclick = function(event) {
    if (event.target === document.querySelector(".show")) {
        console.log('click');
        document.querySelector(".show").classList.remove("show");    }
  }
}

</script>
</body>
</html>
