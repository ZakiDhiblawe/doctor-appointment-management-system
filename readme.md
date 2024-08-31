# Doctor Appointment Management System

## Overview

The Doctor Appointment Management System is a web-based application designed to facilitate the scheduling and management of medical appointments. This beginner-level project uses PHP and an Oracle database to handle patient registrations, doctor management, appointment scheduling, and appointment viewing.

## Features

- **Patient Registration**: Allows users to register new patients into the system.
- **Doctor Management**: Enables the addition of new doctors to the system.
- **Appointment Scheduling**: Facilitates the scheduling of appointments between patients and doctors.
- **View Appointments**: Provides a view of all scheduled appointments.

## Project Structure

The project directory contains the following files:

- `add_doctor.php`: Interface for adding new doctors.
- `db.txt`: Placeholder file (not used in the provided code).
- `database.php`: Contains the database connection logic.
- `footer.php`: Footer section of the pages (not used in the provided code).
- `header.php`: Header section of the pages (not used in the provided code).
- `index.php`: The home page of the application.
- `register_patient.php`: Interface for registering new patients.
- `schedule_appointment.php`: Interface for scheduling new appointments.
- `view_appointments.php`: Interface for viewing scheduled appointments.
- `styles.css`: Custom styles for the application.

## Getting Started

### Prerequisites

- PHP (Version 7 or above)
- Oracle Database
- Web Server (e.g., Apache or Nginx)

### Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/ZakiDhiblawe/doctor-appointment-management-system.git
   ```
    ```bash
   cd doctor-appointment-management-system
   ```

2. **Configure Database**

   Update the `database.php` file with your Oracle database connection details:

   ```php
   <?php
   // database.php
   try {
       $conn = new PDO('oci:dbname=//localhost:1521/xe', 'system', 'your_password');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       echo "Error: " . $e->getMessage();
   }
   ?>
   ```

3. **Deploy the Application**

   - Place the project files in your web server's root directory.
   - Access the application through your web browser at `http://localhost/doctor-appointment-management-system`.

## Usage

- **Home Page**: Navigate to `index.php` to view the home page.
- **Register Patient**: Go to `register_patient.php` to register a new patient.
- **Add Doctor**: Visit `add_doctor.php` to add a new doctor.
- **Schedule Appointment**: Access `schedule_appointment.php` to schedule appointments.
- **View Appointments**: Use `view_appointments.php` to view all scheduled appointments.

## Contributing

Feel free to fork the repository and submit pull requests with improvements or bug fixes. Contributions are welcome!



## Contact

For any inquiries or feedback, please reach out to [Zaki Dhiblaawe](mailto:zakidhiblaawe10@gmail.com).
