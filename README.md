# Admin Dashboard
## Overview
This is an admin dashboard designed for property management, allowing users to create and manage property types, amenities, property states, roles, and permissions. The application is built using Laravel and utilizes the Spatie Roles and Permissions package for handling user roles and permissions.
## Features
### Property Management:
*    Create, edit, and delete property types.
*    Manage amenities associated with properties.
*    Define various property states.
### User and Role Management:

*   Create new administrators.
*   Assign roles to administrators.
*   Assign permissions to roles.

### Access Control:

*   Limit access to specific features based on assigned permissions.
*   Implement role-based access control for enhanced security.

## Installation

#### Clone the repository:
git clone https://github.com/Michael-Njoroge/laravel_real_estate.git

#### Install dependencies:
cd laravel_real_estate
composer install

#### Configure the environment:
Copy the .env.example file to .env and configure your database settings.
cp .env.example .env

#### Generate the application key:
php artisan key:generate

#### Set up the database:
Import the 'real_estate_app.sql' database

#### Start the development server:
php artisan serve
Access the dashboard at http://localhost:8000

#### Acess credentials
admin username: mike
admin password: password@123
 