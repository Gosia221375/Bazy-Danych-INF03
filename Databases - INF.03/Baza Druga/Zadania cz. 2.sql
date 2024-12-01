-- Zadanie 1
SELECT * FROM pytania
WHERE kategoria = 'programowanie';

-- Zadanie 2
SELECT tresc, answer FROM pytania
WHERE rok = 2010;

-- Zadanie 3
SELECT * FROM pytania
WHERE answer = 'c';

-- Zadanie 4
SELECT * FROM pytania
WHERE kategoria = 'multimedia i grafika' AND rok = 2008;

-- Zadanie 5
SELECT * FROM pytania
WHERE tresc LIKE '%komputer%';

-- Zadanie 6
SELECT * FROM pytania
ORDER BY rok ASC;

-- Zadanie 7
SELECT * FROM pytania
ORDER BY rok ASC
LIMIT 5;

-- Zadanie 8
SELECT * FROM pytania
WHERE kategoria = 'systemy operacyjne i sieci'
ORDER BY rok DESC;

-- Zadanie 9
SELECT COUNT(*) FROM pytania;

-- Zadanie 10
SELECT rok, COUNT(*) FROM pytania
GROUP BY rok
ORDER BY COUNT(*) DESC
LIMIT 1;