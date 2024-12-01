show databases;

-- Zadanie 1
SELECT * FROM SimpleTable;

-- Zadanie 2
SELECT Name, Email FROM SimpleTable;

-- Zadanie 3
SELECT * FROM SimpleTable
WHERE Age > 30;

-- Zadanie 4
SELECT * FROM SimpleTable
WHERE Name = 'John Doe';

-- Zadanie 5
SELECT * FROM SimpleTable
ORDER BY Age DESC; -- Descending (malejąco), Ascending (rosnąco)

-- Zadanie 6
SELECT * FROM SimpleTable
WHERE Email LIKE '%example%'; -- Procenty oznaczają ciąg znaków przed i po słowie 'example'

-- Zadanie 7
SELECT COUNT(*) FROM SimpleTable
WHERE Age < 25;

-- Zadanie 8
SELECT * FROM SimpleTable
WHERE JoinDate BETWEEN '2023-01-01' AND '2023-12-31';