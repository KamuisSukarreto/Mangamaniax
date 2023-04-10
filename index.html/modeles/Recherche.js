// Sélectionne le formulaire
const form = document.querySelector('form');

// Ajoute un événement de soumission de formulaire
form.addEventListener('submit', (event) => {
  event.preventDefault(); // Empêche la soumission du formulaire par défaut
  
  // Récupère la valeur saisie dans la barre de recherche
  const searchQuery = form.elements.search.value.trim();
  
  // Redirige l'utilisateur vers la page de résultats de recherche
  window.location.href = `search.php?q=${encodeURIComponent(searchQuery)}`;
});
