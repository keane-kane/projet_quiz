
-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `quizz`;

 -- redof_quiz_master
CREATE TABLE IF NOT EXISTS `redof_quiz_master` (
  `quiz_id` int NOT NULL AUTO_INCREMENT,
  `company_id` int NOT NULL,
  `title` varchar(555) NOT NULL,
  `type` varchar(111) NOT NULL,
  `version` varchar(333) NOT NULL,
  `details` varchar(255) NOT NULL,
  `random_questions` int NOT NULL DEFAULT 0,
  `random_answers` int NOT NULL DEFAULT 0,
  `status` int NOT NULL,
  `is_delete` int NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `ip_address` varchar(22) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`quiz_id`)
)ENGINE=innoDB DEFAULT CHARSET=utf8mb4;

--redof_quiz_questions
CREATE TABLE IF NOT EXISTS `redof_quiz_questions` (
  `question_id` int NOT NULL AUTO_INCREMENT,
  `quiz_id` int NOT NULL,
  `question_type` varchar(60) NOT NULL,
  `question_title` varchar(255) NOT NULL,
  `correct_answers` varchar(255) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `answer_4` varchar(255) NOT NULL,
  `sequence` int NOT NULL,
  PRIMARY KEY (`question_id`)
)ENGINE=innoDB DEFAULT CHARSET=utf8mb4;


--redof_attendees_master
CREATE TABLE IF NOT EXISTS `redof_attendees_master` (
  `attendee_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(22) NOT NULL,
  `company_id` int NOT NULL,
  `gender` varchar(55) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `email` varchar(555) NOT NULL,
  `dob` varchar(55) NOT NULL,
  `birth_country` varchar(111) NOT NULL,
  `birth_city` varchar(111) NOT NULL,
  `address` varchar(255) NOT NULL,
  `is_situation_disable` int NOT NULL,
  `disable_mor_info` longtext NOT NULL,
  `expectation` longtext NOT NULL,
  `condition_success` longtext NOT NULL,
  `individual` varchar(255) NOT NULL,
  `company_client_id` int NOT NULL DEFAULT 0,
  `status` int NOT NULL,
  `is_delete` int NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `ip_address` varchar(111) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`attendee_id`)
)ENGINE=innoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO group_terroristes VALUES (1, 'PEN',2, 'dakar sud', '300',  '{arme:clachenicof}','12', '2020-7-04', '2020-9-03', 0);
INSERT INTO group_terroristes VALUES (2, 'G2',2, 'dakar sud', '300',  '{arme1: kalocnicoff, arme2: metralleux}','12', '2020-7-04', '2020-9-03', 0);
INSERT INTO group_terroristes VALUES (3, 'G3',2, 'dakar sud', '300',  '{arme1: kalocnicoff, arme2: metralleux}','12', '2020-7-04', '2020-9-03', 0);

INSERT INTO attaqu_ass_group VALUES (1, '2020-7-04', 'Paris', 12, 62, 1, '{arme:clachenicof}', 'mosquee', 'https://www.sn.com', '2020-7-04', '2020-9-03', 0);
INSERT INTO attaqu_ass_group VALUES (2, '2020-7-04', 'Paris', 12, 62, 2, '{arme:bombe}', 'mosquee', 'https://www.sn.com', '2020-7-04', '2020-9-03', 0);
INSERT INTO attaqu_ass_group VALUES (3, '2020-7-04', 'Paris', 12, 62, 3, '{arme:gaz}', 'mosquee', 'https://www.sn.com', '2020-7-04', '2020-9-03', 0);
INSERT INTO users VALUES (3, 'user', 'admin', 'user', '2019-2-06', '2019-6-23', 0);