--
-- Estrutura para tabela `DEPARTAMENTO`
--

CREATE TABLE IF NOT EXISTS `DEPARTAMENTO` (
  `id_departamento` int(11) NOT NULL,
  `nome_depto` varchar(60) NOT NULL,
  `descricao_depto` text,
  `pessoa_chave` int(11) DEFAULT NULL
);

--
-- Estrutura para tabela `MENSAGEM`
--

CREATE TABLE IF NOT EXISTS `MENSAGEM` (
  `id_mensagem` int(11) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `conteudo` text NOT NULL,
  `lida` tinyint(1) NOT NULL,
  `resposta` int(11) DEFAULT NULL,
  `remetente` int(11) NOT NULL,
  `destinatario` int(11) NOT NULL,
  `tipo_mensagem` int(11) NOT NULL
);
--
-- Estrutura para tabela `PERFIL`
--

CREATE TABLE IF NOT EXISTS `PERFIL` (
  `id_perfil` int(11) NOT NULL,
  `nome_perfil` varchar(75) NOT NULL,
  `descricao_perfil` text
);

--
-- Estrutura para tabela `PRIVILEGIO`
--

CREATE TABLE IF NOT EXISTS `PRIVILEGIO` (
  `id_privilegio` int(11) NOT NULL,
  `perfil_remetente` int(11) NOT NULL,
  `perfil_destinatario` int(11) NOT NULL,
  `priv_tipo_mensagem` int(11) NOT NULL
);

--
-- Estrutura para tabela `TIPO_MENSAGEM`
--

CREATE TABLE IF NOT EXISTS `TIPO_MENSAGEM` (
  `id_tipo_mensagem` int(11) NOT NULL,
  `nome_tipo_msg` varchar(60) NOT NULL,
  `descricao_tipo_msg` text
);

--
-- Estrutura para tabela `USUARIO`
--

CREATE TABLE IF NOT EXISTS `USUARIO` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(75) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `departamento` int(11) NOT NULL,
  `perfil` int(11) NOT NULL
);

--
-- DEFINIR CHAVE PRIMARIAS DAS TABELAS
--

ALTER TABLE `DEPARTAMENTO`
  ADD PRIMARY KEY (`id_departamento`);

ALTER TABLE `MENSAGEM`
  ADD PRIMARY KEY (`id_mensagem`);

ALTER TABLE `PERFIL`
  ADD PRIMARY KEY (`id_perfil`);

ALTER TABLE `PRIVILEGIO`
  ADD PRIMARY KEY (`id_privilegio`);

ALTER TABLE `TIPO_MENSAGEM`
  ADD PRIMARY KEY (`id_tipo_mensagem`);

ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- COLOCAR AUTO_INCREMENT nas chaves primarias
--

ALTER TABLE `DEPARTAMENTO`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `MENSAGEM`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `PERFIL`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `PRIVILEGIO`
  MODIFY `id_privilegio` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `TIPO_MENSAGEM`
  MODIFY `id_tipo_mensagem` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `USUARIO`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- COLOCAR A CHAVE ESTRANGEIRA
--

ALTER TABLE DEPARTAMENTO 
ADD FOREIGN KEY (pessoa_chave) REFERENCES USUARIO (id_pessoa);

ALTER TABLE USUARIO 
ADD FOREIGN KEY (departamento) REFERENCES DEPARTAMENTO (id_departamento);

ALTER TABLE USUARIO 
ADD FOREIGN KEY (perfil) REFERENCES PERFIL (id_perfil);

ALTER TABLE USUARIO 
ADD FOREIGN KEY (departamento) REFERENCES DEPARTAMENTO (id_departamento);

ALTER TABLE MENSAGEM 
ADD FOREIGN KEY (resposta) REFERENCES MENSAGEM (id_mensagem);

ALTER TABLE MENSAGEM 
ADD FOREIGN KEY (remetente) REFERENCES USUARIO (id_pessoa);

ALTER TABLE MENSAGEM 
ADD FOREIGN KEY (destinatario) REFERENCES USUARIO (id_pessoa);

ALTER TABLE MENSAGEM 
ADD FOREIGN KEY (tipo_mensagem) REFERENCES TIPO_MENSAGEM (id_tipo_mensagem);

ALTER TABLE PRIVILEGIO 
ADD FOREIGN KEY (perfil_remetente) REFERENCES PERFIL (id_perfil);

ALTER TABLE PRIVILEGIO 
ADD FOREIGN KEY (perfil_destinatario) REFERENCES PERFIL (id_perfil);

ALTER TABLE PRIVILEGIO 
ADD FOREIGN KEY (priv_tipo_mensagem) REFERENCES TIPO_MENSAGEM (id_tipo_mensagem);