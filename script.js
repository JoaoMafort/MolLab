function menu() {

    var x = document.getElementById("panel");
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}


function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
  
    // Salva a preferência do usuário
    if (document.body.classList.contains('dark-mode')) {
      localStorage.setItem('darkMode', 'enabled');
    } else {
      localStorage.setItem('darkMode', 'disabled');
    }
  }
  
  // Aplica o tema salvo ao carregar a página
  window.onload = function() {
    if (localStorage.getItem('darkMode') === 'enabled') {
      document.body.classList.add('dark-mode');
    }
  };