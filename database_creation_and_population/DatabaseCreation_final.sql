/*
NOTAS DO PROF:
Pôr diagnostico manual e auto como atributos de exam,
ligar as features ao exame em vez de ao diag. auto
Criar uma tabela com todos os sintomas possiveis, e depois uma tabela de ligação (nesta consulta queixou-se de este sintoma),
permite ver todos os pacientes que já sofreram desse sintoma
*/
/*
Table Patients
*/
CREATE TABLE patients(
  id SERIAL PRIMARY KEY,
  first_name VARCHAR(128) NOT NULL,
  last_name VARCHAR(128) NOT NULL,
  birth_date DATE,
  gender CHAR CHECK (gender IN ('m', 'f')),
  phone VARCHAR(9),
  healthcare_id VARCHAR(128) UNIQUE NOT NULL DEFAULT 0 CHECK (healthcare_id != ' '),
  email VARCHAR(128),
  country VARCHAR(128),
  city VARCHAR(128),
  street VARCHAR(128),
  floor_app VARCHAR(128),
  door_number VARCHAR(128),
  postal_code VARCHAR(128)
);

/*
Speciality
*/
CREATE TABLE speciality(
  id SERIAL PRIMARY KEY,
  name_speciality VARCHAR(128),
  notes VARCHAR(128)
);

/*
Table Doctors
*/
CREATE TABLE doctors(
  id SERIAL PRIMARY KEY,
  first_name VARCHAR(128) NOT NULL,
  last_name VARCHAR(128) NOT NULL,
  birth_date DATE,
  gender CHAR CHECK (gender IN ('m', 'f')),
  phone VARCHAR(9),
  citizen_id VARCHAR(128) UNIQUE NOT NULL DEFAULT 0 CHECK (citizen_id != ' '),
  email VARCHAR UNIQUE NOT NULL DEFAULT '0' CHECK (email != ' '),
  speciality_id INT REFERENCES speciality(id) NOT NULL,
  first_day_of_service DATE,
  is_active BOOLEAN NOT NULL DEFAULT TRUE,
  password VARCHAR(128) NOT NULL,
  username VARCHAR(128) NOT NULL UNIQUE DEFAULT '0' CHECK (username != ' '),
  country VARCHAR(128),
  city VARCHAR(128),
  street VARCHAR(128),
  floor_app VARCHAR(128),
  doorNumber VARCHAR(128),
  postal_code VARCHAR(128)
);

/*
Diagnoses
*/
CREATE TABLE diagnoses(
  id SERIAL PRIMARY KEY,
  diagnoses_result VARCHAR(128) NOT NULL,
  probability INTEGER NOT NULL
);



/*
Appointments
*/
CREATE TABLE appointments(
  id SERIAL PRIMARY KEY,
  appointment_date DATE NOT NULL,
  appointment_time TIME NOT NULL,
  room VARCHAR(128),
  doctor_id INT REFERENCES doctors(id) NOT NULL,
  patient_id INT REFERENCES patients(id) NOT NULL
);

/*
Exams
*/
CREATE TABLE exams(
  id SERIAL PRIMARY KEY,
  exam_image VARCHAR(128),
  exam_date DATE NOT NULL,
  date_prescribed DATE NOT NULL,
  type_of_exam VARCHAR(128),
  auto_diagnoses_result VARCHAR(128) NOT NULL,
  auto_probability INTEGER NOT NULL,
  appointments_id INTEGER REFERENCES appointments(id) NOT NULL,
  medical_diag_id INTEGER REFERENCES diagnoses(id)
);

/*
Features
*/
CREATE TABLE features(
  id SERIAL PRIMARY KEY,
  feature_name VARCHAR(128) NOT NULL,
  feature_value INTEGER NOT NULL,
  exame_id INTEGER REFERENCES exams(id) NOT NULL
);

/*
Treatments
*/
CREATE TABLE treatments(
  id SERIAL PRIMARY KEY,
  name VARCHAR(128) NOT NULL,
  dose VARCHAR(128) NOT NULL,
  type_treatment VARCHAR(128)
);

/*
TreatPerPatients
*/
CREATE TABLE treat_per_patients(
  patient_id INTEGER REFERENCES patients(id),
  treatment_id INTEGER REFERENCES treatments(id),
  PRIMARY KEY (patient_id, treatment_id),
  start_date DATE NOT NULL,
  end_date DATE NOT NULL,
  frequency VARCHAR(128) NOT NULL
);

/*
Symptoms
*/
CREATE TABLE symptoms(
  id SERIAL PRIMARY KEY,
  name VARCHAR(128) NOT NULL,
  description VARCHAR(128)
);
/*
Symptons per patients
*/
CREATE TABLE symptoms_per_patients(
  patient_id  INTEGER REFERENCES patients(id),
  symptoms_id INTEGER REFERENCES symptoms(id),
  PRIMARY KEY (patient_id, symptoms_id),
  place VARCHAR(128),
  description VARCHAR(128),
  start_date DATE NOT NULL,
  end_date DATE NOT NULL
);

/*
Observations
*/
CREATE TABLE observations(
  id  SERIAL PRIMARY KEY,
  date_observations DATE NOT NULL,
  notes VARCHAR(128) NOT NULL,
  appointment_id INTEGER REFERENCES appointments(id) NOT NULL
);

