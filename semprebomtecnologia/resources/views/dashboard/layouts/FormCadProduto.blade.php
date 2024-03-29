<form name="CadProduto" method="GET" action="insert_produto" >
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome</label>
        <input class="form-control" id="NameProd" name="NameProd" type="text" placeholder="Nome do Produto">
    </div>

    <div class="d-md-flex flex-row bd-highlight">
        <div class="w-50 p-3">      
            <div class="form-group">
                <label for="exampleFormControlSelect2">Grupo</label>
                <select class="form-control" id="GroupProd"  name="GroupProd">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        
        <div class="w-50 p-3">
            <div class="form-group">
                <label for="exampleFormControlSelect2">SubGrupo</label>
                <select class="form-control" id="SubGroupProd"  name="SubGroupProd">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>        
        </div>        
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descricão do Produto</label>
        <textarea class="form-control" id="DescricaoProd"  name="DescricaoProd" rows="3" maxlength="300"> </textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Selecionar Foto</label>
        <input type="file" class="form-control-file"  id="PhotoFile"  name="PhotoFile">
    </div>

    <button type="submit" class="btn btn-success">salvar</button>
    <button type="reset" class="btn btn-secondary">Secondary</button>
 
</form>

