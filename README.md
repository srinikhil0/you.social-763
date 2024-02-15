'you.social' is a social media platform that I developed in 2020, drawing inspiration from Facebook. 
This web application utilizes a range of technologies, including PHP, MySQL, HTML, CSS, JavaScript, jQuery, and Ajax. 

PHP serves as the backbone of the project, handling backend operations, while MySQL is used for the database. 
jQuery and Ajax facilitate API calls, and HTML, CSS, and JavaScript are employed for the frontend development. 

Instructions for Running the Application on Docker
1. Clone the Repository: 
git clone https://github.com/srinikhil0/you.social-763 

2. Navigate to the Project Directory: 
"cd you.social-763" 

3. Build and Run the Docker Composition: 
"docker-compose up --build"
This command builds the images (if necessary) and starts the containers defined in your docker-compose.yml

5. Accessing the Application: 
Access the phpmyadmin from “https://localhost:8001” with the following credentials (hardcoded in the docker file): “php_docker”, “password”

Finally, Access the web application from “https://localhost” or “https://localhost:80”
