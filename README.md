# Admin Dashboard for Property Management
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

Clone the repository:
 
git clone https://github.com/your-username/property-management-dashboard.git

Install dependencies:
 
cd property-management-dashboard
composer install

Configure the environment:

    Copy the .env.example file to .env and configure your database settings.

bash

cp .env.example .env

    Generate the application key:

bash

php artisan key:generate

Run migrations and seed the database:

bash

php artisan migrate --seed

Start the development server:

bash

php artisan serve

Access the dashboard at http://localhost:8000.Installation

    Clone the repository:

    bash

git clone https://github.com/your-username/property-management-dashboard.git

Install dependencies:

bash

cd property-management-dashboard
composer install
npm install

Configure the environment:

    Copy the .env.example file to .env and configure your database settings.

bash

cp .env.example .env

    Generate the application key:

bash

php artisan key:generate

Run migrations and seed the database:

bash

php artisan migrate --seed

Start the development server:

bash

php artisan serve

Access the dashboard at http://localhost:8000.