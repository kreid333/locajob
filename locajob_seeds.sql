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

INSERT INTO jobs (category_id, company, job_title, description, salary, location, contact_user, contact_email)
VALUES (1, "JP Morgan", "Senior Investor", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", 
500000, "Manhattan, New York", "John Overton", "johnoover@gmail.com");

INSERT INTO jobs (category_id, company, job_title, description, salary, location, contact_user, contact_email)
VALUES (2, "Tech Guy", "Entry Level Developer", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", 
40000, "Atlanta, Georgia", "John Doe", "johndoe@gmail.com");