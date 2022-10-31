import { search } from "./seletores";
import { searchInKeyUp } from "./pesquisa";
import { mostrarTudo} from "./mostrar";
import asilos from "./asilos";
import _ from 'lodash';

search.addEventListener("keyup", _.debounce(searchInKeyUp, 400));

mostrarTudo(asilos);