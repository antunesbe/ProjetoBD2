	--
	-- INSERIR EM PERFIL
	--

	INSERT INTO `perfil` (`id_perfil`, `nome_perfil`, `descricao_perfil`) VALUES ('1', 'Professor', 'Perfil para professor, mediador de mensagens.');
	INSERT INTO `perfil` (`id_perfil`, `nome_perfil`, `descricao_perfil`) VALUES ('2', 'Aluno', 'Para fazer uso deste perfil deve ser aluno da universidade');
	INSERT INTO `perfil` (`id_perfil`, `nome_perfil`, `descricao_perfil`) VALUES ('3', 'Funcionario', 'Qualquer funcionario da faculdade tem acesso a este perfil');
	INSERT INTO `perfil` (`id_perfil`, `nome_perfil`, `descricao_perfil`) VALUES ('4', 'Reitor', 'Parte do sistema usado apenas pelo diretor da faculdade');
	INSERT INTO `perfil` (`id_perfil`, `nome_perfil`, `descricao_perfil`) VALUES ('5', 'Administrador', 'Capaz de manejar o sistema por completo');

	--
	-- INSERIR EM TIPO MSG
	--

	INSERT INTO `tipo_mensagem` (`id_tipo_mensagem`, `nome_tipo_msg`, `descricao_tipo_msg`) VALUES ('1', 'Reclamacao', 'Escreva aqui suas reclamacoes seja de um departamento, funcionario ou norma da faculdade.');
	INSERT INTO `tipo_mensagem` (`id_tipo_mensagem`, `nome_tipo_msg`, `descricao_tipo_msg`) VALUES ('2', 'Alerta', 'Escreva aqui seus alertas, sejam eles individuais ou para turmas, assim como para um grupo de funcionarios.');
	INSERT INTO `tipo_mensagem` (`id_tipo_mensagem`, `nome_tipo_msg`, `descricao_tipo_msg`) VALUES ('3', 'Sugestao', 'Escreva aqui sua opiniao a respeito de algo a ser melhorado na faculdade.');
	INSERT INTO `tipo_mensagem` (`id_tipo_mensagem`, `nome_tipo_msg`, `descricao_tipo_msg`) VALUES ('4', 'Pedido', 'Escreva aqui um pedido que sera repassado para a pessoa representante do setor em questao, ou ao professor correto.');
	-- INSERT INTO `tipo_mensagem` (`id_tipo_mensagem`, `nome_tipo_msg`, `descricao_tipo_msg`) VALUES ('5', 'Broadcast', 'Escreva aqui uma mensagem que sera repassada para todo um conjunto de pessoas [Permitido apenas para Reitor ou professor].');

	--
	-- INSERIR EM DEPARTAMENTO
	--

	INSERT INTO `departamento` (`id_departamento`, `nome_depto`, `descricao_depto`, `pessoa_chave`) VALUES ('1', 'Setor Contabil', 'Area destinada a evitar que a empresa cometa sonegacao fiscal, adultere patrimonios e cometa qualquer tipo de fraude, atos que sao considerados crimes, nesse caso ele  atua como orientador.', NULL);
	INSERT INTO `departamento` (`id_departamento`, `nome_depto`, `descricao_depto`, `pessoa_chave`) VALUES ('2', 'Recursos humanos', 'Area destinada a cuidar de selecao, contratacao, treinamento, remuneracao, formacao sobre higiene e seguranca no trabalho da faculdade', NULL);
	INSERT INTO `departamento` (`id_departamento`, `nome_depto`, `descricao_depto`, `pessoa_chave`) VALUES ('3', 'Departamento Social', 'Area que cuidara de fechar a folha de pagamento, atuar com imposto de renda, RAIS, GEFIF, atendimento aos clientes, organizacao de arquivos, preparar e calcular a folha de pagamento, rescisoes, ferias, recolhimento de contribuicoes.', NULL);
	INSERT INTO `departamento` (`id_departamento`, `nome_depto`, `descricao_depto`, `pessoa_chave`) VALUES ('4', 'Contas a receber', 'Area destinada a efetuar os lancamentos no sistema referente aos pagamentos, agendar e efetuar os pagamentos, emissao de cheques e lancamentos no sistema bancario.', NULL);

	--
	-- INSERIR EM USUÁRIOS
	--

	INSERT INTO `usuario` (`id_pessoa`, `nome`, `cpf`, `data_nascimento`, `email`, `senha`, `departamento`, `perfil`) VALUES ('1', 'Breno Antunes', '23047896578', '1993-04-02', 'breno@grupo.com', '1234', '1', '5');
	INSERT INTO `usuario` (`id_pessoa`, `nome`, `cpf`, `data_nascimento`, `email`, `senha`, `departamento`, `perfil`) VALUES ('2', 'Breno Bonassi', '63025453806', '1993-05-13', 'brenob@grupo.com', '1234', '2', '2');
	INSERT INTO `usuario` (`id_pessoa`, `nome`, `cpf`, `data_nascimento`, `email`, `senha`, `departamento`, `perfil`) VALUES ('3', 'Danilo Freitas', '37554365269', '1992-09-06', 'danilo@grupo.com', '1234', '3', '4');
	INSERT INTO `usuario` (`id_pessoa`, `nome`, `cpf`, `data_nascimento`, `email`, `senha`, `departamento`, `perfil`) VALUES ('4', 'Silvia Soares', '18756395218', '1982-11-05', 'silvia@grupo.com', '1234', '2', '1');
	INSERT INTO `usuario` (`id_pessoa`, `nome`, `cpf`, `data_nascimento`, `email`, `senha`, `departamento`, `perfil`) VALUES ('5', 'Luciano Foster', '08764898243', '1972-02-14', 'Luciano@grupo.com', '1234', '4', '3');


	-- 4 TIPOS DE MSG X
	-- 4 DEPARTAMENTOS X
	-- 2 USUÁRIOS X 
	-- 4 PERFIS X