CREATE TABLE users
(
      id SERIAL PRIMARY KEY
    , username VARCHAR(30) UNIQUE NOT NULL
    , password VARCHAR(50) NOT NULL
);

CREATE TABLE speakers
(
      id SERIAL PRIMARY KEY
    , name VARCHAR(100) NOT NULL
);

CREATE TABLE sessions
(
      id SERIAL PRIMARY KEY
    , month SMALLINT NOT NULL
    , year SMALLINT 
);

CREATE TABLE notes
(
      id SERIAL PRIMARY KEY
    , content TEXT 
    , date date NOT NULL
    , user_id INT NOT NULL REFERENCES users(id) --foreign key
    , speaker_id INT NOT NULL REFERENCES speakers(id)
    , sessions_id INT NOT NULL REFERENCES sessions(id)
);