import { search } from "./seletores";
import { searchInKeyUp } from "./pesquisa";
import { mostrarTudo} from "./mostrar";
import cards from "./cards";
import _ from 'lodash';

export function pesquisaSite() {
  search.addEventListener("keyup", _.debounce(searchInKeyUp, 400));
}

pesquisaSite() 

mostrarTudo(cards);