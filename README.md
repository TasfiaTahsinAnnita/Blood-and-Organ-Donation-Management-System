# Blood and Organ Donation Management System
## Table of Contents
1. Project Overview
2. Features
3. Technology Stack
4. Installation Instructions
5. Database Setup
6. Usage
7. File Structure

## Project Overview
The Blood and Organ Donation Management System is a web-based application designed to manage blood and organ donations efficiently. This system allows users to donate, search for, and request blood or organs, while administrators can manage donors, recipients, and inventories.

## Features
- Donor Registration: Users can register as blood or organ donors.
- Search Functionality: Search for donors based on blood type or organ availability.
- Donation Requests: Users can request blood or organs.
- Admin Dashboard: Admins can manage donor information, monitor available blood and organs, and approve requests.
- Responsive Design: The system is accessible across various devices.
- Technology Stack
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
- Server: Apache (XAMPP or LAMP stack)

## Installation Instructions
1. Clone the repository:

  ``bash
git clone https://github.com/your-username/Blood-and-Organ-Donation-Management-System.git
``

2. Move the files to your web server's root directory (e.g., htdocs in XAMPP).
3. Start Apache and MySQL using XAMPP or LAMP.
4. Navigate to  ``bash
   http://localhost/
   ``
   to access the system.
   
## Database Setup
1. Open phpMyAdmin and create a new database (e.g., blood_organ_donation).
2. Import the SQL file located in the sql folder:
   - Go to Import and select the blood_organ_donation.sql file.
3. Update the database connection in conn.php:

   ``bash
   $conn = mysqli_connect('localhost', 'root', '', 'blood_organ_donation');
   ``
## Usage
- Homepage: Access the main features like donating blood, searching for donors, and learning about the benefits of donation.
- Admin Panel: Manage the system from the admin dashboard, available after logging in as an administrator.
## File Structure
``bash 
Blood-and-Organ-Donation-Management-System/
│
├── admin/                   # Admin dashboard files
├── image/                   # Images used in the website
├── sql/                     # Database SQL file
├── about_us.php             # About Us page
├── contact_us.php           # Contact Us page
├── donate_blood.php         # Blood donation form
├── donate_organ.php         # Organ donation form
├── need_blood.php           # Blood request form
├── search_blood_group.php   # Search donors by blood group
├── home.php                 # Homepage
└── conn.php                 # Database connection
``
