/*
CREATE DATABASE Parking;
*/

USE Parking;

CREATE TABLE SeasonTicket
(
  SeasonTicketID INT PRIMARY KEY AUTO_INCREMENT
 ,CustomerId INT 
 ,ValidFrom DATE
 ,ValidTo DATE
);

CREATE TABLE Parking
(
  ParkingID INT PRIMARY KEY AUTO_INCREMENT
 ,LicensePlate VARCHAR(255) NOT NULL
 ,SeasonTicketID INT 
 ,EntryDate DATETIME
 ,ExitDate DATETIME
);

DROP TRIGGER tr_Parking;
DELIMITER $$
CREATE TRIGGER tr_Parking
BEFORE INSERT ON Parking 
FOR EACH ROW
BEGIN
  IF NEW.SeasonTicketId IS NOT NULL OR NOT EXISTS (SELECT * FROM SeasonTicket AS ST WHERE ST.SeasonTicketID = NEW.SeasonTicketID AND CURRENT_DATE() BETWEEN ST.ValidFrom AND ST.ValidTo)
  THEN SIGNAL SQLSTATE '45000' 
	   SET MESSAGE_TEXT = "This is not a valid seasonticket.";
  ELSEIF EXISTS (SELECT * FROM Parking AS P WHERE P.LicensePlate = NEW.LicensePlate AND P.ExitDate IS NULL)  
  THEN SIGNAL SQLSTATE '45000' 
	   SET MESSAGE_TEXT = "You're already parking in our lot.";  
  END IF;
END $$
DELIMITER ;

