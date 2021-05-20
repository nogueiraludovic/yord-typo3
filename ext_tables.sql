CREATE TABLE tt_content
(
    right_column mediumtext,
    point        int(11) DEFAULT '0' NOT NULL,
    number       int(11) DEFAULT '0' NOT NULL,
    latitude     varchar(100) DEFAULT '' NOT NULL,
    longitude    varchar(100) DEFAULT '' NOT NULL,
    maps_zoom    varchar(100) DEFAULT '' NOT NULL,
);


CREATE TABLE tx_yord_domain_model_point
(
    uid              int(11) NOT NULL auto_increment,
    pid              int(11) DEFAULT '0' NOT NULL,
    tstamp           int(11) DEFAULT '0' NOT NULL,
    crdate           int(11) DEFAULT '0' NOT NULL,
    cruser_id        int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent      int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    l10n_source      int(11) DEFAULT '0' NOT NULL,
    t3ver_oid        int(11) DEFAULT '0' NOT NULL,
    t3ver_id         int(11) DEFAULT '0' NOT NULL,
    t3_origuid       int(11) DEFAULT '0' NOT NULL,
    t3ver_wsid       int(11) DEFAULT '0' NOT NULL,
    t3ver_label      varchar(30)  DEFAULT '' NOT NULL,
    t3ver_state      tinyint(4) DEFAULT '0' NOT NULL,
    t3ver_stage      tinyint(4) DEFAULT '0' NOT NULL,
    t3ver_count      int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp     int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id    int(11) DEFAULT '0' NOT NULL,
    sorting          int(10) DEFAULT '0' NOT NULL,
    deleted          tinyint(4) DEFAULT '0' NOT NULL,
    hidden           tinyint(4) DEFAULT '0' NOT NULL,
    parent           int(11) DEFAULT '0' NOT NULL,
    pos_x            varchar(100) DEFAULT '' NOT NULL,
    pos_y            varchar(100) DEFAULT '' NOT NULL,
    title            varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid)
);

CREATE TABLE tx_yord_domain_model_number
(
    uid              int(11) NOT NULL auto_increment,
    pid              int(11) DEFAULT '0' NOT NULL,
    tstamp           int(11) DEFAULT '0' NOT NULL,
    crdate           int(11) DEFAULT '0' NOT NULL,
    cruser_id        int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent      int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource  mediumtext,
    l10n_source      int(11) DEFAULT '0' NOT NULL,
    t3ver_oid        int(11) DEFAULT '0' NOT NULL,
    t3ver_id         int(11) DEFAULT '0' NOT NULL,
    t3_origuid       int(11) DEFAULT '0' NOT NULL,
    t3ver_wsid       int(11) DEFAULT '0' NOT NULL,
    t3ver_label      varchar(30)  DEFAULT '' NOT NULL,
    t3ver_state      tinyint(4) DEFAULT '0' NOT NULL,
    t3ver_stage      tinyint(4) DEFAULT '0' NOT NULL,
    t3ver_count      int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp     int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id    int(11) DEFAULT '0' NOT NULL,
    sorting          int(10) DEFAULT '0' NOT NULL,
    deleted          tinyint(4) DEFAULT '0' NOT NULL,
    hidden           tinyint(4) DEFAULT '0' NOT NULL,
    parent           int(11) DEFAULT '0' NOT NULL,
    title            varchar(255) DEFAULT '' NOT NULL,
    description      varchar(255) DEFAULT '' NOT NULL,
    number           varchar(255) DEFAULT '' NOT NULL,
    icon             varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid)
);