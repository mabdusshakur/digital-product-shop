# Digital Product Shop

This is a simple digital product selling website built with Laravel and Livewire, designed specifically for local businesses.

## Features

- Browse and search for digital products
- Create products with multiple subscriptions
- Add products to the cart
- Add products to the wishlist
- Checkout using a manual payment gateway
- Deliver products through email

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

5. Configure SMTP mail service in the `.env` file.

6. Run the database migrations:

   ```bash
   php artisan migrate
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```

8. Visit `http://localhost:8000` in your browser to access the website.

## Contributing

Contributors are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.