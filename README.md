# Skrypt PHP dla Shopgold (masowe włączenie/wyłączenie produktów)

## Opis
Ten skrypt PHP jest zaprojektowany jako uniwersalne narzędzie do aktualizacji bazy danych, ze szczególnym uwzględnieniem modyfikacji kolumny `products_status` w tabeli `products` bazy danych MySQL. Skrypt, po uruchomieniu, aktualizuje wartość `products_status`, kontrolując widoczność produktów w sklepie internetowym Shopgold. Skonfigurowano go tak, aby ustawiać wartość `products_status` na 1 dla wszystkich rekordów, sprawiając, że produkty są widoczne, lub na 0, aby wyłączyć widoczność dla wszystkich produktów.

## Instrukcja Użycia

1. **Konfiguracja bazy danych:**
   - Otwórz skrypt w edytorze tekstu.
   - Zmodyfikuj parametry połączenia z bazą danych (`$host`, `$db`, `$user`, `$pass`) zgodnie z ustawieniami Twojej bazy danych.

2. **Uruchamianie skryptu:**
   - Uruchom skrypt PHP w środowisku serwera WWW lub za pomocą wiersza poleceń.
   - Upewnij się, że środowisko PHP obsługuje PDO i posiada odpowiednie sterowniki MySQL.

3. **Przeglądanie wyników:**
   - Skrypt generuje komunikaty wskazujące na sukces połączenia z bazą danych, zapytanie SQL i liczbę zaktualizowanych rekordów.
   - Sprawdź komunikaty błędów, jeśli skrypt napotka problemy.

4. **Ostrzeżenie:**
   - Użytkownicy powinni używać tego skryptu ostrożnie i jedynie w środowiskach, w których posiadają odpowiednie uprawnienia.
   - Skrypt, w dostarczonej formie, aktualizuje wszystkie rekordy w tabeli `products`. Upewnij się, że rozumiesz konsekwencje i wykonaj kopię zapasową danych przed użyciem.

5. **Zrozumienie wartości `products_status` dla Shopgold:**
   - Wartość `products_status` równa `1` oznacza, że produkty będą widoczne w sklepie internetowym Shopgold.
   - Wartość `products_status` równa `0` dezaktywuje widoczność dla wszystkich produktów, sprawiając, że nie są widoczne w sklepie Shopgold.
   - Ta aktualizacja dotyczy wszystkich produktów w tabeli.

## Ostrzeżenie
**Użycie na własne ryzyko:**
Ten skrypt jest dostarczany "as-is", a użytkownik ponosi pełną odpowiedzialność za jego użycie. Bądź ostrożny podczas uruchamiania skryptów modyfikujących dane w bazie, i upewnij się, że masz odpowiednie kopie zapasowe danych przed użyciem.

---
