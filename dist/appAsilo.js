(()=>{"use strict";var e,a,o=document.querySelector("#list");document.querySelector("#searchInput"),a="",a+=(e=[{id:"1",titulo:"Casa Luz do Caminho",img1:"../assets/img/caminho/foto1.jpg",img2:"../assets/img/caminho/foto2.jpg",img3:"../assets/img/caminho/foto3.png",descricao:"A casa luz do caminho tem por objetivo fornecer a esses irmãozinhos tudo que eles podem esperar de um verdadeiro lar: alimentação adequada, recreação, assistência médica e odontológica (utilizamos o SUS ou atendimento voluntário) e, acima de tudo, muito amor, carinho e respeito.",endereco:"Rua Domingos José Ferreira, 80 - Mandaqui, SP",telefone:"11 2232-3264"},{id:"2",titulo:"Centro Integrado de Atendimento ao Idoso",img1:"../assets/img/ciai/foto1.jpg",img2:"../assets/img/ciai/foto2.jpg",img3:"../assets/img/ciai/foto3.jpg",descricao:"Criado há mais de 30 anos, o Centro Integrado de Atendimento ao Idoso se tornou uma referência em residência permanente de cuidados sênior em São Paulo. As suítes possuem infraestrutura completa para a saúde e o conforto dos hóspedes, as áreas de convivência são cercadas de natureza e o canto dos pássaros nos faz esquecer que estamos na cidade. O CIAI possui facilidades como restaurante, café e farmácia, entre outros. A agenda dos nossos hóspedes seniores é repleta de atividades para estimulação cognitiva, física e social, tudo isso orquestrado por uma equipe multidisciplinar, treinada para agir com profissionalismo, mas sem deixar o carinho e o afeto de lado. Seja bem-vindo (a) ao CIAI.",endereco:"R. Alfredo Mendes da Silva, 201 – Jardim Jussara, SP",telefone:"11 3751-4951"},{id:"3",titulo:"Esplendor Residencial Sênior",img1:"../assets/img/esplendor/foto1.png",img2:"../assets/img/esplendor/foto2.png",img3:"../assets/img/esplendor/foto3.png",descricao:"Próximo a um dos bairros com uma das mais elevadas expectativas de vida em São Paulo o Esplendor Residencial Sênior fica situado no bairro da Vila Carrão, Zona Leste de São Paulo. Seu posicionamento estratégico permite fácil localização e acesso a habitação e cuidado a cidadãos de idade avançada. Sendo assim, o Esplendor Residencial Sênior é a habitação ideal para o idoso que precisa de cuidados especiais, desde alimentação, entretenimento ou atendimento médico ou acompanhamento constante, garantindo a segurança para a família inteira. ",endereco:"Rua Nunes Balboa, 622 - V. Carrão, SP",telefone:"11 2097-0440"},{id:"4",titulo:"Gardenville",img1:"../assets/img/garden/foto1.jpg",img2:"../assets/img/garden/foto2.jpg",img3:"../assets/img/garden/foto3.jpg",descricao:"Um residencial para idosos em todos os níveis de necessidades. Tudo aqui foi pensado e desenvolvido para que os moradores se sintam em casa. Por isso, nossas instalações e serviços foram desenhados para valorizar a privacidade e seu bem-estar individual. Nosso atendimento é personalizado de acordo com as necessidades e preferências pessoais de cada morador.",endereco:"Rua Itá, 381 - São Paulo",telefone:"11 93463-5474"},{id:"5",titulo:"Clínica de Repouso Horto Florestal",img1:"../assets/img/horto/foto1.jpeg",img2:"../assets/img/horto/foto2.jpeg",img3:"../assets/img/horto/foto3.jpeg",descricao:"A Clínica de Repouso Horto Florestal, fundada em 1972 pelo médico Dr. Chafik Curi, cuida de pessoas em diferentes condições de saúde. Com amor, respeito e profissionalismo, oferece aos seus residentes um verdadeiro lar. É provavelmente a região urbana com maior densidade de área verde no município. Junta-se à vegetação das ruas e terrenos as extensas matas do Horto Florestal e do Parque Estadual da Cantareira, que ficam em volta - parte do parque pertence ao distrito vizinho Mandaqui. ",endereco:"Av. Luis Carlos Gentile de Laet, 452  - Horto Florestal, SP",telefone:"11 2203-0701 / 11 2203-0801"},{id:"6",titulo:"Espaço Serenidade",img1:"../assets/img/serenidade/foto1.jpeg",descricao:"Estamos localizados em área nobre e privilegiada, ao lado do Parque Celso Daniel, em Santo André/SP. O Espaço Serenidade possui ótima infra estrutura, acomodações acolhedoras, ventiladas e iluminação natural. Destaque especial aos amplos jardins em palmeiras imperiais, árvores frutíferas, áreas verdes onde ouvimos o canto dos pássaros e recebemos a visita do beija-flor. ",endereco:"Rua das Palmeiras, 290 - Jardim, Santo André",telefone:"11 2325-7112"},{id:"7",titulo:"São Judas Residence",img1:"../assets/img/saoJudas/foto1.png",img2:"../assets/img/saoJudas/foto2.png",img3:"../assets/img/saoJudas/foto3.png",descricao:"A São Judas Residence é um espaço totalmente dedicado para idosos e oferece um conceito diferenciado, com ambiente acolhedor e equipe especializada. Localizado em Santo André, um município brasileiro da Região do Grande ABC, localizado na Zona Sudeste da Grande São Paulo, parte da Região Metropolitana de São Paulo.",endereco:"Rua Vitória Régia, 1204 - Santo André",telefone:"11 4421-4377 / 11 4473-2630"},{id:"8",titulo:"Jardim das Palmeiras",img1:"../assets/img/palmeiras/foto1.png",img2:"../assets/img/palmeiras/foto2.png",img3:"../assets/img/palmeiras/foto3.png",descricao:"O Residencial Jardim das Palmeiras, um lar para idosos, com mais de 22 anos de experiência no ramo. Tendo uma equipe formada por bons profissionais em diversas áreas. Atualmente agindo com duas unidades, uma no Alto da Boa Vista que é um bairro nobre situado no distrito de Santo Amaro, na zona sul da capital paulista. E outra unidade posicionada no extremo leste do Estado de São Paulo na Região Administrativa de São José dos Campos que fica entre São Paulo e Rio de Janeiro.",endereco:"Av. Ver. José Diniz, 1448 - Alto da Boa Vista, SP",telefone:"11 5531-5447"},{id:"9",titulo:"Residencial Mais Vida",img1:"../assets/img/vida/foto1.jpg",img2:"../assets/img/vida/foto2.jpeg",img3:"../assets/img/vida/foto3.jpeg",descricao:"A Mais Vida Casa de Repouso funciona em regime residencial e acolhe idosos de ambos os sexos, faixa etária acima de 60 anos, se dedica a acolher idosos para fins de possibilitar que o acolhido seja fortalecido e estimulado a exercer seu papel no mundo. Acolher idosos garantindo proteção, integridade, felicidade e principalmente assegurar seus direitos fundamentais, nos termos de Lei nº 10.741/94",endereco:"R. Afonso Celso, 338 – Vila Mariana, SP",telefone:"11 5081-4059"},{id:"10",titulo:"Residencial Vila dos Sonhos",img1:"../assets/img/sem-imagem.png",descricao:"Conheça a Casa de Repouso Residencial Vila dos Sonhos, nosso foco é atender você com serviços inovadores, entre em contato e confira os serviços e profissionais. Contamos com profissionais experientes e treinados periodicamente e por isso, estamos crescendo a cada dia mais.",endereco:"Av. Eng. Caetano Álvares, 6705 – Mandaqui, SP",telefone:"11 2283-2934"},{id:"11",titulo:"Vivace Perdizes",img1:"../assets/img/vivace/foto1.png",img2:"../assets/img/vivace/foto2.png",img3:"../assets/img/vivace/foto3.png",descricao:"A Casa de Repouso Vivace foi especialmente idealizada e projetada para oferecer aos hóspedes um ambiente familiar, de paz, sossego e tranquilidade. Unindo o conforto necessário para o bem-estar do idoso e um tratamento médico de excelência para garantir sua saúde e integração social.",endereco:"Rua Ministro Ferreira Alves, 90 – Perdizes, SP",telefone:"11 5642-4040"}]).length<=0?"<div id='no-product'>Págino indisponível</div>":'\n    \n      <div class="container-asilo" id="'.concat(e.id,'">\n      <div class="slider">\n        <div class="slides">\n          \x3c!-- radio button --\x3e\n          <input type="radio" name="radio-btn" id="radio1" />\n          <input type="radio" name="radio-btn" id="radio2" />\n          <input type="radio" name="radio-btn" id="radio3" />\n          \x3c!-- radio button --\x3e\n          \x3c!-- imagens --\x3e\n          <div class="slide first" id="">\n            <img src="').concat(e.img1,'" alt="imagem 1" id="" />\n          </div>\n          <div class="slide">\n            <img src="').concat(e.img2,'" alt="imagem 2" id="" />\n          </div>\n          <div class="slide">\n            <img src="').concat(e.img3,'" alt="imagem 3" style="height: 470px" id="" />\n          </div>\n          \x3c!-- imagens --\x3e\n\n          \x3c!-- navigation --\x3e\n\n          <div class="nav-auto">\n            <div class="auto-btn1"></div>\n            <div class="auto-btn2"></div>\n            <div class="auto-btn3"></div>\n          </div>\n        </div>\n\n        <div class="manual-navigation">\n          <label for="radio1" class="manual-btn"></label>\n          <label for="radio2" class="manual-btn"></label>\n          <label for="radio3" class="manual-btn"></label>\n        </div>\n      </div>\n      <div class="info">\n        <h2 class="titulo">').concat(e.titulo,'</h2>\n        <p class="descricao">').concat(e.descricao,'</p>\n        <div class="contato">\n          <p class="localizacao"><strong> Localização: </strong> ').concat(e.endereco,' </p>\n          <ion-icon name="call-outline"></ion-icon> ').concat(e.telefone,"\n        </div>\n      </div>\n    </div>\n\n    "),o.innerHTML=a})();