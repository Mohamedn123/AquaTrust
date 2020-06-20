-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2020 at 05:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aquatrust`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutusItems`
--

CREATE TABLE `aboutusItems` (
  `ID` int(11) NOT NULL,
  `Title` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutusItems`
--

INSERT INTO `aboutusItems` (`ID`, `Title`) VALUES
(2, 'Anti Deposition- Anti Bacterial- Anti Corrosion- Anti Pollution'),
(3, 'Anti-Corrosion Condensate Oil Refineries'),
(4, 'Cement Grinding Enhancers'),
(5, 'Reduction of Chromium in Cement'),
(6, 'Concrete Hardness Improvement Material'),
(7, 'Anti Foam for Phosphoric Acid'),
(13, 'Chemicals for Cooling Towers Water Treatment and Boilers.');

-- --------------------------------------------------------

--
-- Table structure for table `Certificates`
--

CREATE TABLE `Certificates` (
  `ID` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `ImagePath` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Certificates`
--

INSERT INTO `Certificates` (`ID`, `Title`, `ImagePath`) VALUES
(7, 'Safety', '../../Images/Certificates/5e752509104421.73954209.png'),
(8, 'Managment', '../../Images/Certificates/5e752689b95da6.70969951.png'),
(9, 'Energy Management System ', '../../Images/Certificates/5e7526a85c65c7.35153979.png'),
(10, 'Environmental ', '../../Images/Certificates/5e7526bb9baaf2.98302646.png');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Subject` varchar(256) NOT NULL,
  `Message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`ID`, `Name`, `Email`, `Subject`, `Message`) VALUES
(3, 'Mohamed Nashaat', 'mohamednashaat97@gmail.com', 'This is a test Title', 'This is a test Message');

-- --------------------------------------------------------

--
-- Table structure for table `HomePage`
--

CREATE TABLE `HomePage` (
  `About` varchar(5000) NOT NULL,
  `Mission` varchar(5000) NOT NULL,
  `Vision` varchar(5000) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `HomePage`
--

INSERT INTO `HomePage` (`About`, `Mission`, `Vision`, `ID`) VALUES
('Aqua trust is one of the largest Water Treatment companies in Egypt. The company\r\ndepends on advanced Technology in production of Scale inhibitors, Corrosion\r\ninhibitors, Anti foulants and Micro biocides as well as safe cleaners and antiefoam\r\nagents based on Organic–Green Chemical Technology.\r\nThe company Produces chemicals for the cement industry, reduction of chromium\r\nchromates and burn enhancers.\r\nAqua Trust company is a member in Chamber of Chemical Industries\r\nunder No. 1913 and works in the following fields:', 'Success of our technical programs depends on the accurate follow up through\r\ncontrol system applied by Aqua Trust company by their well-trained work team\r\nrepresented by their control devices and advanced developed laboratories that can\r\nmoves to the operation place with technical team to develop an immediate business\r\nplan.', 'Aqua Trust company depends on a scientific applied method through a whole\r\nIntegrated organization started by the experts from the company by collecting all\r\nkind of information whether it is about water treatment, Cement Grinding Aid or\r\nChromium redion chromium VI reducing agent.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `ID` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `ImagePath` varchar(256) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`ID`, `Title`, `Description`, `ImagePath`, `Time`) VALUES
(5, 'A seminar in Alexandria Company for Petroleum', 'The seminar also included the treatment of once through sea water cooling and some mechanical modifications were recommended. The boilers water treatment recommendations also discussed during a special session for all the related subjects about boilers, cleaning, pretreatment of boilers feed water and boiler water and steam treatment for the protection and optimization of the system operations.\r\n\r\nAQUATRUST prepared the technical materials which were handed to all the attendees, 30 engineers from Alexandria petroleum co. and 7 engineers from AQUATRUST FOR WATER TREATMENT and D.M.I.A.C, the training company in AQUATRUST GROUP', '../../Images/News/5e71346ca144c2.00552253.jpg', '2020-04-02 04:11:13'),
(6, 'The Conference Of Clean Environment Is a National Goal', 'Under the auspices of the Minister of State for Environmental Affairs\r\n\r\nDr / khaled Fahmy\r\n\r\nThe Conference Of\r\n\r\nClean Environment Is a National Goal  \r\n\r\n With the attendance of The General Manager-\r\n\r\n of Aqua Trust Company\r\n\r\n Eng / Faiza Abou Zeid\r\n\r\n-Three lectures held and  presented by Eng / Faiza Abou Zeid , as the following :-\r\n\r\n Maintaining Clean Cooling Systems :-  \r\n\r\nDiscuss the newly developed Green Chemical additives corrosion inhibitor and scale prevention of cooling water systems with minimum environmental impact and the application of some mechanical modification.\r\n\r\n-Wastewater Treatment :- \r\n\r\nTo manage water discharged from homes, businesses, and industries to reduce the threat of water pollution.\r\n\r\n-Hexavalent Chromium in Portland Cement :-\r\n\r\nDiscuss What problems does cement cause and clarify why Chromium VI compounds are classified as extremely toxic material.', '../../Images/News/5e71349097e2a1.95029729.jpeg', '2020-04-02 04:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Description`, `Type`) VALUES
(6, 'Corrosion Inhibitors', 'All based on organic Materials.\r\nDoesn\'t contain heavy metals.\r\nDoesn\'t contain inorganic phosphates.', 1),
(7, 'Scale Inhibitor', 'Based on co-polymers and ter polymers of PA and PMA to prevent the formation of\r\nhardness scale in the cooling systems and in boiler systems.', 1),
(8, 'Antifoulant disersants', 'Based on nonionic and sulfonated polymers to disperse organic matters oil, greases\r\nand air born contaminants a sand, dust, clays and dead microorganism.', 1),
(9, 'Corrosion Inhibitors for closed systems', 'chilled water and hot water system and high speed these engines cooling\r\nsystem are protected by aqua chill.', 1),
(10, 'Micro biocides for cooling water treatment', 'Organic chemicals - biodegradable to control the microbiological growth and fouling\r\nin the cooling water and cooling towers to prevent corrosion and deposition, of heat\r\nexchangers and cooling towers.', 1),
(11, 'Hardness Stabilizer, Ph Control Products and Scale Inhibitors', 'for boilers, to keep the boiler internals clean based on complex phosphate and\r\npolymers as hibred program or of completely solubilizing program, based on chelants\r\npolymers or phosphonate and polymers.', 2),
(12, 'Corrosion Inhibitors Based on Organic Materials', 'work as oxygen scavengers besides the production of traditional based sulfite and\r\nhydrazine products.', 2),
(13, 'Condensate System Corrosion Inhibitor', 'for CO2 complexing to prevent the corrosion problem in the steam generation entire\r\nsystem, pre boiler, boiler and after boiler system by using mixtures of volatile amines.', 2),
(14, 'Specialty Chemicals Production', '1- Cement Grinding Aids and strength Enhancer\r\n2- CHROMUIM-REDION\r\n3- CHROMIUM REDION Chromium VI reducing agent\r\n4- Superior Scale Inhibitor for R.0 Membrane\r\n5- Superior Scale Inhibitor for evaporators in desalination and suger mills and for\r\nmany other industries\r\n6- Corrosion Inhibitors for Refineries\r\n7- Aqua Trust for Treatment also produces Chemical Cleaning Products to remove all\r\ntypes of scales deposits from cooling system and boiler, based on organic chemicals\r\nand doesn&#39;t contain any mineral acids.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Username`, `Password`) VALUES
(13, 'root', '$2y$10$KeH9YmbPSfyKdNV/vvsiw.UbZD3.XrcOY9JwAakJrJBm1N.fnAlgS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutusItems`
--
ALTER TABLE `aboutusItems`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Certificates`
--
ALTER TABLE `Certificates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `HomePage`
--
ALTER TABLE `HomePage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutusItems`
--
ALTER TABLE `aboutusItems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Certificates`
--
ALTER TABLE `Certificates`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `HomePage`
--
ALTER TABLE `HomePage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
