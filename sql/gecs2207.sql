-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 01:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gecs2207`
--

-- --------------------------------------------------------

--
-- Table structure for table `audittable`
--

CREATE TABLE `audittable` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `ipaddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audittable`
--

INSERT INTO `audittable` (`Username`, `Password`, `time`, `ipaddress`) VALUES
('akshay', 'akshay', '2018-06-22 11:23:25am', ''),
('akshay', 'akshay', '2018-06-22 11:24:28am', ''),
('kasksak', 'sadja', '2018-06-22 11:25:53am', ''),
('asdad', 'adasd', '2018-06-22 11:26:14am', ''),
('asdas', 'sdds', '2018-06-22 11:26:39am', ''),
('20180622005', 'Gqc7q522B#19', '2018-06-22 11:34:25am', ''),
('20180625002', '7c179900ec33dc601539fb21f2d855b0', '2018-06-25 09:32:22am', ''),
('asdasd', 'a8f5f167f44f4964e6c998dee827110c', '2018-06-25 09:58:31am', '::1'),
('iqwieo', '4df312446cdc535ce60399ebfe7408c0', '2018-06-25 09:59:27am', '::1'),
('dds', 'cc2bd8f09bb88b5dd20f9b432631b8ca', '2018-06-25 09:59:57am', '::1'),
('dds', 'cc2bd8f09bb88b5dd20f9b432631b8ca', '2018-06-25 10:00:27am', '::1'),
('20180625004', 'c99a11a53a3748269e3f86d7ac38df11', '2018-06-25 11:02:01am', '::1'),
('20180625004', 'fdb71b0dc0fe48250bfef9ece1f103d9', '2018-06-25 11:02:10am', '::1'),
('20180701001', 'c897cc14d76858636d7cf03da9eb0b94', '2018-07-01 02:55:06pm', '::1'),
('20180701001', 'a8f5f167f44f4964e6c998dee827110c', '2018-07-01 02:55:12pm', '::1'),
('akshay', '2de1b2d6a6738df78c5f9733853bd170', '2018-07-03 02:11:35pm', '::1'),
('akshay', '2de1b2d6a6738df78c5f9733853bd170', '2018-07-03 02:11:47pm', '::1'),
('akshay', '7815696ecbf1c96e6894b779456d330e', '2018-07-03 02:12:39pm', '::1'),
('20180625004', 'fdb71b0dc0fe48250bfef9ece1f103d9', '2018-07-03 02:14:32pm', '::1'),
('20180625004', 'fdb71b0dc0fe48250bfef9ece1f103d9', '2018-07-03 02:18:16pm', '::1'),
('20180625004', 'fdb71b0dc0fe48250bfef9ece1f103d9', '2018-07-03 02:19:20pm', '::1'),
('20180625004', 'fdb71b0dc0fe48250bfef9ece1f103d9', '2018-07-03 02:23:04pm', '::1'),
('akshay', '2de1b2d6a6738df78c5f9733853bd170', '2018-07-04 07:28:50pm', '::1'),
('akshay', '2de1b2d6a6738df78c5f9733853bd170', '2018-07-04 07:28:57pm', '::1'),
('akshay', '2de1b2d6a6738df78c5f9733853bd170', '2018-07-04 07:29:05pm', '::1'),
('asd', '7815696ecbf1c96e6894b779456d330e', '2018-07-04 07:29:35pm', '::1'),
('asd', 'asd', '2018-07-04 07:30:44pm', '::1'),
('akshay', 'akshay', '2018-07-04 07:30:52pm', '::1'),
('akshay', 'akshay', '2018-07-04 07:36:47pm', '::1'),
('akshay', 'akshay', '2018-07-04 07:37:52pm', '::1'),
('akshay', 'akshay]', '2018-07-04 07:38:01pm', '::1'),
('akshay', 'akshay]', '2018-07-04 07:39:25pm', '::1'),
('akshay', 'akshay', '2018-07-04 07:39:38pm', '::1'),
('akshay', 'akshay', '2018-07-05 06:28:32am', '::1'),
('akshay', 'akshay', '2018-07-08 08:53:41am', '::1'),
('akshay', 'akshay', '2018-07-08 09:01:42am', '::1'),
('akshay', 'akshay', '2018-07-08 09:46:05am', '::1'),
('akshay', '2de1b2d6a6738df78c5f9733853bd170', '2018-07-12 03:55:38pm', '::1'),
('akshay', '2de1b2d6a6738df78c5f9733853bd170', '2018-07-12 03:55:44pm', '::1'),
('akshay', 'akshay', '2018-07-12 05:13:50pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-14 10:09:19am', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-14 10:09:24am', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-14 10:10:44am', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-14 10:11:57am', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-16 08:05:45pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-16 08:10:40pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-18 03:57:15pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-19 04:36:04am', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-19 04:48:48am', '::1'),
('20180719001', '59274ff2254946cae5844719240d8548', '2018-07-19 05:11:17am', '::1'),
('20180719001', 'e964354e7e135aa4cf28a1e5fb7eefe9', '2018-07-19 05:12:08am', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-24 02:55:03pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-24 03:06:30pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-24 03:32:14pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-24 03:33:02pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-24 03:46:42pm', '::1'),
('admin', 'e00cf25ad42683b3df678c61f42c6bda', '2018-07-24 03:46:46pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-24 03:47:05pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-27 02:40:11pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-27 02:40:59pm', '::1'),
('admin', 'e00cf25ad42683b3df678c61f42c6bda', '2018-07-27 02:41:03pm', '::1'),
('20180818001', '73ff678d171004b969d98de52898511e', '2018-08-18 09:33:53pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-08-22 12:41:40pm', '::1'),
('admin', 'e00cf25ad42683b3df678c61f42c6bda', '2018-08-22 12:41:44pm', '::1'),
('admin', 'e00cf25ad42683b3df678c61f42c6bda', '2018-08-22 12:42:03pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-08-22 12:42:10pm', '::1'),
('20180822001', '9981425ed9b1c0a52620f9db0f8ceb1b', '2018-08-22 12:42:58pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-08-22 12:49:58pm', '::1'),
('20180822001', '9981425ed9b1c0a52620f9db0f8ceb1b', '2018-08-22 12:50:16pm', '::1'),
('20180822001', '9981425ed9b1c0a52620f9db0f8ceb1b', '2018-08-22 12:50:22pm', '::1'),
('admin', '21232f297a57a5a743894a0e4a801fc3', '2018-08-22 12:50:52pm', '::1'),
('admin', 'admin', '2018-08-22 12:57:22pm', '::1'),
('admin', 'admin', '2018-08-22 12:57:29pm', '::1'),
('20180822001', 'qr3cSe%EHm\"\"', '2018-08-22 12:58:30pm', '::1'),
('admin', 'admin', '2018-08-22 12:58:46pm', '::1'),
('admin', 'admin', '2018-08-22 01:11:33pm', '::1'),
('admin', 'admin', '2018-08-22 01:23:27pm', '::1'),
('admin', 'admin1', '2018-08-22 01:23:44pm', '::1'),
('admin', 'admin', '2018-08-22 01:24:02pm', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `dhigecs_state`
--

CREATE TABLE `dhigecs_state` (
  `S.No.` int(2) DEFAULT NULL,
  `State Code` int(2) NOT NULL,
  `State Version` int(1) DEFAULT NULL,
  `State Name(In English)` varchar(27) DEFAULT NULL,
  `State Name (In Local)` varchar(27) DEFAULT NULL,
  `Census 2001 Code` varchar(2) DEFAULT NULL,
  `Census 2011 Code` int(2) DEFAULT NULL,
  `State or UT` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dhigecs_state`
--

INSERT INTO `dhigecs_state` (`S.No.`, `State Code`, `State Version`, `State Name(In English)`, `State Name (In Local)`, `Census 2001 Code`, `Census 2011 Code`, `State or UT`) VALUES
(1, 35, 1, 'ANDAMAN AND NICOBAR ISLANDS', 'ANDAMAN AND NICOBAR ISLANDS', '35', 35, 'U'),
(2, 28, 2, 'ANDHRA PRADESH', 'ANDHRA PRADESH', '28', 28, 'S'),
(3, 12, 1, 'ARUNACHAL PRADESH', 'ARUNACHAL PRADESH', '12', 12, 'S'),
(4, 18, 1, 'ASSAM', 'ASSAM', '18', 18, 'S'),
(5, 10, 1, 'BIHAR', 'BIHAR', '10', 10, 'S'),
(6, 4, 1, 'CHANDIGARH', 'CHANDIGARH', '4', 4, 'U'),
(7, 22, 1, 'CHHATTISGARH', 'CHHATTISGARH', '22', 22, 'S'),
(8, 26, 1, 'DADRA AND NAGAR HAVELI', 'DADRA AND NAGAR HAVELI', '26', 26, 'U'),
(9, 25, 1, 'DAMAN AND DIU', 'DAMAN AND DIU', '25', 25, 'U'),
(10, 7, 1, 'DELHI', 'DELHI', '7', 7, 'U'),
(11, 30, 1, 'GOA', 'GOA', '30', 30, 'S'),
(12, 24, 1, 'GUJARAT', 'GUJARAT', '24', 24, 'S'),
(13, 6, 1, 'HARYANA', 'HARYANA', '6', 6, 'S'),
(14, 2, 1, 'HIMACHAL PRADESH', 'HIMACHAL PRADESH', '2', 2, 'S'),
(15, 1, 1, 'JAMMU AND KASHMIR', 'JAMMU AND KASHMIR', '1', 1, 'S'),
(16, 20, 1, 'JHARKHAND', 'JHARKHAND', '20', 20, 'S'),
(17, 29, 1, 'KARNATAKA', 'KARNATAKA', '29', 29, 'S'),
(18, 32, 1, 'KERALA', 'KERALA', '32', 32, 'S'),
(19, 31, 1, 'LAKSHADWEEP', 'LAKSHADWEEP', '31', 31, 'U'),
(20, 23, 1, 'MADHYA PRADESH', 'MADHYA PRADESH', '23', 23, 'S'),
(21, 27, 1, 'MAHARASHTRA', 'MAHARASHTRA', '27', 27, 'S'),
(22, 14, 1, 'MANIPUR', 'MANIPUR', '14', 14, 'S'),
(23, 17, 1, 'MEGHALAYA', 'MEGHALAYA', '17', 17, 'S'),
(24, 15, 1, 'MIZORAM', 'MIZORAM', '15', 15, 'S'),
(25, 13, 1, 'NAGALAND', 'NAGALAND', '13', 13, 'S'),
(26, 21, 1, 'ODISHA', 'ODISHA', '21', 21, 'S'),
(27, 34, 1, 'PUDUCHERRY', 'PUDUCHERRY', '34', 34, 'U'),
(28, 3, 1, 'PUNJAB', 'PUNJAB', '3', 3, 'S'),
(29, 8, 1, 'RAJASTHAN', 'RAJASTHAN', '8', 8, 'S'),
(30, 11, 1, 'SIKKIM', 'SIKKIM', '11', 11, 'S'),
(31, 33, 1, 'TAMIL NADU', 'TAMIL NADU', '33', 33, 'S'),
(32, 36, 1, 'TELANGANA', 'TELANGANA', '', 0, 'S'),
(33, 16, 1, 'TRIPURA', 'TRIPURA', '16', 16, 'S'),
(34, 5, 1, 'UTTARAKHAND', 'UTTARAKHAND', '5', 5, 'S'),
(35, 9, 1, 'UTTAR PRADESH', 'UTTAR PRADESH', '9', 9, 'S'),
(36, 19, 1, 'WEST BENGAL', 'WEST BENGAL', '19', 19, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`Username`, `Password`) VALUES
('admin', 'admin'),
('akshay', 'akshay');

-- --------------------------------------------------------

--
-- Table structure for table `fakeuser`
--

CREATE TABLE `fakeuser` (
  `Id` int(50) NOT NULL,
  `BId` varchar(12) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakeuser`
--

INSERT INTO `fakeuser` (`Id`, `BId`, `Name`, `State`, `Status`) VALUES
(1, '20180627001', 'Akshay', 'Haryana', 'Busy'),
(2, '20180627002', 'Sushant', 'Delhi', 'Busy'),
(3, '20180822008', 'random hari something', 'LAKSHADWEEP', NULL),
(4, '20180822009', 'Akshay   ok', 'KERALA', NULL),
(5, '20180822010', 'Akshay  oksoadkoaskdo om', 'JAMMU AND KASHMIR', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(7) NOT NULL,
  `file_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gecs_professions`
--

CREATE TABLE `gecs_professions` (
  `GecsProfId` tinyint(4) NOT NULL,
  `GecsProfName` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gecs_professions`
--

INSERT INTO `gecs_professions` (`GecsProfId`, `GecsProfName`) VALUES
(1, 'Government Service'),
(2, 'Student'),
(3, 'Business'),
(4, 'Professor'),
(5, 'Artist'),
(6, 'Exservice Man');

-- --------------------------------------------------------

--
-- Table structure for table `tabledoctor`
--

CREATE TABLE `tabledoctor` (
  `name` varchar(50) NOT NULL,
  `generalmedicalcondition` varchar(10) NOT NULL,
  `generalstateofhealth` varchar(10) NOT NULL,
  `vision` varchar(10) NOT NULL,
  `hearing` varchar(10) NOT NULL,
  `stateofmentalhealth` varchar(10) NOT NULL,
  `impairment` varchar(40) NOT NULL,
  `percentageofdisability` varchar(10) NOT NULL,
  `use_app` varchar(10) NOT NULL,
  `permanantnature` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabledoctor`
--

INSERT INTO `tabledoctor` (`name`, `generalmedicalcondition`, `generalstateofhealth`, `vision`, `hearing`, `stateofmentalhealth`, `impairment`, `percentageofdisability`, `use_app`, `permanantnature`) VALUES
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '7', 'nothing', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '77', 'anything', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '77', 'ss', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '77', 'none', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '7', '7', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '7', 'as', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '7', 'j', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '77', 'as', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '7', 'sdsd', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '89', 'nothing', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '89', 'nothing', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '78', 'as', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '78', 'nothing', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '78', 'nothing', 'Yes'),
('20180627002', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '78', 'asads', 'Yes'),
('Akshay', 'Good', 'Good', 'Good', 'Good', 'Good', 'Paralysis', '45', 'none', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `benificiary_id` varchar(12) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `father_name` varchar(60) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `license` varchar(20) DEFAULT NULL,
  `income` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`benificiary_id`, `user_name`, `father_name`, `nationality`, `gender`, `address`, `city`, `state`, `profession`, `aadhar`, `phone`, `email`, `license`, `income`) VALUES
('20180622001', 'Deepanshu  Sehgal', 'Akshay  Venkatesan', 'Indian', 'Male', 'D22, Saharanpur ,road ,Dadra and Nagar Haveli ,Dadra and Nagar Haveli', 'Dadra and Nagar Haveli', 'Dadra and Nagar Haveli', 'Student', '2147483647', '2147483647', 'sehgaldeepanshu985@gmail.com', NULL, ''),
('20180622002', 'Akshay  Venkatesan', 'Akshay  Venkatesan', 'Indian', 'Male', '69, Dhobhi ghaat ,road ,Lower Subansiri ,Arunachal Pradesh', 'Lower Subansiri', 'Arunachal Pradesh', 'Student', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '898989898', ''),
('20180622003', 'deepanshu  asdads', 'ad sasds asdsasd', 'Indian', 'Male', '98, Jawahar Apartments ,adad ,Dhar ,Madhya Pradesh', 'Dhar', 'Madhya Pradesh', 'Student', '111111111111', '9958684393', 'sushant.sharma9871@gmail.com', '123123123123', ''),
('20180622004', 'random  om', 'asd  asdasd', 'Australia', 'Male', '58, Jawahar Apartments,Sec-56,Gurgaon, sd ,road ,Thrissur ,Kerala', 'Thrissur', 'Kerala', 'Student', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '', ''),
('20180622005', 'sumen  mallick', 'sumen  mallick', 'Indian', 'Male', 'dff, kjkj ,kj ,New Delhi ,Delhi', 'New Delhi', 'Delhi', 'Student', '989898989898', '9134578787', 'sumen111mallick@gmail.com', '', ''),
('20180622006', 'nazzi  bhadew', 'ama  baap', 'Indian', 'Female', '69, 69 ,69 ,Kondagaon ,Chattisgarhh', 'Kondagaon', 'Chattisgarhh', 'Student', '888888888888', '5959595959', 'iamakshay.v@gmail.com', '', ''),
('20180625001', 'Something something something', 'some sdas asdkjasd', 'Indian', 'Male', '88, 88 ,88 ,Anjaw ,Arunachal Pradesh', 'Anjaw', 'Arunachal Pradesh', 'Student', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '89898989899', ''),
('20180625002', 'Sushant Singh Rajput', 'Sushant  Sharma', 'Indian', 'Female', '66, 55 ,77 ,Madhepura ,Bihar', 'Madhepura', 'Bihar', 'Student', '111111111111', '9898989898', 'iamakshay.v@gmail.com', '', ''),
('20180625003', 'oksodk oksoadkoaskdo kqks', 'das qpok dn', 'Indian', 'Male', '69, sd ,road ,Lakshadweep District ,Lakshadweep', 'Lakshadweep District', 'Lakshadweep', 'Student', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180625004', 'asdbj a askdb', 'asuodhasd adsd asoduh', 'Indian', 'Male', '59, 595 ,59 ,Dadra and Nagar Haveli ,Dadra and Nagar Haveli', 'Dadra and Nagar Haveli', 'Dadra and Nagar Haveli', 'Student', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180701001', 'Yatharth Bhosdiwala Pandey', 'Akshay  Venkatesan', 'Pakistani', 'on', '5031, Estancia ,Guduvancherri ,North ,Delhi', 'North', 'Delhi', 'Student', '565555555555', '9895265652', 'ypandey649@gmail.com', '', ''),
('20180708001', 'Akshay  Venkatesan', 'Akshay  Akshay', 'Indian', 'Male', 'asdas, sanj ,sadn ,Chandigarh ,Chandigarh', 'Chandigarh', 'Chandigarh', 'Government Service', '999999999999', '8888888888', 'iamakshay.v@gmail.com', '', ''),
('20180719001', 'jumar kumar gupta', 'tumar kumar gupta', 'Indian', 'Male', '12, 121 ,sundari ad sathiyamani sbt, defense colony, new delhi ,Select city ,', 'Select city', '', 'Government Service', '123456789012', '9868100830', 'satya@nic.in', '', ''),
('20180722001', 'laaassss sasasas sasasasa', 'xxaxxxxxx xxxxxxxxx gggggggg', 'Indian', 'Male', 'sasasa, sasasa ,sxasasas ,Select city ,', 'Select city', '', 'Student', '', '', '', 'fdfdfdfsdffsd', ''),
('20180818001', 'Akshay Singh Venkatesan', 'asdasd sadas sad', 'Indian', 'Male', '58, sd ,road ,Gurgaon ,KARNATAKA', 'Gurgaon', 'KARNATAKA', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '89898989899', ''),
('20180818002', 'Sushant asdasd asd', 'asdasd sadassdsd sasdsd', 'Indian', 'Male', '58, sd ,road ,Gurgaon ,KARNATAKA', 'Gurgaon', 'KARNATAKA', '', '111111111111', '9958684393', 'sushant.sharma9871@gmail.com', '89898989899', ''),
('20180822001', 'Akshay  Venkatesan', 'Srinivasan  Venkatesan', 'Australian', 'Male', '69, Dhobhi ghaat ,road ,Srinagar ,JAMMU AND KASHMIR', 'Srinagar', 'JAMMU AND KASHMIR', '', '777777777777', '0000000000', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822002', 'Akshay something Venkatesan', 'asdads asdasd asdads', 'Indian', 'Male', '89, Jawahar Apartments ,sad ,Gurgaon ,ARUNACHAL PRADESH', 'Gurgaon', 'ARUNACHAL PRADESH', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822003', 'Akshay something Venkatesan', 'asdads asdasd asdads', 'Indian', 'Male', '89, Jawahar Apartments ,sad ,Gurgaon ,ARUNACHAL PRADESH', 'Gurgaon', 'ARUNACHAL PRADESH', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822004', 'Akshay something Venkatesan', 'asdads asdasd asdads', 'Indian', 'Male', '89, Jawahar Apartments ,sad ,Gurgaon ,ARUNACHAL PRADESH', 'Gurgaon', 'ARUNACHAL PRADESH', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822005', 'random hari something', 'asdasd asd asdasd', 'Indian', 'Female', '98, 55 ,Tower-5 ,gurgaon ,LAKSHADWEEP', 'gurgaon', 'LAKSHADWEEP', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822006', 'random hari something', 'asdasd asd asdasd', 'Indian', 'Female', '98, 55 ,Tower-5 ,gurgaon ,LAKSHADWEEP', 'gurgaon', 'LAKSHADWEEP', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822007', 'random hari something', 'asdasd asd asdasd', 'Indian', 'Female', '98, 55 ,Tower-5 ,gurgaon ,LAKSHADWEEP', 'gurgaon', 'LAKSHADWEEP', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822008', 'random hari something', 'asdasd asd asdasd', 'Indian', 'Female', '98, 55 ,Tower-5 ,gurgaon ,LAKSHADWEEP', 'gurgaon', 'LAKSHADWEEP', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', ''),
('20180822009', 'Akshay   ok', 'asdasd  ddd', 'Indian', 'Female', '58, sd ,SRM University ,gurgaon ,KERALA', 'gurgaon', 'KERALA', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '89898989899', ''),
('20180822010', 'Akshay  oksoadkoaskdo om', 'asd asd asdasd', 'Indian', 'Male', '69, asd ,road ,Gurgaon ,JAMMU AND KASHMIR', 'Gurgaon', 'JAMMU AND KASHMIR', '', '111111111111', '9958684393', 'iamakshay.v@gmail.com', '123123123123', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Username`, `Password`) VALUES
('20180625001', '&dH2jJ3E7h5\"'),
('20180625002', '7c179900ec33dc601539fb21f2d855b0'),
('20180625003', '836e36656b3d15e2990b78bd477a94d9'),
('20180625004', 'fdb71b0dc0fe48250bfef9ece1f103d9'),
('20180701001', 'c897cc14d76858636d7cf03da9eb0b94'),
('20180708001', '560b88e741f4f40ab2ac6f0319ea4089'),
('admin', 'admin1'),
('20180719001', 'e964354e7e135aa4cf28a1e5fb7eefe9'),
('20180722001', '877a8280f3fc0398a9937aff73471006'),
('20180818001', '73ff678d171004b969d98de52898511e'),
('20180818002', 'f8d6b6dd5ef3804aa7501252da1b988c'),
('20180822001', '9981425ed9b1c0a52620f9db0f8ceb1b'),
('20180822004', 'bf16eaa37e356b5dd2da9aa41e217b22'),
('20180822008', '7e8dffec1eb5944677abe70f531c3206'),
('20180822009', 'f346e2ae64497fa92867a96a8c98f7e5'),
('20180822010', '00277ea64971f5a8d66c1edd374c6962');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dhigecs_state`
--
ALTER TABLE `dhigecs_state`
  ADD PRIMARY KEY (`State Code`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `fakeuser`
--
ALTER TABLE `fakeuser`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gecs_professions`
--
ALTER TABLE `gecs_professions`
  ADD PRIMARY KEY (`GecsProfId`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`benificiary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakeuser`
--
ALTER TABLE `fakeuser`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
