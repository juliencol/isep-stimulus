CREATE TABLE `users` (
  `id` integer,
  `supervisor_id` integer,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `birthday_date` date,
  `company` varchar(255),
  `employee_number` integer,
  `is_female` boolean,
  `profile_picture` varchar(255),
  `number_of_tests_done` integer,
  `needs_tests` boolean
);

CREATE TABLE `supervisors` (
  `id` integer,
  `admin_id` integer,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `birthday_date` date,
  `company` varchar(255),
  `employee_number` integer,
  `is_female` boolean,
  `profile_picture` varchar(255)
);

CREATE TABLE `admins` (
  `id` integer,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `birthday_date` date,
  `is_female` boolean,
  `profile_picture` varchar(255),
  `CGU` varchar(255)
);

CREATE TABLE `tests` (
  `id` integer,
  `user_id` integer,
  `description` varchar(255),
  `number` integer,
  `date` datetime,
  `score` integer,
  `title` varchar(255),
  `reaction_time` datetime,
  `result` varchar(255)
);

CREATE TABLE `messages` (
  `id` integer,
  `user_id` integer,
  `object` varchar(255),
  `content` varchar(255),
  `date` datetime
);

CREATE TABLE `faq_questions` (
  `id` integer,
  `supervisor_id` integer,
  `title` varchar(255),
  `answer` varchar(255),
  `subject` varchar(255)
);

ALTER TABLE `users` ADD FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`);

ALTER TABLE `supervisors` ADD FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

ALTER TABLE `tests` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `faq_questions` ADD FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`);

ALTER TABLE `messages` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
