-- Tworzenie bazy danych
CREATE DATABASE uczen;

-- Wybór bazy danych
USE uczen;

-- Tworzenie tabeli `uczniowie`
CREATE TABLE uczniowie (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Klucz główny z automatycznym zwiększaniem
    imie VARCHAR(50) NOT NULL,         -- Imię ucznia
    nazwisko VARCHAR(50) NOT NULL,     -- Nazwisko ucznia
    wiek INT NOT NULL,                 -- Wiek ucznia
    klasa VARCHAR(10) NOT NULL         -- Klasa ucznia
);

-- Dodanie 10 rekordów do tabeli
INSERT INTO uczniowie (imie, nazwisko, wiek, klasa) VALUES 
('Jan', 'Kowalski', 15, '1A'),
('Anna', 'Nowak', 16, '1B'),
('Piotr', 'Wiśniewski', 14, '1A'),
('Kasia', 'Zielińska', 15, '2A'),
('Tomasz', 'Kaczmarek', 17, '3A'),
('Maria', 'Mazur', 16, '2B'),
('Adam', 'Wojciechowski', 15, '1C'),
('Ewa', 'Szymańska', 14, '1C'),
('Michał', 'Dąbrowski', 17, '3B'),
('Agnieszka', 'Borkowska', 16, '2A');

-- Wyświetlenie wszystkich rekordów z tabeli
SELECT * FROM uczniowie;
