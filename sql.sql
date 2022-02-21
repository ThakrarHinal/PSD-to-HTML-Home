USE Helperlanddb;
create table Customer_Details(
Customer_id  INT NOT NULL AUTO_INCREMENT,
First_name VARCHAR(100) NOT NULL,
Last_name VARCHAR(100),
Email_Address VARCHAR(100) NOT NULL,
Mobile_number INT NOT NULL,
Password VARCHAR(100) NOT NULL,
Confirm_password VARCHAR(100) NOT NULL,
Birth_date DATE,
Preffered_language varchar(30),
PRIMARY KEY(Customer_id)
);

CREATE TABLE Customer_Address(
Address_id INT NOT NULL AUTO_INCREMENT,
Customer_id INT NOT NULL,
Street_name VARCHAR(500) NOT NULL,
House_number VARCHAR(100),
Postal_code INT NOT NULL,
City VARCHAR(100) NOT NULL,
PRIMARY KEY(Address_id),
FOREIGN KEY(Customer_id)REFERENCES Customer_Details(Customer_id) 
);

CREATE TABLE Service_Setup_Details(
Service_id INT NOT NULL AUTO_INCREMENT,
Postal_code INT NOT NULL,
Service_Date DATE NOT NULL,
Service_time TIME NOT NULL,
Service_start_time TIME NOT NULL,
Service_end_time TIME NOT NULL,
Service_provider VARCHAR(100) NOT NULL,
Service_amount FLOAT NOT NULL,
Service_status VARCHAR(100) NOT NULL,
Customer_id INT NOT NULL,
Reschedule_comment VARCHAR(500),
SP_id INT NOT NULL,
Admin_id INT NOT NULL,
Comments VARCHAR(500), 
Pets_at_home VARCHAR(100) NOT NULL,
inside_cabinets TIME,
inside_fridge TIME,
Inside_oven TIME,
Laundry_wash_dry TIME,
Interior_Window TIME, 
Service_need_time TIME NOT NULL,
PRIMARY KEY(Service_id),
FOREIGN KEY(Customer_id)REFERENCES Customer_Details(Customer_id) 
);

create table SP_Details(
SP_id  INT NOT NULL AUTO_INCREMENT,
First_name VARCHAR(100) NOT NULL,
Last_name VARCHAR(100),
Email_Address VARCHAR(100) NOT NULL,
Phone_number INT NOT NULL,
Password VARCHAR(100) NOT NULL,
Confirm_password VARCHAR(100) NOT NULL,
Date_of_birth DATE,
Nationality varchar(100) NOT NULL,
Gender VARCHAR(100)NOT NULL,
PRIMARY KEY(SP_id)
);


CREATE TABLE Rate_SP(
Rate_id int NOT NULL AUTO_INCREMENT,
On_time_arrival FLOAT NOT NULL,
Friendly FLOAT,
Quality_of_service FLOAT,
Feedback VARCHAR(500),
SP_id INT NOT NULL,
Service_id INT NOT NULL,
Customer_id INT NOT NULL,
PRIMARY KEY (Rate_id),
FOREIGN KEY(Customer_id)REFERENCES Customer_Details(Customer_id)
);

CREATE TABLE Notifications(
Notification_id INT NOT NULL AUTO_INCREMENT,
Customer_id INT NOT NULL,
SP_id INT NOT NULL,
Admin_id INT NOT NULL,
Notification_message VARCHAR(500) NOT NULL,
PRIMARY KEY(Notification_id),
FOREIGN KEY(Customer_id)REFERENCES Customer_Details(Customer_id) 
);

CREATE TABLE Favourite_SP(
Favourite_id INT NOT NULL AUTO_INCREMENT,
Customer_id INT NOT NULL,
SP_id INT NOT NULL,
Favourite VARCHAR(100),
Not_favourite VARCHAR(100),
Block_SP VARCHAR(100),
PRIMARY KEY(Favourite_id),
FOREIGN KEY(Customer_id)REFERENCES Customer_Details(Customer_id) 
);

CREATE TABLE SP_Address(
SP_address_id INT NOT NULL AUTO_INCREMENT,
SP_id INT NOT NULL,
Street_name VARCHAR(500) NOT NULL,
House_number VARCHAR(100),
Postal_code INT NOT NULL,
City VARCHAR(100) NOT NULL,
PRIMARY KEY(SP_address_id),
FOREIGN KEY(SP_id)REFERENCES SP_Details(SP_id) 
);

create table Admin_Details(
Admin_id  INT NOT NULL AUTO_INCREMENT,
First_name VARCHAR(100) NOT NULL,
Last_name VARCHAR(100),
Email_Address VARCHAR(100) NOT NULL,
Password VARCHAR(100) NOT NULL,
Confirm_password VARCHAR(100) NOT NULL,
PRIMARY KEY(Admin_id)
);

CREATE TABLE Admin_refund(
Refund_id INT NOT NULL AUTO_INCREMENT,
Admin_id INT NOT NULL,
Refund_amount FLOAT NOT NULL,
Total_refunded_amount FLOAT NOT NULL,
Refund_comment VARCHAR(500),
PRIMARY KEY(Refund_id),
FOREIGN KEY(Admin_id)REFERENCES Admin_Details(Admin_id)
);



ALTER TABLE Rate_SP
ADD  FOREIGN KEY (SP_id) REFERENCES SP_Details(SP_id),
ADD FOREIGN KEY (Service_id) REFERENCES Service_Setup_Details(Service_id);  

ALTER TABLE notifications
ADD FOREIGN KEY (SP_id) REFERENCES SP_Details(SP_id),
ADD FOREIGN KEY (Admin_id) REFERENCES Admin_Details(Admin_id);  

ALTER TABLE favourite_sp
ADD FOREIGN KEY (SP_id) REFERENCES SP_Details(SP_id);

ALTER TABLE Service_Setup_Details
ADD FOREIGN KEY (SP_id) REFERENCES SP_Details(SP_id),
ADD FOREIGN KEY (Admin_id) REFERENCES Admin_Details(Admin_id); 

ALTER TABLE Rate_SP
ADD  FOREIGN KEY (SP_id) REFERENCES SP_Details(SP_id),
ADD FOREIGN KEY (Service_id) REFERENCES Service_Setup_Details(Service_id);  

commit;