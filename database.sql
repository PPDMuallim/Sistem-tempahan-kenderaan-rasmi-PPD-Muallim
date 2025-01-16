CREATE DATABASE sistem_tempahan;

USE sistem_tempahan;

CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    jawatan VARCHAR(50),
    email VARCHAR(100),
    kata_laluan VARCHAR(255)
);

CREATE TABLE kenderaan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(100),
    plat_no VARCHAR(50),
    status ENUM('Tersedia', 'Ditempah') DEFAULT 'Tersedia'
);

CREATE TABLE tempahan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pengguna_id INT,
    kenderaan_id INT,
    tarikh DATE,
    masa VARCHAR(50),
    tujuan TEXT,
    status ENUM('Menunggu', 'Diluluskan', 'Ditolak') DEFAULT 'Menunggu',
    FOREIGN KEY (pengguna_id) REFERENCES pengguna(id),
    FOREIGN KEY (kenderaan_id) REFERENCES kenderaan(id)
);
