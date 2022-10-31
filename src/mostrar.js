import cards from './cards';
import { listDiv } from "./seletores";


export function mostrarTudo(cards) {
  mostrar(cards);
}

export function mostrar(cards) {
  let list = "";

  if (cards.length <= 0) {
    list += `<div id='no-product'>Nenhum asilo disponível</div>`;
  } else {
    cards.forEach((cards) => {
      list += `
      <div class="card">

      <div class="card-header">
        <img src="${cards.img}" />
      </div>
    
      <div class="card-body">
        <h3>${cards.titulo}</h3>
        <p>${cards.descricao} </p>
      </div>
    
      <div class="actionsCard">
        <button class="actions"><a href="${cards.btnSite}" class="link-cards">Ver mais</a></button>
        <button class="actions"><a href="${cards.btnMaps}" target="_blank" class="link-cards">Ver no Google Maps</a></button>
      </div>
      
    </div>
    
    </div>

      `;
    });
  }

  listDiv.innerHTML = list;
}