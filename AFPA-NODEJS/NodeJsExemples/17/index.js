const fs = require("fs");
const path = require("path");

// node calculator.js --dir 'files' --ext 'png' --format 'photo-$$$'

// UWAGA! W systemie Windows w powyższym poleceniu zamień
// apostrofy na cudzysłowy!

/*

1. Sprawdź poprawność podanych argumentów.
2. Odczytaj pliki z katalogu.
3. Przefiltruj tylko te z podanym rozszerzeniem.
4. Posortuj tablicę wg daty.
5. Zmień nazwę każdego pliku na format zamieniając $$$ na 001 itd.

*/

// 1. Sprawdź poprawność podanych argumentów
