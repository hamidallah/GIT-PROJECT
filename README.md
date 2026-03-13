Task 								Command
Clone the repository						git clone <GitHub Repository URL>
Navigate to the project directory				cd <Cloned project name>
Install PHP dependencies					composer install
Copy the environment file					cp .env.example .env (Linux/macOS) or copy .env.example .env (Windows)
Generate application key					php artisan key:generate
Run database migrations (optional)				php artisan migrate
Install Node dependencies (optional, for frontend assets)	npm install followed by npm run dev or npm run build
Serve the application						php artisan serve
