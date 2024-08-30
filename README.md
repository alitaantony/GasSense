*** HARDWARE CONNECTIONS ***
** ARDUINO UNO R3, MQ-6 SENSOR, GSM SIM900A AND BUZZER CONNECTIONS **
* MQ-6 Sensor (MQ6) to Arduino Uno R3 (AUR) *
   (MQ6) Vcc -> 5V (AUR)
   (MQ6) GND -> GND (AUR)
   (MQ6) Analog Out A0 -> A0 (AUR)
   Power Arduino using USB programming port or DC Jack

* SIM900A (S9A) to Arduino UNO R3 (AUR) *
   (S9A) Pin TX -> Digital Pin 10 (AUR)
   (S9A) Pin RX -> Digital Pin 11 (AUR)
   (S9A) GND -> GND (AUR) 
   (S9A) 5V DC Jack -> Power Supply Adapter 
   Insert valid SIM Card into the tray and wait for NW status light (green) to blink with a 3 second delay, this means the SIM Card has connected to the network, otherwise, connection 
   is pending.

* Buzzer (Bzr) to Arduino UNO R3 (AUR) *
   (Bzr) +ve pin (long) -> Digital Pin 8 (AUR)
   (Bzr) -ve pin (short) -> GND 


** NODEMCU ESP8266, MQ-6 SENSOR CONNECTIONS **
** MQ-6 Sensor (MQ6) to NodeMCU ESP8266 Wifi Module (ESP) **
   (MQ6) Vcc -> 3v3 (ESP)
   (MQ6) GND -> GND (ESP)
   (MQ6) A0  -> A0 (ESP)
   Power NodeMCU ESP8266 using it's micro USB port and conecting to a computer or USB power adapter.


*** SOFTWARE CONFIGURATION ***
** ARDUINO-SENSOR-SIM900A-BUZZER MODULE **
  1. Push "sim900a" code to the Arduino Uno R3 through the Arduino IDE.
  2. Open Serial Monitor to display gas analog values and message transmission updates along with buzzer mechanism.

** NODEMCU-SENSOR MODULE **
  . File -> Preferences -> Additional boards manager URL: http://arduino.esp8266.com/stable/package_esp8266com_index.json
  . Install "esp8266 by ESP8266" in Boards Manager
  . Download "HTTP Client for ESP32" zip file > Sketch > Include Library > Add .ZIP library and add the HTTP Client Service library ZIP file.
  . Install "CP2102 Driver"
  . Push "nodemcu" code to the NodeMCU ESP8266 through the Arduino IDE
  . Open Serial Monitor to check status of connection and HTTP request handling. 

** SETUP XAMPP (Multi-Platform Local Web Server) AND WORDPRESS (PHP and Database Management) FOR LOCAL WEBSITE SIMULATION **
  1. Download XAMPP from "apachefriends.org" and install.
  2. Access XAMPP Control Panel after installation, start the Apache and MySQL modules.
  3. Click on "Admin" in the MySQL module, this will open the phpMyAdmin tool which can also be accessed using the URL: http://localhost/phpmyadmin/
  4. Create a database, by clicking on "New" then enter the database name "gassense" and press "Create".
  5. Download Wordpress from wordpress.org and install.
  6. Cut and paste the "wordpress" folder into the "htdocs" folder of the "xampp" folder to be able to use XAMPP as a local host for WordPress.
  7. Install WordPress by opening any browser and enter the URL: http://localhost/wordpress/
  8. Enter the details of the database that was created earlier using phpMyAdmin especially the Database Name, for the Username enter "root" and since no password was created for the 
     database just leave this space empty.
  9. Fill in the data that will later be used to sign in into the WordPress dashboard. This includes the site title, username, password and email.
  10. Login to WordPress after installation using your credentials. 

** CONNECT NODEMCU ESP8266 TO MYSQL DATABASE USING PHP **
  1. Create folder "sensordata" in "htdocs" folder in "xampp" folder.
  2. The "sensordata" folder must contain the "databasecode.sql","index.php","post-esp-data.php","style.css" files.
  3. To access the MYSQL database use the URL: localhost/phpmyadmin/
  4. Create a new database by clicking New > Enter database name> Create
  5. To create a new SQL table in the database, select the new database created (gassense) and click SQL tab and insert the SQL query in "databasecode.sql".
  6. Now the web page can be accessed from the URL: http://localhost/sensordata

