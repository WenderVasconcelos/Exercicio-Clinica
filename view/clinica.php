<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../style/estilo.css">
        <title></title>
    </head>
    <body>
        <form action="../control/controle.php" method="POST">
            <div class="um">
            </br>

            <label>Escolha uma categoria:</label>
            </br></br>     
            
            <select name="categoria">         
                <option value="Exame">Exame</option>                
                <option value="Consulta">Consulta</option>             
            </select><br/>
            </br>
            <label>Escolha uma Raça</label><br>
            
            <input class="dois" type="checkbox" name="pit" value="PitBull"/> <label class="dois">PitBull</label>
            <input class="dois" type="number" name="qtd1" value="qtd1" min="0" max="3" /><br>
            
            <input class="dois" type="checkbox" name="rot" value="Rottweiler"/><label class="dois">Rottweiler</label>
            <input class="dois" type="number" name="qtd2" value="qtd2" min="0" max="3" /><br>
            <input class="dois" type="text" value="<?php echo $_GET['usuario'];?>" name="usuario" hidden />
            <input class="dois" type="password" value="<?php echo $_GET['senha'];?>" name="senha" hidden />
            </br>
            <input  type="submit" value="Enviar"/>
            </div>
        </form>
    </body>
</html>
