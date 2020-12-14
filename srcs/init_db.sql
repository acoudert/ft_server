CREATE DATABASE 42website;
CREATE USER 'db_user'@'localhost' IDENTIFIED BY 'pass';
GRANT ALL PRIVILEGES ON *.* TO 'db_user'@'localhost';
FLUSH PRIVILEGES;
