 <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="imagens/MR_processed.png" type="image/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/sobre.css"> <!-- Link para seu CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin="">
    </script>

    <style>
        #map {
            margin-left: 0%;
            height: 350px;
            width: auto;
        }
    </style>
    <title>Sobre - MarketRecycla</title>
</head>

<body>
    <?php
    include "Include/navbar.php";
    include "Include/main.php"
    ?>


    <br>

    <aside class="somos">
        <h2 style="color: rgb(61, 52, 48);
    font-weight: bold;">Quem nós somos? </h2>

        <h3 class="marketrecycla">MarketRecycla!</h3>

        <p class="principal">Já pensou em transformar o lixo em lucro? Através da nossa companhia MarketRecycla você pode vender seus
            itens
            recicláveis com maior facilidade, gere um lucro e ajude o meio ambiente.</p>

    </aside>

    <aside class="missão">
        <h2 style="color: rgb(61, 52, 48);
        font-weight: bold;">Qual é nossa missão?</h2>

        <h3 class="facilitar">Facilitar!</h3>

        <p class="sub">No MarketRecycla, acreditamos que a reciclagem deve ser sempre acessível à todos. Nossa missão é conectar pessoas que querem vender seus recicláveis com aqueles que buscam comprá-los, criando uma comunidade que valoriza á
            sustentabilidade e a economia circular.</p>

    </aside>
    <br>
    <aside class="porque">
        <h2 style="font-weight: bolder;">Por que escolher a MarketRecycla?</h2>
        <p>Em um mundo onde a sustentabilidade se torna cada vez mais essencial, nossa empresa se destaca como a escolha ideal para quem busca produtos recicláveis de alta qualidade. Aqui estão algumas razões principais para optar pro nós:</p>

        <ol type="1">
            <li>Compromisso com o Meio Ambiente</li>
            <p>Priorizamos a saúde do planeta. Nossos produtos são desenvolvidos a partir de materiais recicláveis, reduzindo a quantidade de resíduos e promovendo uma economia circular. Ao escolher nosso itens, você contribui diretamente para a diminuição da poluição e do desperdício.</p>
            <li>Qualidade e Durabilidade</li>
            <p>Não é preciso sacrificar qualidade em nome da sustentabilidade. Nossos produtos passam por rigorosos testes de qualidade, garantindo que sejam não apenas recicláveis, mas também duradouros e funcionais. Você pode confiar que suas escolhas sustentáveis não comprometerão seu dia a dia.</p>
            <li>Inovação e Design</li>
            <p>Estamos sempre em busca de novas maneiras de reiventar o que é reciclável. Nossos produtos combinam inovação com design moderno, oferecendo soluções que se destacam tanto pela estética quanto pela funcionalidade. Transformar o seu espaço de maneira sustentável nunca foi tão fácil e elegante!</p>
            <li>Trasnparência e Ética</li>
            <p>Acreditamos que a trasnparência é fundamental. Nossos processos de produção são abertos e éticos, garantindo que você saiba exatamente de onde vêm os produtos que está comprando. Trabalhamos em colaboração com comunidades e fornecedores que compartilham nossos valores de responsabilidade social.</p>
            <li>Educação e Conscientização</li>
            <p>Nosso compromisso vai além de oferecer produtos. Promovemos a educação sobre reciclagem e práticas sustentáveis, ajudando nossos clientes a entenderem a importância de suas escolhas. Juntos, podemos fazer a diferença!</p>


        </ol>

        <h3>Junte-se a Nós</h3>
        <p class="nos">Ao escolher nossos produtos reciclavéis, você não está apenas fazendo uma compra; está fazendo parte de um movimento em prol de um futuro mais verde. Explore nosso catálogo e descubra como pequenas mudanças podem ter um grande impacto. Sua escolha conta!</p>

        <p>Faça parte da mudança. Escolha sustentabilidade. <b>Escolha MarketRecycla!</b></p>

    </aside>
    
    <br>
    <br>
    <div class="criadores-container">
    <h2 class="titulo">Criadores :</h2>
    <div class="criadores">
      <div class="criador">
        <div class="icone">
            <a href="https://github.com/JoelQuia" target="_blank">
        <img src="imagens/joel.jpg" alt="Joel"></a>
        </div>
        <h3>Joel Quia</h3>
        <p>Desenvolvedor front-end e designer</p>
      </div>
      <div class="criador">
        <div class="icone">
            <a href="https://github.com/mateuscadete" target="_blank">
          <img src="imagens/mateus.jpg" alt="Mateus"></a>
        </div>
        <h3>Mateus Cadete</h3>
        <p>Manager</p>
      </div>
      <div class="criador">
        <div class="icone">
            <a href="https://github.com/Gabriel5454"target="_blank">
        <img src="imagens/gabriel.png" alt="Gabrie"></a>
    
        </div>
        <h3>Gabriel Martins</h3>
        <p>Desenvolvedor back-end</p>
      </div>
      <div class="criador">
        <div class="icone">
            <a href="https://github.com/Nxgueira"target="_blank">
            <img src="imagens/vitor.jpg" alt="Vitor">
            </a>
        </div>
        <h3>Victor Nogueira</h3>
        <p>Tester</p>
      </div>
    </div>
  </div>
    <br>
    <br>
    <br>
    <center><h3>Onde Estamos</h3></center>
    <br>
    <br>
    <div id="map">
        <script>
            var map = L.map('map').setView([-23.556831106, -46.653830718], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var marker = L.marker([-23.556831106, -46.653830718]).addTo(map);

            marker.bindPopup("<b></b><br>MarketRecycla.").openPopup();

            function onMapClick(e) {
                alert("You clicked the map at " + e.latlng);
            }

            map.on('click', onMapClick);
        </script>


    </div>

    <?php
    include "Include/footer.php"
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>