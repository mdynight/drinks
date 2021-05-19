Use Master
Go

-- Create DB

CREATE DATABASE Drinks
Use Drinks
Go

-- Create Table


CREATE TABLE Drink(
	
	DrinkName VARCHAR(50) PRIMARY KEY,
	Variety VARCHAR(50) NOT NULL,
	Item1 VARCHAR(50), Measure1 NVARCHAR(50),
	Item2 VARCHAR(50), Measure2 NVARCHAR(50),
	Item3 VARCHAR(50), Measure3 NVARCHAR(50),
	Item4 VARCHAR(50), Measure4 NVARCHAR(50),
	Item5 VARCHAR(50), Measure5 NVARCHAR(50),
	Item6 VARCHAR(50), Measure6 NVARCHAR(50),
	Item7 VARCHAR(50), Measure7 NVARCHAR(50),
	Item8 VARCHAR(50), Measure8 NVARCHAR(50),
	Item9 VARCHAR(50), Measure9 NVARCHAR(50),
	Garnish VARCHAR(50),
	Author VARCHAR(50),
	Summary VARCHAR(200)
);

DROP TABLE Drink

CREATE TABLE Ingredient(

	IngredientName VARCHAR(50) PRIMARY KEY,
	Class VARCHAR(50) NOT NULL

);

-- CREATE TABLE History();
-- CREATE TABLE Tags();

INSERT INTO Drink
	VALUES
	('Pepino', 'Traditional Sour', 
	'Whites', NULL, 
	'Cucumber', NULL,
	'Lemon', '¾',
	'Simple', '¾',
	'Tequila', '1½',
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	'Cucumber', 'M. Madrusan', NULL),

	('Prado Cocktail', 'Traditional Sour',
	'Whites', NULL, 
	'Lemon', '½', 
	'Grenadine', '½', 
	'Maraschino', '½', 
	'Tequila', '1½',
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL, NULL),

	('20th Century', 'Nontraditional Sour', 
	'Lemon', '¾', 
	'White Cacao', '¾',
	'Cocchi Americano', '¾', 
	'Gin', '¾',
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL, NULL),
	
	('Army & Navy', 'Nontraditional Sour', 
	'Lemon', '¾', 
	'Orgeat', '¾',
	'Gin', '1½', 
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL, NULL),

	('Aviation #1', 'Nontraditional Sour', 
	'Lemon', '¾', 
	'Maraschino', '⅜',
	'Creme De Violette', '⅜',
	'Gin', '1½', 
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL, NULL),

	('Aviation #2', 'Nontraditional Sour', 
	'Lemon', '¾', 
	'Maraschino', '¾',
	'Gin', '1½', 
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL,
	NULL, NULL, NULL)
;

	SELECT * FROM DRINK

