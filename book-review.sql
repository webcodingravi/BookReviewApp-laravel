-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 02:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book-review`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Subtle Art of Not Giving a F*ck Journal', 'Mark Manson', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><b>From New York Times bestseller author Mark Manson, comes an irreverent, interactive journal based on the internationally bestselling phenomenon The Subtle Art of Not Giving A F*ck and the New York Times bestseller Everything is F*cked, providing questions and sharp insights in his inimitable voice.</b></span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\">In classic Mark Manson style, this journal isn’t a “once a day” or “once a week” thing. You can use it any time. Or not. Leave it and come back. Or not.</span></span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\">The Subtle Art of Not Giving a F*ck Journal is divided into five sections that mirror the themes of The Subtle Art of Not Giving A F*ck and include guided prompts that help you consider the deepest questions around emotions, values and purpose. Manson’s wisdom is complimented with exercises to make you laugh, think, and grow, and his in-your-face attitude is only matched by his sincerity in wanting you to really wrestle with yourself and the things that matter.</span></span></span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\">When it comes to the big topics—things like happiness, values, and responsibility—life is punctuated by seemingly endless questions. Manson addresses these issues with his unique irreverence, offering insights and observations to help you find your own answers. The Subtle Art of Not Giving a F*ck Journal provides ample space for contemplating life’s ups and downs and guides you to see how key moments in your life—both the tragic and the comic—are opportunities for growth (and sometimes just a good laugh).</span></span></span></span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\">The Subtle Art of Not Giving a F*ck Journal is illustrated with color images throughout.</span><br></span></span></span></span><br></p>', '1723892195.jpg', '1', '2024-08-17 04:11:47', '2024-08-18 04:43:50'),
(15, 'Atomic Habits', 'James Clear', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">No matter your goals, Atomic Habits offers a proven framework for improving--every day. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results</span><br></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">If you\'re having trouble changing your habits, the problem isn\'t you. The problem is your system. Bad habits repeat themselves again and again not because you don\'t want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you\'ll get a proven system that can take you to new heights.</span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">Clear is known for his ability to distill complex topics into simple behaviors that can be easily applied to daily life and work. Here, he draws on the most proven ideas from biology, psychology, and neuroscience to create an easy-to-understand guide for making good habits inevitable and bad habits impossible. Along the way, readers will be inspired and entertained with true stories from Olympic gold medalists, award-winning artists, business leaders, life-saving physicians, and star comedians who have used the science of small habits to master their craft and vault to the top of their field.</span><br></p><p><span style=\"white-space-collapse: preserve;\"> Learn How to:-</span></p><ul style=\"margin-bottom: 0px;\"><li><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">make time for new habits (even when life gets crazy);</span></li><li><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">overcome a lack of motivation and willpower;</span></li><li><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">design your environment to make success easier;</span></li><li><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">get back on track when you fall off course;</span></li><li><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">...and much more</span></li></ul><p><span style=\"font-family: var(--body-font-family); font-size: 1rem; white-space-collapse: preserve;\">.</span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">Atomic Habits will reshape the way you think about progress and success, and give you the tools and strategies you need to transform your habits--whether you are a team looking to win a championship, an organization hoping to redefine an industry, or simply an individual who wishes to quit smoking, lose weight, reduce stress, or achieve any other goal.</span><br></p>', '1723895967.jpg', '1', '2024-08-17 06:29:27', '2024-08-18 04:38:28'),
(17, 'Think and Grow Rich', 'Napolean Hill', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><b>Think and Grow Rich</b> has been called the \"Granddaddy of All Motivational Literature.\" It was the first book to boldly ask, \"What makes a winner?\" The man who asked and listened for the answer, Napoleon Hill, is now counted in the top ranks of the world\'s winners himself.</span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\">The most famous of all teachers of success spent \"a fortune and the better part of a lifetime of effort\" to produce the \"Law of Success\" philosophy that forms the basis of his books and that is so powerfully summarized in this one.</span></span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\">In the original <b>Think and Grow Rich</b>, published in 1937, Hill draws on stories of Andrew Carnegie, Thomas Edison, Henry Ford, and other millionaires of his generation to illustrate his principles. In the updated version, Arthur R. Pell, Ph.D., a nationally known author, lecturer, and consultant in human resources management and an expert in applying Hill\'s thought, deftly interweaves anecdotes of how contemporary millionaires and billionaires, such as Bill Gates, Mary Kay Ash, Dave Thomas, and Sir John Templeton, achieved their wealth. Outmoded or arcane terminology and examples are faithfully refreshed to preclude any stumbling blocks to a new generation of readers.</span></span></span><br></p>', '1724235114.jpg', '1', '2024-08-21 04:41:54', '2024-08-21 04:41:54'),
(18, 'Autobiography of a Yogi', 'Paramahansa Yogananda', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">Inspiring stalwarts like the Beatles, Steve Jobs and Ravi Shankar, Autobiography of a Yogi is an immensely gratifying spiritual read that has altered and enriched the lives of millions across the world, since it was first published in 1946. An originative text that tells the story of Paramhansa Yogananda, this book has been revered for its memorable, incisive and instructive teachings. This spiritual autobiography will take you on an incredible journey of Indian mysticism and spirituality and deliver humbling, comforting truths about life and existence.A book that deserves a place in every home.</span><br></p>', '1724235281.jpg', '1', '2024-08-21 04:44:41', '2024-08-21 04:44:41'),
(19, 'MY JOURNEY - TRANSFORMING DREAMS INTO ACTION', 'A.P.J. Abdul Kalam', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">The book, ‘My Journey: Transforming Dreams into Actions’ is the life story of Dr. APJ Abdul Kalam, India\'s famous scientist and former President. Written with a powerful narrative style laden with significant experiences, Dr. Kalam has filled this book with the details that matter. This inspirational book has been published by Rupa Publications India in the year 2013. The book reveals the famous story of how a simple child from Rameshwaram became the President of the world’s largest democracy. It is an extraordinary tale of India’s most celebrated scientist who along with his research found time for his fellow people and worked hard towards their development. In this book, Dr. Kalam sheds light on several personal aspects like the people who he was very close to and their influence on him. He also speaks in detail about the life and the atmosphere at Rameshwaram. He talks about his upbringing and family as well and the various pangs and toils he had to go through. A large part of this book deals with Dr.Kalam’s work in India’s space program. He talks about the difficulties they had to face while developing India’s first space vehicle. Written in a candid manner, you can now go through the nitty-gritty details of the life of Dr. Kalam as told by the former President himself. About the Author A. P. J. Abdul Kalam is one of the most famous and respected names in India. A visionary scientist, honest politician and a true Indian, Dr. Kalam stood for the best of human values. He served as the President of India from 2002 to 2007 and is often regarded as the \'Missile man of India\', having acted as a catalyst towards the substantial growth of India’s space program. In 1954, he completed his graduation in Physics from Saint Joseph’s college, Tiruchirappalli which was then associated with the University of Madras. He then went on to study Aerospace Engineering from the highly reputed Madras Institute of Technology. Overall, he has received honorary doctorates from over 40 universities. He won the Von Braun Award from the National Space Society and Hoover Medal from ASME Foundation, USA. Government of India conferred him Bharat Ratna in 1997. Some of his famous books are Advantage India: From Challenge to Opportunity, Wings of Fire and Envisioning an Empowered Nation. The book, ‘My Journey: Transforming Dreams into Actions’ is full of inspiration and reveals the life of Dr, Kalam. This book is easily available online for convenient shopping. You can bag this book from A today by following a few easy steps.</span><br></p>', '1724235468.jpg', '1', '2024-08-21 04:47:48', '2024-08-21 04:47:48'),
(20, 'Ignited Minds (R/J)', 'A.P.J Abdul Kalam', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">Authored by the most influential Indian President yet, this book delves into the obstacles that are preventing India from rising up to the challenge of development. India has unmatched talent and ambition with an inherent tendency to work hard, then what is it that keeps India from overtaking the world. Why does India as a nation settle for the ordinary when the extraordinary is well within the reach?</span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\">Dr. Kalam shares his dream of a nation that is unrivaled, he discusses how he has, from his experience, met such skilled people whose visions can transform the nation. It is imperative that one searches for own solutions and find role-models in countrymen instead of looking towards the other nations. India must not strive to be the next America or Japan but has to be the strong nation that she is capable of becoming. For this, all the trapped energies and initiatives need to be freed instead of suppressing them.</span></span></p><p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><span class=\"selectable-text copyable-text\"><span class=\"selectable-text copyable-text\">In the book, we are introduced to numerous role models that are hiding amongst us. Words of wisdom from saints and seers that the author encountered through his life have been quoted. The book proceeds to address the issues at hand and mentions some reforms that have to be incorporated in politics and policies. The policy making procedure of the nation requires major reforms. The youth has to be given a stage and the reins of the nation need to be passed on. The book motivates the young minds and forces the positive auras together to build the face of a new nation.</span></span></span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><b>About the Author</b></span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span style=\"white-space-collapse: preserve; font-family: var(--body-font-family); font-size: 1rem;\">A.P.J. Abdul Kalam: The former President of India and one of the most celebrated scientists in independent India, A.P.J Abdul Kalam was also a prolific writer who authored numerous books including India 2020: A Vision For The New Millennium and Unleashing the Power Within India, among many others. He was also a part of DRDOs Aeronautical Development Establishment and was a lead scientist in India\'s nuclear weapons development program that included conducting of the underground Pokhran II tests.</span></p>', '1724235782.jpg', '1', '2024-08-21 04:53:02', '2024-08-21 04:53:02'),
(21, 'The Psychology of Money – Deluxe Edition', 'Morgan Housel', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">Timeless lessons on wealth, greed, and happiness doing well with money isn?t necessarily about what you know. It?s about how you behave. And behavior is hard to teach, even to really smart people. How to manage money, invest it, and make business decisions are typically considered to involve a lot of mathematical calculations, where data and formulae tell us exactly what to do. But in the real world, people don?t make financial decisions on a spreadsheet. They make them at the dinner table, or in a meeting room, where personal history, your unique view of the world, ego, pride, marketing, and odd incentives are scrambled together. In the psychology of money, the author shares 19 short stories exploring the strange ways people think about money and teaches you how to make better sense of one of life?s most important matters.</span><br></p>', '1724235929.jpg', '1', '2024-08-21 04:55:29', '2024-08-21 04:55:29'),
(22, 'The 7 Habits of Highly Effective People', 'R. Stephen Covey', '<p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><b>An ideal guide to building your personality by altering your habits</b></span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span style=\"white-space-collapse: preserve; font-family: var(--body-font-family); font-size: 1rem;\">It is rightly said that habits make or break a man. If you want to know why you are not doing something right, sometimes all you need is to perform an analysis of your habits and consider altering them. Because sometimes it?s not about what you do, but more about how you do it! And that\'s where your habits play a very important role.</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">\'The 7 habits of Highly Effective People\' is a book that aims at providing its readers with the importance of character ethics and personality ethics. The author talks about the values of integrity, courage, a sense of justice and most importantly, honesty. The book is a discussion about the seven most essential habits that every individual must adopt to in order to live a life which is more fulfilling.</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><br></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><b>Content of the book:</b></span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">The author continues to take the readers through the journey of character development. He elaborates how the development of the character of a being ranges from the time of his birth to the years until he grows independent. The first three habits demark the development one goes from dependence to independence. The next three habits describe in detail about interdependence while the final seventh habit deals with the new self, that is renewal.</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">The book is highly recommended for people of all ages. It also holds a record of having over 25 million copies sold in about as many as 40 languages all over the world.</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><br></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\"><b>About the Author:</b></span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\"><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">Stephen R Covey, the author of the book, is known to hold an MBA from the Harvard University. In his previous years of schooling, Covey also has studied Religious Education and Business Administration. It was in his doctoral thesis that Covey came across a contrast in the literature regarding self-help. His observations marked that the books post 1920?s focused highly on personality traits while the ones before that focused on character development. That is when the author put forth his belief about how a balance between the two is more essential than the two in isolation.</span></p>', '1724236098.jpg', '1', '2024-08-21 04:58:18', '2024-08-21 04:58:18'),
(23, 'Siddhartha An Indian Tale (Pocket Classic)', 'Hermann Hesse', '<p><span class=\"selectable-text copyable-text\" style=\"white-space-collapse: preserve;\">Fingerprint! Pocket Classics are perfect pocket-sized editions with complete original content. Convenient to carry, priced right, and ideal for gifting and collecting, each classic with its vibrant cover and flap jacket offers an ultimate reading experience. A brahmin boy follows his heart and goes through various lives to finally understand what it means to be enlightened. He experiences life as a pious brahmin, a Samana, a rich merchant, a lover, and an ordinary ferryman, to a father. Neither a practitioner nor a devotee, neither meditating nor reciting, Siddhartha comes to blend in with the world, resonating with the rhythms of nature, bending the reader?s ear down to hear answers from the river.</span><br></p>', '1724236275.jpg', '1', '2024-08-21 05:00:05', '2024-08-21 05:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_08_16_150655_update_users_table', 2),
(8, '2024_08_17_073605_create_books_table', 3),
(9, '2024_08_17_131210_create_reviews_table', 4),
(10, '2024_08_21_105203_create_password_reset_tokens', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(7, 'rkconsultancy34@gmail.com', 'KEL8Ghy1iuvfNBndlbheBQ2N2H3VBxo6VSLBnwM6XkwxAmQfDfa0qlu4NxGU', '2024-08-21 06:30:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `rating`, `user_id`, `book_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Awesome and good Book', 1, 2, 15, 0, '2024-08-20 07:33:25', '2024-08-20 07:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ravi kumar', 'rkconsultancy34@gmail.com', '1723823615.png', NULL, '$2y$12$4qzGaaI1X7g2HyW2Y2wZtOQlDSasgkEFkEJMVeughPq/XH1fglD9e', 'admin', NULL, '2024-08-16 07:56:12', '2024-08-21 06:55:06'),
(3, 'krish', 'krish@gmail.com', '1724160026.jpeg', NULL, '$2y$12$ssZPaOOxq8W4AMUrXM11juZVohd3pDSZfl1hhvM4EV5BptWGOPgDC', 'user', NULL, '2024-08-16 08:01:10', '2024-08-20 07:50:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_book_id_foreign` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
