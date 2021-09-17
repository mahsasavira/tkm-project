/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     9/17/2021 2:38:23 PM                         */
/*==============================================================*/


drop table if exists ARUS_KAS;

drop table if exists BEBAN_LABARUGI;

drop table if exists NERACA;

drop table if exists NERACA_AKTIVA;

drop table if exists PASIVA_NERACA;

drop table if exists PENDAPATAN_LABARUGI;

drop table if exists RELATIONSHIP_1;

drop table if exists USER;

/*==============================================================*/
/* Table: ARUS_KAS                                              */
/*==============================================================*/
create table ARUS_KAS
(
   ID_ARUSKAS           int not null,
   ID_NERACA            int,
   ID_LABARUGI          int,
   ID_USER              int,
   TOTAL_SALDO          float(20,0) not null,
   primary key (ID_ARUSKAS)
);

/*==============================================================*/
/* Table: BEBAN_LABARUGI                                        */
/*==============================================================*/
create table BEBAN_LABARUGI
(
   BEBAN_PROYEK         varchar(50) not null,
   BEBAN_GAJI           varchar(50) not null,
   BEBAN_OPERASIONAL    varchar(50) not null,
   BEBAN_PENYUSUTAN     varchar(50) not null,
   BEBAN_BONUS          varchar(50) not null,
   BEBAN_PERLENGKAPAN_KANTOR varchar(50) not null,
   BEBAN_PAJAK          varchar(50) not null,
   BEBAN_LAINLAIN       varchar(50) not null,
   RUGI_SELISIH_KURS    varchar(50) not null,
   LABA_BERSIH          varchar(50) not null,
   TANGGAL_MASUK        date not null,
   primary key (BEBAN_PROYEK)
);

/*==============================================================*/
/* Table: NERACA                                                */
/*==============================================================*/
create table NERACA
(
   KAS_KECIL            varchar(50) not null,
   HUTANG_OPERASIONAL   varchar(50) not null,
   ID_NERACA            int not null,
   ID_USER              int,
   primary key (ID_NERACA)
);

/*==============================================================*/
/* Table: NERACA_AKTIVA                                         */
/*==============================================================*/
create table NERACA_AKTIVA
(
   KAS_KECIL            varchar(50) not null,
   KAS_PADA_BANK        varchar(50) not null,
   PIUTANG_OPEASIONAL   varchar(50) not null,
   PIUTANG_DAYA_MAKARA  varchar(50) not null,
   PIUTANG_PROYEK       varchar(50) not null,
   PIUTANG_TVUI         varchar(50) not null,
   PIUTANG_SOLAR_CAR    varchar(50) not null,
   TOTAL_AKTIVA         varchar(50) not null,
   TANGGAL_MASUK        date not null,
   primary key (KAS_KECIL)
);

/*==============================================================*/
/* Table: PASIVA_NERACA                                         */
/*==============================================================*/
create table PASIVA_NERACA
(
   HUTANG_OPERASIONAL   varchar(50) not null,
   HUTANG_GAJI          varchar(50) not null,
   HUTANG_PROYEK        varchar(50) not null,
   HUTANG_PADA_RTV      varchar(50) not null,
   TOTAL_KEWAJIBAN      varchar(50) not null,
   TOTAL_PASIVA         varchar(50) not null,
   TOTAL_MODAL          varchar(50) not null,
   TANGGAL_MASUK        date not null,
   primary key (HUTANG_OPERASIONAL)
);

/*==============================================================*/
/* Table: PENDAPATAN_LABARUGI                                   */
/*==============================================================*/
create table PENDAPATAN_LABARUGI
(
   PENDAPATAN_PROYEK    varchar(50) not null,
   PENDAPATAN_GIRO      varchar(50) not null,
   PENDAPATAN_LAINLAIN  varchar(50) not null,
   LABA_SELISIH_KURS    varchar(50) not null,
   TOTAL_PENDAPATAN     varchar(50) not null,
   TANGGAL_MASUK        date not null,
   primary key (PENDAPATAN_PROYEK)
);

/*==============================================================*/
/* Table: RELATIONSHIP_1                                        */
/*==============================================================*/
create table RELATIONSHIP_1
(
   PENDAPATAN_PROYEK    varchar(50) not null,
   BEBAN_PROYEK         varchar(50) not null,
   ID_LABARUGI          int not null,
   ID_USER              int,
   primary key (ID_LABARUGI)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null,
   USERNAME             varchar(15) not null,
   PASSWORD             varchar(15) not null,
   STATUS               varchar(10) not null,
   primary key (ID_USER)
);

alter table ARUS_KAS add constraint FK_REFERENCE_7 foreign key (ID_NERACA)
      references NERACA (ID_NERACA) on delete restrict on update restrict;

alter table ARUS_KAS add constraint FK_REFERENCE_8 foreign key (ID_LABARUGI)
      references RELATIONSHIP_1 (ID_LABARUGI) on delete restrict on update restrict;

alter table ARUS_KAS add constraint FK_REFERENCE_9 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table NERACA add constraint FK_REFERENCE_6 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table NERACA add constraint FK_RELATIONSHIP_3 foreign key (KAS_KECIL)
      references NERACA_AKTIVA (KAS_KECIL) on delete restrict on update restrict;

alter table NERACA add constraint FK_RELATIONSHIP_4 foreign key (HUTANG_OPERASIONAL)
      references PASIVA_NERACA (HUTANG_OPERASIONAL) on delete restrict on update restrict;

alter table RELATIONSHIP_1 add constraint FK_REFERENCE_5 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table RELATIONSHIP_1 add constraint FK_RELATIONSHIP_1 foreign key (PENDAPATAN_PROYEK)
      references PENDAPATAN_LABARUGI (PENDAPATAN_PROYEK) on delete restrict on update restrict;

alter table RELATIONSHIP_1 add constraint FK_RELATIONSHIP_2 foreign key (BEBAN_PROYEK)
      references BEBAN_LABARUGI (BEBAN_PROYEK) on delete restrict on update restrict;

