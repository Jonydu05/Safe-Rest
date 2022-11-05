function iniciaModal(modalID) {
  const modal = document.getElementById(modalID);
  modal.classList.add('mostrar');
  modal.addEventListener('click', (e)=> {
    console.log(e.target);
  });
}

const foto = document.getElementById("foto");
foto.addEventListener('click', () => iniciaModal("modal-asilos"));

