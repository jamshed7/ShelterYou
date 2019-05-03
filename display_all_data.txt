in terminal, run the command:
/Applications/MAMP/Library/bin/mysql --host=localhost -uroot -proot

SQL QUERIES FOR PART 3, TASK 2 TO RETRIEVE AND PRINT ALL THE DATA IN THE DATABASE-

SELECT * FROM ANIMAL
SELECT * FROM ADMIN
SELECT * FROM ADOPTION
SELECT * FROM GUEST
SELECT * FROM HORSE
SELECT * FROM INQUIRY
SELECT * FROM LIKES
SELECT * FROM PROFILE
SELECT * FROM SNAKE
SELECT * FROM DONATION

SQL QUERIES FOR PART 3, some of TASK 3 QUERIES FOR WHICH WE DID NOT PREPARE THE ONLINE PAGES, WE ARE USING COMMAND LINE INTERFACES FOR THESE 3 TRANSACTIONS-

TRANSACTION 3.6: (We made a web page for this too, but it only lists donations)
Select * FROM Donation where donation where use donator_id=“INPUT_VALUE”
Select * from inquiry where use sender_id=“INPUT_VALUE”

TRANSACTION 3.8: (The webpage for this transaction is not functioning well)
select * from donation where Donation_date=“INPUT_VALUE"

TRANSACTION 3.9: (We made a webpage for this too, perfectly functional but we thought we should still list it!)
Select * from inquiry where animal_info=“INPUT_VALUE”