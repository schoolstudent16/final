Create Table account(
    user_id INTEGER,
    user_name VARCHAR(80) NOT NULL,
    mail_address VARCHAR(80) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY (user_id)
);
Create Table category(
    category_id INTEGER,
    category_name VARCHAR(80) NOT NULL,
    PRIMARY KEY (category_id)
);
Create Table words(
    word_id INTEGER,
    user_id INTEGER,
    category_id INTEGER NOT NULL,
    register_date DATE NOT NULL,
    word VARCHAR(100) NOT NULL,
    word_content VARCHAR(300) NOT NULL,
    PRIMARY KEY (word_id,user_id),
    FOREIGN KEY (user_id) REFERENCES account(user_id),
    FOREIGN KEY words(category_id) REFERENCES category(category_id)
);
INSERT into words values(1,1,1,CURRENT_DATE(),"test_word","test_content");
