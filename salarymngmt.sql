-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2019 at 11:36 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salarymngmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `AdminID` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`AdminID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

DROP TABLE IF EXISTS `tbl_attendance`;
CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `AttendanceID` int(100) NOT NULL AUTO_INCREMENT,
  `Date` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `AttendancePA` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`AttendanceID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`AttendanceID`, `Date`, `EmployeeID`, `AttendancePA`, `Remarks`) VALUES
(1, '2019-01-07', 'Dipak Jala', 'Absent', ''),
(2, '2019-01-07', 'Gaurav', 'Present', ''),
(3, '2019-01-07', 'Hiren Patel', 'Present', ''),
(4, '2019-01-07', 'jay rana', 'Present', ''),
(5, '2019-01-07', 'Jigar Gadiya', 'Present', ''),
(6, '2019-01-07', 'Kiran Rana', 'Present', ''),
(7, '2019-01-07', 'mantra suthar', 'Present', ''),
(8, '2019-01-07', 'Prakash Jala', 'Present', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

DROP TABLE IF EXISTS `tbl_department`;
CREATE TABLE IF NOT EXISTS `tbl_department` (
  `DepartmentID` int(100) NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(50) NOT NULL,
  PRIMARY KEY (`DepartmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`DepartmentID`, `DepartmentName`) VALUES
(1, 'HR'),
(2, 'Sales'),
(3, 'Handle'),
(4, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

DROP TABLE IF EXISTS `tbl_designation`;
CREATE TABLE IF NOT EXISTS `tbl_designation` (
  `DesignationID` int(100) NOT NULL AUTO_INCREMENT,
  `DesignationName` varchar(50) NOT NULL,
  PRIMARY KEY (`DesignationID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`DesignationID`, `DesignationName`) VALUES
(1, 'Attendance'),
(2, 'Sales Manager'),
(3, 'Team Leader'),
(5, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `EmployeeID` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `MobileNo` varchar(20) NOT NULL,
  `AlterMobNo` varchar(20) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `AadharNo` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Active` varchar(20) NOT NULL,
  `BasicPay` varchar(50) NOT NULL,
  `DepartmentID` varchar(10) NOT NULL,
  `DesignationID` varchar(10) NOT NULL,
  `LeaveDays` varchar(50) NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`EmployeeID`, `Name`, `Address`, `MobileNo`, `AlterMobNo`, `EmailID`, `AadharNo`, `Username`, `Password`, `Active`, `BasicPay`, `DepartmentID`, `DesignationID`, `LeaveDays`) VALUES
(1, 'Hiren Patel', 'Chandkheda', '9639639636', '9515951555', 'hiren@mail.com', '369852147855', 'hiren', 'hiren', 'Yes', '15000', '1', '1', '10'),
(2, 'Dipak Jala', 'Chankyapuri', '9638527414', '9638527414', 'dipak@mail.com', '123456789456', 'dipak', 'dipak', 'Yes', '16000', '2', '2', '10'),
(3, 'Jigar Gadiya', 'Rajkot', '9632587415', '9632587415', 'jigar@mail.com', '123456789456', 'jigar', 'jigar', 'Yes', '12000', '3', '3', '10'),
(4, 'Kiran Rana', 'hariyana', '1234567894', '1234567894', 'kiran@mail.com', '123456789123', 'kiran', 'kiran', 'Yes', '12000', '3', '3', '10'),
(5, 'Gaurav', 'junagadh', '124567894', '1234567894', 'gaurav@mail.com', '123456789412', 'gaurav', 'gaurav', 'Yes', '11000', '4', '5', '10'),
(6, 'Prakash Jala', 'Sananad', '1234567894', '1234567894', 'prakash@mail.com', '123456789456', 'prakash', 'prakash', 'Yes', '11000', '4', '5', '10'),
(7, 'mantra suthar', 'vijalpor', '9638527415', '9638527415', 'mantra@mail.com', '321456985555', 'mantra', 'mantra', 'Yes', '11500', '4', '5', '10'),
(8, 'jay rana', 'navsari', '3216549874', '3216549874', 'jay@mail.com', '123456789412', 'jay', 'jay', 'Yes', '11300', '4', '5', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaverequest`
--

DROP TABLE IF EXISTS `tbl_leaverequest`;
CREATE TABLE IF NOT EXISTS `tbl_leaverequest` (
  `LeaveRequestID` int(100) NOT NULL AUTO_INCREMENT,
  `EmployeeID` varchar(50) NOT NULL,
  `DateFrom` varchar(50) NOT NULL,
  `DateTo` varchar(50) NOT NULL,
  `LeaveDaysA` varchar(50) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  `Approve` varchar(50) NOT NULL,
  `ApproveBy` varchar(50) NOT NULL,
  PRIMARY KEY (`LeaveRequestID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leaverequest`
--

INSERT INTO `tbl_leaverequest` (`LeaveRequestID`, `EmployeeID`, `DateFrom`, `DateTo`, `LeaveDaysA`, `Remarks`, `Approve`, `ApproveBy`) VALUES
(1, '2', '2019-01-07', '2019-01-10', '3', 'For Weding', 'Approved', 'hiren');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `ProductID` int(100) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`ProductID`, `ProductName`, `ProductPrice`, `Description`) VALUES
(1, 'Hundai i20', '6,50,000', 'This Is Middle Model'),
(2, 'Honda Civik', '7,50,000', 'This Is Top Model');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

DROP TABLE IF EXISTS `tbl_salary`;
CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `SalaryID` int(100) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(50) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `Insentive` varchar(50) NOT NULL,
  `TotalSalary` varchar(50) NOT NULL,
  `TargetAchive` varchar(50) NOT NULL,
  PRIMARY KEY (`SalaryID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`SalaryID`, `Designation`, `EmpName`, `Insentive`, `TotalSalary`, `TargetAchive`) VALUES
(1, 'SalesManager', 'Dipak Jala', '', '16000', 'No'),
(2, 'Employee', 'mantra suthar', '230', '11730', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_selling`
--

DROP TABLE IF EXISTS `tbl_selling`;
CREATE TABLE IF NOT EXISTS `tbl_selling` (
  `SellingID` int(100) NOT NULL AUTO_INCREMENT,
  `ProductID` varchar(50) NOT NULL,
  `ProductPrice` varchar(50) NOT NULL,
  `Target` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `SellDate` varchar(50) NOT NULL,
  PRIMARY KEY (`SellingID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_selling`
--

INSERT INTO `tbl_selling` (`SellingID`, `ProductID`, `ProductPrice`, `Target`, `EmployeeID`, `SellDate`) VALUES
(1, '1', 'Hundai i20 = 6,50,000', '4', '8', '2019-01-23'),
(2, '1', 'Hundai i20 = 6,50,000', '5', '6', '2019-01-18'),
(3, '2', 'Honda Civik = 7,50,000', '5', '7', '2019-01-18'),
(4, '2', 'Honda Civik = 7,50,000', '4', '5', '2019-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sellingtargetleader`
--

DROP TABLE IF EXISTS `tbl_sellingtargetleader`;
CREATE TABLE IF NOT EXISTS `tbl_sellingtargetleader` (
  `TargetTeamLeaderID` int(100) NOT NULL AUTO_INCREMENT,
  `ProductID` varchar(50) NOT NULL,
  `ProductPrice` varchar(50) NOT NULL,
  `Target` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `SellDate` varchar(50) NOT NULL,
  PRIMARY KEY (`TargetTeamLeaderID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sellingtargetleader`
--

INSERT INTO `tbl_sellingtargetleader` (`TargetTeamLeaderID`, `ProductID`, `ProductPrice`, `Target`, `EmployeeID`, `SellDate`) VALUES
(1, '1', 'Hundai i20 = 6,50,000', '9', '3', '2019-01-30'),
(2, '2', 'Honda Civik = 7,50,000', '9', '4', '2019-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sellingtargetsalemngr`
--

DROP TABLE IF EXISTS `tbl_sellingtargetsalemngr`;
CREATE TABLE IF NOT EXISTS `tbl_sellingtargetsalemngr` (
  `TargetSaleMngrID` int(100) NOT NULL AUTO_INCREMENT,
  `ProductID` varchar(50) NOT NULL,
  `ProductPrice` varchar(50) NOT NULL,
  `Target` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  `SellDate` varchar(50) NOT NULL,
  PRIMARY KEY (`TargetSaleMngrID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sellingtargetsalemngr`
--

INSERT INTO `tbl_sellingtargetsalemngr` (`TargetSaleMngrID`, `ProductID`, `ProductPrice`, `Target`, `EmployeeID`, `SellDate`) VALUES
(1, '2', 'Honda Civik = 7,50,000', '9', '2', '2019-01-30'),
(2, '1', 'Hundai i20 = 6,50,000', '9', '2', '2019-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift`
--

DROP TABLE IF EXISTS `tbl_shift`;
CREATE TABLE IF NOT EXISTS `tbl_shift` (
  `ShiftID` int(100) NOT NULL AUTO_INCREMENT,
  `ShiftName` varchar(50) NOT NULL,
  `ShiftTime` varchar(50) NOT NULL,
  PRIMARY KEY (`ShiftID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shift`
--

INSERT INTO `tbl_shift` (`ShiftID`, `ShiftName`, `ShiftTime`) VALUES
(1, 'Morning', '08 AM To 03 PM'),
(2, 'Evening', '04 PM To 12 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shiftallot`
--

DROP TABLE IF EXISTS `tbl_shiftallot`;
CREATE TABLE IF NOT EXISTS `tbl_shiftallot` (
  `ShiftAllotID` int(100) NOT NULL AUTO_INCREMENT,
  `EmployeeID` varchar(50) NOT NULL,
  `ShiftID` varchar(50) NOT NULL,
  PRIMARY KEY (`ShiftAllotID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shiftallot`
--

INSERT INTO `tbl_shiftallot` (`ShiftAllotID`, `EmployeeID`, `ShiftID`) VALUES
(1, '1', '1'),
(2, '2', '1'),
(3, '3', '1'),
(4, '4', '2'),
(5, '5', '1'),
(6, '6', '2'),
(7, '7', '1'),
(8, '8', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shiftchangerequest`
--

DROP TABLE IF EXISTS `tbl_shiftchangerequest`;
CREATE TABLE IF NOT EXISTS `tbl_shiftchangerequest` (
  `ShiftChangeReqID` int(100) NOT NULL AUTO_INCREMENT,
  `EmployeeID` varchar(50) NOT NULL,
  `CurruntShift` varchar(50) NOT NULL,
  `RequestedShift` varchar(50) NOT NULL,
  `Approved` varchar(50) NOT NULL,
  `ApprovedBy` varchar(50) NOT NULL,
  PRIMARY KEY (`ShiftChangeReqID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shiftchangerequest`
--

INSERT INTO `tbl_shiftchangerequest` (`ShiftChangeReqID`, `EmployeeID`, `CurruntShift`, `RequestedShift`, `Approved`, `ApprovedBy`) VALUES
(1, '2', '08 AM To 04 PM', '04 PM To 12 AM', 'Reject', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target`
--

DROP TABLE IF EXISTS `tbl_target`;
CREATE TABLE IF NOT EXISTS `tbl_target` (
  `TargetID` int(100) NOT NULL AUTO_INCREMENT,
  `ProductID` varchar(50) NOT NULL,
  `Target` varchar(50) NOT NULL,
  `TargetDescription` varchar(1000) NOT NULL,
  `SalesManagerInsntv` varchar(50) NOT NULL,
  `TeamLeaderInsntv` varchar(50) NOT NULL,
  `EmplyoeeInsntv` varchar(50) NOT NULL,
  `Month` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  PRIMARY KEY (`TargetID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_target`
--

INSERT INTO `tbl_target` (`TargetID`, `ProductID`, `Target`, `TargetDescription`, `SalesManagerInsntv`, `TeamLeaderInsntv`, `EmplyoeeInsntv`, `Month`, `Year`) VALUES
(1, '1', '10', 'Product Sell 10 This Moth', '4', '3', '2', 'January', '2019'),
(2, '2', '10', 'This Prduct Sell 10 This Month', '4', '3', '2', 'January', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_targetassign`
--

DROP TABLE IF EXISTS `tbl_targetassign`;
CREATE TABLE IF NOT EXISTS `tbl_targetassign` (
  `AssignID` int(100) NOT NULL AUTO_INCREMENT,
  `ProductID` varchar(50) NOT NULL,
  `TargetA` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL,
  PRIMARY KEY (`AssignID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_targetassign`
--

INSERT INTO `tbl_targetassign` (`AssignID`, `ProductID`, `TargetA`, `EmployeeID`) VALUES
(5, '2', '10', '2'),
(4, '1', '10', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_targetassignemplyoee`
--

DROP TABLE IF EXISTS `tbl_targetassignemplyoee`;
CREATE TABLE IF NOT EXISTS `tbl_targetassignemplyoee` (
  `TargetAssignEmpID` int(100) NOT NULL AUTO_INCREMENT,
  `EmployeeID` varchar(50) NOT NULL,
  `ProductID` varchar(50) NOT NULL,
  `TargetA` varchar(50) NOT NULL,
  `AssignEmp` varchar(50) NOT NULL,
  PRIMARY KEY (`TargetAssignEmpID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_targetassignemplyoee`
--

INSERT INTO `tbl_targetassignemplyoee` (`TargetAssignEmpID`, `EmployeeID`, `ProductID`, `TargetA`, `AssignEmp`) VALUES
(1, '8', '1', '5', 'jigar'),
(2, '6', '1', '5', 'jigar'),
(3, '7', '2', '5', 'kiran'),
(4, '5', '2', '5', 'kiran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_targetassignteamleader`
--

DROP TABLE IF EXISTS `tbl_targetassignteamleader`;
CREATE TABLE IF NOT EXISTS `tbl_targetassignteamleader` (
  `TargetAssignID` int(100) NOT NULL AUTO_INCREMENT,
  `EmployeeID` varchar(50) NOT NULL,
  `ProductID` varchar(50) NOT NULL,
  `TargetA` varchar(50) NOT NULL,
  `AssignEmp` varchar(50) NOT NULL,
  PRIMARY KEY (`TargetAssignID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_targetassignteamleader`
--

INSERT INTO `tbl_targetassignteamleader` (`TargetAssignID`, `EmployeeID`, `ProductID`, `TargetA`, `AssignEmp`) VALUES
(1, '3', '1', '10', 'dipak'),
(2, '4', '2', '10', 'dipak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
