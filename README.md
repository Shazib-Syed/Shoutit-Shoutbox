# Shout It - PHP Shoutbox

**Shout It** Is a simple shoutbox website built using PHP and MySQL. This project allows users to post short public messages that are displayed on the webpage in real-time.

## Features

-   Post short public messages .
-   Display all messages in real-time.
-   Store shouts in a MySQL database.
-   User-friendly and Responsive design.

## Technologies Used

-   **PHP**
-   **MySQL**
-   **HTML/CSS**

## Installation and Setup

### You need

-   PHP (7.0+ recommended)
-   MySQL
-   A web server (XAMPP)

### Steps

1. **Clone the Repository**

    ```bash
    git clone https://github.com/Shazib-Syed/Shoutit-Shoutbox.git

    // Got to your repository folder
    cd name
    ```

2. **Create the Database**

    Open your phpMyadmin and create a new database called `shoutit`:

    ```sql
    CREATE DATABASE shoutit;
    ```

    Then run this SQL query to create the `shouts` table:

    ```sql
    USE shoutbox;

    CREATE TABLE shouts (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        user VARCHAR(50) NOT NULL,
        message TEXT NOT NULL,
        time TIME NOT NULL
    );
    ```

3. **Configure the Database Connection**

    Open the `database.php` to connect your sql database:

    ```php
        <?php
    // connect to sql database
     $con = mysqli_connect("localhost","root",
      "password","shoutit");

    // by root, password add you MySQL username and password.

        // test connection then
        if(mysqli_connect_errno ()){
        echo 'Failed to connect: ' .mysqli_connect_error();
        }

        ?>
    ```


4. **Run the Application**

    After setting up the database, open the project in your web browser by uising  your local server (e.g., `http://localhost/shout-it/`).

## Usage

1. Fill in your name and message in the form inputs.
2. Click the "Shout it out" button to submit your message.
3. The shout will appear in the shoutbox with the time when it was posted.

## Contributing

Contributions to this project are welcome in the form of suggestions or issues. If you have ideas for improvement or encounter any issues, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE). For details, see the [LICENSE](LICENSE) file.

---
![screenshots](https://github.com/user-attachments/assets/bb6e594c-eaef-422a-a219-992d161ee981)

```
