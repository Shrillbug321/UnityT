SELECT 'CREATE DATABASE book_shop'
WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'book_shop');

CREATE TABLE authors
(
    author_id  SERIAL
        CONSTRAINT author_pk PRIMARY KEY,
    first_name VARCHAR(20),
    last_name  VARCHAR(30)
);

CREATE TABLE books
(
    book_id      SERIAL
        CONSTRAINT book_pk PRIMARY KEY,
    title        VARCHAR(100),
    publish_year DATE,
    /* 13 digits and 4 hyphens */
    isbn         CHAR(17)
);

CREATE TABLE reviews
(
    review_id INT PRIMARY KEY NOT NULL,
    content   VARCHAR,
    mark      SMALLINT CHECK (mark BETWEEN 1 AND 10)
);

CREATE TABLE books_authors
(
    book_id   INT REFERENCES books (book_id),
    author_id INT REFERENCES authors (author_id),
    CONSTRAINT books_authors_pk PRIMARY KEY (book_id, author_id)
);

CREATE TABLE books_reviews
(
    book_id   INT REFERENCES books(book_id),
    review_id INT REFERENCES reviews(review_id),
CONSTRAINT books_reviews_pk PRIMARY KEY (book_id, review_id)
);

INSERT INTO books VALUES (1, 'Niebieski pociąg', '30-05-2022', '333-1-4444-8888-2');
INSERT INTO books VALUES (2, 'Czerwony maluch', '21-05-2022', '333-2-4444-8888-2');
INSERT INTO books VALUES (3, 'O filozofii przyrody siedząc na polnym kamieniu', '15-11-2024', '333-2-4444-8858-2');
INSERT INTO authors VALUES (1, 'Jan', 'Bach');
INSERT INTO authors VALUES (2, 'Stefan', 'Kowalski');
INSERT INTO reviews VALUES (1, 'Very good book', 10);
INSERT INTO reviews VALUES (2, 'Głupoty bez ładu i składu', 2);
INSERT INTO reviews VALUES (3, 'Filozofia - moja ulubiona', 9);

INSERT INTO books_authors VALUES (1, 1);
INSERT INTO books_authors VALUES (2, 1);
INSERT INTO books_authors VALUES (3, 2);
INSERT INTO books_reviews VALUES (1, 1);
INSERT INTO books_reviews VALUES (2, 2);
INSERT INTO books_reviews VALUES (3, 3);

/*2*/
SELECT first_name, last_name, count(*) as books FROM authors INNER JOIN books_authors ba on authors.author_id = ba.author_id INNER JOIN books b on b.book_id = ba.book_id GROUP BY first_name, last_name;

/*3*/
CREATE VIEW top_five_authors_by_marks AS
    SELECT first_name, last_name, avg(mark) as avg_mark FROM authors
    INNER JOIN books_authors ba on authors.author_id = ba.author_id
    INNER JOIN books b on b.book_id = ba.book_id
    INNER JOIN books_reviews br on b.book_id = br.book_id
    INNER JOIN reviews r on r.review_id = br.review_id
    GROUP BY first_name, last_name
    ORDER BY avg_mark DESC
    LIMIT 5;

SELECT * FROM top_five_authors_by_marks;