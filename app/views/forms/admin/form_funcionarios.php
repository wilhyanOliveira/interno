<form action="/../interno/app/model/cadastros/cadastros_admin/cad_funcionario.php" method="post">

<div class="funcionario">
    <input type="text" name="nome" placeholder="nome" id="nome" required>                      
    <input type="text" name="cpf" placeholder="CNPJ/CPF" id="cpf" required>
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
        <input type="checkbox" name="status" id="status" value="on">
    </div>
</div>

<div class ="setor">
    <select name="setor" required>
        <option value="">Selecione um setor</option>
                
            <?php
                include(__DIR__ . '/../../../database/conexao.php');

                $retorno = mysqli_query($conexao, "SELECT * FROM T_SETOR ORDER BY ID");

                if ($retorno && mysqli_num_rows($retorno) > 0) 
                {
                    while ($option = mysqli_fetch_assoc($retorno)) 
                    {
                        echo '<option value="' . $option['id'] . '">' . $option['descricao'] . '</option>';
                    }
                } else 
                {
                    echo '<option value="">Nenhum setor encontrado</option>';
                }
            ?>
    </select>
</div>

<div class ="funcao">
    <select name="funcao" required>
        <option value="">Selecione uma função </option>
                
                <?php
                include(__DIR__ . '/../../../database/conexao.php');

                $retorno = mysqli_query($conexao, 
                "SELECT 
                T_FUNCAO.id AS id_funcao,
                T_FUNCAO.descricao as descricao_funcao,
                T_SETOR.descricao AS nome_setor
                FROM T_FUNCAO  
                INNER JOIN T_SETOR 
                ON T_FUNCAO.id_setor = T_SETOR.id 
                ORDER BY T_FUNCAO.id " );

                if ($retorno && mysqli_num_rows($retorno) > 0) 
                {
                    while ($option = mysqli_fetch_assoc($retorno)) 
                    {
                        echo '<option value="' . $option['id_funcao'] . '">'
                         . $option['descricao_funcao'] . ' - ' . $option['nome_setor']. '</option>';
                    }
                } else 
                {
                    echo '<option value="">Nenhuma função encontrada</option>';
                }
                ?>
    </select>
</div>

<div class ="equipe_atend">
    <select name="equipe" required>
        <option value="">Selecione uma equipe</option>
                
            <?php
                include(__DIR__ . '/../../../database/conexao.php');

                $retorno = mysqli_query($conexao, "SELECT * FROM T_EQUIPE ORDER BY ID");

                if ($retorno && mysqli_num_rows($retorno) > 0) 
                {
                    while ($option = mysqli_fetch_assoc($retorno)) 
                    {
                        echo '<option value="' . $option['id'] . '">' . $option['descricao'] . '</option>';
                    }
                } else 
                {
                    echo '<option value="">Nenhums equipe encontrada</option>';
                }
            ?>
    </select>
</div>

<div class="buttons_funci">
<button type="button" class="btn" id="cancela_clie">CANCELAR</button>
<button type="submit" class="btn" id="salvar_funci">SALVAR</button>
</div>

</form>