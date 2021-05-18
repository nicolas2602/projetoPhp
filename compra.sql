Create table compra(
    IdCompra INT PRIMARY KEY AUTO_INCREMENT,
    dataCompra datetime default now(),
    valorCompraTotal float,
    fk_IdReg int not null,
    foreign key (fk_IdReg) references reg(id)
);

CREATE table produto(
    IdProduto INT PRIMARY Key AUTO_INCREMENT,
    nomeProduto varchar(50) not null,
    preco float not null
);

CREATE table compra_produto(
    fkCompra int not null,
    fkProduto int not null,

    PRIMARY KEY (fkCompra, fkProduto),
    Foreign key(fkCompra) references compra(IdCompra),
    Foreign key(fkProduto) references compra(IdProduto)
);

insert into produto (nomeProduto, preco) values ("Biscoito",3.90);
insert into produto (nomeProduto, preco) values ("Pão",9.50);
insert into produto (nomeProduto, preco) values ("Contra filé",39.50);

insert into compra (fk_IdReg) values (3);

alter table compra_produto add qtd_produto int;

insert into compra_produto (fkCompra,fkProduto, qtd_produto) values (1,3,5);
insert into compra_produto (fkCompra,fkProduto, qtd_produto) values (1,2,2);

select * from compra_produto as compra_produto
inner join produto as p on p.IdProduto = cp.fkProduto
inner join compra as c on c.IdCompra = cp.fkCompra
inner join reg as r on r.id = c.fk_IdReg;