<form action="/../interno/app/model/cadastros/cadastros_admin/cad_funcao.php" method="post">
    <div class="funcao">
        <input type="text" name="descricao" placeholder="descricao" id="descricao" required> 
        
        <div class="select_setor">
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

        <label for="status">Ativo</label>
        <input type="checkbox" name="status" id="status" value="on">
    </div>

    <button type="submit" class="btn_cadastrar">Gravar</button>
</form>
