https://www.liquidweb.com/kb/how-to-install-and-connect-to-postgresql-on-centos-6/
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-centos-6#set-up
http://www.mysqltutorial.org/mysql-foreign-key/
https://kyup.com/tutorials/create-new-user-grant-permissions-mysql/
https://www.tutorialspoint.com/mysql/mysql-update-query.htm

install package
yum -y install mysql-server postgresql postgresql-server postgresql-contrib php php-mysql

service mysql start

mysqladmin -u root password iputra

mysql -u root -p

show databases;
create database iputra_io;
drop database iputra_io;
use iputra_io;
create table author (
    id_author varchar(5) not null primary key,
    firstname varchar(10) not null,
    lastname varchar(10),
    email varchar(30)
);

drop table author;

create table post (
    id_post varchar(5) not null primary key,
    id_author varchar(5),
    title varchar(30),
    foreign key (id_author) references author(id_author)
);

insert into author(id_author, firstname, lastname, email) values ('2B6FA','Ikhsan','Putra','admin@iputra.io');
delete from author where id_author='2B6FA';
select * from author;

service postgresql initdb
service postgresql start
su - postgres
createdb dbWeb
psql dbWeb
create database iputra_io;
\c iputra_io
create user iputra password 'iputra';
create table author (
    id_author varchar(5) primary key,
    firstname varchar(10),
    lastname varchar(10),
    last varchar(30),
);
grant all on author to iputra;
insert into author (id_author, firstname, lastname, email)
values ('2B6FA', 'Ikhsan', 'Putra', 'admin@iputra.io');

\q
