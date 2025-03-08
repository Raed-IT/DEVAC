# Laravel Back-End Developer Test

## Overview
This project is a Laravel 10 backend application that follows best practices, including Dependency Injection and the Repository Pattern. It uses MySQL as the database and is designed to handle job offers and eligibility criteria.

## Features
- Implements Dependency Injection and the Repository Pattern.
- Uses MySQL as the database.
- Provides clean, maintainable, and scalable code.
- Includes API endpoints for managing job offers.

## Repository
GitHub Repository: [DEVAC](https://github.com/Raed-IT/DEVAC)

## Installation
### Prerequisites
Ensure you have the following installed:
- PHP (>= 8.1)
- Composer
- MySQL
- Laravel 10

### Setup
1. Clone the repository:
   ```sh
   git clone https://github.com/Raed-IT/DEVAC.git
   ```
2. Navigate to the project directory:
   ```sh
   cd DEVAC
   ```
3. Install dependencies:
   ```sh
   composer install
   ```
4. Copy the environment file and configure database credentials:
   ```sh
   cp .env.example .env
   ```
5. Generate the application key:
   ```sh
   php artisan key:generate
   ```
6. Run migrations to set up the database:
   ```sh
   php artisan migrate
   ```
7. Serve the application:
   ```sh
   php artisan serve
   ```

## Database Schema
### Tables
#### `eligibility_criterion`
Stores predefined eligibility checks and metadata.

#### `job_offer`
Stores job offer details linked to career options.

## Project Structure
### Part 1: Database Migration & Models
- Creates migrations for `eligibility_criterion` and `job_offer` tables.
- Defines Eloquent models with relationships.

### Part 2: Repository Pattern & Dependency Injection
- Implements `JobOfferRepositoryInterface` and `JobOfferRepository`.
- Uses Dependency Injection in `JobOfferService`.
- Provides CRUD methods for job offers.

### Part 3: Controller & API Endpoints
- Implements `JobOfferController` with the following endpoints:
    - `GET /api/job-offers` → List all job offers.
    - `POST /api/job-offers` → Create a new job offer.
    - `GET /api/job-offers/{id}` → Retrieve a job offer by ID.
    - `PUT /api/job-offers/{id}` → Update a job offer.
    - `DELETE /api/job-offers/{id}` → Delete a job offer.

## API Documentation
For detailed API documentation, visit the Postman collection:
[Postman Documentation](https://documenter.getpostman.com/view/41639528/2sAYdoEnFA)

## Usage
After running the server, you can test API endpoints using tools like Postman or cURL.
