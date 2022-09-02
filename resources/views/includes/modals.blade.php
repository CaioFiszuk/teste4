<div class="modal fade" id="window">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Registrar produto</h3>
                <button class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form action="{{route('add.product')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Nome">

                    <input type="text" name="description" placeholder="Descrição">

                    <input type="text" name="price" placeholder="Preço">

                    <input type="text" name="quantity" placeholder="Quantidade">

                    <label>Categoria:</label>
                    <select name="category">
                      <option value="1">Agulhas</option>
                      <option value="2">Apontadores</option>
                      <option value="3">Borrachas</option>
                      <option value="4">Cadernos</option>
                      <option value="5">Canetas</option>
                      <option value="6">Carimbos</option>
                      <option value="7">Colas</option>
                      <option value="8">Envelopes</option>
                      <option value="9">Estiletes</option>
                      <option value="10">Estojos</option>
                      <option value="11">Ficharios</option>
                      <option value="12">Fitas Adesivas</option>
                      <option value="13">Gizes</option>
                      <option value="14">Marcadores de Texto</option>
                      <option value="15">Pastas</option>
                      <option value="16">Papel Carvão</option>
                      <option value="17">Papel Couche</option>
                      <option value="18">Papel Jornal</option>
                      <option value="19">Pilhas</option>
                      <option value="20">Post Its</option>
                      <option value="21">Pranchetas</option>
                      <option value="22">Sulfites</option>
                      <option value="23">Tesouras</option>
                    </select>

                    <input type="submit" value="Registrar" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</div>