CREATE TABLE game_records (
    game_id INT AUTO_INCREMENT PRIMARY KEY,
    game VARCHAR (50),
    price VARCHAR (50),
    date_release VARCHAR (50),
    age_requirement VARCHAR (50),
    genre VARCHAR (50),
    size VARCHAR (50),
    developer VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);