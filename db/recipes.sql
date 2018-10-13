CREATE TABLE users
(
      id SERIAL PRIMARY KEY
    , username VARCHAR(30) UNIQUE NOT NULL
    , password VARCHAR(50) NOT NULL
);

CREATE TABLE categories
(
      id SERIAL PRIMARY KEY
    , category VARCHAR(20) NOT NULL 
);

CREATE TABLE comments
(
     id SERIAL PRIMARY KEY
   , rating INT NOT NULL
   , comment TEXT NOT NULL
);

CREATE TABLE recipes
(
      id SERIAL PRIMARY KEY
    , date date NOT NULL
    , user_id INT NOT NULL REFERENCES users(id) --foreign key
    , categories_id INT NOT NULL REFERENCES categories(id)
    , recipe TEXT
    , comment_id REFERENCES comments(id)
);

-- TODO: Average all the ratings 

-- Possible Features:
-- Ingredients table, Shopping list?, meal plan (make shopping list from it)
-- Comments and ratings
