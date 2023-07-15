# Service Portal App

## Description
The Service Portal App is a web application that allows citizens to request services and view their service requests. It provides a user-friendly interface for citizens to submit service requests and track their progress. The app also includes features for sector admins and cell admins to manage and schedule service requests.


## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install the project dependencies.
4. Create a copy of the `.env.example` file and rename it to `.env`.
5. Generate an application key by running `php artisan key:generate`.
6. Set up your database connection in the `.env` file.
7. Run database migrations using `php artisan migrate`.
8. Optionally, run `php artisan db:seed` to seed the database with sample data.

## Usage
1. Start the development server by running `php artisan serve`.
2. Open your web browser and visit `http://localhost:8000` to access the app.
3. Register a new account or log in as a citizen.
4. Explore the available services and request a service by clicking the "Request Service" button.
5. View your service requests and their status in the "My Requests" section.
6. Sector admins and cell admins can log in to manage and schedule service requests.

## Technologies Used
- Laravel: Backend framework for PHP
- MySQL: Database management system
- JavaScript: Frontend scripting language
- HTML/CSS: Markup and styling

## Contributing
Contributions to the Service Portal App are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License
This project is licensed under the [MIT License](LICENSE).