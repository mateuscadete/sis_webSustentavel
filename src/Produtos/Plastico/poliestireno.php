<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../imagens/MR_processed.png" type="image/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Style/Produtos/plastico.css"> <!-- Link para seu CSS -->
    <title>Plástico - MarketRecycla</title>
</head>

<body>

<?php
include '../navbar.php';
include '../main.php'
?>
 
    <aside>
        <h2>Plásticos</h3>
            <ul style="font-size: 25px; font-weight: bold;">Categorias</ul>
            <a href="pet.php"><li >Polietileno Tereftalato (PET)</li></a>
            <a href="pead.php"><li>Polietileno de Alta Densidade (PEAD)</li></a>
            <a href="pvc.php"><li>Polietileno de Vinila (PVC)</li></a>
            <a href="polipropileno.php"><li>Polipropileno</li></a>
            <a href="poliestireno.php"><li>Poliestireno</li></a>

    </aside>

    <div class="produto">
        <img class="figura" src="../../imagens/isopor.jfif">

        <p class="descrição">Isopor Quadrado</p>

        <p class="preço">R$ 16, <sub>99</sub></p>

        <input type="number" id="qtde" min="1" value="1">
        <a href="../../carrinho.php">  <button onclick="adicionarAoCarrinho(13)">Comprar</button></a>
        

        <p class="endereco">Mogi das Cruzes, Vila Oliveira | Hoje 17:24</p>
    </div>

    <div class="produto2">
        <img class="figura" src="../../imagens/frasco120ml.webp">

        <p class="descrição">Frasco 500ml</p>

        <p class="preço">R$ 6, <sub>50</sub></p>

        <input type="number" id="qtde" min="1" value="1">
        <a href="../../carrinho.php"> <button onclick="adicionarAoCarrinho(14)">Comprar</button></a>
        

        <p class="endereco">São Paulo, Penha  | 1/11/2024 17:00</p>
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
                    console.log(data.message);
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