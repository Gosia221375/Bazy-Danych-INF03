SELECT tabela1.kolumna1, tabela2.kolumna2
FROM tabela1
JOIN tabela2 ON tabela1.id = tabela2.id;

SELECT a.kolumna1, b.kolumna2
FROM tabela1 AS a
JOIN tabela2 AS b ON a.id = b.id;

-- Zadanie 1. Pobierz tytuły książek i ich statusy zamówień (pokaż wszystkie tytuły książek oraz ich statusy zamówienia)
SELECT ksiazki.tytul, zamowienia.status
FROM ksiazki
JOIN zamowienia ON ksiazki.idksiazki = zamowienia.idksiazki;
-- lub
SELECT k.tytul, z.status
FROM ksiazki k
JOIN zamowienia z
ON k.idksiazki = z.idksiazki;

-- Zadanie 2. Wyświetl imiona i nazwiska klientów i datę zamówień
SELECT klienci.imie, klienci.nazwisko, zamowienia.data
FROM klienci
JOIN zamowienia ON klienci.idklienta = zamowienia.idklienta;

-- Zadanie 3. Wyświetl zamówienia, które nie mają przypisanej żadnej książki
SELECT zamowienia.idzamowienia, ksiazki.tytul
FROM ksiazki JOIN zamowienia
ON ksiazki.idksiazki = zamowienia.idksiazki
WHERE ksiazki.idksiazki IS NULL;

-- Zadanie 4. Wyświetl tytuł książki, imię i nazwisko klienta oraz datę zamówienia
SELECT ksiazki.tytul, klienci.imie, klienci.nazwisko, zamowienia.data
FROM zamowienia JOIN klienci
ON klienci.idklienta = zamowienia.idklienta
JOIN ksiazki
ON ksiazki.idksiazki = zamowienia.idksiazki;

-- -------------------------------------------------------------

-- 1. Wyświetl tytuły książek, które były zamawiane więcej niż jeden raz.
SELECT ksiazki.tytul, COUNT(zamowienia.idzamowienia) AS liczba_zamowien
FROM ksiazki JOIN zamowienia
ON ksiazki.idksiazki = zamowienia.idksiazki
GROUP BY ksiazki.tytul
HAVING COUNT(zamowienia.idzamowienia) > 1;

?-- 2. Wyświetl wszystkich klientów, którzy nie dokonali żadnych zamówień.
SELECT klienci.imie, klienci.nazwisko, COUNT(zamowienia.idklienta) AS liczba_zamowien
FROM klienci JOIN zamowienia
ON klienci.idklienta = zamowienia.idklienta
GROUP BY zamowienia.idklienta
HAVING COUNT(zamowienia.idklienta) IS NULL;

-- 3. Pokaż klientów, którzy zamówili książki o cenie powyżej 50 zł.
SELECT klienci.imie, klienci.nazwisko, ksiazki.cena
FROM klienci JOIN zamowienia
ON klienci.idklienta = zamowienia.idklienta
JOIN ksiazki
ON ksiazki.idksiazki = zamowienia.idksiazki
WHERE ksiazki.cena > 50;

-- 4. Wyświetl książki i liczbę zamówień, posortowane malejąco.
SELECT ksiazki.tytul, COUNT(zamowienia.idzamowienia) AS liczba_zamowien
FROM ksiazki JOIN zamowienia
ON ksiazki.idksiazki = zamowienia.idksiazki
GROUP BY ksiazki.tytul
ORDER BY liczba_zamowien DESC;

?-- 5. Pokaż książki zamówione przez więcej niż jednego klienta.
SELECT ksiazki.tytul, COUNT(zamowienia.idklienta) AS zamowienia_idklienta
FROM ksiazki JOIN zamowienia
ON ksiazki.idksiazki = zamowienia.idksiazki
JOIN klienci
ON klienci.idklienta = zamowienia.idklienta
-- GROUP BY zamowienia_idklienta
WHERE zamowienia_idklienta > 1;


-- 6. Pokaż klientów, którzy zamówili książki droższe niż 100 zł.
SELECT klienci.imie, klienci.nazwisko, ksiazki.cena
FROM klienci JOIN zamowienia
ON klienci.idklienta = zamowienia.idklienta
JOIN ksiazki
ON ksiazki.idksiazki = zamowienia.idksiazki
WHERE ksiazki.cena > 100;

-- 7. Znajdź najczęściej zamawianą książkę.
SELECT ksiazki.tytul, COUNT(zamowienia.idzamowienia) AS liczba_zamowien
FROM ksiazki JOIN zamowienia
ON ksiazki.idksiazki = zamowienia.idksiazki
GROUP BY ksiazki.tytul
ORDER BY liczba_zamowien DESC
LIMIT 1;

-- 8. Pokaż klienta z największą liczbą zamówień.
SELECT klienci.imie, klienci.nazwisko, COUNT(zamowienia.idzamowienia) AS liczba_zamowien
FROM klienci JOIN zamowienia
ON klienci.idklienta = zamowienia.idklienta
GROUP BY klienci.imie, klienci.nazwisko
ORDER BY liczba_zamowien DESC
LIMIT 1;

-- 9. Pokaż wszystkie zamówienia posortowane według daty.


-- 10. Pokaż klientów, którzy nie zamówili żadnej książki po 2020 roku.