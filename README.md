<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel_auth
------
**Descrizione**

Nuovo progetto usando laravel breeze ed il pacchetto Laravel 9 Preset con autenticazione.

---------
**TODO:S**

1. Creare progetto con comando:;

**composer create-project laravel/laravel:^9.2 nome_cartella**

2. Installare breeze (tool) con comando;

**composer require laravel/breeze --dev**

3. **php artisan breeze:install**

4. Installare pacchetto pacifici:

**composer require pacificdev/laravel_9_preset**

5. Installare bootstrap;

**php artisan preset:ui bootstrap --auth**

6. Lanciare comando **'npm i'**;

7. Apriamo due terminali e lanciamo il progetto;

**- npm run dev**

**- hp artisan serve**

----------------

8. Creiamo il nostra db con phpmyadmin e lo agganciamo al progetto tramite .env

9. Creiamo la migration con il comando;

**php artisan migrate**

10. Controlliamo che siano stati aggiunti in campi nel db!

-------

## Layouts

1. Cominciamo a separare gli ambienti;

- Creiamo cartella guest in views
- Creiamo file home.blade.php in guest

**Home deve estendere laytouts.guest mentre in nel FILE guest.blade.php inseriamo la @section('content')**

2. Diviamo gli stili ;

- Andiamo in vite.config.js e aggiungiamo due file per la cartella guest;

- Creiamo i due file; 

In scss aggiungiamo file appGuest.scss 

In js aggiungiamo file appGuest.js

## NB
Per fare in modo che tutti funzioni correttamente, torniamo nel file guest.blade.php e correggiamo i file @vite che altre ad essere 'appGuest' sono scss e non css.

----------


