#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    tx_dmschema_question varchar(255) default '' ,
    tx_dmschema_answer mediumtext default '' ,
    tx_dmschema_title varchar(255) default '' ,
    tx_dmschema_description mediumtext default '' ,
    tx_dmschema_date_posted int(11) unsigned DEFAULT '0' ,
    tx_dmschema_valid_through int(11) unsigned DEFAULT '0' ,
    tx_dmschema_employment_type varchar(60) DEFAULT '0' ,
    tx_dmschema_hiring_organization_name varchar(255) default '' ,
    tx_dmschema_hiring_organization_same_as varchar(1024) default '' ,
    tx_dmschema_hiring_organization_logo int(11) unsigned DEFAULT '0' ,
    tx_dmschema_address_street_address varchar(255) default '' ,
    tx_dmschema_address_address_locality varchar(255) default '' ,
    tx_dmschema_address_address_region varchar(255) default '' ,
    tx_dmschema_address_postal_code varchar(255) default '' ,
    tx_dmschema_address_address_country varchar(255) default '' ,
    tx_dmschema_base_salary_currency varchar(60) default '' ,
    tx_dmschema_base_salary_value_min mediumint(8) unsigned DEFAULT '0' ,
    tx_dmschema_base_salary_value_max mediumint(8) unsigned DEFAULT '0' ,
    tx_dmschema_base_salary_value_unit varchar(60) default '',
    tx_dmschema_localbusiness_image int(11) unsigned DEFAULT '0',
    tx_dmschema_id varchar(255) default '' ,
    tx_dmschema_geo_latitude varchar(255) default '' ,
    tx_dmschema_geo_longitude varchar(255) default '' ,
    tx_dmschema_url varchar(255) default '' ,
    tx_dmschema_telephone varchar(255) default '',
    tx_dmschema_event_image int(11) unsigned DEFAULT '0',
    tx_dmschema_location_name varchar(255) default ''
);
