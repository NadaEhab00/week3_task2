# Week 3 - Task 2: PHP Form + MySQL Toggle System

This project was developed as part of **Smart Methods Internship - Week 3, Task 2**.

## 🔧 Task Description:

- Create a simple PHP-based web form with `Name` and `Age`.
- Submitted data is stored in a **MySQL** database.
- Display all records in a table.
- Add a **Toggle button** to change the `Status` (0 or 1) of each record.
- Reflect the updated status **immediately** without refreshing the page (using `JavaScript` and `Fetch API`).

---

## 📂 Files Overview:

| File        | Description |
|-------------|-------------|
| `index.php` | Main page with the form, data display, and toggle feature. |
| `db.php`    | MySQL connection configuration. |
| `toggle.php`| Updates the status of a user record in the database. |
| `style.css` | Basic CSS styling for a modern clean look. |
| `README.md` | Project documentation. |

---

## 🛠️ Technologies Used:

- HTML
- CSS
- PHP
- JavaScript (Fetch API)
- MySQL
- XAMPP (for local server)

---

## 💡 How It Works:

1. User fills in the **Name** and **Age** then clicks **Submit**.
2. The data is inserted into the MySQL database.
3. All records are shown in a table with a "Toggle" button.
4. Clicking the button sends a request to `toggle.php`, which updates the status from `0` to `1` or vice versa.
5. The status is updated **live** on the page without reloading.

---

## ⚙️ Setup Instructions (Local):

1. Make sure XAMPP is running (start Apache and MySQL).
2. Import this SQL into phpMyAdmin:

```sql
CREATE DATABASE smart_methods;
USE smart_methods;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    status TINYINT(1) DEFAULT 0
);
