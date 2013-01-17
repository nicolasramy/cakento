#cakento

An eCommerce solution based on CakePHP and Bootstrap Twitter for all developers who are fed up with Magento backend

## Requirements
* PHP 5
* MySQL

## Installation
1. Clone this repository in your workspace
2. Configure your personnal web server parameters
3. Duplicate app/Config/database.php.default to app/Config/database.php
4. Replace the values in this new file to connect CakePHP to your database
5. Execute app/Config/Schema/install_schema.sql
6. (Optional) Execute app/Config/Schema/install_data.sql

## CI
[![Build Status](https://secure.travis-ci.org/nicolasramy/cakento.png?branch=master)](https://travis-ci.org/nicolasramy/cakento)

## Development Roadmap

- website/store
- CMS
- brands
- products
- warehouses
- catalogs
- subscriptions
- carts/orders/invoices/creditmemos
- payments
- surveys
- newsletters
- reports
