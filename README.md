Horses Website
General Description
This project is a simple PHP-based website that showcases horses for sale. Visitors can browse through a list of horses, view individual horse details, and contact the seller. Additionally, users can log in to access certain features (like a personalized greeting or potential future admin functionalities).

Main Functionalities

The homepage displays a list of horses (with names, breeds, and prices).
Each horse has a "View Details" link that takes the user to a dedicated page.
Horse Details

When viewing a specific horse, users see more details including a description.
A "Contact Seller" link takes them to a contact form for that particular horse.
Contact Form

Users can fill out a form to inquire about a specific horse.
Basic validation ensures the email address is valid.
After submission, a confirmation message is displayed.
User Authentication

Users can log in with a username and password.
Session-based: once logged in, the username is stored in the session.
A simple logout mechanism clears the session and redirects back to the homepage.
Session Handling

The site uses PHP sessions to keep track of logged-in state.
Conditional greetings display whether a user is logged in or not.
File Structure

Horses-website/
├── contact.php
├── db.php
├── horses.php
├── index.php
├── login.php
├── logout.php
├── style.css
└── (Optional) README.md

contact.php: Renders the contact form for a specific horse, processes the submitted form, and displays a confirmation message.
db.php: Contains an array of horses used throughout the site (serves as a simple mock database).
horses.php: Displays detailed information for a selected horse.
index.php: The homepage that lists all horses and handles session status display (login/logout).
login.php: A simple login form allowing users to authenticate; credentials are checked against a predefined array.
logout.php: Destroys the user’s session and redirects to the homepage.
style.css: Basic CSS for styling the pages.
