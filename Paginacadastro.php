<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <style>
        h1{
            text-align:center;
        }

        label{
            color:black;
        }
    </style>
</head>
<body>

    <h1>Página de Cadastro</h1>

    <?php  include 'cadastro.php';  ?>
    <form method="POST">
        
        <label>Nome Completo: </label>
        <input type="text" id="tNome" name="tNome"/>
        <br><br>

        <label>RG: --------------- </label>
        <input type="text" id="tRG" name="tRG"/>
        <br><br>
        
        <label>Telefone: --------- </label>
        <input type="text" id="tTel" name="tTel"/>
        <br><br>

        <label>Plano de saúde:</label>
        <input type="hidden" id="tPlano" name="tPlano"/>
        <br><br>
        <input type="checkbox" name="opcao" value ="1"><label>Sim</label>
        <br>
        <input type="checkbox" name="opcao" value ="2"><label>Não</label>

        <br><br>

        <label>Uso da Farmácia Popular:</label>
        <input type="hidden" id="tEscolha" name="tEscolha"/>
        <br></br>
        <input type="checkbox" name="opcaof" value="1"><label>Sim</label>
        <br>
        <input type="checkbox" name="opcaof" value="2"><label>Não</label>

        <br><br>

        <button> Cadastrar 
        <?php     
            session_start();
            //Passe o dado para o construtor
            $_SESSION['tRG'] = $_POST['tRG'];
            $_SESSION['tNome'] = $_POST['tNome'];
            $_SESSION['tTel'] = $_POST['tTel'];
            $_SESSION['tPlano'] = $_POST['tPlano'];
            $_SESSION['tEscolha'] = $_POST['tEscolha'];
        ?>
        </button>

        <button>
        <a href="index.php">Voltar</a>
        </button>
    </form>

   
</body>
</html>