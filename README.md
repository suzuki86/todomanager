# Work in Progress

This project is under development.

# TodoManager

This application allows you to manage your todos on browser. It is based on CakePHP.

# Installation

1. Clone this repository and deploy to document root.

2. Create database and configure in `app/Config/database.php`.

3. Create tables by executing `app/Console/cake schema create` command.

4. Insert default data to database by using `app/Config/seeds.sql`.

```
mysql -uUSERNAME -p todomanager < ./app/Config/seeds.sql
```

5. Set permission `0777` to `app/tmp`.

6. Now you can login username:root, password:root.
