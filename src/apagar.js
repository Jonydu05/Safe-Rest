import asilos from './asilos';
import { asilosPesquisa } from "./pesquisa";
import { mostrarTudo } from "./mostrar";
import { search } from "./seletores";

export function apagarAsilo(asiloId) {
  const index = asilos.findIndex((asilos) => {
    return +asilos.id === +asiloId;
  });

  if (index > -1) {
    asilos.splice(index, 1);

    if (search.value != "") {
      const asiloPesquisado = asilosPesquisa(search.value);
      mostrarTudo(asiloPesquisado);
      return;
    }

    mostrarTudo(asilos);
  }
}