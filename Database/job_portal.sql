-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 05:04 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `company_`
--

CREATE TABLE `company_` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `comp_phone` varchar(20) NOT NULL,
  `comp_desc` text NOT NULL,
  `comp_address` text NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `company_email` varchar(150) NOT NULL,
  `company_pwd` varchar(50) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `company_reg_no` varchar(100) NOT NULL,
  `reg_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_`
--

INSERT INTO `company_` (`company_id`, `company_name`, `comp_phone`, `comp_desc`, `comp_address`, `website_url`, `company_email`, `company_pwd`, `company_logo`, `company_reg_no`, `reg_on`) VALUES
(1, 'Greenusys Technology ', '', 'Company Description', 'Noida', 'http://greenusys.com/', 'abc@gmail.com', '123', '29042020044039.png', 'ABC123456', '2020-04-27 08:01:48'),
(2, 'Bhim Enterprise', '', '', '', '', 'bhim@gmail.com', '123', '29042020043836.jpg', 'BHIM12356', '2020-04-27 08:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_added`
--

CREATE TABLE `jobs_added` (
  `job_id` int(11) NOT NULL,
  `added_by_company_id` int(11) NOT NULL,
  `job_title` text NOT NULL,
  `job_desc` text NOT NULL,
  `job_location_` varchar(255) NOT NULL,
  `exp` int(11) NOT NULL,
  `job_type` int(11) NOT NULL,
  `job_category` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `vacancies_` int(11) NOT NULL,
  `job_status` enum('Filled','Vacant') NOT NULL DEFAULT 'Vacant',
  `last_date` varchar(50) NOT NULL,
  `adde_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_added`
--

INSERT INTO `jobs_added` (`job_id`, `added_by_company_id`, `job_title`, `job_desc`, `job_location_`, `exp`, `job_type`, `job_category`, `skills`, `vacancies_`, `job_status`, `last_date`, `adde_on`) VALUES
(1, 1, 'PHP Developer', '                                                                                        PHP Developer Needed                                                                                ', 'Dehradun', 3, 1, 1, '1,2,3,5', 5, 'Vacant', '', '2020-04-27 08:03:25'),
(2, 2, 'Node/Angular Developer Needed', 'Anuglar Developer Is neede', '', 10, 2, 2, '1,2,4', 4, 'Vacant', '10/05/2020', '2020-04-27 08:41:27'),
(7, 1, 'New JoB', '                      \r\n                    Job Desc', 'Dehradun', 4, 1, 1, '3', 1, 'Vacant', '2020-04-30', '2020-04-29 13:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `job_application_id` int(11) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `applied_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`job_application_id`, `applied_by`, `job_post_id`, `applied_on`) VALUES
(1, 1, 1, '2020-04-27 08:04:14'),
(3, 3, 1, '2020-04-29 15:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`category_id`, `category_name`, `category_icon`) VALUES
(1, 'IT & Networking', 'developer'),
(2, 'Real State', 'building');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`type_id`, `type_name`) VALUES
(1, 'Full Time'),
(2, 'Part Time');

-- --------------------------------------------------------

--
-- Table structure for table `resume_upload`
--

CREATE TABLE `resume_upload` (
  `resume_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume_path` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills_`
--

CREATE TABLE `skills_` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_`
--

INSERT INTO `skills_` (`skill_id`, `skill_name`) VALUES
(1, 'PHP'),
(2, 'NODE.js'),
(3, 'HTML'),
(4, 'C#'),
(5, 'Bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `basic_introduction` text NOT NULL,
  `phone_` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_pic` varchar(150) NOT NULL,
  `resume_id` int(11) NOT NULL,
  `skill_ids` text NOT NULL,
  `dob_` varchar(100) NOT NULL,
  `gender_` enum('Male','Female','Others') NOT NULL,
  `address_` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`user_id`, `fullname`, `basic_introduction`, `phone_`, `email`, `password`, `profile_pic`, `resume_id`, `skill_ids`, `dob_`, `gender_`, `address_`) VALUES
(1, 'Shuhani Sing', '', '', 'suhani@gmail.com', '123', 'shuni.jpg', 1, '1,2,3,4', '', 'Male', ''),
(2, '', '', '', 'rahul@gmail.com', '123', '', 0, '', '', 'Male', ''),
(3, 'Rahul Kumar', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '1234567890', 'rahul@wgmail.com', '123', 'rah.jpg', 0, '1,3,4', '14-06-1995', 'Male', 'Dehradun India'),
(4, '', '', '', 'rahulnew@wgmail.com', '123', '', 0, '', '', 'Male', ''),
(5, 'Rahul', '', '', 'admin@gmail.com', '123', '', 0, '', '', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_` varchar(150) NOT NULL,
  `institute_` text NOT NULL,
  `passing_year` int(11) NOT NULL,
  `course_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `degree`, `user_id`, `course_`, `institute_`, `passing_year`, `course_type`) VALUES
(1, 'B.Tech', 3, 'Computer Science', 'Maharshi Dayanand University', 2017, 'Regular'),
(2, '12th', 3, 'Computer Science', 'Kendriya Vidyalaya', 2013, 'Regular'),
(3, 'dfdfs', 3, 'dsfdf', 'sdfsdf', 203, 'Part Time');

-- --------------------------------------------------------

--
-- Table structure for table `user_work_summary`
--

CREATE TABLE `user_work_summary` (
  `summ_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `work_title` text NOT NULL,
  `profile_summary` text NOT NULL,
  `exp_year` int(11) NOT NULL,
  `exp_month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_work_summary`
--

INSERT INTO `user_work_summary` (`summ_id`, `user_id`, `work_title`, `profile_summary`, `exp_year`, `exp_month`) VALUES
(1, 3, 'PHP Developer', 'I worked As a software Developer in Greenusys Technology', 2, 3),
(2, 3, 'Node Developer', 'I workes as Node Developer in Microsoft', 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_`
--
ALTER TABLE `company_`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `jobs_added`
--
ALTER TABLE `jobs_added`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`job_application_id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `skills_`
--
ALTER TABLE `skills_`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_work_summary`
--
ALTER TABLE `user_work_summary`
  ADD PRIMARY KEY (`summ_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_`
--
ALTER TABLE `company_`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs_added`
--
ALTER TABLE `jobs_added`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `job_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills_`
--
ALTER TABLE `skills_`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_work_summary`
--
ALTER TABLE `user_work_summary`
  MODIFY `summ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
