CREATE TABLE categories (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE jobs (
    id INT NOT NULL AUTO_INCREMENT,
    category_id INT NOT NULL,
    company VARCHAR(255) NOT NULL,
    job_title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    salary VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    contact_user VARCHAR(255) NOT NULL,
    contact_email VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO categories (name)
VALUES ("Business"), ("Technology"), ("Retail"), ("Construction");