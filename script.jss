// Example: Show alert when clicking learning modules
document.querySelectorAll(".card").forEach(card => {
  card.addEventListener("click", () => {
    alert("You selected " + card.innerText + " module. Content coming soon!");
  });
});
<script>
  const words = document.querySelectorAll('.dynamic-words span');
  let index = 0;

  function showWord() {
    words.forEach(w => w.classList.remove('active'));
    words[index].classList.add('active');
    index = (index + 1) % words.length;
  }

  showWord(); // show first word immediately
  setInterval(showWord, 3000); // change every 3 seconds
</script>

window.onload = () => {
  document.querySelector('.moving-text').classList.add('animate');
};
