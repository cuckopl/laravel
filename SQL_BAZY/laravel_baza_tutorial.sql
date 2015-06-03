-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Wersja serwera:               5.6.21 - MySQL Community Server (GPL)
-- Serwer OS:                    Win32
-- HeidiSQL Wersja:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Zrzut struktury bazy danych l4
CREATE DATABASE IF NOT EXISTS `l4` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci */;
USE `l4`;


-- Zrzut struktury tabela l4.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Zrzucanie danych dla tabeli l4.migrations: ~3 rows (około)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2015_06_02_000000_create_projects_and_tasks_tables', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Zrzut struktury tabela l4.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Zrzucanie danych dla tabeli l4.password_resets: ~0 rows (około)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Zrzut struktury tabela l4.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Zrzucanie danych dla tabeli l4.projects: ~3 rows (około)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Project 1', '', 'project-1', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(2, 'Project 2', '', 'project-2', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(3, 'Project 3', '', 'project-3', '2015-06-02 14:25:34', '2015-06-02 14:25:34');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;


-- Zrzut struktury tabela l4.tasks
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tasks_project_id_foreign` (`project_id`),
  CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Zrzucanie danych dla tabeli l4.tasks: ~7 rows (około)
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` (`id`, `project_id`, `name`, `slug`, `completed`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Task 1', 'task-1', 0, 'My first task', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(2, 1, 'Task 2', 'task-2', 0, 'My first task', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(3, 1, 'Task 3', 'task-3', 0, 'My first task', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(4, 1, 'Task 4', 'task-4', 1, 'My second task', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(5, 1, 'Task 5', 'task-5', 1, 'My third task', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(6, 2, 'Task 6', 'task-6', 1, 'My fourth task', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(7, 2, 'Task 7', 'task-7', 0, 'My fifth task', '2015-06-02 14:25:34', '2015-06-02 14:25:34'),
	(8, 2, 'asd', 'asd', 0, 'asd', '2015-06-03 07:52:00', '2015-06-03 07:52:00');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;


-- Zrzut struktury tabela l4.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Zrzucanie danych dla tabeli l4.users: ~0 rows (około)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
