-- 1. Wyświetl wszystkie dane użytkowników.
SELECT * FROM Users;

-- 2. Wyświetl tylko imiona i nazwiska użytkowników.
SELECT Firstname, Lastname FROM Users;

-- 3. Wyświetl użytkowników, którzy mają więcej niż 30 lat.
SELECT * FROM Users
WHERE Age > 30;

-- 4. Wyświetl użytkowników, których imię zaczyna się na "J".
SELECT * FROM Users
WHERE Firstname LIKE 'J%';

-- 5. Wyświetl użytkowników, których nazwisko kończy się na "son".
SELECT * FROM Users
WHERE Lastname LIKE '%son';

-- 6. Znajdź użytkowników w wieku 28 lat.
SELECT * FROM Users
WHERE Age = 28;

-- 7. Znajdź użytkowników w wieku pomiędzy 25 a 35 lat.
SELECT * FROM Users
WHERE Age BETWEEN 25 AND 35;

-- 8. Wyświetl użytkowników, którzy mają mniej niż 25 lat lub więcej niż 35 lat.
SELECT * FROM Users
WHERE Age < 25 OR Age > 35;

-- 9. Wyświetl użytkowników, którzy mają dokładnie 22 lub 27 lat.
SELECT * FROM Users
WHERE Age = 22 OR Age = 27;

-- 10. Posortuj użytkowników według wieku rosnąco.
SELECT * FROM Users
ORDER BY Age ASC;

-- 11. Posortuj użytkowników według wieku malejąco.
SELECT * FROM Users
ORDER BY Age DESC;

-- 12. Posortuj użytkowników według nazwiska, a następnie według imienia.
SELECT * FROM Users
ORDER BY LastName, FirstName;

-- 13. Policz wszystkich użytkowników w tabeli.
SELECT COUNT(*) FROM Users;

-- 14. Policz, ilu użytkowników ma więcej niż 30 lat.
SELECT COUNT(*) FROM Users
WHERE Age > 30;

-- 15. Znajdź średni wiek użytkowników.
SELECT AVG(Age) FROM Users;

-- 16. Znajdź maksymalny wiek użytkownika.
SELECT MAX(Age) FROM Users;

-- 17. Znajdź sumę wszystkich wieków użytkowników.
SELECT SUM(Age) FROM Users;

-- 18. Znajdź liczbę użytkowników w każdej grupie wiekowej większej niż 30 lat.
SELECT COUNT(*) FROM Users
WHERE Age > 30;

-- 19. Pogrupuj użytkowników według nazwiska i znajdź, ilu użytkowników ma takie samo nazwisko.
SELECT Lastname, COUNT(*) AS NumberOfUsers FROM Users
GROUP BY Lastname
ORDER BY NumberOfUsers DESC;