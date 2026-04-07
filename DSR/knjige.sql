CREATE DATABASE IF NOT EXISTS readly;

USE readly;


CREATE TABLE IF NOT EXISTS zanr (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naziv VARCHAR(255) NOT NULL 
);

CREATE TABLE IF NOT EXISTS avtor (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(255) NOT NULL,
    priimek VARCHAR(255) NOT NULL,
    leto_rojstva DATE
);

CREATE TABLE IF NOT EXISTS uporabnik (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(255) NOT NULL,
    priimek VARCHAR(255) NOT NULL,
    uporabnisko_ime VARCHAR(255) NOT NULL UNIQUE,
    geslo VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL UNIQUE,
    zanr_1 INT,
    zanr_2 INT, 
    FOREIGN KEY (zanr_1) REFERENCES zanr(id),
    FOREIGN KEY (zanr_2) REFERENCES zanr(id)
);

CREATE TABLE IF NOT EXISTS knjiga (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naslov VARCHAR(255) NOT NULL,
    opis TEXT,
    stevilka_strani INT NOT NULL,
    leto_izdaje DATE NOT NULL,
    zanr INT NOT NULL,
    avtor INT NOT NULL,
    FOREIGN KEY (zanr) REFERENCES zanr(id),
    FOREIGN KEY (avtor) REFERENCES avtor(id)
);

CREATE TABLE IF NOT EXISTS klub (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(255) NOT NULL,
    opis TEXT,
   lokacija VARCHAR(255) NOT NULL,
   zanr INT NOT NULL,
   knjige INT NOT NULL,
    FOREIGN KEY (zanr) REFERENCES zanr(id),
    FOREIGN KEY (knjige) REFERENCES knjiga(id)
);

CREATE TABLE IF NOT EXISTS wishlist (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uporabnik INT NOT NULL,
    knjiga INT NOT NULL,
    FOREIGN KEY (uporabnik) REFERENCES uporabnik(id),
    FOREIGN KEY (knjiga) REFERENCES knjiga(id)
);

CREATE TABLE IF NOT EXISTS prebrane (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uporabnik INT NOT NULL,
    knjiga INT NOT NULL,
    datum DATE NOT NULL,
    ocena TINYINT(6) NOT NULL,
    FOREIGN KEY (uporabnik) REFERENCES uporabnik(id),
    FOREIGN KEY (knjiga) REFERENCES knjiga(id)
);

CREATE TABLE IF NOT EXISTS komentar(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uporabnik INT NOT NULL,
    knjiga INT NOT NULL,
    datum DATETIME NOT NULL,
    ocena TINYINT(6) NOT NULL,
    vsebina_komentarja TEXT,
    FOREIGN KEY (uporabnik) REFERENCES uporabnik(id),
    FOREIGN KEY (knjiga) REFERENCES knjiga(id)
);

INSERT INTO zanr (naziv)
VALUES ('fantazija');

INSERT INTO avtor (ime, priimek, leto_rojstva)
VALUES ('Rebecca', 'Yarros', '1981-4-13');

ALTER TABLE knjiga
MODIFY COLUMN leto_izdaje YEAR;

INSERT INTO knjiga (naslov, avtor, leto_izdaje, zanr, stevilka_strani, opis)
VALUES ('Forth Wing', 1, 2023, 1, 528, 'Zgodba spremlja 20-letno Violet Sorrengail, ki je bila vse življenje urjena za Scribe Quadrant (krog pisarjev), kjer bi živela mirno življenje med knjigami in zgodovino. Vendar jo njena mati, neusmiljena generalinja, prisili, da se pridruži stotinam kandidatov, ki si želijo postati elitni jezdeci zmajev v kraljestvu Navarre.');

INSERT INTO uporabnik (ime, priimek, mail, uporabnisko_ime, geslo)
VALUES ('Ema', 'Hauc', 'ema.hauc29@gmail.com','emi.em', 'root');
        