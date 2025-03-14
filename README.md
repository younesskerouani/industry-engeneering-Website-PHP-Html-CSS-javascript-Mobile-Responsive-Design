# Industry & Engineering Website

## Project Overview

Industry & Engineering is a website for an industrial consulting company specializing in construction, automotive, energy, and chemical sectors. The site serves as both a company portfolio and includes industrial performance calculation tools.

## Live Demo

Experience the ENSAKH Industry website in action:
[View Live Demo](http://industryhub.infy.uk/public_html/index-2.html)

## Features

- **Multi-sector Expertise**: Dedicated sections for construction, automotive, energy, and chemical industries
- **Industrial Performance Calculators**: Tools for measuring key metrics:
  - **Performance**: Measures slow cycles and minor stops
  - **Quality**: Accounts for defects and parts that need rework
  - **Availability**: Considers planned and unplanned production stops
- **Contact Form**: For client inquiries
- **Responsive Design**: Compatible with all devices
- **Interactive Map**: Google Maps integration

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **APIs**: Google Maps

## Project Structure

The project follows a simple, straightforward structure:

```
ensakh-industry/
├── .git/                # Git repository information
├── .htaccess            # Apache server configuration
├── css/                 # CSS stylesheets
├── fonts/               # Font files
├── img/                 # Image assets
├── js/                  # JavaScript files
├── config.php           # Database configuration
├── contact.php          # Contact page functionality
├── DisponibiliteShow.php # Availability calculator display
├── index-2.php          # Secondary homepage
├── Performance.php      # Performance calculator
├── PerformanceShow.php  # Performance results display
├── project-2.php        # Projects showcase
├── QualiteShow.php      # Quality results display
├── services.php         # Services page
├── style.css            # Additional styles
├── TRSCalcule.php       # Main calculator functionality
├── TRSShow.php          # Results display
└── README.md            # Project documentation
```

## Setup Guide

1. **Clone the repository**
   ```
   git clone https://github.com/younesskerouani/industry-engeneering-Website-PHP-Html-CSS-javascript-Mobile-Responsive-Design.git
   ```

2. **Database Configuration**
   - Create a MySQL database
   - Update the database credentials in `config.php`:
   ```php
   <?php
   define('DB_SERVER', 'your_server');
   define('DB_USERNAME', 'your_username');
   define('DB_PASSWORD', 'your_password');
   define('DB_NAME', 'your_database');
   $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
   // Check connection
   if ($con === false) {
       die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   ```

3. **Web Server Requirements**
   - PHP 7.0 or higher
   - Apache with mod_rewrite enabled
   - MySQL or MariaDB

4. **Deploy to Server**
   - Upload all files to your web hosting
   - Ensure the server meets the requirements
   - Set proper file permissions

## Screenshots

### Homepage
---------------
<img width="948" alt="1" src="https://github.com/user-attachments/assets/63de96c3-b5a0-421f-8f7d-1e09779420e7" />
<img width="952" alt="2" src="https://github.com/user-attachments/assets/5abca565-7d08-4858-88ee-d9b87e589e44" />
<img width="947" alt="3" src="https://github.com/user-attachments/assets/71d13112-4ef4-4d13-b371-4b5395a95708" />
<img width="942" alt="4" src="https://github.com/user-attachments/assets/5e49d320-c565-4973-97d2-dcffa9680c4a" />
<img width="947" alt="5" src="https://github.com/user-attachments/assets/ed5fce7c-42d6-46e1-950e-f483e74237f4" />
<br/>


---------------
### Services Page
---------------
<img width="946" alt="service1" src="https://github.com/user-attachments/assets/7637ffd8-068f-4ded-9a87-b9272b816445" />
<img width="947" alt="service2" src="https://github.com/user-attachments/assets/d9da4f93-b12b-4533-b926-6af220c99ba8" />
<img width="947" alt="service3" src="https://github.com/user-attachments/assets/a26c484c-09ef-4d78-8d51-80a4d350a926" />
<img width="947" alt="service4" src="https://github.com/user-attachments/assets/e0f6363c-efcf-41e6-a3bc-b8a3d3e69fbe" />
<img width="942" alt="service5" src="https://github.com/user-attachments/assets/d061105e-9f3b-4f92-97a4-00cace3a89bc" />
<img width="919" alt="service6" src="https://github.com/user-attachments/assets/7a99e834-b379-4749-9cad-8d4cce8ea88d" />

---------------
### Projects
---------------
<img width="945" alt="project2" src="https://github.com/user-attachments/assets/8789ff06-b084-4511-ac7e-ebbbd8b7cb28" />
<img width="946" alt="project1" src="https://github.com/user-attachments/assets/79a3ec08-7a67-4bcf-95f4-4b7232b12b70" />



---------------
### Contact Page
---------------
<img width="946" alt="contact1" src="https://github.com/user-attachments/assets/aad88f0e-1823-4321-aca6-1ee85d805a03" />
<img width="945" alt="contact2" src="https://github.com/user-attachments/assets/5ad41b2c-f265-465b-9826-5ab08ebcd485" />


## Industrial Performance Metrics

The website includes calculators for three key industrial performance indicators:

1. **Performance**: Takes into account slow cycles and small stops. A performance score of 100% means that when the process is running, it's running as fast as possible.

2. **Quality**: Takes into account defects (including parts that must be reworked). A quality score of 100% means there are no defects (only good parts are produced).

3. **Availability**: Takes into account planned and unplanned stops. An availability score of 100% means the process is always running during planned production time.

## Development Process

This website was developed with a focus on simplicity and usability, making it easy for industrial clients to access information and use the performance calculators. The development process included:

1. **Design Phase**: Creating a professional layout that reflects the industrial nature of the business
2. **Frontend Development**: Building responsive templates with custom CSS
3. **Backend Development**: Implementing PHP functionality for forms and calculators
4. **Testing**: Cross-browser compatibility and mobile responsiveness testing

## Contact

For any inquiries about this project, please reach out:
- Email: kerouaniyouness01@gmail.com
