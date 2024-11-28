<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../imagens/MR_processed.png" type="image/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Style/Produtos/vidro.css"> 
    <title>Vidro - MarketRecycla</title>
</head>


<body>

<?php
include '../navbar.php';
include '../main.php'
?>
 
    <aside>
        <h2>Vidros</h2>
            <ul style="font-size: 25px; font-weight: bold;">Categorias</ul>
            <a href="aquario.php"><li>Vidros de aquário</li></a>
            <a href="garrafa.php"><li >Garrafas</li></a>
            <a href="copospratos.php"><li>Copos e pratos</li></a>
            <a href="embalagens.php"><li>Embalagens</li></a>
            

    </aside>

    <div class="produto">
        <img class="figura" src="../../imagens/potetempero.webp">

        <p class="descrição">Pote para Tempero</p>

        <p class="preço">R$ 14,<sub>55</sub></p>

        
        <input type="number" id="qtde" min="1" value="1">
        <a href="../../carrinho.php"> <button onclick="adicionarAoCarrinho(17)">Comprar</button></a>
        

        <p class="endereco">São Paulo, Jaçana | 15/10/2024 10:12</p>
    </div>

    
    <div class="produto2">
        <img class="figura" src="../../imagens/frascoperfume.webp">

        <p class="descrição">Frasco de Vidro</p>

        <p class="preço">R$ 17,<sub>00</sub></p>

       
        <input type="number" id="qtde" min="1" value="1">
        <a href="../../carrinho.php"> <button onclick="adicionarAoCarrinho(19)">Comprar</button></a>
        

        <p class="endereco">São Paulo, Ermelino Matarazzp | Hoje 15:30</p>
    </div>

    <div class="produto3">
        <img class="figura" src="../../imagens/potevidro.webp">

        <p class="descrição">Pote Vidro</p>

        <p class="preço">R$ 20,<sub>00</sub></p>

       
        <input type="number" id="qtde" min="1" value="1">
        <a href="../../carrinho.php"><button onclick="adicionarAoCarrinho(20)">Comprar</button></a>
        

        <p class="endereco">Itaquaquecetuba | 15/11/2024 16:47</p>
    </div>


    <?php
include '../footer.php'
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