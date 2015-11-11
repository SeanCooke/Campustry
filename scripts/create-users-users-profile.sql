USE campustry;

DROP TABLE UsersProfile;

DROP TABLE Users;

CREATE TABLE Users
(
	UserID int NOT NULL AUTO_INCREMENT,
    FirstName varchar(20) NOT NULL,
	LastName varchar(20),
	EMail varchar(255) NOT NULL,
    PWD varchar(255) NOT NULL,
	PRIMARY KEY (UserID)
);

CREATE TABLE UsersProfile
(
	UserID int NOT NULL,
	About_Me varchar(255),
	Active boolean not null default 1,
	FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

INSERT INTO Users
(	
	FirstName,
    LastName,
	EMail,
    PWD
)
VALUES(
	'Sean',
    'Cooke',
	'scooke3@ur.rochester.edu',
    'my_password'
);
INSERT INTO UsersProfile
(
	UserID,
    About_Me
)
VALUES(
	1,
    'Computer Programming, PHP, MySQL, Apache, Linux.'
);