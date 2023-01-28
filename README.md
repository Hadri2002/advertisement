# Advertisement Website

The following simple PHP application acts as a website, where users can post different advertisements. It uses no frameworks or CMS. 

## Missing from the base task

The PHP application lacks the requested URL mapping and the complete MVC pattern (Controller layer is missing)

## Completed tasks

The PHP application covers the following points:
* Object Oriented
* Uses the basic idea of an MVC pattern
* Three pages, index, users and advertisements
* Minimal style achieved with css
* Uses MySQL database

## Index

![index](https://user-images.githubusercontent.com/93373919/215269369-8347a8ac-ea07-427e-b3ab-b34fd7518bff.png)

## Users

![users](https://user-images.githubusercontent.com/93373919/215269481-9a3a1d20-9717-4e89-a5bf-792290290dfc.png)

## Advertisements

![ads](https://user-images.githubusercontent.com/93373919/215269588-f6d5ced5-c964-447d-b948-226df9cb2c80.png)

## Database
### User Table

![image](https://user-images.githubusercontent.com/93373919/215270162-dcc1237b-bab7-4e31-8768-2367aa2ad99f.png)
![image](https://user-images.githubusercontent.com/93373919/215270173-7d3bab8d-234f-49fb-8072-bf588fcaee52.png)

## Advertisement Table

![image](https://user-images.githubusercontent.com/93373919/215270198-d74ded8a-13f3-417d-93f5-62d497ad10ed.png)
![image](https://user-images.githubusercontent.com/93373919/215270208-e5aa9b5e-b092-42d5-af3c-8fb305aaf5c4.png)

# Function

## UserModel

An entity class to model the users

Attributes:
* id
* name

## AdvertisementModel

An entity class to model the ads

Attributes:
* id
* title
* user

## UserService

The business logic used to communicate with the database

Functions:
* getAllUsers - gets all users from the table using an SQL query

## AdvertisementService

The business logic used to communicate with the database

Functions:
* getAllAdvertisement - gets all ads from the table using an SQL query

## UserView

html base that's ready to accept the list of users

## AdvertisementView

html base that's ready to accept the list of ads

