<?php
include(`conexap.js`);

$nome = isset($_POST[`nome_cont`]) ? $_POST[`nome_cont`] : ``;

$cpf = isset($_POST[`cpf_cont`]) ? $_POST[`cpf_cont`] : ``;

$rg = isset($_POST[`nome_rg`]) ? $_POST[`nome_rg`] : ``;

$orgao_emissor = isset($_POST[`org_cont`]) ? $_POST[`org_cont`] : ``;

$Profissao = isset($_POST['pfs_cont']) ? $_POST['pfs_cont'] : '';

$titlo_de_eleitor = isset($_POST['title_cont']) ? $_POST['title_cont'] : '';

$estado_civil = isset($_POST['estcl_cont']) ? $_POST['estcl_cont'] : '';

$sexo = isset($_POST['est1']) ? $_POST['est1'] : '';

$rua = isset($_POST['rua']) ? $_POST['rua'] : '';

$numero = isset($_POST['numb']) ? $_POST['numb'] : '';

$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';

$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';

$uf = isset($_POST['uf_cont']) ? $_POST['uf_cont'] : '';

$cep = isset($_POST['cep']) ? $_POST['cep'] : '';

$Telefone = isset($_POST['Telefone']) ? $_POST['Telefone'] : '';

$celular = isset($_POST['celular']) ? $_POST['celular'] : '';

$email = isset($_POST['email']) ? $_POST['email'] : '';

$escolaridade = isset($_POST['uf_Esc']) ? $_POST['uf_Esc'] : '';

$rendimentofml = isset($_POST['rendimento']) ? $_POST['rendimento'] : '';

$num_membro = isset($_POST['num_memb']) ? $_POST['num_memb'] : '';

$fantasia = isset($_POST['fantasia']) ? $_POST['fantasia'] : '';

$rzsocial = isset($_POST['rzsocial']) ? $_POST['rzsocial'] : '';

$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';

$cdgacesso = isset($_POST['cdgacesso']) ? $_POST['cdgacesso'] : '';

$nomnum_reciboe = isset($_POST['num_recibo']) ? $_POST['num_recibo'] : '';

$ruaempresa = isset($_POST['ruaempresa']) ? $_POST['ruaempresa'] : '';

$bairro_empresa = isset($_POST['bairro_empresa']) ? $_POST['bairro_empresa'] : '';

$cidade_empresa = isset($_POST['cidade_empresa']) ? $_POST['cidade_empresa'] : '';

$uf_empresa = isset($_POST['ufempresa_cont']) ? $_POST['ufempresa_cont'] : '';

$cepemp = isset($_POST['cepemp']) ? $_POST['cepemp'] : '';

$Telefone_emp = isset($_POST['Telefone_emp']) ? $_POST['Telefone_emp'] : '';

$email_empresa = isset($_POST['email_empresa']) ? $_POST['email_empresa'] : '';

$gera_faturamento = isset($_POST['fat21']) ? $_POST['fat21'] : '';

$quanto = isset($_POST['quanto']) ? $_POST['quanto'] : '';

$segmento_negocio = isset($_POST['seg']) ? $_POST['seg'] : '';

$data_abertura = isset($_POST['data_empresa']) ? $_POST['data_empresa'] : '';

$tem_funcionarios = isset($_POST['funcio']) ? $_POST['funcio'] : '';

$demanda_da_empresa = isset($_POST['textarea']) ? $_POST['textarea'] : '';

$insert = "INSERT INTO usabilidade (nome, cpf, rg, orgao, profissao, titulo, estado_civil, nascimento, sexo, rua_cont, num_cont, bairro_cont, cidade_cont, uf_cont, cep_cont, telefone_cont, celular, email, escolaridade, rendimento, membros, fantasia, razao, cnpj, cod_acesso, recibo, rua_emp, num_emp, bairro_emp, cidade_emp, uf_empresa, cep_empresa, tel_empresa, email_emp, gera, valor, segmento, data_abertura, funcionarios, demanda)";
VALUES ()
$query = mysqli_query($conexao, $insert);

?>
