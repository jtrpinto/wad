/* SPECIALITIES */

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
    
INSERT INTO doctors (first_name, last_name, birth_date, gender, phone, citizen_id, email,
  speciality_id, first_day_of_service, is_active, password, username,
  country, city, street, floor_app, doornumber, postal_code)
VALUES ('Molly', 'Clock', '1975-04-22', 'f', '405554059', '10216040', 'clock@wad.us', '1', '1999-12-02', '1',
    'Frr0098', 'molly01', 'USA', 'San DiFrangeles, CA', 'Silly St.', '62-D', '1209', '23401');


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
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('William', 'Bell', '1951-05-12', 'm', '025556988', '19885541', 'bell@massdyn.com',
  'USA', 'Boston, MA', 'Charles Blvd.', '2A', '33', '66802');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Olivia', 'Dunham', '1982-08-03', 'f', '025550025', '20140036', 'dunham@fbi.gov',
  'USA', 'Boston, MA', 'Langdon Rd.', '3D', '230', '66742');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Rachel', 'Dunham', '1986-10-23', 'f', '025550226', '20036654', 'rach_dun@gmail.com',
  'USA', 'Boston, MA', 'Langdon Rd.', '3D', '230', '66742');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Astrid', 'Farnsworth', '1985-02-07', 'f', '045559903', '14404000', 'farnsworth@fbi.gov',
  'USA', 'Allston, MA', 'Massachussetts Rd.', '21F', '1036', '66798');
  
INSERT INTO patients (first_name, last_name, birth_date, gender, phone, healthcare_id, email,
  country, city, street, floor_app, door_number, postal_code)
VALUES ('Walter', 'Bishop', '1952-06-06', 'm', '025550055', '10024458', 'bishop@aol.com',
  'USA', 'Cambridge, MA', 'Harvard Ave.', '2C', '2210', '66788');


/* APPOINTMENTS */

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '10:30:00', 'F', '1', '6');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '11:30:00', 'B', '1', '7');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '14:30:00', 'D', '1', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-04', '10:00:00', 'G', '1', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-04', '11:30:00', 'E', '1', '2');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-06', '15:00:00', 'C', '1', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '09:00:00', 'G', '2', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '10:00:00', 'A', '2', '10');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '15:00:00', 'A', '2', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '10:00:00', 'D', '2', '3');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '10:30:00', 'C', '2', '5');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '11:00:00', 'C', '2', '8');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '12:00:00', 'D', '2', '7');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '10:30:00', 'F', '1', '6');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '11:30:00', 'B', '1', '7');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '14:30:00', 'D', '1', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-04', '10:00:00', 'G', '1', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-04', '11:30:00', 'E', '1', '2');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-06', '15:00:00', 'C', '1', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '09:00:00', 'G', '2', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '10:00:00', 'A', '2', '10');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-02', '15:00:00', 'A', '2', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '10:00:00', 'D', '2', '3');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '10:30:00', 'C', '2', '5');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '11:00:00', 'C', '2', '8');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '12:00:00', 'D', '2', '7');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-03', '10:30:00', 'F', '3', '6');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-03', '11:30:00', 'B', '3', '7');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-03', '14:30:00', 'D', '3', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '10:00:00', 'G', '3', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '11:30:00', 'E', '3', '2');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '15:00:00', 'C', '3', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-04', '09:00:00', 'G', '4', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-04', '10:00:00', 'A', '4', '10');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-04', '15:00:00', 'A', '4', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-08', '10:00:00', 'D', '4', '3');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-08', '10:30:00', 'C', '4', '5');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-08', '11:00:00', 'C', '4', '8');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-08', '12:00:00', 'D', '4', '7');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-06', '10:30:00', 'F', '5', '6');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-06', '11:30:00', 'B', '5', '7');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-06', '14:30:00', 'D', '5', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-07', '10:00:00', 'G', '5', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-07', '11:30:00', 'E', '5', '2');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '15:00:00', 'C', '5', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '09:00:00', 'G', '6', '4');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '10:00:00', 'A', '6', '10');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-05', '15:00:00', 'A', '6', '9');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-10', '10:00:00', 'D', '6', '3');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-10', '10:30:00', 'C', '6', '5');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-10', '11:00:00', 'C', '6', '8');

INSERT INTO appointments (appointment_date, appointment_time, room, doctor_id, patient_id)
VALUES ('2017-01-10', '12:00:00', 'D', '6', '7');
