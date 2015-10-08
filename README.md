# Work in Progress

This project is under development.

# TodoManager

This application allows you to manage your todos on browser. It is based on CakePHP.

[![Build Status](https://travis-ci.org/suzuki86/todomanager.svg)](https://travis-ci.org/suzuki86/todomanager)

# Installation

- Clone this repository and deploy to document root.

- Create database and configure in `app/Config/database.php`.

- Create tables by executing `app/Console/cake schema create` command.

- Insert default data to database by using `app/Config/seeds.sql`.

```
mysql -uUSERNAME -p todomanager < ./app/Config/seeds.sql
```

- Set permission `0777` to `app/tmp`.

- Now you can login username:root, password:root.
