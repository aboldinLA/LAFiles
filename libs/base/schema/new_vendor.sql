CREATE TABLE new_vendor (
    id              int unsigned not null primary key auto_increment,
    vendor_type_id  varchar(32),
    active          int not null default 0,
    status          float not null default 0,
    company_name    varchar(255),
    website         varchar(255),
    logo            varchar(255),
    xlist           varchar(255),
    info_request    varchar(255),
    sentpass        int not null default 0,
    input_date      varchar(64),
    edit_date       timestamp(14),
    profile         text
);
