# PHP - MySQL - Ćwiczenia 

## Ćwiczenia do zrobienia z wykładowcą

### Ćwiczenie 1 - Relacja jeden do jednego
Stwórz nową tabelkę ```UserAdress```. Niech zawiera:
* city: string
* street: string
* house_nr: string

Niech będzie połączona relacją jeden do jednego z tabelką ```Users```. Napisz kilka zapytań SQL które wpowadzą adresy dla istniejących już uzytkowników.

### Ćwiczenie 2 - Relacja jeden do wielu
Stwórz nową tabelkę ```Opinions```. Niech zawiera:
* description: string

Niech będzie też połączona z tabelką ```Products``` relacją jeden do wielu (produkt ma wiele opinii, opinia jest przypisana do jednego produktu).
Napisz kilka zapytań które dodadzą opinie do instniejących produktów. Napisz stronę gdzie wyświetlają się wszystkie produkty. Pod każdym produktem mają wyświetlić się opinie do niego.

### Ćwiczenie 3 - Relacja wiele do wielu
Połącz tabelki ```Products``` i ```Orders``` relacją wiele do wielu. 
Napisz kilka zapytań które połączą produkty z zamówieniami.
Napisz stronę gdzie będą wyświetlone wszystkie zamówienia a pod każdym zamówieniem wszystkie produkty należące do niego.
Napisz stronę gdzie będą widoczne wszystkie prodkty, a pod każdym produktem zamówienia w których ten produkt się pojawił. 

## Ćwiczenia samodzielne

### Ćwiczenie 0 -Import bazy danych.
Jeżeli nie masz bazy danych z dnia poprzedniego, albo masz ją niekompletną to usuń ją i stwórz nową bazę danych o nazwie ```cinema_db```. Następnie zaimportuj do niej dane z pliku kino.sql. Są to takie same tabele jakie tworzyliście wczoraj (brakuje tylko tabeli płatności) – są po prostu powypełniane dużą ilością danych.

### Ćwiczenie 1 - Relacja 1-1.
Stwórz tabele do płatności. Ma mieć takie same dane jak wczoraj z tym tylko założeniem że ma być powiązana relacją 1-1 z tabelą bilety (wpłynie to na kolumnę id). 
Relacja pomiędzy biletem a płatnością jest następująca: bilet ma 1 lub 0 płatności (jest wtedy nieopłacony), płatność musi być przypisana do biletu.

Napisz stronę na której można kupić bilet i wybrać sposób płatności (może go nie być). Następnie stronę na której możemy pokazać wszystkie bilety opłacona za pomocą: 
* karty, 
* gotówki, 
* przelewu
* nieopłacone (czyli takie które nie mają płatności w systemie) 

Pamiętaj żeby najpierw przetestować zapytania SQL w konsoli lub panelu administracyjnym, dopiero potem pisać kod PHP.

### Ćwiczenie 2 - Relacja wiele-wielu.
Połącz tabele kina i filmy poprzez relację wiele do wielu (film może być wyświetlany w wielu kinach, kino może mieć wiele filmów).
Dodatkowo stworzoną tabele nazwij seans.
Nastęnie: 
* Napisz stronę na której można kupić stworzyć nowy seans. 
* Napisz stronę na której można wybrać wszystkie kina które wyświetlają dany film.
* Napisz stronę na której wypisane są wszystkie filmy wyświetlane w  danym kinie. 

Pamiętaj żeby najpierw przetestować zapytania SQL w konsoli lub panelu administracyjnym, dopiero potem pisać kod PHP.

### Ćwiczenie 3 - Relacja wiele-1
Połącz tabele seanse i bilety za pomocą relacji wiele do 1 (na seans może być sprzedanych wiele biletów, jeden bilet może być tylko na jeden seans).

Napisz stronę na której możemy kupić bilet na wybrany seans. Seanse niech będą wybierane z listy drop-down (użyj do tego tagu ```<select>```). Żeby to zrobić musisz wczytać z bazy danych wszystkie dostepne seanse i pętlą ```for``` wygenerować ```option``` do formularza.  
Napisz stronę na której wyświetlamy dane z biletu (id seansu, nazwa filmu, nazwa kina, cena biletu).

Pamiętaj żeby najpierw przetestować zapytania SQL w konsoli lub panelu administracyjnym, dopiero potem pisać kod PHP.

## Praca domowa
### Zadanie 1 - Strona sieci kin.
Stwórz aplikację na której można:
* Zobaczyć wszystkie filmy (w stronie filmu zobaczyć opis, raiting + listę kin która go wyświetla)
* Zobaczyć wszystkie kina (na stronie kina wypisz wszystkie filmy + seanse w tym kinie)
* Kupić bilet na dany seans
* Zapłacić za bilet

### Zadanie 2 - Panel administracyjny.
Stwórz panel administracyjny dla sieci kin. Powinna w nim być możliwość dodawania kin, filmów, seansów, zarządzania biletami (sprawdzanie płatności itp). 

<!-- Links -->