# Get My Ride

**Get My Ride** is a user-friendly web application designed to help users seamlessly book and manage rental car reservations online.

---

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)

---

## Installation

Follow these steps to set up **Get My Ride** on your local or production server:

1. **Clone the Repository**
   - Clone the repository to your web server's root directory:
     ```bash
     git clone <repository-url>
     ```
   - Alternatively, download the repository as a ZIP file and extract it to your server.

2. **Set Up the Database**
   - Create a PostgreSQL database using the schemas and details provided in:
     - `diagrama_ER.png`
     - `tablas_diccionario.xlsx`
   - Ensure the database structure matches the provided schema.

3. **Update Configuration**
   - Open the following PHP files and update the database connection settings with your credentials:
     - `reserva.php`
     - `consulta.php`
     - `carro.php`
     - `formulario.php`
     - `confirmacion.php`
     - `detalles.php`

4. **Set Permissions**
   - Ensure the web server has read and write access to the project folder and database.

---

## Usage

1. **Access the Application**
   - Open your web browser and navigate to the URL where **Get My Ride** is hosted.

2. **Home Page**
   - On the home page (`inicio.php`), you can:
     - Make a new reservation.
     - Check existing reservations.

3. **Follow On-Screen Instructions**
   - Complete the desired actions by following the guided steps provided on each page.

---

## License

This project is licensed under [MIT License](LICENSE) (if applicable).

---

## Contributing

Contributions are welcome! Please fork the repository, make your changes, and submit a pull request.

---

## Support

If you encounter any issues or have questions, please contact us or open an issue in the repository.
