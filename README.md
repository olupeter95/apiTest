# Laravel API for Registration
This Laravel API receives registration parameters, processes the registration, and returns a JSON response with registration details.

## Prerequisites

- Laravel installed on your system.
- Basic understanding of APIs and HTTP requests.

## Setup

1. Clone this repository or create a new Laravel project.
2. Configure your `.env` file with database settings.
3. Create the necessary migration for the `registrations` table (if needed).
4. Run migrations to set up the database tables: php artisan migrate

## Usage

1. Open the routes/api.php file and define the API route.
2. Run the Laravel development server:
3. Make a POST request to the /register API endpoint using a tool like Postman or cURL with the following parameters in JSON format:

    phone_number
    mobile_network (one of: mtn, airtel, 9mobile, glo)
    message
    ref_code


