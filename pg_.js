include(`conexap.js`);

var nome = isset($_POST[`nome_cont`]) ? $_POST[`nome_cont`] : ``;

var cpf = isset($_POST[`cpf_cont`]) ? $_POST[`cpf_cont`] : ``;

var rg = isset($_POST[`nome_rg`]) ? $_POST[`nome_rg`] : ``;

var orgao_emissor = isset($_POST[`org_cont`]) ? $_POST[`org_cont`] : ``;

var Profissao = isset($_POST['pfs_cont']) ? $_POST['pfs_cont'] : '';

var titlo_de_eleitor = isset($_POST['title_cont']) ? $_POST['title_cont'] : '';

var estado_civil = isset($_POST['estcl_cont']) ? $_POST['estcl_cont'] : '';

var sexo = isset($_POST['est1']) ? $_POST['est1'] : '';

var rua = isset($_POST['rua']) ? $_POST['rua'] : '';

var numero = isset($_POST['numb']) ? $_POST['numb'] : '';

var bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';

var cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';

var uf = isset($_POST['uf_cont']) ? $_POST['uf_cont'] : '';

var cep = isset($_POST['cep']) ? $_POST['cep'] : '';

var Telefone = isset($_POST['Telefone']) ? $_POST['Telefone'] : '';

var celular = isset($_POST['celular']) ? $_POST['celular'] : '';

var email = isset($_POST['email']) ? $_POST['email'] : '';

var escolaridade = isset($_POST['uf_Esc']) ? $_POST['uf_Esc'] : '';

var rendimentofml = isset($_POST['rendimento']) ? $_POST['rendimento'] : '';

var num_membro = isset($_POST['num_memb']) ? $_POST['num_memb'] : '';

var fantasia = isset($_POST['fantasia']) ? $_POST['fantasia'] : '';

var rzsocial = isset($_POST['rzsocial']) ? $_POST['rzsocial'] : '';

var cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';

var cdgacesso = isset($_POST['cdgacesso']) ? $_POST['cdgacesso'] : '';

var nomnum_reciboe = isset($_POST['num_recibo']) ? $_POST['num_recibo'] : '';

var ruaempresa = isset($_POST['ruaempresa']) ? $_POST['ruaempresa'] : '';

var bairro_empresa = isset($_POST['bairro_empresa']) ? $_POST['bairro_empresa'] : '';

var cidade_empresa = isset($_POST['cidade_empresa']) ? $_POST['cidade_empresa'] : '';

var uf_empresa = isset($_POST['ufempresa_cont']) ? $_POST['ufempresa_cont'] : '';

var cepemp = isset($_POST['cepemp']) ? $_POST['cepemp'] : '';

var Telefone_emp = isset($_POST['Telefone_emp']) ? $_POST['Telefone_emp'] : '';

var email_empresa = isset($_POST['email_empresa']) ? $_POST['email_empresa'] : '';

var gera_faturamento = isset($_POST['fat21']) ? $_POST['fat21'] : '';

var quanto = isset($_POST['quanto']) ? $_POST['quanto'] : '';

var segmento_negocio = isset($_POST['seg']) ? $_POST['seg'] : '';

var data_abertura = isset($_POST['data_empresa']) ? $_POST['data_empresa'] : '';

var tem_funcionarios = isset($_POST['funcio']) ? $_POST['funcio'] : '';

var demanda_da_empresa = isset($_POST['textarea']) ? $_POST['textarea'] : '';

var insert = "INSERT INTO usabilidade (nome, cpf, rg, orgao, profissao, titulo, estado_civil, nascimento, sexo, rua_cont, num_cont, bairro_cont, cidade_cont, uf_cont, cep_cont, telefone_cont, celular, email, escolaridade, rendimento, membros, fantasia, razao, cnpj, cod_acesso, recibo, rua_emp, num_emp, bairro_emp, cidade_emp, uf_empresa, cep_empresa, tel_empresa, email_emp, gera, valor, segmento, data_abertura, funcionarios, demanda)";
VALUES ()
var query = mysqli_query($conexao, $insert);
