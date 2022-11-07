import cards from "./cards";
import { mostrar } from "./mostrar";

export function searchInKeyUp(event) {
	const searched = event.target.value;

	const cardsFound = cardsPesquisa(searched);

	cardsFound.length > 0 ? mostrar(cardsFound) : (listDiv.innerHTML = "Nenhum asilo encontrado :(");
}

export function cardsPesquisa(searched) {
	return cards.filter((card) => {
		return card.titulo.toLowerCase().includes(searched.toLowerCase());
	});
}
