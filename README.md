# Module IIM Back-end Web Development
## Continuous Assessment 3 
## Student: Nathalie Flores - Id: 21520
## Lecturer: George Blanaru

## Assignment Description  
Develop a web application using PHP as a language and XAMPP as a database. that can perform CRUD operations on a Mongo DB database. You are free to choose the type of data the application will store (e.g. users, cars, animals, etc.). The data should be complex enough, containing different types of values (Strings, ints, Booleans, etc.).

## Additional Information 
[40%] All CRUD operations are working as intended (e.g. the right data is retrieved while using an index, data is being deleted by criteria, retrieve one or multiple documents).<br>
[10%] The application is connecting to the right database. It can connect to the XAMPP database.<br>
[10%] The data is complex: it contains at least one index (unique entry); has at least 3 types of variables and there are sufficient entries already in the database.<br>
[10%] Code is readable: consistency, right indentation, comments.<br>
[20%] The application is accompanied by a short report (max. 500 words) or a ReadMe file. The report should explain the development process of the application.<br>
[10%] Creativity: Do your research and add any other functionality to your application. (e.g. multiple variable types – Boolean, array, JSON array, etc.; basic front-end; database complexity; multiple objects, etc.)<br>

## Running the Project
1. To use this run: 
* XAMPP - Apache.<br>
* XAMPP - MySql.<br>
2. Works with website localhost

## Project Summary
In this project, you will learn how to program in PHP, how to create a database with XAMPP, and how to connect the pages you create to the database. Learning PHP is essential because it is the most recommended language for anyone who has previously explored more basic web languages such as HTML, CSS, or Javascript. We can use PHP in a straightforward manner, but it also has advanced formulas. Methods such as POST were used to conduct data searches in order to recover, insert, or delete data from the database. On the page, straight scripts were created. Finally, this project documents my personal growth as a programmer.<br><br>
A miniature succulent Ecommerce was proposed for this idea. The following image is an example of the website design.<br>
![website](https://user-images.githubusercontent.com/65398774/164343460-ca405330-8d95-495d-9a94-ce9f21975955.png)

### Initial Ideas
PHP is an excellent choice for platform development. Whatever the objective of the website is, PHP is highly likely to have all of the necessary characteristics to construct it with all of the functionalities that will be required.<br>
It could be a commerce portal, a news portal, an educational channel, or anything else. On the other hand, this unique language has the advantage of being able to run on practically any server or operating system.<br>
The system and language support can store a vast amount of data, making it perfect for developing big-scale projects with a lot of information.

### Contextualizing
Create the structured database.The two main tables worked on are:
1. Product: Succulents<br>
2. Customer: Users/Admin<br>
![phpMyAdmin](https://user-images.githubusercontent.com/65398774/164342764-325b6274-ac21-4e2c-b5ca-4430f0e68fb2.png)

## Development Process. 
1. Created index.php page. 
2. Created database in XAMPP.
3. Created connection between.
4. Created session register/login.
    * A function was made to see what type of role (whether it is a user or an <br>administrator) the user is and thus properly direct it to the appropriate index.
5. Perform CRUD functions:
    * Add/update/delete products.
    * Add/update/delete categories
    * Add/delete users.
6. Product ID tracking to display a small shooping cart table.
![shoopingCart](https://user-images.githubusercontent.com/65398774/164343209-5a80fc40-13cf-48ca-99e2-68ac39bc5c0a.png)

### Libraries 
1. Boostrap
2. PHP Documentation-Community

### References and adaptation explanations
Based on the project: 
[PetShelter GitHub](https://github.com/georgeBl/petshelter.git)

## Testing
Example of get:
Add category
![test1](https://user-images.githubusercontent.com/65398774/164343678-165091ea-b20e-4b20-8c0d-bd5dce340b5a.png)
List the new category added. 
![test2](https://user-images.githubusercontent.com/65398774/164343680-0a88b111-e9b3-48d5-9191-95454f85b7cb.png

## Considerations
E-commerce has a significant requirement for regular contact with complicated databases containing critical information. After all, the things being offered are accompanied by a plethora of photographs, videos, and other media. As a result, every time you need to load a page, you must connect to various databases, which might be time-consuming. There are several pages in this project that are not entirely completed, such as the blog or the profile, because it focuses on the most observed parts in class. It was a project I thoroughly loved working on. I gained a lot of knowledge. Nowadays, the programming market is looking for people with web application knowledge, and PHP is the primary resource in this scenario.

## GDPR
The code was based in the coding propose explain during the clases<br>
And on information found in PHP Documentation.