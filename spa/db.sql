

USE blood_bank;

CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    gender VARCHAR(10) NOT NULL,
    blood_group VARCHAR(5) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    place VARCHAR(100)
);

-- Table to store admin user details
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) 
    INSERT INTO admin (username, password) VALUES ('admin', 'password123');
);

-- Table to store donation requests
CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    donor_id INT,
    request_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (donor_id) REFERENCES donors(id)
);