#### Project Dashboard - Management System

This project is a dashboard management system built using Laravel with Filament. It provides an interface for managing Products, Categories, Orders, Employees, Customers, Shippers, and Suppliers.

#### Technologies Used

- **Laravel**: PHP framework used for the backend.
- **Filament**: Admin panel package for Laravel that simplifies creating an intuitive and elegant dashboard interface.
- **MySQL**: Database management system.
- **Blade**: Laravel’s templating engine for rendering views.

#### Installation Guide
#### 1. Clone the repository

Clone the project from your version control system:

```bash
https://github.com/web-rupp/dashboard-management.git
cd dashboard-management
```

#### 2. Set up environment file
Copy .env.example to .env and configure your database settings:

```bash
cp .env.example .env
```

Edit .env to set up your database connection, and any other necessary environment variables.

#### 3. Install dependencies
Run the following command to install the required PHP and JavaScript dependencies:

```bash
composer install
npm install
```

#### 4. Run migrations
Run the database migrations to set up the necessary tables:

```bash
php artisan migrate
```

#### 5. Serve the application
Start the Laravel development server:

```bash
php artisan serve
```

Your application should now be running at http://localhost:8000.

#### Admin Dashboard (Filament)
Filament provides an easy-to-use admin panel interface. The dashboard allows the management of the following entities:

#### Product Management
- CRUD Operations: Add, update, and delete products.
- Fields: Name, Description, Price, Category, Stock Quantity, and Image.
- Relations: Products are related to categories.
- Search & Filters: Search products by name or category.

#### Category Management
- CRUD Operations: Add, update, and delete categories.
- Fields: Name, Description.
- Relation: Categories are related to products.

#### Order Management
- CRUD Operations: Add, update, and delete orders.
- Fields: Order ID, Customer, Shipper, Status, Product, Quantity, Total Price, Order Date.
- Relations: Orders are related to products, customers, and shippers.

#### Employee Management
- CRUD Operations: Add, update, and delete employees.
- Fields: Name, Job Title, Email, Phone Number, Address.
- Relations: Employees can be associated with orders.

#### Customer Management
- CRUD Operations: Add, update, and delete customers.
- Fields: Name, Email, Phone Number, Address.
- Relations: Customers are associated with orders.

#### Shipper Management
- CRUD Operations: Add, update, and delete shippers.
- Fields: Name, Contact Info, Address, Shipping Method.
- Relations: Shippers are related to orders.

#### Supplier Management
- CRUD Operations: Add, update, and delete suppliers.
- Fields: Name, Contact Info, Address, Product Supplied.
- Relations: Suppliers provide products to the system.

#### Database Schema
The following are the core tables used in the system:
- products: Stores product details (name, description, price, stock, etc.).
- categories: Stores product categories (name, description).
- orders: Stores order details (order_id, customer_id, shipper_id, total_price, status).
- employees: Stores employee information (name, email, job title).
- customers: Stores customer information (name, email, phone).
- shippers: Stores shipper information (name, contact details).
- suppliers: Stores supplier information (name, contact details).

#### User Roles & Permissions
Filament provides an easy way to manage user roles and permissions:
- Admin: Full access to all resources (CRUD operations on products, categories, orders, etc.).
- Manager: Limited access, can manage orders and products but cannot access system settings or employees.
- Employee: Read-only access to orders and customers.


