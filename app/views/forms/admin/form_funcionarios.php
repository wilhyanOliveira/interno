<form action="/flamecontrol/Controlers/cadastros_admin/cad_funcionarios.php" method="post">

<div class="funcionario">
    <input type="text" name="nome" placeholder="nome" id="nome" required>                      
    <input type="text" name="cnpj" placeholder="CNPJ/CPF" id="cnpj" required>
    <input type="text" name="senha" placeholder="senha" id="senha" required>
</div>
<div class="tipo">
<div class="minicipio">
    <input type="text" name="cep" placeholder="CEP" id="cep" required>
    <input type="text" name="municipio" placeholder="MUNICIPIO" id="municipio" required>
    <input type="text" name="uf" placeholder="UF" id="uf" required>
</div>
    <div class="status_funcio">
        <label for="status">ATIVO</label>
        <input type="checkbox" name="ativo" id="status" value="on">
    </div>
</div>

<div class ="funcao">
<select name="funcao" id="funcao">
    <option value="">Função</option>

</select>
</div>

<div class ="equipe_atend">
<select name="equipe_atend" id="equipe_atend">
    <option value="">Equipe de Atendimento</option>


</select>
</div>

<div class ="setor">
<select name="setor" id="setor">
    <option value="">Setor</option>

</select>
</div>

<div class="buttons_clie">
<button type="button" class="btn" id="cancela_clie">CANCELAR</button>
<button type="submit" class="btn" id="salvar_clie">SALVAR</button>
</div>

</form>