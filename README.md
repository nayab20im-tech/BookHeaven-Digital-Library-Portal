# BookHeaven Digital Library Portal

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📖 Project Overview

**BookHeaven** is a web-based user interface designed for a modern e-library system. It serves as a gateway for users to access digital resources, featuring a responsive landing page, a robust member registration module, and server-side data processing.

The project demonstrates the integration of frontend aesthetics with backend logic, utilizing **PHP** to handle form data and render dynamic user profiles upon registration.

## 📸 Application Walkthrough

### 1. Landing Page (Home)
The entry point features a hero section with a semi-transparent overlay to improve text readability, introducing the "E-Library" concept.
![Landing Page](./Screenshot%202024-05-21%20093042.png)

### 2. Member Registration
A structured HTML5 form designed to capture user demographics (Name, Email, Age, Secure Password, Contact) with validation.
![Registration Form](./Screenshot%202024-05-21%20093152.png)

### 3. User Profile Generation (Backend Processing)
Upon submission, the PHP backend processes the `POST` request and dynamically generates a profile card within a styled data table.
![Profile Result](./Screenshot%202024-05-21%20093525.png)

## ⚡ Key Features

* **Responsive UI/UX:** Built with a "Mobile-First" approach using CSS Flexbox, ensuring the layout adapts seamlessly to different screen sizes.
* **Server-Side Processing:** Utilizes PHP to capture requests and sanitize input data.
* **Data Visualization:** Dynamically renders user input into a structured HTML table format.
* **Modern Typography:** Implements the Google Font **"Lato"** for a clean, professional aesthetic.
* **Navigation Architecture:** Includes a consistent, responsive navigation bar across all views.

## 📂 Project Structure

```text
BookHeaven-Portal/
├── index.html       # Landing page (Screenshot 1)
├── register.html    # User registration form (Screenshot 2)
├── profile.php      # Data processing and display logic (Screenshot 3)
├── style.css        # Global stylesheet for layout and theming
└── README.md        # Project documentation
