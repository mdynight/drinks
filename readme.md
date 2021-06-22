# /DRINKSDATABASE

## Description
A Web page that renders a list of cocktail recipes accessed from a database. It has search capability. There is another page /DRINKSDATABSE_USER which contains a Web form for entering records, which can only be accessed by registered users.

## Team

* Josh: Product design, Pre-vis design
* Macy: Database Design, Developer

## Planning
### Technology
| Languages |
|---|
| Markdown | HTML | CSS | PHP | SQL | Javascript |
### Steps
| Pre-production | |
|---|---|
|Datebase Design||
|ERD||
|Data Dictionary||
|Page Design|||

| Production |
|---|
| TBD |




## 'View' page

![View page](pre-viz/view.png 'Previs of View page')

The page rendering the drinks will be known as the 'view' page. This page uses php to query and render the database using html and css.

|Fields|||
|:----|---|---|
|Name|Not Null|Primary Key|
|Author|||
|Type|Not Null||
|Mix|Not Null||
|Serve|Not Null||
|Garnish-x|||
|Garnish-y|||
|Ingredient-x|||
|Measurement-x|||


### Millilitre toggle
By default ingredient measurements are listed in ratio format, if a user prefers to see the recipe measured in millilitres a toggle option can change the display.


### Search
Either using a query or javascript to display recipes based on an expression entered by user

## 'User' page

![User page](pre-viz/form.png 'Previs of User page')

This page is accessed via knowledge of the URL and asks for user login details before displaying a Web form that can add records to the database.

|Fields|||
|:----|---|---|
|Name|Required||
|Author|||
|Type|Required|Drop-down|
|Mix|Required|Drop-down|
|Serve|Required|Drop-down|
|Garnish-x|||
|Garnish-y|Hidden||
|Ingredient-1|Required|Drop-down|
|Measurement-1|Required|Drop-down|
|Ingredient-x|Hidden||
|Measurement-x|Hidden||


## Database
### ERD
### Data Dictionary


