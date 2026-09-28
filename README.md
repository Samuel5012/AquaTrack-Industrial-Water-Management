# 💧 AquaTrack – Industrial Water Management System

AquaTrack is a web-based industrial water management and monitoring system designed to help industries monitor water usage, identify water-related issues, and maintain operational records.

## 👨‍🎓 Student Information

**Student:** Samuel Chinokopota  
**Roll No:** 24CS257  
**Department:** B.E. Computer Science and Engineering  

---

## 🎯 Project Objective

The objective of AquaTrack is to provide a simple web-based platform for monitoring industrial water usage and recording water-related maintenance issues.

The project was developed in two stages:

### Stage 1 – Static Website
Developed using:

- HTML
- CSS
- JavaScript

### Stage 2 – Dynamic Website
Extended using:

- PHP
- MySQL
- XAMPP

The dynamic version stores and retrieves issue reports from a MySQL database.

---

## 🚀 Main Features

- Industrial water monitoring dashboard
- Water usage and water-saving indicators
- Industrial issue reporting
- MySQL database storage
- Dynamic issue report display
- PHP-based backend processing
- Responsive professional interface
- Stage 1 static prototype
- Stage 2 dynamic application

---

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| HTML | Web page structure |
| CSS | Interface design |
| JavaScript | Client-side interaction |
| PHP | Server-side processing |
| MySQL | Database management |
| XAMPP | Local development server |
| GitHub | Version control and project hosting |

---

## 🗄️ Database

The project uses a MySQL database named:

`aquatrack_db`

Main tables include:

- `issue_reports`
- `water_usage`

The database structure is provided in:

`database.sql`

---

## 💻 Stage 2 Setup Using XAMPP

1. Install XAMPP.
2. Start **Apache** and **MySQL**.
3. Copy the Stage 2 project folder into:

`C:\xampp\htdocs\AquaTrack_Stage2`

4. Open:

`http://localhost/phpmyadmin`

5. Create/select the database:

`aquatrack_db`

6. Import:

`database.sql`

7. Open the application:

`http://localhost/AquaTrack_Stage2/index.php`

---

## 📂 Project Files

### Stage 1

- `index.html`
- `style.css`
- `script.js`
- `AquaTrack_LWP_Review_01_Professional.pptx`

### Stage 2

- `index.php`
- `db.php`
- `reports.php`
- `database.sql`
- `style.css`
- `AquaTrack_LWP_Review_02_Professional.pptx`

---

## 📊 Stage 2 Architecture

```text
User
  ↓
Web Browser
  ↓
PHP Application
  ↓
MySQL Database
  ↓
Stored Water Issue Reports
  ↓
Dynamic Dashboard / Reports
