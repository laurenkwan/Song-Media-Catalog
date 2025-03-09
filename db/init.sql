--- songs ---
CREATE TABLE songs (
  id INTEGER NOT NULL UNIQUE,
  name TEXT NOT NULL,
  artist TEXT NOT NULL,
  file_name TEXT NOT NULL,
  file_ext TEXT NOT NULL,
  source TEXT,
  PRIMARY KEY(id AUTOINCREMENT)
);

-- Source: https://open.spotify.com/track/5enxwA8aAbwZbf5qCHORXi
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    1,
    'All Too Well',
    'Taylor Swift',
    '1.jpg',
    'jpg',
    'https://open.spotify.com/track/5enxwA8aAbwZbf5qCHORXi'
  );

-- Source: https://open.spotify.com/track/65FftemJ1DbbZ45DUfHJXE
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    2,
    'OMG',
    'New Jeans',
    '2.JPG',
    'JPG',
    'https://open.spotify.com/track/65FftemJ1DbbZ45DUfHJXE'
  );

-- Source: https://open.spotify.com/track/7cGFbx7MP0H23iHZTZpqMM
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    3,
    'Everybody',
    'Logic',
    '3.JPG',
    'JPG',
    'https://open.spotify.com/track/7cGFbx7MP0H23iHZTZpqMM'
  );

-- Source: https://open.spotify.com/track/5gB2IrxOCX2j9bMnHKP38i
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    4,
    'Life is a Highway',
    'Rascal Flatts',
    '4.jpg',
    'JPG',
    'https://open.spotify.com/track/5gB2IrxOCX2j9bMnHKP38i'
  );

-- Source: https://open.spotify.com/track/5naar7XewEOAjOywIp6Jjq
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    5,
    'Remember When',
    'Wallows',
    '5.JPG',
    'JPG',
    'https://open.spotify.com/track/5naar7XewEOAjOywIp6Jjq'
  );

-- Source: https://open.spotify.com/track/263aNAQCeFSWipk896byo6
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    6,
    "Friday I'm in love",
    'The Cure',
    '6.JPG',
    'JPG',
    'https://open.spotify.com/track/263aNAQCeFSWipk896byo6'
  );

-- Source: https://open.spotify.com/track/78LMazmfqncADjyJVae8dN
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    7,
    'Anything You Want',
    'JAWNY',
    '7.JPG',
    'JPG',
    'https://open.spotify.com/track/78LMazmfqncADjyJVae8dN'
  );

-- Source: https://open.spotify.com/track/2ajUl8lBLAXOXNpG4NEPMz
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    8,
    'Sway',
    'Michael Buble',
    '8.JPG',
    'JPG',
    'https://open.spotify.com/track/2ajUl8lBLAXOXNpG4NEPMz'
  );

-- Source: https://open.spotify.com/track/4cS2HQ6jK80vqdY9ofpztx
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    9,
    'She Wolf',
    'Shakira',
    '9.JPG',
    'JPG',
    'https://open.spotify.com/track/4cS2HQ6jK80vqdY9ofpztx'
  );

-- Source: https://open.spotify.com/track/57bgtoPSgt236HzfBOd8kj
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    10,
    'Thunderstruck',
    'AC/DC',
    '10.JPG',
    'JPG',
    'https://open.spotify.com/track/57bgtoPSgt236HzfBOd8kj'
  );

-- Source: https://open.spotify.com/track/7KA4W4McWYRpgf0fWsJZWB
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    11,
    'See You Again',
    'Tyler, The Creator',
    '11.jpg',
    'jpg',
    'https://open.spotify.com/track/7KA4W4McWYRpgf0fWsJZWB'
  );

-- Source: https://open.spotify.com/track/6AQbmUe0Qwf5PZnt4HmTXv
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    12,
    "Boy's a liar Pt.2",
    'PinkPantheress',
    '12.jpg',
    'jpg',
    'https://open.spotify.com/track/6AQbmUe0Qwf5PZnt4HmTXv'
  );

-- Source: https://open.spotify.com/track/6eTrGiHJS6kvmifI3sIkPn
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    13,
    'Street Sweeper',
    'Family Company',
    '13.jpg',
    'jpg',
    'https://open.spotify.com/track/6eTrGiHJS6kvmifI3sIkPn'
  );

-- Source: https://open.spotify.com/track/27bIik73QCu8Xzt3xpG1bI
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    14,
    "Candy",
    'NCT DREAM',
    '14.jpg',
    'jpg',
    'https://open.spotify.com/track/27bIik73QCu8Xzt3xpG1bI'
  );

-- Source: https://open.spotify.com/track/316r1KLN0bcmpr7TZcMCXT
INSERT INTO
  songs (id, name, artist, file_name, file_ext, source)
VALUES
  (
    15,
    "The Sound",
    'The 1975',
    '15.jpg',
    'jpg',
    'https://open.spotify.com/track/316r1KLN0bcmpr7TZcMCXT'
  );

--- tags ---
CREATE TABLE tags (
  id INTEGER NOT NULL UNIQUE,
  label TEXT NOT NULL,
  PRIMARY KEY(id AUTOINCREMENT)
);

INSERT INTO
  tags (id, label)
VALUES
  (1, 'Pop');

INSERT INTO
  tags (id, label)
VALUES
  (2, 'Rock');

INSERT INTO
  tags (id, label)
VALUES
  (3, 'Indie');

INSERT INTO
  tags (id, label)
VALUES
  (4, 'Hip-Hop');

INSERT INTO
  tags (id, label)
VALUES
  (5, 'K-Pop');

INSERT INTO
  tags (id, label)
VALUES
  (6, 'Country');

INSERT INTO
  tags (id, label)
VALUES
  (7, 'Funk');

INSERT INTO
  tags (id, label)
VALUES
  (8, 'Jazz');

INSERT INTO
  tags (id, label)
VALUES
  (9, 'Alternative');

INSERT INTO
  tags (id, label)
VALUES
  (10, 'Latin');

INSERT INTO
  tags (id, label)
VALUES
  (11, 'Less than three minutes');

INSERT INTO
  tags (id, label)
VALUES
  (12, 'More than three minutes');

--- songs_tags ---
CREATE TABLE song_tags (
  id INTEGER NOT NULL UNIQUE,
  song_id INTEGER NOT NULL,
  tag_id INTEGER NOT NULL,
  PRIMARY KEY(id AUTOINCREMENT) FOREIGN KEY (song_id) REFERENCES songs(id),
  FOREIGN KEY (tag_id) REFERENCES tags(id)
);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (1, 1, 1);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (2, 1, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (3, 2, 5);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (4, 2, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (5, 3, 4);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (6, 3, 11);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (7, 4, 6);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (8, 4, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (9, 5, 3);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (10, 5, 11);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (11, 6, 9);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (12, 6, 11);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (13, 7, 7);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (14, 7, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (15, 8, 8);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (16, 8, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (17, 9, 10);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (18, 9, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (19, 10, 2);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (20, 10, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (21, 11, 4);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (22, 11, 11);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (23, 12, 1);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (24, 12, 11);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (25, 13, 7);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (26, 13, 8);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (27, 13, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (28, 14, 5);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (29, 14, 1);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (30, 14, 12);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (31, 15, 3);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (32, 15, 9);

INSERT INTO
  song_tags (id, song_id, tag_id)
VALUES
  (33, 15, 12);

--- Users ---
CREATE TABLE users (
  id INTEGER NOT NULL UNIQUE,
  name TEXT NOT NULL,
  username TEXT NOT NULL UNIQUE,
  password TEXT NOT NULL,
  PRIMARY KEY(id AUTOINCREMENT)
);

-- password: monkey
INSERT INTO
  users (id, name, username, password)
VALUES
  (
    1,
    'Leah Watterson',
    'leah',
    '$2y$10$QtCybkpkzh7x5VN11APHned4J8fu78.eFXlyAMmahuAaNcbwZ7FH.' -- monkey
  );

CREATE TABLE sessions (
  id INTEGER NOT NULL UNIQUE,
  user_id INTEGER NOT NULL,
  session TEXT NOT NULL UNIQUE,
  last_login TEXT NOT NULL,
  PRIMARY KEY(id AUTOINCREMENT) FOREIGN KEY(user_id) REFERENCES users(id)
);
