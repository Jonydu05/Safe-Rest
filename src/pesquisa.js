import asilos from './asilos';
import { mostrarTudo } from "./mostrar"; 

export function searchInKeyUp(event) {
  const searched = event.target.value;

  const asilosFound = asilosPesquisa(searched);

  asilosFound.length > 0
    ? mostrarTudo(asilosFound)
    : (listDiv.innerHTML = "Nenhum asilo encontrado :(");
}

export function asilosPesquisa(searched) {
  return asilos.filter((asilo) => {
    return asilo.titulo.toLowerCase().includes(searched.toLowerCase());
  });
}
