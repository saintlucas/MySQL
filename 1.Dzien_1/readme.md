# PHP - MySQL - Ćwiczenia 

## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1 - Tworzenie bazy danych.
Stwórz nową bazę danych o nazwie ```exercises_db```. 
Następnie napisz skrypt php który stworzy połączenie do tej bazy danych.

### Ćwiczenie 2 - Tworzenie tabel z danymi.
W bazie danych o nazwie ```exercises_db``` stwórz następujące tabele:
* Product:
  * id: int
  * name: string
  * description: string
* Order:
  * id:int
  * description: string
* Client:
  * id: int
  * name: string
  * surname: string

### Ćwiczenie 3 - Wpisywanie danych.
Napisz zapytania SQL żeby wypełnić każdą tabelkę co najmniej kilkoma wpisami.

Napisz formularz który będzie dodawał nowe produkty do bazy danych.

### Ćwiczenie 4 - Wypisywanie danych
Napisz stronę która wyświetli wszystkie produkty które są w bazie danycch.

### Ćwiczenie 5 - usuwanie danych
Napisz stronę która będzie usuwała produkt o podanym id (id może być zmienną w kodzie).


## Ćwiczenia samodzielne

### Ćwiczenie 1 - Tworzenie bazy danych.
Stwórz nową bazę danych o nazwie ```cinemas_db```. Kod MySQL zapisz jako komentarz w pliku exercise1.php
Następnie napisz skrypt php który stworzy połączenie do tej bazy danych.

### Ćwiczenie 2 - Tworzenie tabel z danymi.
W bazie danych o nazwie ```cinemas_db``` stwórz następujące tabele:
* Kino:
  * id: int
  * name: string
  * address: string
* Film:
  * id: int
  * name: string
  * opis: string
* Bilet:
  * id: int
  * ilość: int
  * cena: float
* Płatność:
  * id: int
  * typ: string
  * data: date

Pamiętaj o tym żeby założyć odpowiednie atrybuty na pola (np.: każde ID powinno być kluczem głównym, być automatycznie numerowane). 
Najpierw napisz odpowiednie zapytania SQL używając PHPmyAdmin (lub konsoli), potem w pliku exercise2.php napisz skrypt który będzie tworzył taką bazę danych (pamiętaj o stworzeniu i zamknięciu połączenia).
Pamiętaj że jeżeli tabelka już istnieje to nie będzie się jej dało stworzyć.
Dokładnie czytaj kody błędów zwracane przez MySQL.

### Ćwiczenie 2.b - Zmiana tablicy z danymi.
Dodaj do tableli Film kolumnę, która będzie trzymała rating danego filmu (wartość numeryczna z dwoma miejscami po przecinku). Zapytanie dopisz na górze pliku exercise2.php

### Ćwiczenie 3 - Wpisywanie danych.
Napisz zapytania SQL żeby wypełnić każdą tabelkę co najmniej kilkoma wpisami (dodaj je jako komentarz na górze pliku php).

W pliku exercise3.php jest formularz który służy do tworzenia nowych wpisów w tablicach. Przeanalizuj kod HTML.
Następnie napisz kod php który będzie wkładał przesyłane informacje do odpowiednich tabelek w MySQL. Zauważ że możesz rozróżniać który formularz został wysłany dzięki temu że pola submit o nazwie ```submit``` mają różne wartości dla każdego formularza (hint: użyj switch).
Jeżeli chcesz przeczytać o innych sposobach rozróżniania wielu formularzy na jednej stronie zajrzyj [tutaj][ref-multiple-forms].
Musisz przeprowadzić też ddodatkową walidację danych:
* Dla Filmu raiting musi być w zakresie od 0.00 do 10.00,
* Dla Biletu cena musi być większa niż 0,
* Dla płatności typ musi być jednym zpodanych napisów:
  * Karta,
  * Gotówka,
  * Przelew.

### Ćwiczenie 4 - Wypisywanie danych
Napisz zapytania SQL które:
* Wybiorą wszystkie filmy zaczynające się na literę W
* Wybiorą wszystkie bilety na których cena jest większa od 15.30
* Wybiorą wszystkie bilety na których ilość jest większa od 3
* Wybiorą wszystkie filmy które mają rating większy niż 6.5

Wszystkie zapytania dodaj do pliku php jako komentarz.

Napisz skrypt który wyświetli na stronie wszystkie filmy, kina, bilety i płatności.

### Ćwiczenie 5 - usuwanie danych
Napisz zapytanie które usunie:
* Wszystkie kina kończące się na literę Z
* Wszystkie płatności starsze niż 5 dni

Wszystkie zapytania dodaj do pliku php jako komentarz.

Do skryptu z zadania 4 dopisz link (widoczny przy każdym elemencie wczytanym z bazy danych), który usunie ten wpis z bazy.
Zrób to na zasadzie przesyłania GET-em do innego pliku nazwy tablicy i id elementu który chcesz usunąć.

## Praca domowa
Złóż całą pracę z dzisiejszych ćwiczeń w całość i zrób mini portal w którym:
* Możemy dodać/usuwać kina, filmy, bilety i płatności
* Możemy wyświetlać wszystkie kina wyszukując po nazwie
* Możemy wyświetlać wszystkie filmy wyszukując po nazwie lub ratingu
* Możemy wyświetlać wszystkie płatności wyszukując po dacie (uwzględnij wyszukiwanie starszych niż, nowszych niż, z danego zakresu i z danej daty)




<!-- Links -->
[ref-multiple-forms]: http://stackoverflow.com/a/14071321
