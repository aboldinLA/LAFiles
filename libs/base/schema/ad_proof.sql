CREATE TABLE ad_proofs (
    id  int(10) unsigned  NOT NULL primary key auto_increment,
    vendor_id   int(11) NOT NULL,
    ad_type     int unsigned not null,
    ad_images   varchar(255),
    ad_text     text,
    edited      timestamp,
    approved    int(1)
);
