Contact Management PDO Project
This project is a simple contact management system that allows users to store and manage their contacts. It uses PHP's PDO extension to connect to a MySQL database and perform CRUD (Create, Read, Update, Delete) operations on the contacts.

Features
Add a new contact with name, email, phone number, and optional notes
View a list of all contacts with basic information
View a detailed view of a contact with all their information and notes
Edit an existing contact's information and notes
Delete a contact from the database
Technologies Used
HTML
CSS
BOOTSTRAP
PHP
MySQL
PDO
Installation
To use this project, you need to have a web server with PHP and MySQL installed. You can follow these steps to install the project on your system:

Create a new MySQL database and import the vian.sql file located in the root folder.

Edit each file's database connection code to match your database credentials.

Upload the entire project folder to your web server.

Visit the project URL in your web browser to access the contact management system.

Usage
To use the contact management system, follow these steps:

Visit the project URL in your web browser.http://localhost/Viany/ and login or create account if your don't have one then login.
After that you will be redirected to the homepage which have the navigation for different functions.
Click on the "Add Contact" button to take you to create.php file where you create a new contact.

Fill in the contact information and notes (if any), and click the "Submit" button.

You will be redirected to the contact list page (view.php), where you can view a list of all contacts.
To edit or delete a contact click on the update contacts page on the navbar which takes you to update.php file .

Click on the "Edit" button to update the contact's information and notes.

Click on the "Delete" button to remove the contact from the database.

The store.php gives addition support to the create.php file.
The index.php file is the login page so every time you click on the link provided, you will be prompted to login.
the login.php provides script for index.php 's backend.
General CSS file is located in the CSS folder and the image on the home pahe is in img folder.

NOTE: I ADVISE YOU TO INSTALL XAMPP SERVER TO SUPPORT BOTH THE WEBSITE AND THE DATABASE, AND PUT THE ROOT FOLDER OF THIS PROJECT IN THE htdocs	FOLDER LOCATED IN THE XAMPP FOLDER.