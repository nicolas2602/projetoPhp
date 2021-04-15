create table profile_reg(
idProfile INT PRIMARY KEY AUTO_INCREMENT,
nameProfile varchar(50)
);

insert into profile_reg(nameProfile) values ('Admin'), ('User');

select * from profile_reg;

/* relacionado tabela reg */
alter table reg 
ADD fk_idProfile int,
ADD FOREIGN KEY(fk_idProfile) REFERENCES profile_reg(idProfile);

/*

select * from reg as r inner join profile_reg as p on P.idProfile = r.fk_idProfile where username='$u' and password= '$p'

*/