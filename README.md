# Task Management System

This is a simple Task Management System built with Laravel. It allows users to create tasks , with validation rules.

## Features

- **Task Management**: users can create tasks with details and manage it.
- **User Management**: user can register, lohin and logout.

## Technologies Used

- **Laravel**: A PHP framework for building web applications.
- **MySQL**: Database management system used for storing data.

## Requirements

- PHP 8.1 or higher
- Composer
- Laravel 9 or higher
- MySQL or a compatible database

## Installation

Follow these steps to get the project up and running on your local machine:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/noorhaan-almohammed/simple-task-managment.git
   cd simple-task-management
   ```
2. **Install dependencies: Install PHP and Composer dependencies:**
    ```bash
    composer install
    composer update
    ```
3. **Set up the environment file: Copy the .env.example file to .env and update the database credentials.**
    ```bash
    cp .env.example .env
    ```
    set DB_DATABASE= database_name example: task_managment_database in .env file 
    
4. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```
5. **Run migrations: Run the migrations to set up the database schema:**
    ```bash
    php artisan migrate
    ```
6. **Seed the database (optional): You can seed the database with dummy data (users, tasks, etc.) by running:**
    ```bash
    php artisan db:seed
    ```
7. **Start the local development server:**
    ```bash
    php artisan serve
    ```

Your application should now be available at http://localhost:8000.

## Collection Json using Postman Api key:
https://e-commerce-4368.postman.co/workspace/e-commerce-Workspace~ddd1fd91-2488-4811-8c5a-7ee89208843c/collection/12600872-6cd37a33-181e-432a-b2d5-b7cbcce9d572?action=share&source=collection_link&creator=12600872
 
## Contributing

   If you'd like to contribute to this project, please follow these steps:

    1. Fork the repository.
    2. Create a new branch (git checkout -b feature/your-feature).
    3. Make your changes and commit them (git commit -am 'Add new feature').
    4. Push to your fork (git push origin feature/your-feature).
    5. Open a pull request.
