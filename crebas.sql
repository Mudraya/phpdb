/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     Ïò 16.08.19 14:42:37                         */
/*==============================================================*/


drop table if exists employees;

/*==============================================================*/
/* Table: employees                                             */
/*==============================================================*/
create table employees
(
   id                   bigint not null,
   chef_id              bigint,
   username             text,
   password             text,
   primary key (id)
);

alter table employees add constraint FK_Reference_1 foreign key (chef_id)
      references employees (id) on delete restrict on update restrict;

INSERT INTO `employees` (`id`, `chef_id`, `username`, `password`) VALUES
(1, NULL, 'login', 'pass'),
(2, 1, 'login2', 'pass2');

