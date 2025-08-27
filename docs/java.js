const sidebar = document.getElementById('sidebar');

let lastScrollTop = window.scrollY;

function updateSidebarPosition() {
    const targetTop = window.scrollY + 60;

    // Atualiza a posição sem transição lenta
    sidebar.style.top = targetTop + 'px';

    requestAnimationFrame(updateSidebarPosition);
}

// Inicia o loop da animação
requestAnimationFrame(updateSidebarPosition);