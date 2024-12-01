-- Zadanie 1
SELECT * FROM pytania
WHERE id = 15;

-- Zadanie 2
SELECT * FROM pytania
WHERE answer = 'a';

-- Zadanie 3
SELECT * FROM pytania
WHERE rok = 2007;

-- Zadanie 4
SELECT * FROM pytania
WHERE kategoria = 'programowanie' AND rok = 2009;

-- Zadanie 5
SELECT tresc, answer FROM pytania
WHERE rok = 2010
LIMIT 4;

-- Zadanie 6
SELECT * FROM pytania
ORDER BY tresc ASC;

-- Zadanie 7
SELECT tresc FROM pytania
WHERE id BETWEEN 10 AND 12;

-- Zadanie 8
SELECT * FROM pytania
WHERE tresc LIKE 'Jak%';

-- Zadanie 9
SELECT * FROM pytania
WHERE tresc LIKE '%C++%';

-- Zadanie 10
SELECT * FROM pytania
WHERE kategoria = ('programowanie' OR 'systemy operacyjne i sieci') AND rok = 2012;