CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_no INT NOT NULL,
    patient_name VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    doctor VARCHAR(50) NOT NULL,
    appointment_date DATE NOT NULL
);
