--create database timelines;
--connect timelines;
create table contact_us(
 id bigint AUTO_INCREMENT primary key,
name varchar(60) not null,
email varchar(60) not null,
reason varchar(300),
message text 

);
create table newsletter(
id bigint AUTO_INCREMENT primary key,
email varchar(60) not null,
status int(1) default 0
);