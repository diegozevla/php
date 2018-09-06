select * from cliente;
select * from tecnico;
select * from chamado;

describe `tecnico`;
describe `cliente`;
describe `estado_historico`;


SELECT `cliente`.nome, `cliente`.telefone, `cliente`.endereco, `cliente`.complemento,
    `chamado`.data_visita, `chamado`.hora_visita, `chamado`.observacao from `cliente`, `chamado`;

-- inserir nome relação
insert into `nome_relacao` (nome_sem_acento, nome_com_acento) values ("Orcamento", "Orçamento");
insert into `nome_relacao` (nome_sem_acento, nome_com_acento) values ("Manutencao_Preventiva", "Manutenção Preventiva");
insert into `nome_relacao` (nome_sem_acento, nome_com_acento) values ("Relatorio_Tecnico", "Orçamento");
insert into `nome_relacao` (nome_sem_acento, nome_com_acento) values ("Orcamento", "Orçamento");

-- inserir técnicos
insert into tecnico (nome) values ('José Silva');
insert into tecnico (nome) values ('Ezequiel Oliveira');
insert into tecnico (nome) values ('Simone Fernandes');

-- inserir clientes
insert into `cliente` (nome, telefone, endereco, numero, complemento)
    values ('Elder Leão', '99999999999', 'Avenida Ibirapuera', '55', 'Casa 2');
insert into cliente (nome, telefone, endereco, complemento)
    values ('Carlos Gonzaga', '88888888888', 'Avenida Paulista', null, 'Casa 7');
insert into cliente (nome, telefone, endereco, complemento)
    values ('D&E Vinícula', '7777777777', 'Rua das Orquídeas', '1799');
insert into cliente (nome, telefone, endereco, complemento)
    values ('Bom Gosto', '6666666666', 'Rua Celeste Vieira', '150A', 'Fundos');

-- inserir estado do histórico
insert into `estado_historico` (descricao) values 'Aberto';
insert into `estado_historico` (descricao) values 'Cancelado';
insert into `estado_historico` (descricao) values 'Em análise';
insert into `estado_historico` (descricao) values 'Alterado';
insert into `estado_historico` (descricao) values 'Aprovado';
insert into `estado_historico` (descricao) values 'Aprovado com alterações';


insert into Chamado (data_visita, hora_visita, taxa_visita, observacao,
    disponivel_para_tecnico, tecnico_id, cliente_id)
    values ('2017-11-02', '14:20', 50, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia alias reprehenderit iure optio corrupti dicta nesciunt.', 1, 2, 1);

insert into Chamado (data_visita, hora_visita, taxa_visita, data_atualizacao,
    observacao, tecnico_id, cliente_id, disponivel_para_tecnico)
    values (null, '14:20:00', 80, null, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus recusandae dignissimos.', 1, 1, 1);

insert into Chamado (data_visita, hora_visita, taxa_visita, data_atualizacao,
    observacao, tecnico_id, cliente_id, disponivel_para_tecnico)
    values ('2018-01-30', null, 25, null, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores dolor sequi corrupti optio.', 1, 1, 1);

insert into Chamado (data_visita, hora_visita, taxa_visita, data_atualizacao,
    observacao, tecnico_id, cliente_id, disponivel_para_tecnico)
    values (null, null, 0, null, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eum recusandae cum, dolor.', 1, 1, 3);


