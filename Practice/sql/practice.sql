set names utf8;
set foreign_key_checks=0;
drop database if exists practice;
create database if not exists practice;
use practice;

drop table if exists login_user_transaction;

create table login_user_transaction(
id int not null primary key auto_increment,
login_id varchar(16) unique,
login_password varchar(16),
user_name_sei varchar(50),
user_name_mei varchar(50),
user_kananame_sei varchar(50),
user_kananame_mei varchar(50),
user_email varchar(50),
user_sex char(1),
user_postcode varchar(7),
user_address varchar(50),
insert_date datetime,
updated_date datetime);



