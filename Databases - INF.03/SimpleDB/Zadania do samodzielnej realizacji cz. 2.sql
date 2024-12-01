SET SQL_SAFE_UPDATES = 0;

SELECT * FROM SimpleTable;

-- Zadanie 1
SELECT * FROM SimpleTable
WHERE Name LIKE 'J%';

-- Zadanie 2
SELECT * FROM SimpleTable
ORDER BY JoinDate ASC;

-- Zadanie 3
SELECT COUNT(*) FROM SimpleTable
WHERE Age > 30;

-- Zadanie 4
-- SELECT Age FROM SimpleTable
-- WHERE Name = 'Jack Turner';
UPDATE SimpleTable
SET Age = 34
WHERE Name = 'Jack Turner';

-- Zadanie 5
DELETE FROM SimpleTable
WHERE Age = 20;

-- Zadanie 6
SELECT AVG(Age)
FROM SimpleTable;

-- Zadanie 7
UPDATE SimpleTable
SET Email = 'john.doe@newdomain.com'
WHERE Name = 'John Doe';

-- Zadanie 8
SELECT * FROM SimpleTable
WHERE Age BETWEEN 25 AND 35;

-- Zadanie 9
SELECT * FROM SimpleTable
ORDER BY Age DESC;

-- Zadanie 10
SELECT * FROM SimpleTable
WHERE Name = 'Alice Johnson' OR Name = 'Bob Brown';

-- Zadanie 11
SELECT COUNT(*) FROM SimpleTable
WHERE JoinDate < '2023-01-01';

-- Zadanie 12
SELECT * FROM SimpleTable
WHERE Email LIKE 'alice%';

-- Zadanie 13
SELECT COUNT(*) FROM SimpleTable
WHERE Age > 30
AND Email NOT LIKE '%example%';