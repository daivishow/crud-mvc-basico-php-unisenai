<?php
?>
<h2>💰 Vender um Carro</h2>
<p>Informe o Modelo e a Cor do carro exatamente como ele foi fabricado para removê-lo do estoque.</p>
<form method="POST" action="index.php">
    <input type="hidden" name="acao" value="vender">
    
    <label for="modelo_venda">Modelo do Carro a ser vendido:</label>
    <input type="text" id="modelo_venda" name="modelo_venda" required>
    
    <label for="cor_venda">Cor do Carro a ser vendido:</label>
    <input type="text" id="cor_venda" name="cor_venda" required>
    
    <button type="submit" class="submit-button" style="background-color: #dc3545;">Vender Carro</button>
</form>