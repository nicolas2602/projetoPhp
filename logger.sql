Create table logging(
    IdLogging int primary key AUTO_INCREMENT,
    dateLogging datetime not null,
    level varchar(100),
    msg varchar(100) not null,
    fk_reg int not null,
    FOREIGN key (fk_reg) references reg (id)   
);

insert into logging (dateLogging, level, msg, fk_reg) VALUES (now(), 'INFO', 'Teste', 1);