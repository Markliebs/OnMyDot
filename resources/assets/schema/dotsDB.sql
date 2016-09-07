drop database if exists dotsDB;

create database if not exists dotsDB;

use dotsDB;

drop table if exists dotTable;

create table if not exists dotTable (
    pageNumber INT NOT NULL AUTO_INCREMENT,
    ss varchar(1),
    sl varchar(2),
    si varchar(7),
    dfl varchar(1),
    hm varchar(5),
    fb varchar(5),
    sfh varchar(2),
    PRIMARY KEY ('pageNumber'),
);

-- mysql://b105afb0ce2a19:efeccca9@us-cdbr-iron-east-04.cleardb.net/heroku_b673b0d203cfce7?reconn
-- ect=true   