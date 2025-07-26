<form action="/../interno/app/model/cadastros/cadastros_admin/cad_cliente.php" method="post">
    
    <div class="inf_principais">
        <div class="razao">
            <input type="text" name="razao" placeholder="Razão Social" id="razao" required>
            <input type="text" name="fantasia" placeholder="Nome Fantasia" id="fantasia" required>
            <input type="text" name="responsavel" placeholder="Responsável" id="resposavel" required>
        </div>
    </div>

    <div class="documentos">
        <div class="met">
            <label for="cnpj">CNPJ/CPF</label>
            <input type="text" name="cnpj" placeholder="CNPJ/CPF" id="cnpj" required>
        </div>
        <div class="met">
            <label for="ie">IE/RG</label>
            <input type="text" name="ie" placeholder="IE/RG" id="ie" required>
        </div>
    </div>

    <div class="endereco">
        <div class="minicipio">
            <div class="met">
                <label for="municipio">MUNICÍPIO</label>
                <input type="text" name="municipio" placeholder="Município" id="municipio" required>
            </div>
            <div class="met">
                <label for="cep">CEP</label>
                <input type="text" name="cep" placeholder="CEP" id="cep" required>
            </div>
            <div class="met">
                <label for="uf">UF</label>
                <input type="text" name="uf" placeholder="UF" id="uf" required>
            </div>
        </div>

        <div class="rua">
            <input type="text" name="rua" placeholder="RUA" id="rua" required>
            <input type="text" name="numero" placeholder="NUMERO" id="numero" required>
        </div>

        <div class="bairro">
            <input type="text" name="bairro" placeholder="BAIRRO" id="bairro" required>
        </div>

        <div class="referencia">
        <input type="text" name="referencia" placeholder="REFERÊNCIA" id="referencia">
        </div>
    </div>

    <div class="email">
        <input type="email" name="email" placeholder="EMAIL" id="email" required>
    </div>

    <div class="contatos">
        <div class="fone_cel">
            <div class="telefone">
                <label for="fone">TELEFONE</label>
                <input type="tel" name="fone" placeholder="(__)____-____" id="fone" required>
            </div>

            <div class="tel_celular">
                <label for="celular">CELULAR</label>
                <input type="tel" name="celular" placeholder="(__)_____-____" id="celular" required>
            </div>

            <div class="atividade">
                <label for="ramo_ativi">Atividade</label>
                <input type="text" name="atividade" placeholder="Atividade" id="atividade" required>
            </div>
        </div>
    </div>

    <div class="linha_check">
  <div class="check">
    <label for="revenda">REVENDA</label>
    <input type="checkbox" id="revenda" name="revenda">
  </div>

  <div class="check">
    <label for="ativo">ATIVO</label>
    <input type="checkbox" id="status" name="status">
  </div>
</div>

    <div class="buttons_clie">
        <button type="button" class="btn" id="cancela_funci">CANCELAR</button>
        <button type="submit" class="btn" id="salvar_funci">SALVAR</button>
    </div>
</form>
