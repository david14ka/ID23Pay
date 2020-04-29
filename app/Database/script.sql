create table checkout_payment
(
    id                int auto_increment
        primary key,
    client_id         varchar(100)                          not null,
    client_secret     varchar(100)                          not null,
    order_id          varchar(100)                          not null,
    order_description text                                  not null,
    total_amount      double                                not null,
    currency          varchar(3)                            not null,
    card_name         varchar(25)                           not null,
    card_number       varchar(20)                           not null,
    expire_date       varchar(5)                            not null,
    cvv_code          int                                   not null,
    card_type         varchar(10)                           not null,
    create_at         datetime                              not null,
    update_at         timestamp default current_timestamp() not null,
    status            varchar(10)                           not null
);

create table `keys`
(
    id                  int auto_increment
        primary key,
    client_id           varchar(50) null,
    client_api_key      varchar(50) null,
    project_name        varchar(50) null,
    project_description varchar(50) null,
    project_logo        text        null,
    website             text        null,
    notify_email        varchar(50) null,
    notify_phone        varchar(15) null,
    create_at           datetime    null,
    update_at           timestamp   null,
    constraint keys_client_api_key_uindex
        unique (client_api_key)
);

create table students
(
    s_id      int auto_increment
        primary key,
    s_name    varchar(200)                          not null,
    s_date    datetime                              not null,
    s_subject varchar(200)                          not null,
    s_update  timestamp default current_timestamp() not null
);

create table tbl_sample
(
    id         int auto_increment
        primary key,
    first_name varchar(250) not null,
    last_name  varchar(250) not null
)
    engine = MyISAM
    charset = latin1;

create table users
(
    id         int auto_increment
        primary key,
    first_name varchar(100)    not null,
    last_name  varchar(100)    not null,
    email      varchar(255)    not null,
    phone      varchar(20)     not null,
    created    datetime        not null,
    modified   datetime        not null,
    status     enum ('1', '0') not null
)
    collate = utf8_unicode_ci;


