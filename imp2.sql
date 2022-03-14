truncate table User;
ALTER TABLE User
  ADD CONSTRAINT User_pk 
    PRIMARY KEY (token);
    
    ALTER TABLE Zipcode
ADD FOREIGN KEY (Cityid) REFERENCES City(CityId);
    
    alter table form add es float;
    
    create table Zipcode(
    ID int not null auto_increment,
    ZipcodeValue varchar(50) not null,
    Cityid int not null,
    primary key (ID)
    );
    
    create table UserAddress(
    AddressId int not null auto_increment,
    Userid int not null,
    AddressLine1 varchar(200) not null,
    AddressLine2 varchar(200),
    City varchar(50) not null,
    State varchar(50),
    PostalCode varchar(20) not null,
    Mobile varchar(20),
    Email varchar(100),
    primary key (AddressId),
    foreign key(Userid)references User(Userid)
    );
    
    
    CREATE TABLE City(
	CityId int NOT NULL auto_increment,
	CityName varchar(50) NOT NULL,
	StateId int NOT NULL,
    
  PRIMARY KEY (CityId) );
  
  alter table servicerequest add column PaymentDone int;
  
  
  
  
  select * from user
  join useraddress on user.Userid = useraddress.Userid
  join city on useraddress.City = city.CityName
  join zipcode on zipcode.Cityid = city.CityId
  where user.Zipcode = 123 
  and user.typeId = 1;
  
  
  
  create table ServiceRequest(
  ServiceRequestId int not null auto_increment,
  Userid int not null,
  ServiceStartDate datetime not null,
  ServiceHours float not null,
  ExtraHours float not null,
  TotalCost decimal(8, 2) not null,
  comments varchar(500),
  HasPets binary,
  ServiceHourlyRate decimal(8, 2),
  primary key(ServiceRequestId),
  foreign key(Userid)references User(Userid)
  );
  
  create table form(
  ServiceRequestId int not null auto_increment,
  -- Userid int not null,
  date datetime not null,
  hrs float not null,
  time time not null,
  -- ExtraHours float not null,
  -- TotalCost decimal(8, 2) not null,
  first varchar(100),
  cmt varchar(500),
  -- HasPets binary,
  -- viceHourlyRate decimal(8, 2),
  primary key(ServiceRequestId)
  -- foreign key(Userid)references User(Userid)
  );
  
  ALTER TABLE form MODIFY COLUMN sHrs int;
  
  ALTER TABLE form ADD COLUMN sHrs time;
  
  
  
  create table book(
  cid int auto_increment not null,
  card int,
  pc int,
  primary key(cid)
  )
  
  create table Rating
  
  
  
  
  
  
  
  