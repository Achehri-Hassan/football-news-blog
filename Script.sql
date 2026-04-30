
DROP DATABASE IF EXISTS blog_solicode;



CREATE Table articles(
    id INT AUTO_INCREMENT PRIMARY KEY, 
    title varchar(255) ,
    content text ,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    image varchar(255)
);


CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_user VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);