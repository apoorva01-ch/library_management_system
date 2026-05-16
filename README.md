# Library Management System

A full-stack web-based Library Management System developed during my internship.
Built with PHP and MySQL, it includes both a student-facing interface for browsing 
available books and a complete admin dashboard for managing the entire library.

---

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [How to Run Locally](#how-to-run-locally)
- [Admin Panel](#admin-panel)
- [Future Improvements](#future-improvements)
- [Author](#author)


## Project Overview

This Library Management System was built during my internship to simulate a real-world 
library management solution. The system has two sides — a student portal where students 
can register, log in, and browse the available book collection, and an admin panel where 
the librarian can manage all books and records digitally.

The project demonstrates practical skills in backend development using PHP and MySQL, 
with a responsive frontend built using HTML, CSS, JavaScript and Bootstrap.


## Features

### Student Side

- Student registration and login
- Browse all available books in the library
- View book details
- Clean and responsive interface

### Admin Side

- Secure admin login and authentication
- Dashboard with overall library statistics
- Add new books to the library
- Edit existing book details
- Delete books from the system
- View complete book records and inventory
- Full CRUD operations with MySQL database


## Tech Stack

| Layer      | Technology                        |
|------------|-----------------------------------|
| Frontend   | HTML, CSS, JavaScript, Bootstrap  |
| Backend    | PHP                               |
| Database   | MySQL                             |
| Server     | XAMPP                             |

---

## Project Structure
library_management_system/
│
├── frontend/              # User interface pages and styling
│   ├── index.php          # Homepage
│   ├── login.php          # Student login page
│   ├── register.php       # Student registration page
│   ├── books.php          # Available books listing
│   └── book_detail.php    # Single book detail page
│
├── dashboard/             # Admin panel logic and views
│   ├── config.php         # Database connection
│   ├── dashboard.php      # Admin dashboard
│   ├── add.php            # Add book logic
│   ├── edit.php           # Edit book logic
│   ├── delete.php         # Delete book logic
│   └── view.php           # View all records
│
└── README.md


## How to Run Locally

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) installed on your machine
- A web browser

### Steps

1. Clone or download this repository
   git clone https://github.com/apoorva01-ch/library_management_system.git
2. Copy the project folder to your XAMPP htdocs directory
   C:\xampp\htdocs\library_management_system
3. Start Apache and MySQL from the XAMPP Control Panel
4. Open phpMyAdmin in your browser
   http://localhost/phpmyadmin
5. Create a new database and import the provided `.sql` file
6. Open the project in your browser
   http://localhost/library_management_system/


## User Roles

| Role    | Access                                              |
|---------|-----------------------------------------------------|
| Student | Register, login, browse and view available books    |
| Admin   | Full control — add, edit, delete, view all records  |


## Admin Panel

| Section     | Functionality                                      |
|-------------|----------------------------------------------------|
| Dashboard   | Overview of total books and library statistics     |
| Add Book    | Add new books with all relevant details            |
| Edit Book   | Update existing book information                   |
| Delete Book | Remove books from the system                       |
| View Books  | Browse and review the complete book inventory      |


## Future Improvements

- Book issuing and return management
- Fine calculation for late returns
- Search and filter functionality for students
- Email notifications for due dates
- Enhanced UI and data validation
- Live server deployment


## Author

Apoorva
BCA Student | Full Stack Developer

GitHub: [apoorva01-ch](https://github.com/apoorva01-ch)
