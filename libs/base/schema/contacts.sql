CREATE TABLE contacts (
    id          int unsigned not null primary key auto_increment,
    ref_type    varchar(32),
    ref_id      int unsigned not null,
    code        varchar(32),
    input_date  varchar(64),
    edit_date   timestamp(14),
    first_name  varchar(255),
    last_name   varchar(255),
    title       varchar(255),
    email       varchar(255),
    country     varchar(128),
    address1    varchar(255),
    address2    varchar(255),
    city        varchar(255),
    state       varchar(12),
    postal_code varchar(12),
    phone_area_code
                varchar(8),
    phone_number
                varchar(32),
    fax_area_code
                varchar(8),
    fax_number  varchar(32),
    other_1     varchar(255),
    other_2     varchar(255),
    notes       TEXT
);
