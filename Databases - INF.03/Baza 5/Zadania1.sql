-- 1. Wyświetl wszystkich użytkowników wraz z ich zamówieniami.
SELECT * FROM Uzytkownicy, Zamowienia;
-- Jasia sposób
-- SELECT * FROM Uzytkownicy JOIN Zamowienia;

-- 1*. Wyświetl imię, nazwisko, datę zamówienia, ilość zamówień.
SELECT uzytkownicy.imie, uzytkownicy.nazwisko, zamowienia.data_zamowienia, zamowienia.ilosc
FROM uzytkownicy
JOIN zamowienia ON uzytkownicy.id = zamowienia.id;

-- 2. Wyświetl nazwę produktu, datę zamówienia, ilość zamówień.
SELECT produkty.nazwa, zamowienia.data_zamowienia, zamowienia.ilosc
FROM produkty
JOIN zamowienia ON zamowienia.produkt_id = produkty.id;

-- 3. Wyświetl imię i nazwisko klientów, którzy zamówili produkty z kategorii 'Elektronika'.
SELECT uzytkownicy.imie, uzytkownicy.nazwisko, produkty.kategoria
FROM uzytkownicy
JOIN zamowienia ON uzytkownicy.id = zamowienia.id
JOIN produkty ON zamowienia.produkt_id = produkty.id
WHERE produkty.kategoria LIKE 'Elektronika';

-- 4. Uzyskaj nazwę produktu, datę zamowienia oraz ilość.
SELECT produkty.nazwa, zamowienia.data_zamowienia, zamowienia.ilosc
FROM produkty
JOIN zamowienia ON zamowienia.produkt_id = produkty.id;

-- 5. Wyświetl pełną listę zamówień, uwzględniając tylko tych użytkowników, którzy dokonali zamówienia.
SELECT zamowienia.data_zamowienia, zamowienia.ilosc, uzytkownicy.imie, uzytkownicy.nazwisko
FROM zamowienia
JOIN uzytkownicy ON zamowienia.uzytkownik_id = uzytkownicy.id;

-- 6. Wyświetl zamówione produkty oraz ich cenę.
SELECT produkty.*, zamowienia.id
FROM produkty
JOIN zamowienia ON zamowienia.produkt_id = produkty.id;

-- 7. Wyświetl imię, nazwisko oraz produkty, które zostały zamówione.
SELECT uzytkownicy.imie, uzytkownicy.nazwisko, produkty.nazwa
FROM uzytkownicy
JOIN zamowienia ON zamowienia.uzytkownik_id = uzytkownicy.id
JOIN produkty ON zamowienia.produkt_id = produkty.id;

-- 8. Połącz tabelę Zamowienia i Uzytkownicy, aby wyświetlić użytkowników oraz daty ich zamówień.
SELECT uzytkownicy.imie, uzytkownicy.nazwisko, zamowienia.data_zamowienia
FROM uzytkownicy
JOIN zamowienia ON zamowienia.uzytkownik_id = uzytkownicy.id;

-- 9. Wyświetl użytkowników oraz produkty, które zamówili, posortowane po dacie zamówienia.
SELECT uzytkownicy.imie, uzytkownicy.nazwisko, produkty.nazwa, zamowienia.data_zamowienia
FROM uzytkownicy
JOIN zamowienia ON zamowienia.uzytkownik_id = uzytkownicy.id
JOIN produkty ON zamowienia.produkt_id = produkty.id
ORDER BY zamowienia.data_zamowienia;

-- 10. Połącz tabelę Produkty i Zamowienia, aby uzyskać listę produktów zamówionych w dniu 1 stycznia 2025.
SELECT produkty.nazwa, zamowienia.data_zamowienia
FROM produkty
JOIN zamowienia on zamowienia.produkt_id = produkty.id
WHERE zamowienia.data_zamowienia = '2025-01-01';

-- 11. Połącz tabelę Uzytkownicy i Produkty, aby wyświetlić imiona i nazwiska użytkowników oraz produkty, które zamówili w kategorii 'Meble'.
SELECT uzytkownicy.imie, uzytkownicy.nazwisko, produkty.nazwa, produkty.kategoria
FROM uzytkownicy
JOIN zamowienia ON zamowienia.uzytkownik_id = uzytkownicy.id
JOIN produkty ON zamowienia.produkt_id = produkty.id
WHERE produkty.kategoria LIKE 'Meble';

-- 12. Połącz tabelę Produkty i Zamowienia, aby uzyskać produkty, które zostały zamówione więcej niż 3 razy.
SELECT produkty.nazwa, zamowienia.ilosc
FROM produkty
JOIN zamowienia ON zamowienia.produkt_id = produkty.id
WHERE zamowienia.ilosc > 3;

-- 13. Wyświetl imię, nazwisko użytkowników, którzy złożyli zamówienie w 2025 roku.
-- 14. Wyświetl nazwę produktu, datę zamówienia oraz ilość dla produktów z kategorii 'Dom'.
-- 15.Wyświetl imię, nazwisko oraz nazwy produktów dla użytkowników, którzy mają więcej niż 30 lat.
-- 16. Wyświetl nazwy produktów i ilość, których cena jest wyższa niż 1000 zł