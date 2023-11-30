# Digital Product Shop

This is a simple digital product selling website built with Laravel and Livewire.

## Features

- Browse and search for digital products
- Add products to the cart
- Checkout using a manual payment gateway

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/mabdusshakur/digital-product-shop.git
   ```

2. Install the dependencies:

   ```bash
   composer install
   ```

3. Set up the environment variables:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure the database connection in the `.env` file.

5. Run the database migrations:

   ```bash
   php artisan migrate
   ```

6. Start the development server:

   ```bash
   php artisan serve
   ```

7. Visit `http://localhost:8000` in your browser to access the website.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

