use //nom bd
create table profiles(
    id int primary key auto_increment not null;
    first_name varchar(48),
    last_name varchar(40),
    emails varchar(40),
    phone varchar(40),
    marital_status varchar(30),
    profil_name varchar(40),
    profil_image binary,
    born_date date,
    child int,
    healt_status varchar,
    born_at date
);

create table phones(
    phone_number varchar(40),
    is_mobile boolean,
    is_telegramme boolean,
    is_whatsapp boolean,
    country_code varchar(40)
);

create table social_links(
    social_network varchar(40),
    profile_link varchar(40),
);

create table born_location(
    
)