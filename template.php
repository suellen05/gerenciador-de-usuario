<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Usuários</title>
    
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <div class="container">
    <img class="imagem" src="img/usuario.png"  alt="imagem usuario">
        <h1>CADASTRO DE USUÁRIO</h1>

        <form action="">
        <fieldset>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" maxlenght="20" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" maxlenght="8" required>
            <br><br>
            <fieldset>
          
            <label for="admistrador">Usuário Admistrador:</label>
                    <input type="checkbox" name="usuario" value="sim" id = "Admistrador" maxlenght="3">
                    
                    </fieldset>


            <button type="submit">salvar</button>
            </fieldset>
        </form>
    <br>
    <table class="table">
            <thead>
                <tr>    
                    <th>USUÁRIO</th>
                    <th>SENHA</th>
                    <th>ADMINISTRADOR</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
                $sqlBusca = "SELECT * FROM tb_usuarios";
                $resultado = mysqli_query($conexao , $sqlBusca);

                $gerenciadorUsuario = [];

                while($usuario = mysqli_fetch_assoc ($resultado)){
                    $gerenciadorUsuario[] = $usuario;
                }
            foreach($gerenciadorUsuario as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['usuario']; ?></td>
                        <td><?php echo $usuario['senha']; ?></td>
                        <td><?php echo $usuario['administrador']; ?></td>                       
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="bootstrp-5/bootstrap.bundle.min.js"></script>

</body>
</html>