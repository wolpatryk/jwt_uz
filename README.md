# Dokumentacja

## O projekcie

Repozytorium zawiera prostą integrację frameworku Django z wykorzystaniem autoryzacji JWT oraz osobnego frontendu napisanego w php.

## Struktura projektu

Projekt składa się z dwóch katalogów:

- django_rest_jwt
- frontend

W katalogu **django_rest_jwt** znajduje się cały backend serwisu i jest on napisany w pythonie we frameworku Django + Django rest framework. W tym folderze znajdują się dwa ważne foldery:

- DjangoAPIapp
- EcommerceAPI

W katalogu **DjangoAPIapp** jest konfiguracja wykorzysytwanych modeli w API, które przechowują informację o książkach, kategoriach i produktach, które może przeglądać użytkownik w serwisie.

W katalogu **EcommerceAPI** znajduje się główny kod Django oraz plik konfiguracyjny **settings.py**, w którym można dodawać dodatkowe pluginy lub zmieniać konfigurację istniejących pluginów i zmienić typ wykorzysytwanej bazy danych.

W katalogu **frontend** znajduję się prosty formularz, który pozwala zalogować się na danego użytkownika, lub stworzyć nowego użytkownika. Podstawowym użytkownikiem aplikacji jest **admin** o haśle **admin**.

## Wymagania techniczne

Wymagane narzędzia do uruchomienia projektu:

- Python w wersji minimum 3.9.5
- instalator pakietów PIP
- wirtualne środowisko pipenv

```sh
  pip install pipenv
```

- serwer apache2, najlepiej XAMPP (windows)
- interpreter php
- zalecany jest edytor tekstowy z wbudowanym terminalem (np. vscode)
- GIT do zarządzania repozytorium

## Uruchomienie

Aby przystąpić do pracy nad projektem najlepiej sklonować całe repozytorium:

```sh
git clone https://github.com/wolpatryk/jwt_uz
```

Następnie należy otworzyć folder **jwt_uz** jako projekt w edytorze kodu.

## Uruchomienie backendu

W terminalu należy przejść do katalogu **django_rest_jwt**, gdzie znajduje się plik **manage.py**.

W terminalu należy uruchomić wirutalne środowisko _pipenv_ za pomocą komendy:

```shell
pipenv shell
```

Następnie należy zainstalować wymagane biblioteki z pliku **requirements.txt**, aby projekt mógł funkcjonować:

```shell
pip install -r requirements.txt
```

Po poprawnej instalacji należy uruchomić server django poleceniem:

```shell
python mamange.py runserver
```

## Uruchomienie frontendu

W panelu XAMPP trzeba uruchomić server **Apache2**

Jeśli aplikacja jest uruchamiana na systemie windows za pomocą XAMPP, katalog **frontend** należy przenieść bezpośrednio na dowolny folder w **htdocs**, aby interpreter php mógł przetwarzać requesty na server Django. Jeśli katalog **frontend** będzie zanjdować się na początku w **htdocs** należy wejść na dany adres w przeglądarce:

```sh
localhost/frontend
```

## Walidacja konfiguracji

### Backend

Żeby sprawdzić czy serwer Django działa nalezy wejść na adres:

```sh
localhost:8000/admin
```

Jeśli wyświetli się panel logowania, oznacza to, że możemy zalogwać się do serwisu i backend działa poprawnie.

### Frontend

Po wejści na adres:

```sh
localhost/frontend
```

Jest widoczny formularz logowania i rejestracji.

## Dostępne endpointy API

### Endpointy dla autentykacji użytkownika

`localhost:8000`/auth/login<br/>
`localhost:8000`/auth/register<br/>
`localhost:8000`/auth/refresh-token<br/>

### endpointy dla przeglądania danych w serwisie

`localhost:8000`/api/v1/books<br/>
`localhost:8000`/api/v1/books/1<br/>

`localhost:8000`/api/v1/categories<br/>
`localhost:8000`/api/v1/categories/1<br/>

`localhost:8000`/api/v1/products<br/>
`localhost:8000`/api/v1/products/1<br/>

## Dodatki

Dodakwo został załączony plik **django_app.ipynb**, który pokazuje sposób autoryzacji się użytkownika przez JWT oraz wyświetla dostępne zasoby, które są w serwisie.
