# HARDWARE CONNECTIONS 

## ARDUINO UNO R3, MQ-6 SENSOR, GSM SIM900A, AND BUZZER CONNECTIONS 

### MQ-6 Sensor (MQ6) to Arduino Uno R3 (AUR) 
1. **(MQ6) Vcc** -> **5V (AUR)**  
2. **(MQ6) GND** -> **GND (AUR)**  
3. **(MQ6) Analog Out A0** -> **A0 (AUR)**  

**Note:** Power the Arduino using the USB programming port or DC Jack.  

### SIM900A (S9A) to Arduino UNO R3 (AUR) 
- **(S9A) Pin TX** -> **Digital Pin 10 (AUR)**  
- **(S9A) Pin RX** -> **Digital Pin 11 (AUR)**  
- **(S9A) GND** -> **GND (AUR)**  
- **(S9A) 5V DC Jack** -> Power Supply Adapter  

**Note:** Insert a valid SIM card into the tray. Wait for the NW status light (green) to blink with a 3-second delay. This indicates the SIM card has successfully connected to the network. If it doesn’t, the connection is still pending.  

### Buzzer (Bzr) to Arduino UNO R3 (AUR) 
- **(Bzr) +ve pin (long)** -> **Digital Pin 8 (AUR)**  
- **(Bzr) -ve pin (short)** -> **GND**  

---

## NODEMCU ESP8266, MQ-6 SENSOR CONNECTIONS 

### MQ-6 Sensor (MQ6) to NodeMCU ESP8266 WiFi Module (ESP) 
- **(MQ6) Vcc** -> **3v3 (ESP)**  
- **(MQ6) GND** -> **GND (ESP)**  
- **(MQ6) A0** -> **A0 (ESP)**  

**Note:** Power the NodeMCU ESP8266 using its micro USB port connected to a computer or USB power adapter.  

---

# SOFTWARE CONFIGURATION 

## ARDUINO-SENSOR-SIM900A-BUZZER MODULE 
1. Push the **"sim900a"** code to the Arduino Uno R3 through the Arduino IDE.  
2. Open the Serial Monitor to display gas analog values, message transmission updates, and the buzzer mechanism.  

## NODEMCU-SENSOR MODULE 
1. Go to **File > Preferences > Additional Boards Manager URL:**  
   ```
   http://arduino.esp8266.com/stable/package_esp8266com_index.json
   ```  
2. Install **"esp8266 by ESP8266"** in the Boards Manager.  
3. Download the **"HTTP Client for ESP32"** ZIP file. Add it via:  
   **Sketch > Include Library > Add .ZIP Library**.  
4. Install the **CP2102 Driver**.  
5. Push the **"nodemcu"** code to the NodeMCU ESP8266 through the Arduino IDE.  
6. Open the Serial Monitor to check the connection status and HTTP request handling.  

---

## SETUP XAMPP (Multi-Platform Local Web Server) AND WORDPRESS (PHP and Database Management) FOR LOCAL WEBSITE SIMULATION 
1. Download XAMPP from [apachefriends.org](https://www.apachefriends.org) and install it.  
2. Access the XAMPP Control Panel after installation. Start the **Apache** and **MySQL** modules.  
3. Click **"Admin"** in the MySQL module to open the phpMyAdmin tool. Alternatively, access it using:  
   ```
   http://localhost/phpmyadmin/
   ```  
4. Create a new database:  
   - Click **"New"**.  
   - Enter the database name: **gassense**.  
   - Press **"Create"**.  
5. Download WordPress from [wordpress.org](https://wordpress.org) and install it.  
6. Move the **"wordpress"** folder to the **"htdocs"** folder in the XAMPP directory.  
7. Install WordPress by navigating to:  
   ```
   http://localhost/wordpress/
   ```  
8. Enter the database details:  
   - **Database Name:** gassense  
   - **Username:** root  
   - **Password:** Leave blank.  
9. Fill in the site title, username, password, and email.  
10. Log in to the WordPress dashboard using your credentials.  

---

## CONNECT NODEMCU ESP8266 TO MYSQL DATABASE USING PHP 
1. Create a folder named **"sensordata"** in the **"htdocs"** folder in the XAMPP directory.  
2. Place the following files in the **"sensordata"** folder:  
   - `databasecode.sql`  
   - `index.php`  
   - `post-esp-data.php`  
   - `style.css`  
3. Access the MySQL database using:  
   ```
   http://localhost/phpmyadmin/
   ```  
4. Create a new database:  
   - Click **"New"**.  
   - Enter the database name: **gassense**.  
   - Press **"Create"**.  
5. To create a new SQL table, select the **gassense** database, go to the **SQL** tab, and insert the SQL query from `databasecode.sql`.  
6. Access the webpage at:  
   ```
   http://localhost/sensordata
   ```  

--- 
