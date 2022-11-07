import { search, searchMobile } from "./seletores";
import { searchInKeyUp } from "./pesquisa";
import { mostrar } from "./mostrar";
import cards from "./cards";
import _ from "lodash";

export function pesquisaSite() {
	search.addEventListener("keyup", _.debounce(searchInKeyUp, 400));
	searchMobile.addEventListener("keyup", _.debounce(searchInKeyUp, 400));
}

pesquisaSite();

mostrar(cards);
