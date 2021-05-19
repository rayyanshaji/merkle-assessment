<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## User Registration Application

The application supports two pages, which rest at the `/register` and `/adminreport` endpoints. 

The user is allowed to register users with a form and view their details on a table ordered by latest entry into the database. 

## Navigation

Please select the "Register" tab to go back to registering more users, we will be automatically directed to the Admin Report page once the form submits successfully. 

## Validation

The registration form supports client side and server side validation. If client side validation fails on any single form, the user isn't able to submit the form. 
Address 2 and Last Name are optional fields to allow easier user experience. 

### Country

For demonstration purposes, the form allows the user to enter a different country to prove that our client and server side validation works.

### ZipCode

As per the requirements, the user may only enter zipcodes that are 5 or 9 digits in length. 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
