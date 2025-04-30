<div class="container mt-5">
    <h2>Registro de Vendas</h2>
    <form action="#" method="POST">
      <div class="mb-3">
        <label for="cliente" class="form-label">Cliente</label>
        <input type="text" class="form-control" id="cliente" name="cliente" required>
      </div>
      <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" required>
      </div>
      <div class="mb-3">
        <label for="produto" class="form-label">Produto</label>
        <select class="form-select" id="produto" name="produto" required>
          <option value="" disabled selected>Selecione o Produto</option>
          <option value="produto1">Produto 1</option>
          <option value="produto2">Produto 2</option>
          <option value="produto3">Produto 3</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" required>
      </div>
      <div class="mb-3">
        <label for="data_venda" class="form-label">Data da Venda</label>
        <input type="date" class="form-control" id="data_venda" name="data_venda" required>
      </div>
      <div class="mb-3">
        <label for="pagamento" class="form-label">Forma de Pagamento</label>
        <select class="form-select" id="pagamento" name="pagamento" required>
          <option value="dinheiro">Dinheiro</option>
          <option value="cartao">Cartão</option>
          <option value="pix">Pix</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
      <button type="reset" class="btn btn-secondary">Limpar</button>
      <a href="index.html" class="btn btn-danger">Voltar</a>
    </form>

    <h2 class="mt-5">Histórico de Vendas</h2>
    <div class="mb-3">
      <label for="pesquisar" class="form-label">Pesquisar Cliente</label>
      <input type="text" class="form-control" id="pesquisar" placeholder="Digite o nome do cliente">
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Cliente</th>
          <th scope="col">Produto</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01/03/2025</td>
          <td>Cliente 1</td>
          <td>Produto 1</td>
          <td>2</td>
          <td>R$ 100,00</td>
        </tr>
        <tr>
          <td>02/03/2025</td>
          <td>Cliente 2</td>
          <td>Produto 2</td>
          <td>1</td>
          <td>R$ 50,00</td>
        </tr>
      </tbody>
    </table>
    <a href="cadastrovendas.html" class="btn btn-success mt-3">Adicionar Nova Venda</a>
  </div>