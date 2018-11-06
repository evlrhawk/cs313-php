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

INSERT INTO categories(category) VALUES ('Sandwhiches'); 

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

UPDATE recipes SET pic = 'https://www.smoking-meat.com/image-files/IMG_1331-1000x667-800x534.jpg' 
WHERE id = 1;

UPDATE recipes SET pic = 'https://www.slowcookersociety.com/wp-content/uploads/2017/05/Crock-Pot-Cream-Cheese-Chicken-Taquitos1.jpg' 
WHERE id = 2;

UPDATE recipes 
SET recipe = 'Materials: 
-Brisket
-Butcher Paper
-1:1 Salt & Pepper Mix

Directions:
Trim excess fat and dried meat from brisket. Smoke at 225 
for 16 hours, stopping 4-6 hours in to wrap in butcher''s 
paper. Remove when at 198 internally, and when Brisket is tender.' 
WHERE id = 1;

UPDATE recipes 
SET recipe = 'Materials:
-Chicken
-Cream Cheese
-Cheddar Cheese
-Salt
-Pepper
-Tortillas

Directions:
Cook chicken in slow cooker, with salt, pepper, and cream cheese, 
on high for 4-6 hours. Shred chicken, add cheddar cheese, and cook
for another 15 minutes. Scoop chicken into tortillas and roll up 
into taquitos. Bake in oven for 8-10 minutes, at 375, or until crispy.' 
WHERE id = 2;


INSERT INTO comments(rating, comment, recipes_id) 
VALUES
(
  5
, 'These are INCREDIBLE!! They came out very crisp and flavor!!
Also, the kids loved them, so we will be making them again!!'
, 2
);

ALTER TABLE comments
ADD COLUMN user_id INT REFERENCES users(id);

UPDATE comments SET user_id = 1 
WHERE id = 1;

ALTER TABLE comments
ALTER COLUMN user_id SET NOT NULL;
