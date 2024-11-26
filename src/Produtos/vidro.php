<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imagens/MR_processed.png" type="image/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Style/Produtos/vidro.css"> 
    <title>Vidro - MarketRecycla</title>
</head>


<body>

<?php
include 'navbar.php';
include 'main.php'
?>
 
    <aside>
        <h2>Vidros</h2>
            <ul style="font-size: 25px; font-weight: bold;">Categorias</ul>
            <a href="#"><li>Vidros de aquário</li></a>
            <a href="#"><li >Garrafas</li></a>
            <a href="#"><li>Copos e pratos</li></a>
            <a href="#"><li>Embalagens</li></a>

            <div class="container">
        <h2>Preço Max</h2>
        <div id="preco">R$ 100,00</div>
        <input type="range" id="precoSlider" min="0" max="500" value="100" class="slider">
    </div>

    <script>
        const precoDisplay = document.getElementById("preco");
        const precoSlider = document.getElementById("precoSlider");

        precoSlider.addEventListener("input", function() {
            let valor = precoSlider.value;
            precoDisplay.innerText = `R$ ${parseFloat(valor).toFixed(2)}`;
        });
    </script>

            

    </aside>

    <div class="produto">
        <img class="figura" src="../imagens/lapidado.jfif">

        <p class="descrição">Garrafa de Vidro Lapidado</p>

        <p class="preço">R$ 32,<sub>55</sub></p>

        
        <input type="number" id="qtde" min="1" value="1">
        <a href="../carrinho.php"> <button onclick="adicionarAoCarrinho(17)">Comprar</button></a>
        

        <p class="endereco">São Paulo, Jd das Oliveiras | Hoje 16:22</p>
    </div>

    <div class="produto2">
        <img class="figura" src="../imagens/garrafacoca.jpg">

        <p class="descrição">Garrafa Retornavel Coca-Cola 500ml</p>

        <p class="preço">R$ 15,<sub>50</sub> un</p>

        
        <input type="number" id="qtde" min="1" value="1">
        <a href="../carrinho.php"><button onclick="adicionarAoCarrinho(18)">Comprar</button></a>
        

        <p class="endereco">São Paulo, Penha da França | 25/10/2024 17:22</p>
    </div>

    <div class="produto3">
        <img class="figura" src="../imagens/vidrometro.jpg">

        <p class="descrição">Vidro metro quadrado</p>

        <p class="preço">R$ 30,<sub>00</sub></p>

       
        <input type="number" id="qtde" min="1" value="1">
        <a href="../carrinho.php"> <button onclick="adicionarAoCarrinho(19)">Comprar</button></a>
        

        <p class="endereco">São Paulo, São Miguel | Hoje 15:30</p>
    </div>

    <div class="produto4">
        <img class="figura" src="../imagens/potevidro.webp">

        <p class="descrição">Pote Vidro</p>

        <p class="preço">R$ 20,<sub>00</sub></p>

       
        <input type="number" id="qtde" min="1" value="1">
        <a href="../carrinho.php"><button onclick="adicionarAoCarrinho(20)">Comprar</button></a>
        

        <p class="endereco">Itaquaquecetuba | 15/11/2024 16:47</p>
    </div>


    <?php
include "footer.php"
?>
   
    <script>
        function adicionarAoCarrinho(idProduto) {
            const quantidade = document.getElementById('qtde').value;
            
            fetch('../controllers/adicionar_ao_carrinho.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    idProduto: idProduto,
                    qtde: parseInt(quantidade)
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console,log(data.message);
                } else {
                    console.log(data.error);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                alert('Erro ao adicionar produto ao carrinho');
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>