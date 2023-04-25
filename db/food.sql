
-- database name:food
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
-- Database Food
-- restaurent owners

CREATE TABLE HOTEL (
    RID INT(5) NOT NULL,
    FNAME VARCHAR(200) NOT NULL,
    LNAME VARCHAR(200) NOT NULL,
    OPHN VARCHAR(200) NOT NULL,
    OEMAIL VARCHAR(100) NOT NULL,
    RNAME VARCHAR(200) NOT NULL,
    ADDRES VARCHAR(200) NOT NULL,
    LOCALITY VARCHAR(200) NOT NULL,
    PINCODE VARCHAR(100) NOT NULL,
    RTYPE VARCHAR(200) NOT NULL,
    ROPEN VARCHAR(200) NOT NULL,
    RCLOSE VARCHAR(200) NOT NULL,
    USERNAME VARCHAR(200) NOT NULL,
    PASSWORD VARCHAR(200) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------------------------------------------

-- ngo table

CREATE TABLE NGO (
    NID INT(5) NOT NULL,
    FNAME VARCHAR(200) NOT NULL,
    LNAME VARCHAR(200) NOT NULL,
    DPHN VARCHAR(200) NOT NULL,
    DEMAIL VARCHAR(100) NOT NULL,
    NNAME VARCHAR(200) NOT NULL,
    ADDRES VARCHAR(200) NOT NULL,
    LOCALITY VARCHAR(200) NOT NULL,
    PINCODE VARCHAR(100) NOT NULL,
    TOTAL   INT NOT NULL,
    WEBSITE VARCHAR(200) NOT NULL,
    EMAIL  VARCHAR(200) NOT NULL,
    USERNAME VARCHAR(200) NOT NULL,
    PASSWORD VARCHAR(200) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------------------------------------------------------------

-- donate table

CREATE TABLE DONATE (
DID INT(4) NOT NULL,
RID INT(5) NOT NULL,
DESCPT TEXT  NOT NULL,
SERVECOUNT INT NOT NULL,
TCLOSE VARCHAR(10) NOT NULL,
TDATE VARCHAR(10) NOT NULL,
STATUS VARCHAR(10) NOT NULL

)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------------------------------------

-- request table


CREATE TABLE REQUEST (
    ID INT(3) NOT NULL,
    NID INT (5) NOT NULL,
    RID  INT(5) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------------------------------------

-- primary key for hotel

ALTER TABLE HOTEL
  ADD PRIMARY KEY (RID);

-- primary key for ngo

ALTER TABLE NGO
  ADD PRIMARY KEY (NID);

-- primary key for donate

ALTER TABLE DONATE
  ADD PRIMARY KEY (DID);

-- primary key for request

ALTER TABLE REQUEST
  ADD PRIMARY KEY (ID);
  
-- ------------------------------------------------------------------------------------------


ALTER TABLE HOTEL
  MODIFY RID int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `NGO`
--
ALTER TABLE NGO
  MODIFY NID int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
-- AUTO_INCREMENT for table `DONATE`
ALTER TABLE DONATE
  MODIFY DID int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- AUTO_INCREMENT for table `REQUEST`
ALTER TABLE REQUEST
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

-- -------------------------------------------------------------------------

-- adding foreign key for donate i.e rid refers hotel table

ALTER TABLE DONATE
ADD CONSTRAINT  
FOREIGN KEY (RID)
REFERENCES HOTEL (RID);

-- adding foreign key for request i.e rid refers hotel table


ALTER TABLE REQUEST
ADD CONSTRAINT  
FOREIGN KEY (RID)
REFERENCES HOTEL (RID);

-- adding foreign key for request i.e nid refers ngo table

ALTER TABLE REQUEST
ADD CONSTRAINT  
FOREIGN KEY (NID)
REFERENCES NGO (NID);

-- ------------------------------------------------------------------------------------







