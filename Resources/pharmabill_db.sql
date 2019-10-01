-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 01:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmabill`
--
CREATE DATABASE IF NOT EXISTS `pharmabill` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pharmabill`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Email`, `Password`) VALUES
('admin', 'admin@email.com', 'secret');

-- --------------------------------------------------------

--
-- Table structure for table `drug_purchase`
--

DROP TABLE IF EXISTS `drug_purchase`;
CREATE TABLE `drug_purchase` (
  `Purchase_ID` int(11) NOT NULL,
  `patient_id` varchar(100) NOT NULL,
  `bill_number` varchar(100) NOT NULL,
  `med_category` varchar(50) NOT NULL,
  `med_name` varchar(50) NOT NULL,
  `med_quantity` varchar(100) NOT NULL,
  `med_price` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug_purchase`
--

INSERT INTO `drug_purchase` (`Purchase_ID`, `patient_id`, `bill_number`, `med_category`, `med_name`, `med_quantity`, `med_price`, `total`) VALUES
(2, 'N-67585', 'SN-44109', 'Medicine Category*', 'Morphine', '50', '340', '17000'),
(3, 'N-12345', 'SN-17054', 'PAIN and PALLIATIVE CARE', 'Panadol', '2', '10', '20'),
(7, 'N-67897', 'SN-98146', 'Antifungals', 'holly molly', '5', '400', '2000'),
(13, 'N-78978', 'SN-52893', 'ANTIDOTES and POISONING', 'betain', '67', '10', '670'),
(16, 'N-67676', 'SN-76266', 'Antivirals', 'Panadol', '40', '10', '400'),
(19, 'N-78777', 'SN-98492', 'ANAESTHETICS', 'Panadol', '89', '10', '890'),
(21, 'N-89999', 'SN-66185', 'ANTIALLERGICS and ANAPHYLAXIS', 'betain', '89', '10', '890'),
(23, 'N-37420', 'SN-45945', 'Antibacterials', 'Molly', '2', '700', '1400'),
(28, 'N-78978', 'SN-16503', 'ANAESTHETICS', 'betain', '45', '4', '230'),
(29, 'N-78978', 'SN-16503', 'Antibacterials', '34', '5', '4', '230'),
(30, 'N-37420', 'SN-99113', 'Antifungals', 'Panadol', '40', '5', '400'),
(31, 'N-37420', 'SN-99113', 'Antiprotozoals', 'Yatzi', '50', '5', '400'),
(32, 'N-37420', 'SN-99113', 'Antifungals', 'Panadol', '40', '5', '400'),
(33, 'N-37420', 'SN-99113', 'Antiprotozoals', 'Yatzi', '50', '5', '400'),
(34, 'N-37420', 'SN-90092', 'PAIN and PALLIATIVE CARE', 'Molly', '444', '5', '2220'),
(35, 'N-77777', 'SN-51851', 'Antiprotozoals', 'MicroPen', '40', '10', '400'),
(36, 'N-77777', 'SN-51851', 'Antiprotozoals', 'MicroPen', '40', '10', ''),
(37, 'N-77777', 'SN-86954', 'ANAESTHETICS', 'eee', '444', '5', ''),
(38, 'N-77777', 'SN-86954', 'ANAESTHETICS', 'eee', '444', '5', ''),
(39, 'N-77777', 'SN-86954', 'ANAESTHETICS', 'eee', '444', '5', '2220'),
(40, 'N-90909', 'SN-74546', 'PAIN and PALLIATIVE CARE', 'Panadol', '80', '5', '400'),
(41, 'N-44343', 'SN-48693', 'Antibacterials', 'drug', '34', '10', '1100'),
(42, 'N-44343', 'SN-48693', 'Hormones and antihormones', 'viagra', '76', '10', '1100');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contacts`
--

DROP TABLE IF EXISTS `emergency_contacts`;
CREATE TABLE `emergency_contacts` (
  `ID` int(11) NOT NULL,
  `patient_id` varchar(100) NOT NULL,
  `kin_name` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `kin_phone` varchar(50) NOT NULL,
  `kin_id` varchar(100) NOT NULL,
  `kin_gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contacts`
--

INSERT INTO `emergency_contacts` (`ID`, `patient_id`, `kin_name`, `relationship`, `kin_phone`, `kin_id`, `kin_gender`) VALUES
(6, 'N-76900', 'Jane Doe', 'Wife', '567567567', '435435435', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE `medicine` (
  `medID` int(11) NOT NULL,
  `medCategory` varchar(100) NOT NULL,
  `medName` varchar(100) NOT NULL,
  `dose_form` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medID`, `medCategory`, `medName`, `dose_form`) VALUES
(1, 'ANAESTHETICS', 'Halothane', 'Inhalation (250mL)'),
(2, 'ANAESTHETICS', 'Isoflurane', 'Inhalation (250mL)'),
(3, 'ANAESTHETICS', 'Medical air', 'Inhalation (medicinal gas)'),
(4, 'ANAESTHETICS', 'Nitrous oxide', 'Inhalation (medicinal gas)'),
(5, 'ANAESTHETICS', 'Oxygen', 'Inhalation (medicinal gas)'),
(6, 'ANAESTHETICS', 'Ketamine hydrochloride', 'Injection 50mg/mL (10mL vial)'),
(7, 'ANAESTHETICS', 'Propofol26', 'Injection 10mg/mL (20mL vial)'),
(8, 'ANAESTHETICS', 'Thiopental sodium', 'PFI 500mg vial'),
(9, 'ANAESTHETICS', 'Bupivacaine HCl', 'Injection'),
(10, 'ANAESTHETICS', 'Lidocaine HCl', 'Injection '),
(11, 'ANAESTHETICS', 'Lidocaine HCl + epinephrine (adrenaline)', 'Dental cartridge'),
(12, 'ANAESTHETICS', 'Atropine sulphate', 'Injection '),
(13, 'ANAESTHETICS', 'Midazolam', 'Injection Oral_Liquid Tablet'),
(14, 'ANAESTHETICS', 'Morphine', 'Injection '),
(15, 'PAIN and PALLIATIVE CARE', 'Aspirin', 'Tablet 300mg'),
(16, 'PAIN and PALLIATIVE CARE', 'Ibuprofen', 'Oral_liquid Tablet'),
(17, 'PAIN and PALLIATIVE CARE', ' Paracetamol', 'Injection Oral_Liquid Tablet'),
(18, 'PAIN and PALLIATIVE CARE', 'Codeine phosphate', 'Tablet 30mg'),
(19, 'PAIN and PALLIATIVE CARE', 'Morphine', 'Injection Oral_Liquid Tablet'),
(20, 'PAIN and PALLIATIVE CARE', 'Amitriptyline', 'Tablet 25mg'),
(21, 'PAIN and PALLIATIVE CARE', 'Bisacodyl', 'Tablet 5mg'),
(22, 'PAIN and PALLIATIVE CARE', 'Dexamethasone', 'Injection Tablet'),
(23, 'PAIN and PALLIATIVE CARE', 'Diazepam', 'Injection Oral_Liquid Gel'),
(24, 'PAIN and PALLIATIVE CARE', 'Diazepam', 'Tablet 5mg'),
(25, 'PAIN and PALLIATIVE CARE', 'Gabapentin', 'Tablet 300mg'),
(26, 'PAIN and PALLIATIVE CARE', 'Haloperidol', 'Injection Tablet 5mg'),
(27, 'PAIN and PALLIATIVE CARE', 'Metoclopramide', 'Injection Oral_Liquid Tablet'),
(28, 'ANTIALLERGICS and ANAPHYLAXIS', 'Cetirizine HCl', 'Tablet Oral_liquid 10mg'),
(29, 'ANTIALLERGICS and ANAPHYLAXIS', 'Dexamethasone', 'Injection '),
(30, 'ANTIALLERGICS and ANAPHYLAXIS', 'Epinephrine (adrenaline)', 'Injection '),
(31, 'ANTIALLERGICS and ANAPHYLAXIS', 'Prednisolone', 'Oral_liquid Tablet'),
(32, 'ANTIDOTES and  POISONING', 'Activated charcoal', 'PFOL 50g'),
(33, 'ANTIDOTES and POISONING', 'Acetylcysteine', 'Injection 200mg'),
(34, 'ANTIDOTES and POISONING', ' Atropine sulphate', 'Injection 1mg'),
(35, 'ANTIDOTES and POISONING', 'Deferasirox', 'Tablet 400mg'),
(36, 'ANTIDOTES and POISONING', 'Flumazenil', 'Injection 100mg'),
(37, 'ANTIDOTES and POISONING', 'Flumazenil', 'injection'),
(38, 'ANTIDOTES and POISONING', 'Naloxone hydrochloride', 'injection'),
(39, 'ANTIDOTES and POISONING', 'Fomepizole sulphate', 'injection '),
(40, 'ANTIDOTES and POISONING', 'Penicillamine', 'Tablet'),
(41, 'ANTIDOTES and POISONING', 'Sodium calcium edetate', 'injection 200mg'),
(42, 'ANTIDOTES and POISONING', 'Sodium nitrite', 'injection 30mg'),
(43, 'ANTIDOTES and POISONING', 'Succimer', 'Capsule 100mg'),
(44, 'ANTIDOTES and POISONING', 'Carbamazepine', 'Tablet Oral_liquid'),
(45, 'ANTIDOTES and POISONING', 'Diazepam', 'Gel 5mg'),
(46, 'ANTIDOTES and POISONING', ' Phenytoin sodium', 'injection Tablet Oral_liquid 50g'),
(47, 'Antibacterials', 'Amoxicillin', 'Capsule 500mg'),
(48, 'Antibacterials', 'Benzathine benzylpenicillin', 'PFI 900mg'),
(49, 'Antibacterials', 'Cefixime', 'Tablet 400mg'),
(50, 'Antibacterials', 'Cefazolin', 'PFI 1g vial'),
(51, 'Antibacterials', 'Ceftriaxone62  (as sodium salt)', 'injection 250mg'),
(52, 'Antibacterials', 'Flucloxacillin (as sodium salt)', 'Capsule PFI'),
(53, 'Antibacterials', 'Azithromycin', 'Tablet'),
(54, 'Antibacterials', 'Ciprofloxacin', 'Tablet Oral_liquid'),
(55, 'Antibacterials', 'Clarithromycin', 'Tablet'),
(56, 'Antibacterials', 'Gentamicin', 'injection '),
(57, 'Antibacterials', 'Metronidazole', 'injection oral_liquid'),
(58, 'Antibacterials', 'Clindamycin', 'injection Capsule Oral_liquid'),
(59, 'Antibacterials', 'Vancomycin', 'PFI 250mg'),
(60, 'Antifungals', 'Amphotericin B', 'PFI '),
(61, 'Antifungals', 'Clotrimazole79', 'tablet'),
(62, 'Antifungals', 'Fluconazole', 'injection Capsule Oral_liquid'),
(63, 'Antifungals', 'Griseofulvin', 'Tablet 125mg'),
(64, 'Antifungals', 'Nystatin', 'Oral_liquid'),
(65, 'Antivirals', 'Aciclovir', 'Tablet 200mg'),
(66, 'Antivirals', 'Abacavir (ABC)', 'Tablet 300mg'),
(67, 'Antivirals', 'Lamivudine (3TC)', 'Tablet Oral_liquid'),
(68, 'Antivirals', 'Stavudine (d4T)', 'Tablet 30mg'),
(69, 'Antiprotozoals', 'Metronidazole', 'injection Oral_liquid 200mg'),
(70, 'Hormones and antihormones', 'Bicalutamide', 'Tablet 50mg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `patient_id` varchar(100) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `patient_email` varchar(100) NOT NULL,
  `patient_phone` varchar(20) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `patient_age` int(100) NOT NULL,
  `patient_dob` varchar(100) NOT NULL,
  `patient_gender` varchar(20) NOT NULL,
  `patient_city` varchar(50) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `first_name`, `middle_name`, `last_name`, `patient_email`, `patient_phone`, `id_number`, `patient_age`, `patient_dob`, `patient_gender`, `patient_city`, `patient_address`, `registration_date`) VALUES
('N-76900', 'John', 'Jr', 'Doe', 'doe@email.com', '12345678', '87654321', 30, '1990-12-04', 'Male', 'Marsabit', 'Kitwale', '2019-08-03 11:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `patient_billing`
--

DROP TABLE IF EXISTS `patient_billing`;
CREATE TABLE `patient_billing` (
  `patient_id` varchar(100) NOT NULL,
  `bill_number` varchar(100) NOT NULL,
  `bill_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `checkup_date` varchar(100) NOT NULL,
  `comments` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_billing`
--

INSERT INTO `patient_billing` (`patient_id`, `bill_number`, `bill_date`, `checkup_date`, `comments`) VALUES
('N-78978', 'SN-11935', '2019-06-09 19:52:18', '2019-06-10', 'eat sleep repeat'),
('N-12345', 'SN-17054', '2019-06-08 18:30:03', '2019-06-15', 'one peal after meal'),
('N-3333333', 'SN-23465', '2019-06-08 18:12:00', '2019-06-22', 'take meal before taking drugs'),
('N-77738', 'SN-28870', '2019-06-11 13:26:33', '2019-06-12', 'one a week'),
('N-67585', 'SN-44109', '2019-06-08 18:21:15', '2019-06-28', 'take after having  good meal and a full stomach. Can get dizzy at times'),
('N-37420', 'SN-45945', '2019-06-10 07:49:02', '2019-06-28', 'Get High'),
('N-44343', 'SN-48693', '2019-07-02 10:53:15', '2019-07-17', 'take cautiously'),
('N-77777', 'SN-51851', '2019-07-02 10:46:34', '2019-07-10', '2 x 3'),
('N-78978', 'SN-52893', '2019-06-09 19:55:56', '2019-06-26', 'rtyuio'),
('N-89999', 'SN-66185', '2019-06-10 07:43:50', '2019-06-10', 'willis'),
('N-90909', 'SN-74546', '2019-07-02 10:51:52', '2019-07-18', 'well 333'),
('N-67676', 'SN-76266', '2019-06-10 07:40:21', '2019-06-20', '1 pill 3 times a day'),
('N-12345', 'SN-82651', '2019-06-08 18:31:52', '2019-07-06', 'take with caution'),
('N-37420', 'SN-90092', '2019-07-02 10:42:40', '2019-07-24', 'well!!!'),
('N-67897', 'SN-98146', '2019-06-08 18:34:27', '2019-06-17', 'no joke'),
('N-78777', 'SN-98492', '2019-06-10 07:43:02', '2019-06-19', 'ball'),
('N-37420', 'SN-99113', '2019-07-02 10:39:05', '2019-07-25', 'test test test'),
('N-78978', 'SN-99859', '2019-06-09 19:34:47', '2019-06-18', 'take after meals');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacists`
--

DROP TABLE IF EXISTS `pharmacists`;
CREATE TABLE `pharmacists` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacists`
--

INSERT INTO `pharmacists` (`first_name`, `last_name`, `email`, `id_number`, `address`, `Password`, `date_added`) VALUES
('Walter', 'White', 'white@email.com', '123789456', '101 Avenue', 'white123', '2019-06-06 22:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `title` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`title`, `first_name`, `last_name`, `user_email`, `phone_number`, `password`) VALUES
('ms', 'Daisy', 'Hao', 'hao@email.com', '12345678', '123'),
('mr', 'Knightly', 'pro', 'pro@email.com', '123123123', '123'),
('mrs', 'wade', 'wade', 'wade@email.com', '345677', '123'),
('mr', 'Well', 'Petret', 'well@email.com', '23456', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

DROP TABLE IF EXISTS `user_comment`;
CREATE TABLE `user_comment` (
  `message` varchar(300) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`message`, `name`, `email`, `subject`, `post_date`) VALUES
('Message area: if post to database (success)', 'test', 'test@email.com', 'test comment section', '2019-06-13 10:46:37'),
('Test data', 'pro', 'pro@email.com', 'test', '2019-06-27 13:32:28'),
('contact test', 'test', 'test@email.com', 'retsdfghoijp', '2019-08-03 11:35:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `drug_purchase`
--
ALTER TABLE `drug_purchase`
  ADD PRIMARY KEY (`Purchase_ID`);

--
-- Indexes for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Patient_id` (`patient_id`),
  ADD UNIQUE KEY `kin_id` (`kin_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `id_number` (`id_number`),
  ADD UNIQUE KEY `patient_email` (`patient_email`);

--
-- Indexes for table `patient_billing`
--
ALTER TABLE `patient_billing`
  ADD PRIMARY KEY (`bill_number`);

--
-- Indexes for table `pharmacists`
--
ALTER TABLE `pharmacists`
  ADD PRIMARY KEY (`id_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`user_email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug_purchase`
--
ALTER TABLE `drug_purchase`
  MODIFY `Purchase_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD CONSTRAINT `emergency_contacts_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
