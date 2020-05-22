-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 09:40 AM
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
  `company_status` enum('active','deactive') NOT NULL,
  `company_reg_no` varchar(100) NOT NULL,
  `reg_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comp_incorporation` varchar(255) NOT NULL,
  `comp_aoa` varchar(255) NOT NULL,
  `comp_moa` varchar(255) NOT NULL,
  `comp_gst` varchar(255) DEFAULT NULL,
  `comp_plan_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_`
--

INSERT INTO `company_` (`company_id`, `company_name`, `comp_phone`, `comp_desc`, `comp_address`, `website_url`, `company_email`, `company_pwd`, `company_logo`, `company_status`, `company_reg_no`, `reg_on`, `comp_incorporation`, `comp_aoa`, `comp_moa`, `comp_gst`, `comp_plan_type`) VALUES
(1, 'Greenusys Technology ', '', 'Company Description', 'Noida', 'http://greenusys.com/', 'abc@gmail.com', '123', 'abc.png', 'active', 'ABC123456', '2020-04-27 08:01:48', 'file-sample_15000kB.pdf', 'file-sample_500kB.docx', 'file-sample_100kB.docx', 'file-sample_100kB.doc', 1),
(3, 'Google', '', 'googlessss', 'torernto', 'google.com', 'google@google.com', '123', 'g_(1).png', 'deactive', 'Goo1478', '2020-04-29 11:25:29', '', '', '', '', 1),
(5, 'Accenture', '', 'Accenture', 'shimla ', 'Accenture.com', 'shubhambhattshubh@gmail.com', '123', 'Accenture1.png', 'active', 'Goo1478erh', '2020-05-05 10:06:53', 'GSTR-1-CT-GST-Desktop-App-11.pdf', '11KB.docx', '11KB.doc', 'GST-Invoice-Format-Word.docx', 3),
(6, 'Evon', '', 'Evon', 'shimla ', 'evon.com', 'evon@admin.com', '123', 'Accenture2.png', 'active', 'Goo1478rg', '2020-05-07 05:32:03', 'pdf1.pdf', '11KB.docx', 'new.doc', 'GST-Invoice-Format-Word1.docx', 4);

-- --------------------------------------------------------

--
-- Table structure for table `company_msg`
--

CREATE TABLE `company_msg` (
  `c_msg_id` int(6) NOT NULL,
  `c_msg` longtext NOT NULL,
  `c_subject` varchar(255) NOT NULL,
  `send_company` int(6) NOT NULL,
  `send_company_email` varchar(255) NOT NULL,
  `recieve_user` int(6) NOT NULL,
  `receive_user_email` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_msg`
--

INSERT INTO `company_msg` (`c_msg_id`, `c_msg`, `c_subject`, `send_company`, `send_company_email`, `recieve_user`, `receive_user_email`, `added_on`) VALUES
(1, '<p>selected Your interview on date 30/04/2020&nbsp;</p>\r\n', '', 3, '', 3, '', '2020-04-29 13:06:48'),
(2, '<p>rejected</p>\r\n', 'rejected', 3, 'google@google.com', 3, 'rahul@wgmail.com', '2020-05-06 10:59:33'),
(3, '<p>dfgdfg</p>\r\n', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 12:50:03'),
(4, '', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 12:55:03'),
(5, '<p>sdfsdf</p>\r\n', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 12:55:26'),
(6, '<p>dfgdfgff</p>\r\n', 'test Subject', 1, 'abc@gmail.com', 3, 'rahul@wgmail.com', '2020-05-16 13:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `currency_type`
--

CREATE TABLE `currency_type` (
  `curr_id` int(6) NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `curr_added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency_type`
--

INSERT INTO `currency_type` (`curr_id`, `currency_name`, `curr_added_on`) VALUES
(1, 'Rs', '2020-05-06 06:19:47'),
(2, 'US $', '2020-05-06 06:23:44'),
(3, 'Euro', '2020-05-06 06:25:32'),
(4, 'dinnar', '2020-05-06 07:09:04'),
(5, 'Japanese Yen ', '2020-05-07 10:18:23'),
(6, 'British Pound (GBP)', '2020-05-07 12:29:41'),
(7, 'Swiss Franc (CHF)', '2020-05-07 12:32:09');

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
  `exp` int(11) DEFAULT NULL,
  `job_type` int(11) NOT NULL,
  `job_category` int(11) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `vacancies_` int(11) NOT NULL,
  `job_status` enum('Filled','Vacant') NOT NULL DEFAULT 'Vacant',
  `job_apps_status` enum('active','deactive') NOT NULL,
  `last_date` varchar(50) NOT NULL,
  `min_work_exp` varchar(255) NOT NULL,
  `max_work_exp` varchar(255) NOT NULL,
  `currency_type` int(10) NOT NULL,
  `min_annual_sal` int(10) NOT NULL,
  `max_annaul_sal` int(10) NOT NULL,
  `ug_qualification` varchar(255) DEFAULT NULL,
  `pg_qualification` varchar(255) DEFAULT NULL,
  `phd_qualification` varchar(255) DEFAULT NULL,
  `adde_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_added`
--

INSERT INTO `jobs_added` (`job_id`, `added_by_company_id`, `job_title`, `job_desc`, `job_location_`, `exp`, `job_type`, `job_category`, `skills`, `vacancies_`, `job_status`, `job_apps_status`, `last_date`, `min_work_exp`, `max_work_exp`, `currency_type`, `min_annual_sal`, `max_annaul_sal`, `ug_qualification`, `pg_qualification`, `phd_qualification`, `adde_on`) VALUES
(1, 1, 'PHP Developer', '                                                                                        PHP Developer Needed                                                                                ', 'Dehradun', 3, 1, 1, '1,2,3,5', 6, 'Filled', 'deactive', '10/05/2020', '1', '3', 1, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-27 08:03:25'),
(2, 2, 'Node/Angular Developer Needed', 'Anuglar Developer Is neede', 'Dehradun', 10, 2, 2, '1,2,4', 4, 'Vacant', 'active', '10/05/2020', '2', '4', 2, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-27 08:41:27'),
(7, 1, 'New JoB', '                      \r\n                    Job Desc', 'Dehradun', 4, 1, 1, '3', 1, 'Vacant', 'active', '2020-04-30', '3', '5', 1, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-29 13:53:37'),
(8, 3, 'test', 'test', 'Dehradun', 0, 2, 2, '2,4', 4, 'Vacant', 'deactive', '2020-05-22', '4', '6', 2, 2, 2, 'B.tech (CS)', 'None', 'None', '2020-04-30 08:03:30'),
(9, 5, 'Laravel Developers', 'Laravel Developer', 'Gurugram', 0, 3, 1, '1,2,5,6', 2, 'Vacant', 'active', '2020-08-14', '2', '5', 2, 2, 1, 'B.tech (CS)', 'None', 'None', '2020-05-06 07:55:41'),
(10, 1, 'Selenium testers', '                                                                                                              Selenium tester\r\n                                                                                                    ', 'Gurugram', NULL, 2, 1, '1,3,5', 2, 'Vacant', 'active', '08-05-2020', '2', '3', 3, 2, 1, 'B.tech (CS)', 'None', 'None', '2020-05-07 10:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `job_application_id` int(11) NOT NULL,
  `applied_by` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `app_status` enum('Pending','Accepted','Rejected') NOT NULL,
  `applied_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`job_application_id`, `applied_by`, `job_post_id`, `app_status`, `applied_on`) VALUES
(1, 1, 1, 'Pending', '2020-04-27 08:04:14'),
(3, 3, 1, 'Pending', '2020-04-29 15:02:18');

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
(2, 'Part Time'),
(3, 'Permanent');

-- --------------------------------------------------------

--
-- Table structure for table `max_salary`
--

CREATE TABLE `max_salary` (
  `max_sal_id` int(6) NOT NULL,
  `max_sal` varchar(255) NOT NULL,
  `max_sal_addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `max_salary`
--

INSERT INTO `max_salary` (`max_sal_id`, `max_sal`, `max_sal_addedon`) VALUES
(1, '8000', '2020-05-06 06:59:54'),
(2, '10000', '2020-05-06 07:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `min_salary`
--

CREATE TABLE `min_salary` (
  `min_sal_id` int(11) NOT NULL,
  `min_salary` varchar(255) NOT NULL,
  `min_sal_addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `min_salary`
--

INSERT INTO `min_salary` (`min_sal_id`, `min_salary`, `min_sal_addedon`) VALUES
(1, '5000', '2020-05-06 06:54:17'),
(2, '6000', '2020-05-06 07:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `plan_type`
--

CREATE TABLE `plan_type` (
  `c_type_id` int(6) NOT NULL,
  `c_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_type`
--

INSERT INTO `plan_type` (`c_type_id`, `c_type_name`) VALUES
(1, 'Free'),
(2, 'Trial'),
(3, 'Paid'),
(4, 'Premium');

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

--
-- Dumping data for table `resume_upload`
--

INSERT INTO `resume_upload` (`resume_id`, `user_id`, `resume_path`, `added_on`) VALUES
(1, 2, 'steve-jobs--david-paul-morrisbloomberg-via-getty-images.jpg', '2020-04-29 09:30:05'),
(2, 3, '1_swEsfQdCfFAyOPWMgqL7wg.jpeg', '2020-04-29 09:56:20'),
(3, 3, 'XpgonN0X_400x400.jpg', '2020-04-29 10:09:34'),
(4, 4, 'steve-jobs--david-paul-morrisbloomberg-via-getty-images1.jpg', '2020-04-29 10:12:12'),
(5, 3, '1_swEsfQdCfFAyOPWMgqL7wg1.jpeg', '2020-04-29 10:13:24'),
(6, 3, 'XpgonN0X_400x4001.jpg', '2020-04-29 10:14:27'),
(7, 3, 'XpgonN0X_400x4002.jpg', '2020-04-29 10:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_interiew`
--

CREATE TABLE `scheduled_interiew` (
  `sche_id` int(11) NOT NULL,
  `job_profile` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `interview_date` varchar(50) NOT NULL,
  `interview_time` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduled_interiew`
--

INSERT INTO `scheduled_interiew` (`sche_id`, `job_profile`, `company_id`, `application_id`, `interview_date`, `interview_time`, `added_on`) VALUES
(7, 'PHP Developer', 1, 3, 'Friday, 22-05-2020', '02:00 PM', '2020-05-17 16:34:51');

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
(5, 'Bootstrap'),
(6, 'laravel');

-- --------------------------------------------------------

--
-- Table structure for table `success_story`
--

CREATE TABLE `success_story` (
  `story_id` int(6) NOT NULL,
  `story` longtext NOT NULL,
  `story_image` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`story_id`, `story`, `story_image`, `added_on`) VALUES
(1, '<p>Steve Jobs: Steve Jobs has been known as an iconic figure for the establishment of Apple like the biggest company. However, it is extremely shocking to know that the $2 billion company with over 4000 employees has been started with only two persons in a garage. It is also to be noticed that this great establisher has been dismissed and fired from the company from which he has started his career. Further, realizing his potential and capabilities, Steve Jobs proceeded further towards establishing this biggest company which is famously known as &lsquo;Apple&rsquo;.</p>\r\n', 'steve-jobs--david-paul-morrisbloomberg-via-getty-images.jpg', '2020-04-29 06:10:22'),
(2, '<p>Bill Gates: It was very much important for Bill gates to heed the lessons of failure in comparison to celebrating the joy of success. This great entrepreneur who has established Microsoft like the biggest software company is a dropout student from Harvard. Furthermore, he has also been known for his self-owned business figure known as&nbsp;&nbsp;&nbsp;&nbsp;Traf-O-Data which was one of the biggest failures in history. The entire investment of Bill Gates got vanished and unfortunately, even the education could also not get completed. But, the keen desire and the passion for the computer programming based stuff led him to establish such biggest software company with the brand name &lsquo;Microsoft&rsquo;.</p>\r\n', 'XpgonN0X_400x400.jpg', '2020-04-29 06:11:43'),
(4, '<p>Albert Einstein: Albert Einstein is a well-known scientist and extraordinary genius personality known by almost all of us all over the world due to his great inventions and contributions towards science. He quoted that success is a failure in progress and someone who has never failed cannot truly be a successful person. During childhood, he suffered from continuous failures. He was not even able to speak fluently till the age of nine years following which he has been expelled from the school. Furthermore, his admission to Zurich Polytechnic School was also not considered. But, leading to the ways of success consistently, he proved himself as a renowned gem in the ocean of science and technology and finally won the Nobel Prize for Physics in 1921.</p>\r\n', '1_swEsfQdCfFAyOPWMgqL7wg.jpeg', '2020-04-29 06:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `basic_introduction` text NOT NULL,
  `nationality_` varchar(100) DEFAULT NULL,
  `phone_` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_pic` varchar(150) NOT NULL,
  `resume_id` int(11) NOT NULL,
  `skill_ids` text NOT NULL,
  `dob_` varchar(100) NOT NULL,
  `gender_` enum('Male','Female','Others') NOT NULL,
  `address_` varchar(255) NOT NULL,
  `user_status` enum('active','deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`user_id`, `fullname`, `basic_introduction`, `nationality_`, `phone_`, `email`, `password`, `profile_pic`, `resume_id`, `skill_ids`, `dob_`, `gender_`, `address_`, `user_status`) VALUES
(1, 'Shuhani Sing', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '1234567890', 'suhani@gmail.com', '123', 'download_(8).jpg', 1, '1,2,3,4', '14-06-1996', 'Female', 'Dehradun India', 'deactive'),
(2, 'Ankit', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '1234567890', 'rahul@gmail.com', '123', 'rah.jpg', 2, '1,3,4', '14-06-1995', 'Male', 'Dehradun India', 'active'),
(3, 'Rahul Kumar', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '45327327', 'rahul@wgmail.com', '123', 'rah.jpg', 3, '1,2,3,4,5', '14-06-1995', 'Male', 'Dehradun India', 'active'),
(4, 'Rohan bhatt', 'A resume objective (or a career objective) is a heading statement of your resume, in which you describe your professional goals in the job you\'re applying for. A resume objective is usually 2–3 sentences long and should be placed at the top of your resume.', '', '1234567890', 'dpknouliya@gmail.com', '123', 'download_(8)1.jpg', 4, '1,2,3,4,5', '14-06-1995', 'Male', 'Dehradun India', 'deactive');

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
-- Table structure for table `user_msg`
--

CREATE TABLE `user_msg` (
  `u_msg_id` int(6) NOT NULL,
  `u_msg` longtext NOT NULL,
  `subject` varchar(255) NOT NULL,
  `send_user` int(6) NOT NULL,
  `send_user_email` varchar(255) NOT NULL,
  `recieve_company` int(6) NOT NULL,
  `receive_company_email` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_msg`
--

INSERT INTO `user_msg` (`u_msg_id`, `u_msg`, `subject`, `send_user`, `send_user_email`, `recieve_company`, `receive_company_email`, `added_on`) VALUES
(1, '<p>any vacancies left ?</p>\r\n', '', 3, '', 3, '', '2020-04-29 12:56:03'),
(2, '<p>test</p>\r\n', 'testesddd', 4, 'dpknouliya@gmail.com', 5, 'shubhambhattshubh@gmail.com', '2020-05-06 10:39:06');

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
-- Indexes for table `company_msg`
--
ALTER TABLE `company_msg`
  ADD PRIMARY KEY (`c_msg_id`);

--
-- Indexes for table `currency_type`
--
ALTER TABLE `currency_type`
  ADD PRIMARY KEY (`curr_id`);

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
-- Indexes for table `max_salary`
--
ALTER TABLE `max_salary`
  ADD PRIMARY KEY (`max_sal_id`);

--
-- Indexes for table `min_salary`
--
ALTER TABLE `min_salary`
  ADD PRIMARY KEY (`min_sal_id`);

--
-- Indexes for table `plan_type`
--
ALTER TABLE `plan_type`
  ADD PRIMARY KEY (`c_type_id`);

--
-- Indexes for table `resume_upload`
--
ALTER TABLE `resume_upload`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `scheduled_interiew`
--
ALTER TABLE `scheduled_interiew`
  ADD PRIMARY KEY (`sche_id`);

--
-- Indexes for table `skills_`
--
ALTER TABLE `skills_`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `success_story`
--
ALTER TABLE `success_story`
  ADD PRIMARY KEY (`story_id`);

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
-- Indexes for table `user_msg`
--
ALTER TABLE `user_msg`
  ADD PRIMARY KEY (`u_msg_id`);

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
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_msg`
--
ALTER TABLE `company_msg`
  MODIFY `c_msg_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `currency_type`
--
ALTER TABLE `currency_type`
  MODIFY `curr_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs_added`
--
ALTER TABLE `jobs_added`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `max_salary`
--
ALTER TABLE `max_salary`
  MODIFY `max_sal_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `min_salary`
--
ALTER TABLE `min_salary`
  MODIFY `min_sal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plan_type`
--
ALTER TABLE `plan_type`
  MODIFY `c_type_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resume_upload`
--
ALTER TABLE `resume_upload`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scheduled_interiew`
--
ALTER TABLE `scheduled_interiew`
  MODIFY `sche_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills_`
--
ALTER TABLE `skills_`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `success_story`
--
ALTER TABLE `success_story`
  MODIFY `story_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_msg`
--
ALTER TABLE `user_msg`
  MODIFY `u_msg_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_work_summary`
--
ALTER TABLE `user_work_summary`
  MODIFY `summ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
