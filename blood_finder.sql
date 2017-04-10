create database blood_finder
use [blood_finder]
go

 Create TABLE blood_req (
  pat_name varchar(20) NOT NULL,
  typ_dis varchar(20) NOT NULL,
  doc_name varchar(20) NOT NULL,
  whn_req date NOT NULL,
  cont_num varchar(12) NOT NULL,
  blood_grp varchar(5) NOT NULL,
  req_city varchar(20) NOT NULL,
  hosp_add varchar(50) NOT NULL,
  date date NOT NULL
);

CREATE TABLE contact (
  name varchar(15) NOT NULL,
  mob_num varchar(12) NOT NULL,
  e_mail varchar(40) NOT NULL,
  message varchar(50) NOT NULL
);

CREATE TABLE donor_reg (
  uname varchar(15) NOT NULL,
  pass varchar(10) NOT NULL,
  name varchar(20) NOT NULL,
  age int(3) NOT NULL,
  gender varchar(10) NOT NULL,
  dob date NOT NULL,
  weight int(4) NOT NULL,
  b_gp varchar(5) NOT NULL,
  ldd date NOT NULL,
  city varchar(20) NOT NULL,
  mob_num varchar(12) NOT NULL,
  e_mail varchar(40) NOT NULL,
  msg varchar(50) NOT NULL,
  PRIMARY KEY (uname)
);

CREATE TABLE member_reg (
  uname varchar(15) NOT NULL,
  pass varchar(10) NOT NULL,
  name varchar(20) NOT NULL,
  mob_num varchar(12) NOT NULL,
  e_mail varchar(40) NOT NULL,
  msg varchar(100) NOT NULL,
  PRIMARY KEY (uname)
);
