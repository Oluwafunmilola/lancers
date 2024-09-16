## About Lancers

Lancer is a simple

##installation step

- Clone the repo.
- cd Lancers-App.
- composer install
- copy .env.example to .env .
- Add the database details to the .env.
- php artisan key:generate
- php artisan config:cache
- php artisan migrate
- php artisan serve

##Add fill in subscription plans to table
- `php artisan subscriptions:table`

##Add countries, states and currencies to table
- `php artisan countriesandstates:table`
- `php artisan currencies:table`

if you're refreshing your database it would be helpful to run `php artisan run:migrations`, this command refreshes the database, fills in the needed data for countries, states and currencies, if you'll like to seed the database you could add the `--seed` flag to the command i.e `php artisan run:migrations --seed`.
