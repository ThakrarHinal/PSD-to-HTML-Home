USE helperland_db;

CREATE TABLE ContactUs(
ContactUsid INT NOT NULL AUTO_INCREMENT,
Name VARCHAR(50) NOT NULL,
Last_namr varchar(50) NOT NULL,
Mobile_number varchar(20) NOT NULL,
Email VARCHAR(200) NOT NULL,
Subject VARCHAR(500),
Message VARCHAR(200),
UploadFileName nvarchar(100) NULL,
CreatedOn datetime NULL,
CreatedBy int NULL,
FileName varchar(500) NULL,
PRIMARY KEY(ContactUsid)
);