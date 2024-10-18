document.addEventListener('DOMContentLoaded', function () {
    var carousel = $('#interactionsCarousel'); // Usamos jQuery para seleccionar el carrusel
    var counter = document.querySelector('#interactionCounter');
    var totalItems = parseInt(counter.getAttribute('data-total-items'), 10);

    // Actualizar el contador cuando cambie la diapositiva
    carousel.on('slid.bs.carousel', function (event) {
        var currentIndex = $(event.relatedTarget).index() + 1; // Obtener el índice actual base 1
        counter.textContent = currentIndex + ' / ' + totalItems;
    });

    // Para el caso en que se carga la página, actualizamos el contador inicial
    counter.textContent = '1 / ' + totalItems;
});
