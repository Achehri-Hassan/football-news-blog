# football-news-blog

# ⚽ Football News Blog

A simple PHP & MySQL blog application for publishing football news articles.

---

## 🚀 Features

* 📰 Create, Read, Update, Delete (CRUD) Articles
* 👤 User Authentication (Register / Login / Logout)
* 🧑‍💻 Each user can create their own articles
* 🖼️ Upload article images
* 📅 Display formatted dates

---

## 🛠️ Technologies Used

* PHP (OOP + PDO)
* MySQL
* HTML5 / CSS3
* JavaScript (basic)

---

## 📂 Project Structure

```
/project
│── index.php
│── create.php
│── detail.php
│── login.php
│── register.php
│── logout.php
│── article.php
│── connection.php
│── /css
│── /Article_imag
```

---

## ⚙️ Installation

1. Clone the repository:

```
git clone https://github.com/your-username/football-news-blog.git
```

2. Move the project to your server (XAMPP / WAMP)

3. Create a database:

```
CREATE DATABASE blog;
```

4. Create tables:

```sql
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_user VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    image VARCHAR(255),
    author VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

5. Update database connection in:

```
connection.php
```

---

## 🧪 Usage

* Register a new account
* Login using your account
* Add new articles from `create.php`
* View all articles in `index.php`
* Click on an article to see details


---

## 👨‍💻 Author

* Hassan Achehrri

---

## 📜 License

This project is open-source and free to use.
