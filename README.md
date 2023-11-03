<a name="readme-top"></a>
# Restaurant Reviewer

<div align="center">
    <img src="restaurant_icon.png" alt="Logo" width="80" height="80">
</div>

<details>
    <summary>Contents</summary>
     <ol>
        <li>
            <a href="#introduction">Introduction</a>
        </li>
        <li>
            <a href="#features">Features</a>
        </li>
        <li>
            <a href="#running-locally">Running Locally</a>
        </li>
    </ol>
</details>

## Introduction

A prototype restaurant reviewer application. Review your favorite (or worst) restaurant with ease. And check to see which restaurants nearby are any good.


## Features
- [x] Fully featured Web Application including:
	- [x] Restaurants:
		- [x] Add, update, and delete restaurant info
		- [x] View all restaurants, view individual restaurant information
	- [x] Users:
		- [x] Login / logout
		- [x] Separation of reviewers and administrative users
		- [x] Admin role:
			- [x] Delete/Approve reviews
			- [x] Add/update restaurant information
		- [x] Reviewers and public view:
			- [x] Add reviews of restaurants including:
				- [x] Cost
				- [x] Food Quality
				- [x] Service Quality
				- [x] Cleanliness
				- [x] Service Speed
				- [x] Value
				- [x] Allergy Info
				- [x] Overall rating
			- [x] View all restaurants
			- [x] View individual restaurant info
	- [x] Normalized and secure database query logic
		- [x] Database class well organized
		- [x] Use of prepared statements for security
		- [x] Fully CRUD application
	- [x] Object Oriented Programming
		- [x] Objects are well crafted and organized
		- [x] Classes easily extended
	- [x] Use of Modern Architecture:
		- [x] Seperation of concerns into:
			- [x] Model for the classes
			- [x] View for the web views
			- [x] Controller(s) for the application control
	- [x] Use of web standards, ensuring a smooth experience for users
	- [x] A unique and simple color pallette

## Running Locally

In order to run this application please:
- Refer to the ROOT/controller/base.php file and update all fields as needed:
	- db user name
	- db user password
	- db name
	- any other details that are changed
The application requires:
- MySql/MariaDB/SQL database
- An Http Server (e.g. Apache)
- PHP

