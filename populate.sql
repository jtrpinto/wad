INSERT INTO speciality (name_speciality, notes)
VALUES ('Osteoporosis','');

INSERT INTO doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email,
  speciality_id, first_day_of_service, is_active, password, username,
  country, city, street, floor_app, doornumber, postal_code)
VALUES ('Elliot', 'Reid', '1981-03-12', 'F', '445559869', '10998099', 'e_reid@wad.us', '1', '2005-09-20', '1',
  'EREID', 'elliotreid', 'USA', 'San DiFrangeles, CA', 'Fox Ave.', '2A',
  '233', '23409');


first_name	character varying(128)
last_name	character varying(128)
birth_date	date
gender	character(1)
phone	character varying(9)
citizen_id	character varying(128)
email	character varying
speciality_id	integer
first_day_of_service	date
is_active	boolean
password	character varying(128)
username	character varying(128)
country	character varying(128)
city	character varying(128)
street	character varying(128)
floor_app	character varying(128)
doornumber character varying(128)
postal_code character varying(128)
