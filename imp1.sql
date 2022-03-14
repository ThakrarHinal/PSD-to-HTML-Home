SELECT * FROM helperland_db.form;
 ALTER TABLE servicerequest
ADD COLUMN Extraservices varchar(10000); 


SELECT
   SUM(CHAR_LENGTH(first) - CHAR_LENGTH(REPLACE(first, ',', '')) + 1) cnt
FROM form;
ALTER TABLE servicerequest
ADD COLUMN Serviceid int 
GENERATED ALWAYS AS (LENGTH(Extraservices) - LENGTH(REPLACE(Extraservices, ',', '')) + 1) STORED;

SELECT (LENGTH(first) - LENGTH(REPLACE(first, ',', '')) + 1) as value_count
  FROM form;
  
  ALTER TABLE form
ADD COLUMN Value_count DOUBLE 
GENERATED ALWAYS AS (LENGTH(first) - LENGTH(REPLACE(first, ',', '')) + 1) STORED;

ALTER TABLE servicerequest
add COLUMN Total decimal(8, 2)
GENERATED ALWAYS AS (ServiceHours + Extras * 100) STORED;

ALTER TABLE form
ADD COLUMN s1 DOUBLE 
GENERATED ALWAYS AS (if(Value_count = 1, 0, if(Value_count = 2, 60, if(Value_count = 3, 90, if(Value_count = 4, 120, 0))))) STORED;

ALTER TABLE servicerequest
ADD COLUMN  ServiceStartDate datetime;
-- GENERATED ALWAYS AS (if(Value_count = 1, 30, if(Value_count = 2, 60, if(Value_count = 3, 90, if(Value_count = 4, 120, 0))))) STORED;

ALTER TABLE servicerequest DROP COLUMN ServiceStartDate;

ALTER TABLE servicerequest
ADD COLUMN Extras float 
GENERATED ALWAYS AS (if(Serviceid = 1, 0.5, if(Serviceid = 2, 1, if(Serviceid = 3, 1.5, if(Serviceid = 4, 2, if(Serviceid = 5, 2.5, 0)))))) STORED;
  
  DELIMITER $$

CREATE PROCEDURE IncomeLevel ( Value_count INT, OUT income_level INT)
NO SQL

BEGIN

   IF Value_count = 1 THEN
      SET income_level = 30;

   ELSEIF Value_count = 2 THEN
      SET income_level = 60;
      
	ELSEIF Value_count = 3 THEN
      SET income_level = 90;
      
	ELSEIF Value_count = 4 THEN
      SET income_level = 120;

   ELSE
      SET income_level = 0;

   END IF;

   SELECT income_level;

END$$

DELIMITER $$;
 set @p = 1;  
 -- set @dp = 60;
 
 call IncomeLevel(@p, @dp) 
 