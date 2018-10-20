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

CREATE TABLE recipes
(
      id SERIAL PRIMARY KEY
    , date date NOT NULL
    , user_id INT NOT NULL REFERENCES users(id) --foreign key
    , categories_id INT NOT NULL REFERENCES categories(id)
    , recipe TEXT
);

CREATE TABLE comments
(
     id SERIAL PRIMARY KEY
   , rating INT NOT NULL
   , comment TEXT NOT NULL
   , recipes_id INT NOT NULL REFERENCES recipes(id)
);
-- TODO: Average all the ratings 

-- Possible Features:
-- Ingredients table, Shopping list?, meal plan (make shopping list from it)
-- Comments and ratings

ALTER TABLE recipes
ADD COLUMN pic VARCHAR(150);

ALTER TABLE recipes
ADD COLUMN name VARCHAR(30);

ALTER TABLE recipes
DROP COLUMN date;

INSERT INTO users(username, password)
Values ('admin', '0268');

INSERT INTO categories(category)
Values 
  ('Pasta')
, ('Fish')
, ('Beef')
, ('Chicken')
, ('Pork');

INSERT INTO recipes (name, user_id, categories_id, recipe)
Values 
(
  'Smoked Brisket'
, 1
, 3
, 'Materials: Brisket, Butcher Paper, 1:1 Salt&Pepper Mix
Trim excess fat off of brisket. Remove any dried flesh. 
Smoke at 225 for 16 hours, stopping 6 hours in to wrap in butcher''s paper.
Remove when at 198 internally, and when Brisket is tender.'
);

INSERT INTO recipes (name, user_id, categories_id, recipe)
Values 
(
  'Chicken Taquitos'
, 1
, 4
, 'Materias: Chicken, Cream Cheese, Cheddar Cheese, Salt,
Pepper, Tortillas
Cook chicken in slow cooker, with salt, pepper, and crem cheese, 
on high for 4-6 hours. Shred chicken, add cheddar cheese, and cook
for another 15 minutes. Scoop chicken into tortillas and roll up 
into taquitos. Bake in oven for 8-10 minutes, at 375, or until crispy.'
);