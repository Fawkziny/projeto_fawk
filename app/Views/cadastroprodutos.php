
  <div class="container mt-5">
    <h2 class="mb-4">Cadastro de Produto</h2>
    <form>
      <div class="mb-3">
        <label for="nomeProduto" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" id="nomeProduto" required>
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" class="form-control" id="preco" step="0.01" required>
      </div>
      <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade em Estoque</label>
        <input type="number" class="form-control" id="quantidade" required>
      </div>
      <div class="d-flex">
        <button type="button" class="btn btn-secondary me-2" onclick="window.history.back()">Voltar</button>
        <button type="reset" class="btn btn-warning me-2">Limpar</button>
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>

