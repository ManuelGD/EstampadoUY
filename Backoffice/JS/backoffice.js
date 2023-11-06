const eliminar_promo = document.getElementById("eliminar_promo");

eliminar_promo.addEventListener('click', () => {
    const confirmacion = window.confirm('¿Seguro que quieres eliminar esta promoción?');
    
    if (confirmacion) {
        alert('Elemento eliminado');
    } else {
        // El usuario canceló la eliminación, no hagas nada.
        alert('Eliminación cancelada');
    }
});