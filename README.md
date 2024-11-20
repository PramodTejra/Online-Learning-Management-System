# Online Learning Management System

## Overview

This project is a Learning Management System (LMS) built with HTML, CSS for the frontend,  php for the backend, and MySQL as the database. It provides a comprehensive platform for managing online courses, user profiles, feedback, progress tracking, and more.

## Features

- **User Management:**
  - User registration and login functionality.
  - User profiles with the ability to update information.

- **Course Management:**
  - Admin can add, edit, and manage courses.
  - Course details include name, instructor, description, etc.
  
- **Feedback:**
  - Users can provide feedback on courses for the teacher.
  - Teachers can view the feedback provided by users..

- **Progress Tracking:**
  - Monitor user progress and completion status.
  - Visual representation of progress for users.

## Technologies Used

- **Frontend:**
  - HTML
  - Styled with CSS

- **Backend:**
  - php
  - RESTful API architecture

- **Database:**
  - MySQL
  - Seven tables: approve_user, course, feedback, std_result, teacher, user, user_std

## Setup

## **Prerequisites**
- Download and install [XAMPP](https://www.apachefriends.org/index.html).

---

## **Setup Instructions**

### 1. **Install XAMPP**
- Download XAMPP from the [official website](https://www.apachefriends.org/index.html).
- Follow the installation wizard to complete the setup.

---

### 2. **Start XAMPP Services**
- Open the XAMPP Control Panel.
- Start the following services:
  - **Apache** (for running PHP).
  - **MySQL** (for managing the database).

---

### 3. **Place Project Files**
- Navigate to the XAMPP installation folder:
  - **Windows**: `C:\\xampp\\htdocs`
  - **Mac**: `/Applications/XAMPP/htdocs`
  - **Linux**: `/opt/lampp/htdocs`
- Create a new folder (e.g., `my_project`) inside `htdocs`.
- Copy your project files into this folder.

---

### 4. **Set Up the Database**
- Open your browser and navigate to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
- Create a new database:
  - Click on **Databases**.
  - Enter a database name and click **Create**.
- Import your database (if provided):
  - Go to the **Import** tab.
  - Choose the SQL file and click **Go**.

---

### 5. **Configure the Project**
- Edit the project’s database configuration file (commonly `config.php` or `.env`):
  - Set the database host to `localhost`.
  - Use `root` as the username.
  - Leave the password field empty (default for XAMPP).
  - Set the database name to the one you created.

Example (`config.php`):  
```php
$host = 'localhost';
$db = 'your_database_name';
$user = 'root';
$pass = '';
```

---

### 6. **Run the Project**
- Open your browser and go to:
  - [http://localhost/my_project](http://localhost/my_project)
  - Replace `my_project` with your folder name.

Code Example:  
```php
// Open your browser and access the project URL
// Replace 'my_project' with your folder name

echo "Project is accessible at: http://localhost/my_project";
```

Your project should now be accessible!



## Usage

- Visit the application on http://localhost/my_project.

- As an admin, you can manage courses, manage students, and monitor user progress.

- Users can register, log in, view courses, give feedback, and receive results.

## Contributing

Feel free to contribute to the project by opening issues or submitting pull requests. Your feedback is highly appreciated!


## Site Images
**Home page:**
![image](https://github.com/user-attachments/assets/c0ea3c90-e3cc-4497-a56e-b688847cbaab)

**Login:**

![image](https://github.com/user-attachments/assets/83dc4768-8fde-4b80-bcf9-0a536d7f7241)
![image](https://github.com/user-attachments/assets/5306cb80-d27d-4ae4-8abb-6dffd126fb05)
![image](https://github.com/user-attachments/assets/e91d039d-a610-438a-a331-7c45c12e1703)


**Register:**
![image](https://github.com/user-attachments/assets/06b8c65f-de71-4901-909a-9d33c69e2197)
![image](https://github.com/user-attachments/assets/f14265a6-ce5b-4cad-a281-6cedf70dbe42)


**Courses for Students:**
![image](https://github.com/user-attachments/assets/6e6f42cc-bc4a-4f23-a77d-e172bfc0f457)


**Dashboard:**
![image](https://github.com/user-attachments/assets/e3673eef-daf5-4d07-8545-ff115aef57f0)
![image](https://github.com/user-attachments/assets/5f29fe57-2341-4dd4-be5e-ba0c69d39a78)
![image](https://github.com/user-attachments/assets/a640a131-33ce-4945-8b0a-59b2c93bb8c8)

**View Student, Teacher and Course:**
![image](https://github.com/user-attachments/assets/790262ca-c0cd-44aa-a663-790be9632136)
![image](https://github.com/user-attachments/assets/0e121359-f64d-4255-99bc-155bd54c96b2)
![image](https://github.com/user-attachments/assets/42c8ec0e-7fa8-4664-bea6-6f94b6efd211)


**Add, Update and Delete Course:**
![image](https://github.com/user-attachments/assets/96abe61e-1425-4d76-b37f-c9c2291e2bf5)
![image](https://github.com/user-attachments/assets/78cd3b5e-5540-48fa-9c92-da5cd8af537d)


**Give Feedback:**
![image](https://github.com/user-attachments/assets/22972024-1d69-4887-8ab3-fdec924e422c)

**Feedback Result:**
![image](https://github.com/user-attachments/assets/b7dadf1f-bf65-4996-85f8-1b818c8f7121)






