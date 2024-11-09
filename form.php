<?php

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$endereço = $_POST["endereço"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST["telefone"];

echo "Nome: ".$nome." <br/>";
echo "Sobrenome: ".$sobrenome." <br/>";
echo "Email: ".$email." <br/>";
echo "Endereço: ".$endereço." <br/>";
echo "Cidade: ".$cidade." <br/>";
echo "Estado: ".$estado." <br/>";
echo "Telefone: ".$telefone." <br/>";

?>

<script>
if (confirm("Seus dados foram enviados com sucesso!")) {
  window.history.back();
} else {
}
</script>
