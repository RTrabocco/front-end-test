To set up the project, follow these steps:

- In your command line, cd into your project.
- Run composer install (you may need to run COMPOSER_MEMORY_LIMIT=-1 composer install if you get a memory error message).
- Run cp .env.example .env
- run php artisan key:generate
- run npm install
- run npm run watch
- In a new CLI tab, run php artisan serve. This link displayed will then take you to your live build. Alternatively, you can use a local server environment such as MAMP/WAMP.

Do all work in the index.blade.php file. If you can split different components up into partials, that would be great.

If you have any issues setting up your local environment, please contact adam@clevercherry.com

On completion of the task, feel free to upload to a git repository to view, or package up the project and send back across to Laura.

Thank You.