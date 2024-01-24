CREATE DATABASE app_crud;

use app_crud;

CREATE TABLE datos(
    id          int not null auto_increment primary key,
    nombre      varchar(50) not null,
    apellidos   varchar(50) not null,
    edad        int(50) not null,
    email       varchar(50) not null,
    password    varchar(50) not null
)