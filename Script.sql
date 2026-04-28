
DROP DATABASE IF EXISTS blog_solicode;



CREATE Table articles(
    id INT AUTO_INCREMENT PRIMARY KEY, 
    title varchar(255) ,
    content text ,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    image varchar(255)
);


CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    name_user VARCHAR(100) NOT NULL,
    email_user VARCHAR(150) NOT NULL UNIQUE,
    password_user VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);