# /DRINKSDATABASE

## About 
A Web page that renders a list of cocktail recipes accessed from a database. It has search capability. There is another page /DRINKSDATABSE_USER which contains a Web form for entering records, which can only be accessed by registered users.

## Team
|Josh|Macy|
|:--|:--|
|Project design|Database design|
|Product design|Database development|
|PHP development|SQL development|
|HTML development|JavaScript development|
|CSS development|Testing|
|Testing|

## Planning
### Technology
| Languages ||||||
|:--|
| Markdown | HTML | CSS | PHP | SQL | Javascript |
### Process
> Project Design
> Product Design
>> User Experience
>> Data/Field Identification

> Database Design
>> ERD
>> Data Dictionary

> Database Development
> SQL Development
>> Select Queries
>> Insert Queries

> PHP Development
>> Database Connection
>> Render Loop
>> Insert

> HTML Development
>> Rendering
>> Form

> Testing
> JavaScript Development
>> Toggle
>> Search
>> Form field reveal

> Testing
> CSS Development
>> Layout
>> Styling


## Page i. 'View' page
The page rendering the drinks will be known as the 'view' page. This page uses php to query and render the database using html and css.
### Mock-Up
![View page](pre-viz/view.png 'Previs of View page')
### Database Fields & Page Elements
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

### Features
#### Millilitre toggle
By default ingredient measurements are listed in ratio format, if a user prefers to see the recipe measured in millilitres a toggle option can change the display.

#### Search
Either using a query or javascript to display recipes based on an expression entered by user

## 'User' page
This page is accessed via knowledge of the URL and asks for user login details before displaying a Web form that can add records to the database.
<form style='box-shadow: 5px 5px;border:1px solid black; padding: 8px 8px 8px 8px; width: 250px; margin: 0;'><label for='name'>Name: </label><input type='text' id='name' name='name' required>
    <label for='type'>Type: </label><input type='text' id='type' name='type' required>
    <label for='author'>Author: </label><input type='text' id='author' name='author' placeholder='optional'>
    <label for='mix'>Mix: </label><input type='text' id='mix' name='mix' required>
    <label for='serve'>Serve: </label><input type='text' id='serve' name='serve' required>
    <label for='garnish-a'>Garnish: </label><input type='text' id='garnish-a' name='garnish-a' placeholder='optional'>  <button>+</button>
    <label for='ingredient-a'>Ingredient: </label><input type='text' id='ingredient-a' name='ingredient-a' required>  <button>+</button>
    <label for='measure-a'>Measure: </label><input type='text' id='measure-a' name='measure-a' required>
</form>



## Database
### ERD
### Data Dictionary


