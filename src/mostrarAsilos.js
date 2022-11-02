import asilos from "./asilos";
import { listDiv } from "./seletoresAsilos";

export function mostrarAsilo(asilos) {
  let list = "";

  if(asilos.length<=0){
  list += `<div id='no-product'>Págino indisponível</div>`;
} else {
    list += `
    
      <div class="container-asilo" id="${asilos.id}">
      <div class="slider">
        <div class="slides">
          <!-- radio button -->
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
          <!-- radio button -->
          <!-- imagens -->
          <div class="slide first" id="">
            <img src="${asilos.img1}" alt="imagem 1" id="" />
          </div>
          <div class="slide">
            <img src="${asilos.img2}" alt="imagem 2" id="" />
          </div>
          <div class="slide">
            <img src="${asilos.img3}" alt="imagem 3" style="height: 470px" id="" />
          </div>
          <!-- imagens -->

          <!-- navigation -->

          <div class="nav-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
          </div>
        </div>

        <div class="manual-navigation">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
        </div>
      </div>
      <div class="info">
        <h2 class="titulo">${asilos.titulo}</h2>
        <p class="descricao">${asilos.descricao}</p>
        <div class="contato">
          <p class="localizacao"><strong> Localização: </strong> ${asilos.endereco} </p>
          <ion-icon name="call-outline"></ion-icon> ${asilos.telefone}
        </div>
      </div>
    </div>

    `;

}

listDiv.innerHTML = list;
}