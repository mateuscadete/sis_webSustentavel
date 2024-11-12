const precoItem = 270.00; // Preço fixo por item
let quantidade = 1;

function updatePreco() {
  const totalPreco = precoItem * quantidade;
  document.getElementById('preco').textContent = `R$ ${totalPreco.toFixed(2).replace('.', ',')}`;
}

function updateQuantityFill() {
  const fillPercentage = Math.min(100, (quantidade / 50) * 100); // Limita o preenchimento até 100%
  document.getElementById('quantity-fill').style.width = `${fillPercentage}%`;
}

function increaseQuantity() {
  quantidade++;
  document.getElementById('quantidade').textContent = quantidade;
  updatePreco();
  updateQuantityFill();
}

function decreaseQuantity() {
  if (quantidade > 1) {
    quantidade--;
    document.getElementById('quantidade').textContent = quantidade;
    updatePreco();
    updateQuantityFill();
  }
}

updatePreco(); // Inicializa o preço ao carregar a página

const remover = document.getElementsByClassName("remover")
for (var i = 0; i < remover.length; i++) {
  remover[i].addEventListener("clck", function (event) {
    event.target.parentElement.parentElement.parentElement.parentElement.remove()
  })
}

