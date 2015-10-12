USE campustry;

DROP TABLE UsersProfile;

DROP TABLE Users;

CREATE TABLE Users
(
	UserID int NOT NULL AUTO_INCREMENT,
	EMail varchar(255),
    PWD varchar(255),
	PRIMARY KEY (UserID)
);

CREATE TABLE UsersProfile
(
	UserID int NOT NULL,
	FirstName varchar(20) NOT NULL,
	LastName varchar(20),
	About_Me varchar(255),
	Active boolean not null default 1,
	FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

INSERT INTO Users
(
	EMail,
    PWD
)
VALUES(
	'scooke3@ur.rochester.edu',
    'my_password'
);
INSERT INTO UsersProfile
(
	UserID,
	FirstName,
    LastName,
    About_Me
)
VALUES(
	1,
    'Sean',
    'Cooke',
    'Computer Programming, PHP, MySQL, Apache, Linux.'
);