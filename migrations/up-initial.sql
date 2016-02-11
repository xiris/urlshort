CREATE TABLE `urls` (
  id INT PRIMARY KEY AUTO_INCREMENT,
  short_url VARCHAR(255) INDEX `short_url`,
  original_url TEXT
);
