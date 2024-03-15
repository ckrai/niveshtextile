-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 09:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `varion_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `tech_activity`
--

CREATE TABLE `tech_activity` (
  `a_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `a_message` varchar(255) NOT NULL,
  `a_type` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tech_activity`
--

INSERT INTO `tech_activity` (`a_id`, `u_id`, `u_name`, `a_message`, `a_type`, `date`) VALUES
(1, 1, 'Varion Advisors', 'Project has been added by Varion Advisors', 'Add New Project', '2022-06-20 09:20:14'),
(2, 1, 'Varion Advisors Analytics', 'Team has been added by Varion Advisors Analytics', 'Add New Team', '2022-06-20 09:43:15'),
(3, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Status Update.', '2022-06-20 09:43:32'),
(4, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Update.', '2022-06-20 09:44:04'),
(5, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Update.', '2022-06-20 09:49:04'),
(6, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Update.', '2022-06-20 09:49:37'),
(7, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Update.', '2022-06-20 09:54:19'),
(8, 1, 'Varion Advisors Analytics', 'Project has been added by Varion Advisors Analytics', 'Add New Project', '2022-06-20 11:36:34'),
(9, 1, 'Varion Advisors Analytics', 'Project has been added by Varion Advisors Analytics', 'Add New Project', '2022-06-20 11:43:14'),
(10, 1, 'Varion Advisors Analytics', 'Project has been added by Varion Advisors Analytics', 'Add New Project', '2022-06-20 11:45:01'),
(11, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Update.', '2022-06-20 11:59:05'),
(12, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Update.', '2022-06-20 12:05:03'),
(13, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Update.', '2022-06-20 12:05:33'),
(14, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Update.', '2022-06-20 12:12:54'),
(15, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Update.', '2022-06-20 12:15:56'),
(16, 1, 'Varion Advisors Analytics', 'Project has been added by Varion Advisors Analytics', 'Add New Project', '2022-06-20 12:16:50'),
(17, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Update.', '2022-06-20 12:17:50'),
(18, 1, 'Varion Advisors Analytics', 'Project has been deleted by Varion Advisors Analytics.', 'Delete Project.', '2022-06-20 12:18:02'),
(19, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Update.', '2022-06-20 12:18:22'),
(20, 1, 'Varion Advisors Analytics', 'Project has been added by Varion Advisors Analytics', 'Add New Project', '2022-06-20 12:19:33'),
(21, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-20 12:20:22'),
(22, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-20 12:32:03'),
(23, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-20 12:32:24'),
(24, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-21 05:56:03'),
(25, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-21 05:56:37'),
(26, 1, 'Varion Advisors Analytics', 'Team has been added by Varion Advisors Analytics', 'Add New Team', '2022-06-21 09:30:46'),
(27, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Status Update.', '2022-06-21 09:30:49'),
(28, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Status Update.', '2022-06-21 09:31:14'),
(29, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Status Update.', '2022-06-21 09:31:37'),
(30, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-21 09:31:49'),
(31, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-21 09:31:51'),
(32, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-21 09:31:57'),
(33, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2022-06-21 09:32:03'),
(34, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2023-04-23 12:42:50'),
(35, 1, 'Varion Advisors Analytics', 'Blog has been added by Varion Advisors Analytics', 'Add New Blog Cybersecurity firm Jungle Disk expand', '2023-04-23 13:38:45'),
(36, 1, 'Varion Advisors Analytics', 'Blog has been added by Varion Advisors Analytics', 'Add New Blog dvzcv', '2023-04-23 13:40:19'),
(37, 1, 'Varion Advisors Analytics', 'Blog has been added by Varion Advisors Analytics', 'Add New Blog rewrfe', '2023-04-23 13:42:10'),
(38, 1, 'Varion Advisors Analytics', 'Blog has been added by Varion Advisors Analytics', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-23 13:45:14'),
(39, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2023-04-23 13:57:40'),
(40, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-04-23 13:59:11'),
(41, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-04-23 14:00:14'),
(42, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-04-23 14:00:16'),
(43, 1, 'Varion Advisors Analytics', 'Project has been updated by Varion Advisors Analytics.', 'Project Status Update.', '2023-04-23 14:39:47'),
(44, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Update.', '2023-04-23 15:54:23'),
(45, 1, 'AIIMS Raebareli', 'Blog has been updated by AIIMS Raebareli', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-28 06:33:59'),
(46, 1, 'AIIMS Raebareli', 'Blog has been updated by AIIMS Raebareli', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-28 06:34:12'),
(47, 1, 'AIIMS Raebareli', 'Blog has been updated by AIIMS Raebareli', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-28 06:34:21'),
(48, 1, 'AIIMS Raebareli', 'Blog has been updated by AIIMS Raebareli', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-28 06:34:31'),
(49, 1, 'Varion Advisors Analytics', 'Blog has been updated by Varion Advisors Analytics', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-28 10:37:14'),
(50, 1, 'Varion Advisors Analytics', 'Blog has been updated by Varion Advisors Analytics', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-28 10:37:24'),
(51, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-04-28 10:46:10'),
(52, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-04-28 11:48:23'),
(53, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-04-30 14:15:41'),
(54, 1, 'Varion Advisors Analytics', 'Blog has been updated by Varion Advisors Analytics', 'Add New Blog Why the AWS Certified Security - Spec', '2023-04-30 14:17:22'),
(55, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-05-01 04:29:33'),
(56, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-05-01 04:31:52'),
(57, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-05-01 04:36:03'),
(58, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-05-01 04:36:16'),
(59, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-05-01 04:36:52'),
(60, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-05-01 04:37:02'),
(61, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Status Update.', '2023-05-01 04:40:38'),
(62, 1, 'Varion Advisors Analytics', 'Team has been updated by Varion Advisors Analytics.', 'Team Status Update.', '2023-05-01 04:40:49'),
(63, 1, 'Varion Advisors Analytics', 'Blog status has been updated by Varion Advisors Analytics.', 'Blog Status Updated.', '2023-05-02 11:28:01'),
(64, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers fd', '2023-05-04 12:59:32'),
(65, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers Account manager - technologies', '2023-05-04 13:32:51'),
(66, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-04 15:13:00'),
(67, 1, 'Varion Advisors Analytics', 'Careers has been deleted by Varion Advisors Analytics.', 'Delete Careers.', '2023-05-04 15:35:30'),
(68, 1, 'Varion Advisors Analytics', 'Careers has been deleted by Varion Advisors Analytics.', 'Delete Careers.', '2023-05-04 15:36:13'),
(69, 1, 'Varion Advisors Analytics', 'Careers has been deleted by Varion Advisors Analytics.', 'Delete Careers.', '2023-05-04 15:37:14'),
(70, 1, 'Varion Advisors Analytics', 'Careers has been deleted by Varion Advisors Analytics.', 'Delete Careers.', '2023-05-04 15:37:50'),
(71, 1, 'Varion Advisors Analytics', 'Careers has been deleted by Varion Advisors Analytics.', 'Delete Careers.', '2023-05-04 15:38:35'),
(72, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers Account manager - technologies', '2023-05-04 15:54:28'),
(73, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-04 15:54:33'),
(74, 1, 'Varion Advisors Analytics', 'Blog has been updated by Varion Advisors Analytics', 'Add New Blog ', '2023-05-04 16:33:12'),
(75, 1, 'Varion Advisors Analytics', 'Blog has been updated by Varion Advisors Analytics', 'Add New Blog ', '2023-05-04 16:33:13'),
(76, 1, 'Varion Advisors Analytics', 'Blog has been updated by Varion Advisors Analytics', 'Add New Blog ', '2023-05-04 16:33:14'),
(77, 1, 'Varion Advisors Analytics', 'Blog has been updated by Varion Advisors Analytics', 'Add New Blog ', '2023-05-04 16:33:14'),
(78, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers ', '2023-05-04 16:34:01'),
(79, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologies', '2023-05-04 16:35:22'),
(80, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologie', '2023-05-04 16:36:09'),
(81, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologies', '2023-05-04 16:36:20'),
(82, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologies', '2023-05-04 16:36:30'),
(83, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologies', '2023-05-04 16:36:38'),
(84, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologies', '2023-05-04 16:36:46'),
(85, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologies', '2023-05-04 16:37:00'),
(86, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics', 'Update New Careers Account manager - technologies', '2023-05-04 16:37:08'),
(87, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers Account manager - technologies', '2023-05-09 06:09:25'),
(88, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers Recruitment consultant education S', '2023-05-09 06:10:12'),
(89, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers Senior PHP software developer', '2023-05-09 06:11:24'),
(90, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers Digital Marketing Executive', '2023-05-09 06:12:57'),
(91, 1, 'Varion Advisors Analytics', 'Careers has been added by Varion Advisors Analytics', 'Add New careers Engineering Manager - Android Appl', '2023-05-09 06:13:31'),
(92, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-09 06:22:27'),
(93, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-09 06:22:29'),
(94, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-09 06:22:30'),
(95, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-09 06:22:32'),
(96, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-09 06:22:34'),
(97, 1, 'Varion Advisors Analytics', 'Careers has been updated by Varion Advisors Analytics.', 'Careers Status Update.', '2023-05-09 06:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `tech_blogs`
--

CREATE TABLE `tech_blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_tag` varchar(255) DEFAULT NULL,
  `blog_category` varchar(50) NOT NULL,
  `blog_author` varchar(70) NOT NULL,
  `blog_image` varchar(200) NOT NULL,
  `blog_description` longtext NOT NULL,
  `blog_date` varchar(20) NOT NULL,
  `blog_slug` varchar(100) NOT NULL,
  `blog_status` tinyint(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tech_blogs`
--

INSERT INTO `tech_blogs` (`blog_id`, `blog_title`, `blog_tag`, `blog_category`, `blog_author`, `blog_image`, `blog_description`, `blog_date`, `blog_slug`, `blog_status`, `date`) VALUES
(1, 'Why the AWS Certified Security - Specialty is worth getting', 'Demo1,Demo2', 'Health and fitness blogs', 'Amit kumar', '1213816483.15', '<p><strong>The year is 2040.&nbsp;</strong>ChatGPT and other AI services have teamed up to overthrow the human race. Corporate data centers are a thing of the past. Only public cloud providers remain. The evil AI services are close to overthrowing the world. All they need to do is take over one final system that lives within AWS...&nbsp;</p>\r\n\r\n<p><em>Insert dramatic music</em></p>\r\n\r\n<p>From the data center rubble and dust, a lone individual appears. They approach the AI services with confidence only seen before the year 2020. Slowly, they hold up a piece of paper (old technology used by humans for storing information) to reveal something written on it.</p>\r\n\r\n<p><strong>(GASP)&nbsp;</strong>It&rsquo;s the coveted AWS Certified Security - Specialty exam certification badge!</p>\r\n\r\n<p>Also known as SCS-C01, the certification is one of the most respected in the industry, and the AI services know it. Nobody could obtain that difficult certification, especially not a human! It&#39;s impossible!&nbsp;</p>\r\n\r\n<p>They&rsquo;re in utter panic. They don&rsquo;t know how to defeat this super-powered, certified individual. They go around and around in circles trying to find a solution. Eventually, the influx of requests overwhelms their fragile infrastructure. They crash. Permanently. Ha! They didn&#39;t know about fault tolerance and high availability. Amateurs.</p>\r\n\r\n<p>The world celebrates, vowing to mark this day forevermore as the day the hero helped &ldquo;secure&rdquo; humanity&rsquo;s future.&nbsp;</p>\r\n\r\n<p><em><strong>Fin.</strong></em></p>\r\n\r\n<h2>Okay, a bit far-fetched. But having the SCS-C01 is valuable!</h2>\r\n\r\n<p>Let&rsquo;s face it, public cloud technology hasn&rsquo;t just gone mainstream. It&rsquo;s just become the norm. According to Gartner,&nbsp;<a href=\"https://learn.pluralsight.com/resource/gate/road-to-multicloud-g\" rel=\"noopener noreferrer\" target=\"_blank\">more than 80% of organizations use more than one cloud provider</a>&nbsp;(compared to 49% in 2017), with 75% of organizations defaulting to multi cloud environments. As a result, being proficient in multiple cloud providers is&nbsp;<a href=\"https://acloudguru.com/blog/engineering/why-learn-multiple-cloud-platforms\" rel=\"noopener noreferrer\" target=\"_blank\">a &ldquo;unicorn&rdquo; skill in the hiring market</a>.&nbsp;</p>\r\n\r\n<p>Cloud computing forced us to rethink how we design and deploy architectures, so why would security be any different? This naturally leads to some business challenges as well.&nbsp;</p>\r\n\r\n<p>Let&#39;s actually talk about a few of those challenges, before we explore how studying and getting your AWS Certified Cloud Security - Specialty equips you to solve them. Below are the top five cloud security challenges most companies face.</p>\r\n\r\n<h3>1. Data Challenges</h3>\r\n\r\n<p>Many companies find it challenging to secure their data within the cloud correctly. If you need an example, search for Amazon S3 public data leaks. I&#39;ll wait...</p>\r\n\r\n<p>Crazy, isn&#39;t it? Plain and simple, securing data can be tricky. Especially when you have to worry about new and upcoming data sovereignty laws, compliance requirements, data geolocation regulations, and other issues. All it takes is one misconfiguration, and a company can face massive lawsuits and fines.&nbsp;</p>\r\n\r\n<h3>2. Securing Infrastructure</h3>\r\n\r\n<p>Designing a truly secure cloud architecture is complex, with many nooks and crannies to account for. It takes a lot of time and knowledge. To make things more challenging, there is no \"One Size Fits All\" approach, either.</p>\r\n\r\n<h3>3. AuthN and AuthZ</h3>\r\n\r\n<p>Let&#39;s face it, implementing authorization and authentication within the public cloud can be a nightmare. If you have ten people, it&#39;s no biggie from an end-user perspective. But what about services within the cloud? You still have to account for those as well.&nbsp;</p>\r\n\r\n<p>And guess what? Every AWS service that needs to perform some action in a workflow requires the proper permissions to make the required API call. So don&#39;t give it too many permissions! You have to find the exact right amount, and anyone dealing with AWS IAM long enough knows the headache that entails.</p>\r\n\r\n<p>Admins often slap an&nbsp;<a href=\"https://docs.aws.amazon.com/AmazonS3/latest/userguide/security-iam-awsmanpol.html\" rel=\"noopener noreferrer\" target=\"_blank\">AWS Managed Policy</a>&nbsp;on there, like AmazonS3FullAccess, and call it good. I can see you shaking your head from here, and I agree.</p>\r\n\r\n<h3>4. Automation (The right way)</h3>\r\n\r\n<p>We have also seen an explosion in using infrastructure as code tools to deploy architecture components to the cloud. Things like&nbsp;<a href=\"https://aws.amazon.com/cloudformation/\" rel=\"noopener noreferrer\" target=\"_blank\">AWS CloudFormation</a>&nbsp;and&nbsp;<a href=\"https://registry.terraform.io/providers/hashicorp/aws/latest/docs\" rel=\"noopener noreferrer\" target=\"_blank\">HashiCorp Terraform</a>&nbsp;have brought the ability to maintain an SDLC approach to deploying resources for operations teams.&nbsp;</p>\r\n\r\n<p>That adds even more complexity. How can you best secure deployments? Who can deploy and update what? How are you sharing the current state of configurations? What happens when resources drift? It&#39;s a pain, but we can make it slightly less painful by following proper security best practices.</p>\r\n\r\n<h3>5. Reporting and Auditing</h3>\r\n\r\n<p>Last, everyone&#39;s favorite subject: audits. For those of you lucky enough to have gone through a full audit process (sarcasm), you know how much documentation and reporting are required to pass. For those of you who have not, consider yourself lucky. Take our word for it; it is a ton of documentation. Seriously, a ton.&nbsp;</p>\r\n\r\n<p>Of course, all these issues are only the biggest issues. Trust me when I say that the list of security challenges is almost endless!</p>\r\n\r\n<h2>How studying for the SCS-C01 helps you solve real-world problems</h2>\r\n\r\n<p>It would be nice if we could wave a certification, like in our story above, and cybersecurity problems solved themselves! That said, it&rsquo;s not really the certification that does anything (other than get you interviews and pay rises), it&rsquo;s the&nbsp;<a href=\"https://acloudguru.com/blog/engineering/study-cloud-cert-even-without-exam\" rel=\"noopener noreferrer\" target=\"_blank\">knowledge you gain</a>&nbsp;when you study for the exam that equips you to solve real business issues.&nbsp;</p>\r\n\r\n<p>Here is a fraction of the things you learn to pass the AWS Certified Security - Speciality exam:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>How to efficiently secure AWS data like encrypting data in transit and at rest</p>\r\n	</li>\r\n	<li>\r\n	<p>How to isolate permissions using different KMS keys for encryption or even leverage complex Amazon S3 bucket policies to restrict non-HTTPs traffic and non-organizational access to objects</p>\r\n	</li>\r\n	<li>\r\n	<p>The options for identity provider management, including AWS IAM Identity Center (formerly AWS SSO), Amazon Cognito, and&nbsp;<a href=\"https://docs.aws.amazon.com/directoryservice/latest/admin-guide/directory_microsoft_ad.html\" rel=\"noopener noreferrer\" target=\"_blank\">AWS Managed Microsoft AD</a>.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tools to use in AWS to deploy resources, as well as how to securely orchestrate workflows using serverless technologies</p>\r\n	</li>\r\n	<li>\r\n	<p>The correct VPN solution for accessing VPCs from an on-premise location, how to use Lambda@Edge to inject custom HTTP security headers, and how to connect to managed compute without the need for SSH or RDP</p>\r\n	</li>\r\n	<li>\r\n	<p>How to make pass audits (without tearing your hair out) with AWS tools like&nbsp;<a href=\"https://docs.aws.amazon.com/securityhub/latest/userguide/what-is-securityhub.html\" rel=\"noopener noreferrer\" target=\"_blank\">AWS Security Hub</a>,&nbsp;<a href=\"https://docs.aws.amazon.com/macie/latest/user/what-is-macie.html\" rel=\"noopener noreferrer\" target=\"_blank\">Amazon Macie</a>, and&nbsp;<a href=\"https://docs.aws.amazon.com/artifact/latest/ug/what-is-aws-artifact.html\" rel=\"noopener noreferrer\" target=\"_blank\">AWS Artifact</a></p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>The AWS Certified Security - Specialty also hits the tech-demand trifecta</h2>\r\n\r\n<p>No matter which report you open (Gartner, StackOverflow, or Pluralsight), there&rsquo;s&nbsp;<a href=\"https://www.pluralsight.com/blog/teams/top-tech-trends-2023\" rel=\"noopener noreferrer\" target=\"_blank\">three dominant tech themes in 2023</a>: cloud, cybersecurity, and data. The SCS-C01 hits all of these. But here are some other stats worth mentioning:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>In&nbsp;<a href=\"https://www.pluralsight.com/resource-center/state-of-upskilling-2022\" rel=\"noopener noreferrer\" target=\"_blank\">Pluralsight&rsquo;s State of Upskilling 2022</a>, tech leaders reported the #1 skills gap they were facing was in cybersecurity, followed by cloud computing in #2 and data storage at #3</p>\r\n	</li>\r\n	<li>\r\n	<p>IT Security Professionals were also the most in-demand for important tech initiatives, according to the&nbsp;<a href=\"https://www.idc.com/getdoc.jsp?containerId=US48925022\" rel=\"noopener noreferrer\" target=\"_blank\">ITC 2022 Future Enterprise Resiliency & Spending Survey</a></p>\r\n	</li>\r\n	<li>\r\n	<p>According to&nbsp;<a href=\"https://www.pluralsight.com/resource-center/state-of-cloud\" rel=\"noopener noreferrer\" target=\"_blank\">Pluralsight&rsquo;s State of Cloud 2022</a>, while 75% of organizations are building new products and features in the cloud by default, only 8% of technologists claim extensive experience with cloud-related tools</p>\r\n	</li>\r\n	<li>\r\n	<p>Among cloud providers,&nbsp;<a href=\"https://www.pluralsight.com/blog/teams/2022-in-tech#cloud-providers\" rel=\"noopener noreferrer\" target=\"_blank\">AWS is still the industry leader</a>, which makes it a great choice for a cloud cert</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Studying for the AWS Certified Security - Speciality is good for everyone involved</h2>\r\n\r\n<p>Getting the AWS Certified Security - Specialist certification is good for solving real-world problems and&nbsp; maximizes your personal value. So if you&rsquo;re thinking about going for it, do it! Who knows, you may very well find yourself trying to save your company from&nbsp;<a href=\"https://arstechnica.com/information-technology/2023/02/now-open-fee-based-telegram-service-that-uses-chatgpt-to-generate-malware/\" rel=\"noopener noreferrer\" target=\"_blank\">AI monsters one day</a>.</p>\r\n\r\n<h2>Looking to study for the AWS Certified Security - Speciality?&nbsp;</h2>\r\n\r\n<p>ACloudGuru and Pluralsight have just released a completely refreshed version of the AWS Certified Security - Specialty exam prep course! This prep course runs through all the significant challenges for teams trying to secure their AWS infrastructure and resources.&nbsp;</p>\r\n\r\n<p>The course walks you through real-world scenarios for each of the following domains so you are prepared for the exam itself and actual use cases that you can implement in your daily tasks.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Domain 1: Incident Response (12%)</p>\r\n	</li>\r\n	<li>\r\n	<p>Domain 2: Logging and Monitoring (20%)</p>\r\n	</li>\r\n	<li>\r\n	<p>Domain 3: Infrastructure Security (26%)</p>\r\n	</li>\r\n	<li>\r\n	<p>Domain 4: Identity and Access Management (20%)</p>\r\n	</li>\r\n	<li>\r\n	<p>Domain 5: Data Protection (22%)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Okay, that&#39;s enough talking. Whenever you&#39;re ready for this epic challenge of an exam, go ahead and check out our newly released&nbsp;<a href=\"https://learn.acloud.guru/course/aws-certified-security-specialty-scs-c01/overview\" rel=\"noopener noreferrer\" target=\"_blank\">AWS Certified Security - Specialty</a>&nbsp;exam prep course at Pluralsight! We are excited for you to get going! Keep being awesome</p>\r\n', '23-04-23', 'why-the-aws-certified-security-specialty-is-worth-getting', 1, '2023-04-23 13:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `tech_careers`
--

CREATE TABLE `tech_careers` (
  `career_id` int(11) NOT NULL,
  `career_slug` varchar(255) NOT NULL,
  `career_title` varchar(255) NOT NULL,
  `career_description` varchar(255) NOT NULL,
  `career_location` varchar(100) NOT NULL,
  `career_status` int(11) NOT NULL DEFAULT 0,
  `career_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tech_careers`
--

INSERT INTO `tech_careers` (`career_id`, `career_slug`, `career_title`, `career_description`, `career_location`, `career_status`, `career_date`) VALUES
(1, 'account-manager-technologies', 'Account manager - technologies', '<p>We are excited about an opportunity we have within the Technologies team in London. We&rsquo;re on the lookout for an Account Manager to join Varion Advisors Analytics top performing team for 2 years in a row! We want to hear from talented and ambitiou', 'Lucknow', 0, '2023-05-09 06:09:25'),
(2, 'recruitment-consultant-education-sydney', 'Recruitment consultant education Sydney', '<p>Do you enjoy a sales environment with little administration? Enjoy using the latest recruitment technology without losing the &lsquo;Human Touch&rsquo;? Do you want to work for a company who believes in supporting your career and personal growth? Want ', 'Lucknow', 1, '2023-05-09 06:10:12'),
(3, 'senior-php-software-developer', 'Senior PHP software developer', '<p>This is a great opportunity to join a Varion Advisors Analytics start up in the IT industry. We provide a number of services to our clients in both England and Australia. Our services ensures our clients achieves energy efficiencies, accurate reporting', 'Kanpur', 1, '2023-05-09 06:11:24'),
(4, 'digital-marketing-executive', 'Digital Marketing Executive', '<p>We provide a number of services to our clients in both England and Australia. Our services ensures our clients achieves energy efficiencies, accurate reporting whilst saving time. This is a great opportunity to join a Varion Advisors Analytics start up', 'Prayagraj', 1, '2023-05-09 06:12:57'),
(5, 'engineering-manager-android-application-infrastructure', 'Engineering Manager - Android Application Infrastructure', '<p>Join a Varion Advisors Analytics start up in the IT industry. We provide a number of services to our clients in both England and Australia. Our services ensures our clients achieves energy efficiencies, accurate reporting whilst saving time.</p>\r\n', 'Lucknow', 1, '2023-05-09 06:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `tech_clients`
--

CREATE TABLE `tech_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `client_image` varchar(50) NOT NULL,
  `client_status` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tech_clients`
--

INSERT INTO `tech_clients` (`client_id`, `client_name`, `client_image`, `client_status`, `date`) VALUES
(5, 'EC Council', '1899167689.png', 1, '2022-06-20 08:48:09'),
(6, 'PECB', '1239969368.png', 1, '2022-06-20 08:48:50'),
(7, 'Microsoft', '1037790705.png', 1, '2022-06-20 08:53:18'),
(8, 'GAQM', '1091484304.png', 1, '2022-06-20 08:53:21'),
(9, 'ISACA', '69113110.png', 1, '2022-06-20 08:53:26'),
(10, 'AWS', '1328696212.png', 1, '2022-06-20 08:53:30'),
(11, 'CISCO', '1892719689.png', 1, '2022-06-20 08:53:36'),
(12, 'PMI', '995152079.png', 1, '2022-06-20 08:53:39'),
(13, 'SANS', '1844927700.png', 1, '2022-06-20 08:53:44'),
(14, 'ComPtia', '440347181.png', 1, '2022-06-20 08:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `tech_contact`
--

CREATE TABLE `tech_contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(60) NOT NULL,
  `con_email` varchar(100) NOT NULL,
  `con_subject` varchar(100) NOT NULL,
  `con_message` varchar(255) NOT NULL,
  `con_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tech_contact`
--

INSERT INTO `tech_contact` (`con_id`, `con_name`, `con_email`, `con_subject`, `con_message`, `con_date`) VALUES
(1, 'amit', 'aa@gmail.com', 'fjfcj', 'fghfghjdfgj', '2023-04-27 10:11:58'),
(2, 'kcghk', 'j@gmail.com', 'fghkjf', 'ghj', '2023-04-27 10:11:58'),
(3, 'fbf', 'dfgdfdf@gmail.com', 'rtrt', 'reyre', '2023-04-27 10:11:58'),
(4, 'amit', 'amit@gmail.com', 'sun', 'gdgdfs', '2023-04-27 10:11:58'),
(5, 'hdfh', 'dfg@gmail.com', 'ghfgh', 'dfghg', '2023-04-27 10:11:58'),
(6, 'Durgesh Chaudhary', 'durgesh.chaudhary@varionadvisors.com', 'Project Enquiry', 'This is message to request you to provide me about.', '2023-05-01 04:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `tech_login_log`
--

CREATE TABLE `tech_login_log` (
  `l_id` int(11) NOT NULL,
  `l_email` varchar(50) NOT NULL,
  `l_remote_ip` varchar(50) NOT NULL,
  `l_bos` varchar(100) NOT NULL,
  `l_port` int(11) NOT NULL,
  `l_city` varchar(30) NOT NULL,
  `l_country` varchar(30) NOT NULL,
  `l_status` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tech_login_log`
--

INSERT INTO `tech_login_log` (`l_id`, `l_email`, `l_remote_ip`, `l_bos`, `l_port`, `l_city`, `l_country`, `l_status`, `date`) VALUES
(1, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Sa', 80, 'NA', 'NA', 1, '2022-06-20 09:42:29'),
(2, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Sa', 80, 'NA', 'NA', 1, '2022-06-20 09:51:28'),
(3, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Sa', 80, 'NA', 'NA', 1, '2022-06-20 11:35:56'),
(4, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Sa', 80, 'NA', 'NA', 1, '2022-06-20 12:31:35'),
(5, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Sa', 80, 'NA', 'NA', 1, '2022-06-21 05:55:42'),
(6, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Sa', 80, 'NA', 'NA', 1, '2022-06-21 09:30:06'),
(7, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 0, '2023-04-23 12:39:50'),
(8, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-23 12:40:57'),
(9, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-23 12:41:56'),
(10, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-23 12:54:03'),
(11, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-23 14:28:24'),
(12, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-26 10:18:10'),
(13, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-26 11:26:12'),
(14, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-27 09:59:06'),
(15, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-27 10:13:47'),
(16, 'admin@hmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 0, '2023-04-28 05:33:07'),
(17, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-28 05:33:15'),
(18, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-28 06:09:55'),
(19, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-28 10:37:02'),
(20, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-28 11:48:14'),
(21, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-04-28 12:23:06'),
(22, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-05-01 04:29:14'),
(23, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-05-02 11:27:19'),
(24, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-05-02 15:41:22'),
(25, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-05-02 16:07:54'),
(26, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-05-04 12:07:52'),
(27, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-05-04 12:09:25'),
(28, 'admin@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Sa', 443, 'NA', 'NA', 1, '2023-05-04 14:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `tech_project`
--

CREATE TABLE `tech_project` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `project_link` varchar(50) NOT NULL,
  `project_image` varchar(50) NOT NULL,
  `project_status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tech_project`
--

INSERT INTO `tech_project` (`project_id`, `project_title`, `project_type`, `project_link`, `project_image`, `project_status`, `date`) VALUES
(4, 'GIS Tagging', 'app', 'https://upicon.in', '2018707546.jpeg', 1, '2022-06-20 12:32:24'),
(6, 'Mission Shakti', 'website', 'https://upicon.in', '2087087535.jpg', 1, '2022-06-21 09:31:57'),
(7, 'ODOP', 'website', 'https://upicon.in', '727881060.png', 1, '2022-06-21 09:32:03'),
(8, 'UPICON', 'app', 'https://upicon.in', '1361309814.png', 1, '2022-06-20 12:18:22'),
(9, 'MSMS', 'website', '	https://upicon.in', '889023685.png', 1, '2023-04-23 12:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `tech_team`
--

CREATE TABLE `tech_team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_position` varchar(30) NOT NULL,
  `team_experience` varchar(30) NOT NULL,
  `team_description` varchar(255) NOT NULL,
  `team_image` varchar(50) NOT NULL,
  `team_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tech_team`
--

INSERT INTO `tech_team` (`team_id`, `team_name`, `team_position`, `team_experience`, `team_description`, `team_image`, `team_status`) VALUES
(1, 'Pravin Singh', 'Managing Director', '15', 'I am temporibus voluptatem odio odit ratione perferendis explicabo!', '579115814.jfif', 1),
(2, 'Dr Jyotishree Pandey', 'Director', '12', 'Expert in temporibus voluptatem odio odit ratione perferendis explicabo!', '1731744915.jfif', 1),
(3, 'Durgesh Chaudhary', 'Software Engineer', '4', 'Have more then 8 years temporibus voluptatem odio odit ratione perfere!', '355297309.jpg', 1),
(4, 'Chandan Rai', 'Software Engineer', '3', 'With more then temporibus voluptatem odio odit ratione perferendis!', '1545020574.jpg', 1),
(5, 'Smriti Jaiswal', 'Digital Marketing Manager', '5', 'I am voluptatem odio odit ratione perferendis explicabo!', '943627519.jpeg', 0),
(6, 'Ahmad', 'Graphics Designer', '7', 'Let\'s get temporibus voluptatem odio odit ratione perferendis explicabo!', '1907570655.jpeg', 1),
(7, 'Shantanu', 'Manager Admin', '1', 'We can voluptatem odit perferendis explicabo ratione!', '234456615.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tech_users`
--

CREATE TABLE `tech_users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_city` varchar(50) NOT NULL,
  `u_mobile` varchar(11) NOT NULL,
  `u_profile_pic` varchar(100) NOT NULL,
  `u_type` varchar(20) NOT NULL,
  `u_status` int(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tech_users`
--

INSERT INTO `tech_users` (`u_id`, `u_email`, `u_name`, `u_password`, `u_address`, `u_city`, `u_mobile`, `u_profile_pic`, `u_type`, `u_status`, `date`) VALUES
(1, 'admin@gmail.com', 'Varion Advisors Analytics', '$2y$10$9wjGxoK3MkwFXfZBEs/qAuur0PllZcr9QKe0O/rQ41gjIdtBZ9ZoS', '7th Floor, summit building, Gomti Nagar, Lucknow, Uttar Pradesh 226001', '', '05224233727', 'user.png', 'admin', 1, '2019-03-28 04:53:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tech_activity`
--
ALTER TABLE `tech_activity`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tech_blogs`
--
ALTER TABLE `tech_blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tech_careers`
--
ALTER TABLE `tech_careers`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `tech_clients`
--
ALTER TABLE `tech_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tech_contact`
--
ALTER TABLE `tech_contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tech_login_log`
--
ALTER TABLE `tech_login_log`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tech_project`
--
ALTER TABLE `tech_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tech_team`
--
ALTER TABLE `tech_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tech_users`
--
ALTER TABLE `tech_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tech_activity`
--
ALTER TABLE `tech_activity`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tech_blogs`
--
ALTER TABLE `tech_blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tech_careers`
--
ALTER TABLE `tech_careers`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tech_clients`
--
ALTER TABLE `tech_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tech_contact`
--
ALTER TABLE `tech_contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tech_login_log`
--
ALTER TABLE `tech_login_log`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tech_project`
--
ALTER TABLE `tech_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tech_team`
--
ALTER TABLE `tech_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tech_users`
--
ALTER TABLE `tech_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
