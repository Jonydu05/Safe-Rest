import asilos from './asilos';
import { listDiv } from "./seletores";


export function mostrarTudo(asilos) {
  mostrar(asilos);
}

export function mostrar(asilos) {
  let list = "";

  if (asilos.length <= 0) {
    list += `<div id='no-product'>Nenhum asilo disponível</div>`;
  } else {
    asilos.forEach((asilos) => {
      list += `
      <div class="card">

      <div class="card-header">
        <img src="${asilos.img}" />
      </div>
    
      <div class="card-body">
        <h3>${asilos.titulo}</h3>
        <p>${asilos.descricao} </p>
      </div>
    
      <div class="actionsCard">
        <button class="actions"><a href="${asilos.btnSite}" class="link-asilos">Ver mais</a></button>
        <button class="actions"><a href="${asilos.btnMaps}" target="_blank" class="link-asilos">Ver no Google Maps</a></button>
      </div>
      
    </div>
    
    </div>

      `;
    });
  }

  listDiv.innerHTML = list;
}