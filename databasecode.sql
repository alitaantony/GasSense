/*creating a table in the database*/
CREATE TABLE sensordata (
  id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  reading_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  sensor varchar(30) not null,
  value1 varchar(10),
  Sstatus varchar(20)
);
