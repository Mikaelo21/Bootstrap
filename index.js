function copiar(texto) {
  navigator.clipboard.writeText(texto).then(() => {
    document.getElementById("alerta").innerHTML =
      '<div class="alert alert-primary alert-dismissible fade show w-100 mt-2 divalert" role="alert"> Código copiado!<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
    fechaalerta();
  }).catch(() => {
    document.getElementById("alerta").innerHTML =
      '<div class="alert alert-danger alert-dismissible fade show w-100 mt-2 divalert" role="alert">❌ Erro ao copiar!<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
  });
}

function fechaalerta() {
    setTimeout(() => {
        const alert = document.querySelector(".divalert");
        if (alert) {
            alert.classList.remove("show");
            alert.classList.add("hide");
        }
    }, 1250);
}
  window.addEventListener("load", () => {
  const detalhe = document.getElementById("detalhes");

  if (true) {
      detalhe.open = true;

    detalhe.addEventListener("toggle", () => {
      localStorage.setItem("detailsAberto", detalhe.open);
    });
  }
});
document.querySelectorAll('.menu').forEach(menu => {
  const summary = menu.querySelector('summary');
  
  // Abre no HOVER
  menu.addEventListener('mouseenter', () => {
    menu.setAttribute('open', '');
  });
  
  // Fecha no LEAVE (só se não estiver clicado)
  menu.addEventListener('mouseleave', () => {
    setTimeout(() => {
      if (!menu.matches(':focus-within') && !menu.hasAttribute('data-clicked')) {
        menu.removeAttribute('open');
      }
    }, 150);
  });
  
  // Marca como clicado para manter aberto
  summary.addEventListener('click', (e) => {
    e.stopPropagation();
    if (menu.hasAttribute('open')) {
      menu.setAttribute('data-clicked', 'true');
    }
  });
});