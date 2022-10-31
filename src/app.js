import { search } from "./seletores";
import { searchInKeyUp } from "./pesquisa";
import { mostrarTudo} from "./mostrar";
import { apagarAsilo } from "./apagar";
import asilos from "./asilos";
import _ from 'lodash';

search.addEventListener("keyup", _.debounce(searchInKeyUp, 400));

document.body.addEventListener("click", function (event) {
  event.preventDefault();

  const asiloId = event.target.getAttribute("data-remove");
  if (asiloId) {
    apagarAsilo(asiloId);
  }
});

mostrarTudo(asilos);