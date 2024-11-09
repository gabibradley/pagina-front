<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Projeto de cadastro de doação de pet</title>
    <script type="text/javascript">
        function validar() {

            var nome = formulario.nome.value;
            var sobrenome = formulario.sobrenome.value;
            var email = formulario.email.value;
            var telefone = formulario.telefone.value;

            if (nome == "") {
                alert('Preencha o campo nome.');
                formulario.nome.focus();
                return false;

            }

            if (sobrenome == "") {
                alert('Preencha o campo sobrenome.');
                formulario.sobrenome.focus();
                return false;
            }

            if (email == "") {
                alert('Preencha o campo email.');
                formulario.email.focus();
                return false;
            }

            if (telefone == "") {
                alert('Preencha o campo telefone.');
                formulario.telefone.focus();
                return false;
            }


        }
    </script>
</head>

<body>
    <div class="topo">
        <h1>Cadastro de Doação:</h1>
    </div>

    <div class="row">
        <div class="menu">
        </div>

        <div class="cachorro">
            <img src="img-projeto.jpeg" style="height: 500px;
            width: 400px;">
        </div>

        <div class="conteiner">
            <div class="form">
                <form name="formulario" method="post" action="form.php">


                    <label for="Nome">Nome:*</label>
                    <input type="text" name="nome" style="width:150px; height:20px;" />
            </div>
            <div>
                <label for="Nome">Sobrenome:*</label>
                <input type="text" name="sobrenome" style="width:150px; height:20px;" />
            </div>
            <div>
                <label for="e-mail">E-mail:*</label>
                <input type="text" name="email" style="width:150px; height:20px;" />
            </div>
            <div>
                <label for="endereço">Endereço:</label>
                <input type="text" name="endereço" style="width:150px; height:20px;" />
            </div>
            <div>
                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" style="width:150px; height:20px;" />
            </div>

            <div>
                <label for="estado">Estado:</label>
                <select name="Estado" style="width:150px; height:20px;">
                    <option>RJ</option>
                    <option>AC</option>
                    <option>SP</option>
                    <option>SC</option>
                    <option>RS</option>
                    <option>PB</option>
                    <option>BA</option>
                    <option>DF</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>TO</option>
                    <option>AM</option>
                    <option>MG</option>
                    <option>PE</option>
                    <option>RN</option>
                    <option>PR</option>
                </select>
            </div>
            <div>
                <label for="telefone">Telefone:*</label>
                <input type="text" name="telefone" style="width:150px; height:20px;" />
            </div>
             <br><br>
            <input type="submit" onclick="return validar()">
            <input type="reset" value="Limpar">
            </form>
        </div>
    </div>
    </div>
    <footer class="rodape">

        <h3>Desenvolvido por: Gabriella Bradley</h3>

    </footer>

</body>

</html>