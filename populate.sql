INSERT INTO speciality (name_speciality, notes)
VALUES ('Osteoporosis','');


/* DOCTORS */

INSERT INTO doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email,
  speciality_id, first_day_of_service, is_active, password, username,
  country, city, street, floor_app, doornumber, postal_code)
VALUES ('Elliot', 'Reid', '1981-03-12', 'f', '445559869', '10998099', 'e_reid@wad.us', '1', '2005-09-20', '1',
  'EREID', 'elliotreid', 'USA', 'San DiFrangeles, CA', 'Fox Ave.', '2A', '233', '23409');

INSERT INTO doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email,
  speciality_id, first_day_of_service, is_active, password, username,
  country, city, street, floor_app, doornumber, postal_code)
VALUES ('John', 'Dorian', '1981-05-03', 'm', '445550021', '10975589', 'jd_md@wad.us', '1', '2005-09-19', '1',
    'JDandTURK4EVA', 'jdmd', 'USA', 'San DiFrangeles, CA', 'Kent Blvd.', '6C', '1022', '23404');

INSERT INTO doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email,
  speciality_id, first_day_of_service, is_active, password, username,
  country, city, street, floor_app, doornumber, postal_code)
VALUES ('Robert', 'Kelso', '1964-09-21', 'm', '445550903', '10099008', 'kelso@wad.us', '1', '1988-07-04', '1',
  'backToWork', 'drKelso', 'USA', 'Anaheim, CA', 'Central Ave.', '3', '2305', '21300');

INSERT INTO doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email,
  speciality_id, first_day_of_service, is_active, password, username,
  country, city, street, floor_app, doornumber, postal_code)
VALUES ('Christopher', 'Turk', '1980-09-11', 'm', '445550877', '11109938', 'turky@wad.us', '1', '2005-09-20', '1',
    'MostGiantDoctor', 'turky', 'USA', 'San DiFrangeles, CA', 'Kent Blvd.', '6C', '1022', '23404');

INSERT INTO doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email,
  speciality_id, first_day_of_service, is_active, password, username,
  country, city, street, floor_app, doornumber, postal_code)
VALUES ('Perry', 'Cox', '1969-03-12', 'm', '445554505', '10036644', 'cox@wad.us', '1', '1996-08-22', '1',
    'NotMyProblem', 'cox', 'USA', 'San DiFrangeles, CA', 'Main Ave.', '44-A', '122', '23406');

/* PATIENTS */

INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Kevin', 'Pork', '1984-06-25', 'm', '445559744', '02256000', 'smells_like@bacon.here',
  'USA', 'Sacramento, CA', 'Jason St.', 'D3', '344', '20114');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Janey', 'Osment', '1945-03-23', 'f', '445559703', '02256098', 'old_mrs_janey@at.us',
  'USA', 'Sacramento, CA', 'Murica Ave.', '33', '2098', '20119');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Lloyd', 'Green', '1989-04-10', 'm', '445559709', '12022022', 'greenaf@gmail.com',
  'USA', 'Silicon Valley, CA', 'Gates St.', '32-A', '12098', '25669');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Keith', 'Sorensson', '1982-06-11', 'm', '445550029', '10021458', 'k_sorens@son.se',
  'USA', 'San DiFrangeles, CA', 'White Ave.', '3F', '120', '23401');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Donald', 'Drumpf', '1946-06-14', 'm', '325559909', '19882006', 'trump@me.us',
  'USA', 'New York, NY', '5th Ave.', '67A', '1', '10022');
