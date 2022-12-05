const modal = document.getElementById("modal");
const btnOpenModal = document.getElementById("btn-filtro");
const backdrop = document.getElementById("backdrop");

backdrop.addEventListener("click", () => {
	closeModal();
});

btnOpenModal.addEventListener("click", () => {
	openModal();
});

function openModal() {
	modal.style.display = "flex";
}

function closeModal() {
	modal.style.display = "none";
}
