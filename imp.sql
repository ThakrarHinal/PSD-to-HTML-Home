SELECT * FROM helperland_db.form;

select Value_count, hour, if(Value_count = 1, 30, 0) as cool from form;

UPDATE form
SET hour = Case
When Value_count = 1 Then 30 
When Value_count = 2 Then 60
End
WHERE hour IS not null