<?php
include('conexao.php');

$nome_cont = isset($_POST[`nome_cont`]) ? $_POST[`nome_cont`] : '';

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';

$rg = isset($_POST['rg']) ? $_POST['rg'] : '';

$orgao = isset($_POST['orgao']) ? $_POST['orgao'] : '';

$Profissao = isset($_POST['profissao']) ? $_POST['profissao'] : '';

$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';

$est_civ = isset($_POST['est_civ']) ? $_POST['est_civ'] : '';

$dt_nasc = isset($_POST['dt_nasc']) ? $_POST['dt_nasc'] : '';

$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

$rua_cont = isset($_POST['rua_cont']) ? $_POST['rua_cont'] : '';

$num_cont = isset($_POST['num_cont']) ? $_POST['num_cont'] : '';

$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';

$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';

$uf_cont = isset($_POST['uf_cont']) ? $_POST['uf_cont'] : '';

$cep_cont = isset($_POST['cep_cont']) ? $_POST['cep_cont'] : '';

$Tel_cont = isset($_POST['Tel_cont']) ? $_POST['Tel_cont'] : '';

$cel_cont = isset($_POST['cel_cont ']) ? $_POST['cel_cont '] : '';

$email_cont = isset($_POST['email']) ? $_POST['email'] : '';

$escolaridade = isset($_POST['escolaridade']) ? $_POST['escolaridade'] : '';

$rend_fam = isset($_POST['rend_fam ']) ? $_POST['rend_fam '] : '';

$membros = isset($_POST['membros']) ? $_POST['membros'] : '';

$fantasia = isset($_POST['fantasia']) ? $_POST['fantasia'] : '';

$razao = isset($_POST['razao']) ? $_POST['razao'] : '';

$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';

$cod = isset($_POST['cod']) ? $_POST['cod'] : '';

$num_ir = isset($_POST['num_ir']) ? $_POST['num_ir'] : '';

$rua_emp = isset($_POST['rua_emp']) ? $_POST['rua_emp'] : '';

$num_emp = isset($_POST['num_emp']) ? $_POST['num_emp'] : '';

$bairro_emp = isset($_POST['bairro_emp']) ? $_POST['bairro_emp'] : '';

$cidade_emp = isset($_POST['cidade_emp']) ? $_POST['cidade_emp'] : '';

$uf_emp = isset($_POST['uf_emp']) ? $_POST['uf_emp'] : '';

$cep_emp = isset($_POST['cep_emp']) ? $_POST['cep_emp'] : '';

$Tel_emp = isset($_POST['Tel_emp']) ? $_POST['Tel_emp'] : '';

$email_emp = isset($_POST['email_emp']) ? $_POST['email_emp'] : '';

$faturamento = isset($_POST['faturamento']) ? $_POST['faturamento'] : '';

$fat_mensal = isset($_POST['fat_mensal']) ? $_POST['fat_mensal'] : '';

$segmento = isset($_POST['segmento']) ? $_POST['segmento'] : '';

$dt_abertura = isset($_POST['dt_abertura']) ? $_POST['dt_abertura'] : '';

$funcionario = isset($_POST['funcionario']) ? $_POST['funcionario'] : '';

$demanda = isset($_POST['demanda']) ? $_POST['demanda'] : '';

$insert = "INSERT INTO usabilidade (nome, cpf, rg, orgao, profissao, titulo, estado_civil, nascimento,
 sexo, rua_cont, num_cont, bairro_cont, cidade_cont, uf_cont, cep_cont, Tel_cont_cont, celular, email,
 escolaridade, rend_fam , membros, fantasia, razao, cnpj, cod_acesso, recibo, rua_emp, num_emp, bairro_emp,
 cidade_emp, uf_empresa, cep_empresa, tel_empresa, email_emp, gera, valor, segmento, data_abertura, 
 funcionarios, demanda)

VALUES ('$nome_cont','$cpf','$rg','$orgao','$Profissao','$titulo',$est_civ,'$dt_nasc','$sexo','$rua_cont'
,$num_cont,'$bairro','$cidade','$uf_cont',$cep_cont,'$Tel_cont','$cel_cont','$email_cont',$escolaridade
,$rend_fam,$membros,'$fantasia','$razao','$cnpj','$cod','$num_ir','$rua_emp','$num_emp','$bairro_emp'
,'$cidade_emp','$uf_emp',$cep_emp,'$Tel_emp','$email_emp',$faturamento,'$fat_mensal',$segmento,'$dt_abertura'
,$funcionario,'$demanda' )";

$query = mysqli_query($conexao, $insert);

if ($query == true){
    echo '<script>alert("cadastrado com sucesso");
    window,location="index.html";
    </script>';
}
?>
