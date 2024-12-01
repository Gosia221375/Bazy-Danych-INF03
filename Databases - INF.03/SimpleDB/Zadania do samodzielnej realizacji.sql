-- Zadania do samodzielnej realizacji

-- Zadanie 1
SELECT * FROM SimpleTable;

-- Zadanie 2
SELECT Name FROM SimpleTable;

-- Zadanie 3
SELECT * FROM SimpleTable
WHERE Age > 45;

-- Zadanie 4
SELECT * FROM SimpleTable
WHERE Name = 'Alice Johnson';

-- Zadanie 5
SELECT * FROM SimpleTable
WHERE Age = 25;

-- Zadanie 6
SELECT * FROM SimpleTable
ORDER BY JoinDate ASC;

-- Zadanie 7
SELECT * FROM SimpleTable
WHERE JoinDate > '2023-01-01';

-- Zadanie 8
SELECT COUNT(*) FROM SimpleTable
WHERE Age > 40;

-- Zadanie 9
SELECT * FROM SimpleTable
WHERE Email LIKE '%@example.com';