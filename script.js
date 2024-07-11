var cardIndex = 0;
var cardElements = document.querySelectorAll('.card-object');
var cardButtons = document.querySelectorAll('.custom-navbar li a');

cardButtons.forEach(function(button, index) {
  button.addEventListener('click', function(event) {
    event.preventDefault();
    changeCard(index);
  });
});

function changeCard(index) {
  cardElements.forEach(function(card) {
    card.classList.remove('active');
  });
  cardElements[index].classList.add('active');

  cardButtons.forEach(function(button) {
    button.classList.remove('active');
  });
  cardButtons[index].classList.add('active');

  // Agregar estilo al botón seleccionado
  cardButtons[index].style.backgroundColor = 'orange';
  cardButtons[index].style.color = 'white';
}
