<?php

// Parametry połączenia z bazą danych
$host = 'localhost';         // Adres hosta bazy danych
$db = 'wpisz_nazwę_bazy_danych_shopgold';       // Nazwa bazy danych
$user = 'wpisz_nazwę_bazy_danych_shopgold';     // Nazwa użytkownika bazy danych
$pass = 'wpisz_hasło_bazy_danych_shopgold';    // Hasło użytkownika bazy danych

try {
    // Tworzenie obiektu PDO dla połączenia z bazą danych
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

    // Ustawienie PDO na tryb zgłaszania błędów
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Rozpoczęcie transakcji
    $pdo->beginTransaction();
    
    // Komunikat o pomyślnym połączeniu z bazą danych
    echo "Pomyślnie połączono z bazą danych.";

    // Aktualizacja kolumny products_status
    try {
        // Zapytanie SQL do aktualizacji kolumny products_status
        $query = "UPDATE products SET products_status = 1"; // zmień na 0 jeśli chcesz wyłączyć produkty
        
        // Komunikat wyświetlający zapytanie SQL w celach debugowania
        echo "Zapytanie SQL: $query";
        
        // Przygotowanie i wykonanie zapytania przy użyciu PDO
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        
        // Pobranie liczby zaktualizowanych rekordów
        $rowCount = $stmt->rowCount();

        // Sprawdzenie, czy coś zostało zaktualizowane, a następnie wyświetlenie odpowiedniego komunikatu
        if ($rowCount > 0) {
            echo "Pomyślnie zaktualizowano $rowCount rekordów w kolumnie products_status.";
        } else {
            echo "Brak rekordów do zaktualizowania.";
        }

        // Zakończenie transakcji
        $pdo->commit();
        
    } catch (PDOException $e) {
        // Anulowanie transakcji w przypadku błędu
        $pdo->rollBack();
        
        // Obsługa błędów związanych z wykonaniem zapytania SQL
        // Wyświetlenie faktycznej wiadomości o błędzie w celach debugowania
        die("Błąd przy aktualizacji kolumny products_status: " . $e->getMessage());
    }

} catch (PDOException $e) {
    // Obsługa błędów związanych z połączeniem z bazą danych
    // Wyświetlenie faktycznej wiadomości o błędzie w celach debugowania
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}

?>
