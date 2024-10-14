-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2024 a las 02:00:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biotec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepts`
--

CREATE TABLE `concepts` (
  `id` int(11) NOT NULL,
  `concept` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `concepts`
--

INSERT INTO `concepts` (`id`, `concept`, `description`, `img`, `audio`) VALUES
(1, 'BIOCHEMICAL', 'Science that studies the chemical composition of living beings, that is, the molecules that make up cells and tissues.', '1701031487.jpg', 'BIOCHEMICAL.mp3'),
(2, 'MICROBIOLOGY', 'Area that studies microorganisms and the processes that derive from them aimed at the production of elements of industrial interest.', '1700878589.png', 'MICROBIOLOGY.mp3'),
(5, 'GENETICS', 'Is the scientific study of genes and heredity, of how certain qualities or traits are passed from parents to offspring as a result of changes in DNA sequence.', '1700877805.png', 'GENETICS.mp3'),
(6, 'BIO INPUTS', 'Are products made from beneficial organisms such as bacteria, fungi, viruses and insects, or natural extracts obtained from plants, that can be used in agricultural production.', '1701032062.png', 'BIOINPUTS.mp3'),
(8, 'BIOPROCESS', 'Is a scientific subdiscipline that uses living organisms such as bacteria, enzymes and cells to create commercially viable end products.', '1700878056.png', 'BIOPROCESS.mp3'),
(9, 'CELL CULTURE', 'They are a set of techniques that allow to isolate, grow and reproduce cells of animal or plant origin.', '1700878430.png', 'CELLCULTURE.mp3'),
(12, 'MUTATION', 'Is a change in the DNA sequence of an organism. Can result from errors in DNA replication during cell division, exposure to mutagens, or a viral infection.', '1700878328.png', 'MUTATION.mp3'),
(13, 'DNA', 'Is a biological macromolecule that carries hereditary information in many organisms. DNA is necessary for the production of proteins, the regulation, metabolism, and reproduction of a cell.', '1700878189.png', 'DNA.mp3'),
(14, 'MICROORGANISMS', 'Is an organism of microscope size, which may exist in its single-celled form or as a colony of cells.', '1700877920.png', 'MICROORGANISMS.mp3'),
(15, 'PROTEIN', 'Are organic molecules present in living organisms. They include amino acids, carbohydrates, carbon, hydrogen, oxygen, nitrogen, and sometimes sulfur.', '1700877978.png', 'PROTEIN.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elements`
--

CREATE TABLE `elements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `element` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `elements`
--

INSERT INTO `elements` (`id`, `element`, `description`, `img`, `audio`, `created_at`, `updated_at`) VALUES
(1, 'TEST TUBE', 'A glass tube, closed at one end, used for chemical analysis.', '1700609372.png', 'test tube.mp3', '2023-11-22 04:29:32', '2023-11-22 04:29:32'),
(2, 'MICROSCOPE', 'Is a laboratory instrument used to examine objects that are too small to be seen by the naked eye.', '1700609427.png', 'microscope.mp3', '2023-11-22 04:30:28', '2023-11-22 04:30:28'),
(3, 'PETRI DISH', 'Is a flat, shallow dish made of glass or plastic with a suitable lid. Used to contain different types of cells, including bacteria and molds.', '1700609487.png', 'Petri_Dish.mp3', '2023-11-22 04:31:27', '2023-11-22 04:31:27'),
(4, 'ERLENMEYER FLASK', 'A glass vessel, usually spherical in shape, used in the laboratory to contain and measure liquids', '1700609555.png', 'erlenmeyer-flask.mp3', '2023-11-22 04:32:35', '2023-11-22 04:32:35'),
(5, 'SCALE', 'Is an instrument designed to determine the mass of a body. They are characterized by their accuracy, precision and sensitivity.', '1700609613.png', 'Scale.mp3', '2023-11-22 04:33:33', '2023-11-22 04:33:33'),
(6, 'THERMOMETER', 'Is an instrument that measures the temperature of a system quantitatively.', '1700609694.png', 'thermometer.mp3', '2023-11-22 04:34:54', '2023-11-22 04:34:54'),
(7, 'TWEEZERS', 'Are used to hold a specific instrument or to move some elements of the samples being analyzed. There is a wide variety of tweezers depending on whether grip strength or precision is a priority.', '1700869437.png', 'tweezers.mp3', '2023-11-25 04:43:57', '2023-11-25 04:43:57'),
(8, 'DROPPER', 'Is a small glass tube with a hollow rubber part on one end which you use for drawing up and dropping small amounts of liquid.', '1700869549.jpg', 'dropper.mp3', '2023-11-25 04:45:49', '2023-11-25 04:45:49'),
(9, 'FUNNEL', 'Is a tube or pipe that is wide at the top and narrow at the bottom, used for guiding liquid or powder into a small opening.', '1700869594.jpg', 'funnel.mp3', '2023-11-25 04:46:34', '2023-11-25 04:46:34'),
(10, 'BEAKER', 'Cylindrical thin glass vessel commonly used in the laboratory, especially for preparing or heating substances, measuring or transferring liquids.', '1700869638.png', 'beaker.mp3', '2023-11-25 04:47:18', '2023-11-25 04:47:18'),
(11, 'REAGENT BOTTLE', 'It is used to store, retain and mix liquids, powders and other substances.', '1700869706.png', 'reagent-bottle.mp3', '2023-11-25 04:48:26', '2023-11-25 04:48:26'),
(12, 'SHAKER', 'Is a laboratory equipment used to mix, blend, or agitate substances. It contains an oscillating board that is used to place the flasks, beakers, or test tubes.', '1700869776.png', 'shaker.mp3', '2023-11-25 04:49:36', '2023-11-25 04:49:36'),
(13, 'PIPET', 'A glass tube, usually graduated and wider in the middle, used in laboratories to transfer small quantities of liquid.', '1700869812.jpg', 'pipet.mp3', '2023-11-25 04:50:12', '2023-11-25 04:50:12'),
(14, 'ALCOHOL BURNER', 'Is a piece of laboratory equipment used to produce an open flame. It can be made from brass, glass, stainless steel or aluminum.', '1700869946.png', 'alcohol-burner.mp3', '2023-11-25 04:52:26', '2023-11-25 04:52:26'),
(15, 'CRUCIBLE', 'Container used to place chemical compounds inside that are heated to very high temperatures.', '1700869995.jpg', 'crucible.mp3', '2023-11-25 04:53:15', '2023-11-25 04:53:15'),
(16, 'TRIPOD', 'Is a three-legged platform used to support flasks and beakers. Tripods are usually made of stainless steel or aluminum.', '1700870046.jpg', 'tripod.mp3', '2023-11-25 04:54:06', '2023-11-25 04:54:06'),
(17, 'DISTILLATION FLASK', 'Is an instrument made of glass which can withstand high temperatures and is mainly used to separate liquids through a distillation process.', '1700870094.jpg', 'distillation-flask.mp3', '2023-11-25 04:54:54', '2023-11-25 04:54:54'),
(18, 'BUNSEN BURNER', 'Instrument used in laboratories to heat, sterilize or burn samples or chemical reagents.', '1700870247.png', 'bunsen-burner.mp3', '2023-11-25 04:57:27', '2023-11-25 04:57:27'),
(19, 'ASBESTOS GRID', 'Is responsible for distributing the temperature evenly when heated with a burner. A laboratory tripod is used for this purpose, as it supports the grid while it is heated.', '1700870318.png', 'asbesto.mp3', '2023-11-25 04:58:38', '2023-11-25 04:58:38'),
(20, 'BURET', 'Is a graduated glass tube with a tap at one end, for delivering known volumes of a liquid, especially in titrations.', '1700870548.png', 'buret.mp3', '2023-11-25 05:02:28', '2023-11-25 05:02:28'),
(21, 'MORTAR AND PESTLE', 'It is used to crush solid chemicals into smaller pieces or to grind solids into fine powders. It facilitates the dissolution of solids in solvents (when preparing solutions).', '1700870612.png', 'mortar.mp3', '2023-11-25 05:03:32', '2023-11-25 05:03:32'),
(22, 'GRADUATED CYLINDER', 'It is a small transparent tube, which has a base to support it and has the function of measuring the volume of a liquid or a solid.', '1700870706.png', 'graduated.mp3', '2023-11-25 05:05:06', '2023-11-25 05:05:06'),
(23, 'INCUBATOR', 'Is a device that provides controlled environmental conditions for the cultivation of microorganisms. Maintains a constant temperature and humidity level.', '1700870791.png', 'incubator.mp3', '2023-11-25 05:06:31', '2023-11-25 05:06:31'),
(24, 'COMBUSTION SPOON', 'Is an instrument used for burning small samples of chemical for experiments with combustion reactions.', '1700871150.jpg', 'spoon.mp3', '2023-11-25 05:12:30', '2023-11-25 05:12:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `interactions`
--

CREATE TABLE `interactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `interaction` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `interactions`
--

INSERT INTO `interactions` (`id`, `interaction`, `audio`, `created_at`, `updated_at`) VALUES
(1, '<b>Greetings:</b><br>Good morning, how are you today?<br>Hello! Well, thank you. And you?<br>Well thank you. What are your plans today?', 'greetings.mp3', '2023-11-26 22:13:58', '2023-11-26 22:13:58'),
(2, '<b>Meetings and discussions:</b><br>We need to discuss the results of the last project. <br>When would it be appropriate to meet to discuss them?<br>How about tomorrow at 10 am?', 'meetings.mp3', '2023-11-26 22:26:44', '2023-11-26 22:26:44'),
(3, '<b>Request for help or collaboration:</b><br>Could you help me with this presentation? <br>Sure, I’ll be happy to help. What exactly do you need help with?', 'collaboration.mp3', '2023-11-26 22:27:45', '2023-11-26 22:27:45'),
(4, '<b>Explanation of tasks or instructions: </b><br>This week, we need to focus on launching the product.<br>What are the priority tasks we need to perform?', 'instructions.mp3', '2023-11-26 22:29:00', '2023-11-26 22:29:00'),
(5, '<b>Acknowledgments and recognition:</b><br>Thank you for your help with the report, it was essential.<br>You’re welcome! I’m here to support you in whatever you need.', 'acknowledgments.mp3', '2023-11-26 22:31:30', '2023-11-26 22:31:30'),
(6, '<b>Discussion on scientific advances:</b><br>Researcher: Have you seen the latest studies on genetic modification in crops? <br>Researcher: Yes, it’s fascinating how disease resistance is improving. How could we apply it to our project?', 'discussion.mp3', '2023-11-26 22:32:26', '2023-11-26 22:32:26'),
(7, '<b>Meetings for process optimization: </b><br>Agronomist: We need to improve the efficiency of fertilizer application. <br>Agrobiotechnology technician: What strategies could we implement to reduce input waste?', 'meetingspro.mp3', '2023-11-26 22:33:15', '2023-11-26 22:33:15'),
(8, '<b>Evaluation of results in the field: </b><br>Agronomist: Modified crops show better yields in drought conditions. <br>Analysis team: How do these results compare with traditional varieties in terms of quality and yield?', 'evaluation.mp3', '2023-11-26 22:34:47', '2023-11-26 22:34:47'),
(9, '<b>Planning clinical trials or field trials:</b><br>Test Coordinator: We are ready to begin field testing for the new biopesticide. <br>Field Team: What are the safety protocols we should follow during the process?', 'planning.mp3', '2023-11-26 22:35:30', '2023-11-26 22:35:30'),
(10, '<b>Negotiations and agreements:</b><br>We are interested in your proposal, but we need some modifications.<br>I understand, what are the areas you would like to change?', 'agreements.mp3', '2023-11-27 08:45:03', '2023-11-27 08:45:03'),
(11, '<b>Planning of experiments: </b></br>Scientist: We are designing a test to analyze the effect of certain microorganisms on soil health.</br>Equipment: What variables are involved and what will be the duration of the study?', 'experiments.mp3', '2023-11-27 08:54:14', '2023-11-27 08:54:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `links`
--

INSERT INTO `links` (`id`, `link`, `img`, `created_at`, `updated_at`) VALUES
(1, 'https://labassociates.com', '1700947502.svg', '2023-11-26 02:25:02', '2023-11-26 02:25:02'),
(2, 'https://biologydictionary.net/', '1700948678.svg', '2023-11-26 02:44:38', '2023-11-26 02:44:38'),
(3, 'https://www.youtube.com/@biotechbreakthroughs/videos', '1700948751.svg', '2023-11-26 02:45:51', '2023-11-26 02:45:51'),
(4, 'https://www.genome.gov/', '1700949004.svg', '2023-11-26 02:50:04', '2023-11-26 02:50:04'),
(5, 'https://www.biologyonline.com/', '1700949100.svg', '2023-11-26 02:51:40', '2023-11-26 02:51:40'),
(6, 'https://www.youtube.com/watch?v=RrTCjp2015M', '1700949428.svg', '2023-11-26 02:57:08', '2023-11-26 02:57:08'),
(7, 'https://byjus.com/biology/biotechnology-principles/', '1700949813.svg', '2023-11-26 03:03:33', '2023-11-26 03:03:33'),
(10, 'https://www.bio.org/sites/default/files/legacy/bioorg/docs/files/Animal_onepager.pdf', '1700951694.svg', '2023-11-26 03:34:54', '2023-11-26 03:34:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_30_233111_create_concepts_table', 1),
(6, '2023_10_30_233135_create_elements_table', 1),
(7, '2023_10_30_233158_create_processes_table', 1),
(8, '2023_10_30_233226_create_vocabularies_table', 1),
(9, '2023_11_25_180456_create_interactions_table', 2),
(11, '2023_11_25_210324_create_links_table', 3),
(12, '2024_09_19_172232_create_permission_tables', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nicocostahg95@gmail.com', '$2y$10$lIyPNo3OvJrODNaDZaGsPu5EjE//d.eZstaEHFptPKHOuAGZ4zBB.', '2024-10-05 01:53:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `process` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `processes`
--

INSERT INTO `processes` (`id`, `process`, `description`, `img`, `audio`, `created_at`, `updated_at`) VALUES
(1, 'BIOSYNTHESIS', 'Is the process of making natural products from simpler components through chemical reactions at the cellular level.', '1700602214.png', 'biosynthesis.mp3', '2023-11-22 02:30:14', '2023-11-22 02:30:14'),
(2, 'CENTRIFUGATION', 'Is a method of separating molecules having different densities by spinning them in solution around an axis (in a centrifuge rotor) at high speed.', '1700602393.png', 'centrifugation.mp3', '2023-11-22 02:33:13', '2023-11-22 02:33:13'),
(3, 'DISTILLATION', 'Is used to separate liquids from nonvolatile solids, as in the separation of alcoholic liquors from fermented materials, or in the separation of two or more liquids having different boiling points.', '1700602452.png', 'distillation.mp3', '2023-11-22 02:34:12', '2023-11-22 02:34:12'),
(5, 'EVAPORATION', 'Is used to separate out homogeneous mixtures that contain one or more dissolved salts. The method drives off the liquid components from the solid components and typically involves heating the mixture until no more liquid remains.', '1700602542.png', 'evaporation.mp3', '2023-11-22 02:35:42', '2023-11-22 02:35:42'),
(6, 'EXTRACTION', 'Is the transfer of compound(s) from a solid or liquid to a different solvent or phase. In the chemistry laboratory, it is most common to use liquid-liquid extraction, a process that takes place in a separatory funnel.', '1700602609.png', 'extraction.mp3', '2023-11-22 02:36:49', '2023-11-22 02:36:49'),
(7, 'FERMENTATION', 'Is a natural process that occurs when certain bacteria or yeasts break down sugars in food without the need for oxygen. It produces beneficial compounds such as organic acids and vitamins.', '1700602674.png', 'fermentation.mp3', '2023-11-22 02:37:54', '2023-11-22 02:37:54'),
(8, 'PRECIPITATION', 'The precipitation of a compound may occur when its concentration exceeds its solubility. This can be due to temperature changes, solvent evaporation, or by mixing solvents.', '1700602757.png', 'precipitation.mp3', '2023-11-22 02:39:17', '2023-11-22 02:39:17'),
(9, 'SYNTHESIS', 'Is based on a procedure carried out to obtain a compound from other simpler substances. Its objective is to produce new substances from other known substances.', '1700602798.png', 'synthesis.mp3', '2023-11-22 02:39:58', '2023-11-22 02:39:58'),
(10, 'STERILIZATION', 'The process by which all microorganisms contained in an object or substance, including bacterial spores, are destroyed.', '1700602868.jpg', 'sterilization.mp3', '2023-11-22 02:41:08', '2023-11-22 02:41:08'),
(11, 'FLOCCULATION', 'The process by which flocculating substances are added to separate and eliminate solids suspended in the water.', '1700602915.jpg', 'flocculation.mp3', '2023-11-22 02:41:55', '2023-11-22 02:41:55'),
(12, 'CHROMATOGRAPHY', 'Is a technique used to separate constituent particles of a mixture of substances to purify the compounds and check the purity of organic compounds.', '1700602960.png', 'chromatography.mp3', '2023-11-22 02:42:40', '2023-11-22 02:42:40'),
(13, 'FILTRATION', 'Is the process of separating a solid matter in suspension from a liquid or gas by passing the latter through the pores of a membrane, called a filter.', '1700603002.png', 'filtration.mp3', '2023-11-22 02:43:22', '2023-11-22 02:43:22'),
(14, 'SIEVING', 'Is a mechanical method for separating two solids consisting of particles of different sizes. It consists of passing a mixture of particles of different sizes through a sieve or strainer tool.', '1700603051.png', 'sieving.mp3', '2023-11-22 02:44:11', '2023-11-22 02:44:11'),
(15, 'CLONING', 'Is the process of generating a genetically identical copy of a cell or an organism.', '1700879180.png', 'cloning.mp3', '2023-11-25 07:26:20', '2023-11-25 07:26:20'),
(16, 'HYBRIDIZATION', 'Process in which two complementary single-stranded molecules of DNA or RNA bond together to form a double-stranded molecule.', '1700879239.png', 'hybridization.mp3', '2023-11-25 07:27:19', '2023-11-25 07:27:19'),
(17, 'TRANSCRIPTION', 'Process of generating a copy of RNA from a DNA sequence of a gene.', '1700879300.jpg', 'transcription.mp3', '2023-11-25 07:28:20', '2023-11-25 07:28:20'),
(18, 'TRANSLATION', 'Is a step in protein biosynthesis where a genetic code from a strand of mRNA is decoded to produce a particular sequence of amino acids.', '1700879737.jpg', 'translation.mp3', '2023-11-25 07:35:37', '2023-11-25 07:35:37'),
(19, 'MEIOSIS', 'Is the process in eukaryotic, sexually-reproducing animals that reduces the number of chromosomes in a cell before reproduction.', '1700879805.png', 'meiosis.mp3', '2023-11-25 07:36:45', '2023-11-25 07:36:45'),
(20, 'MITOSIS', 'Is the process by which a cell replicates its chromosomes and then secretes them producing two identical nuclei in preparation for cell division.', '1700880121.png', 'mitosis.mp3', '2023-11-25 07:42:01', '2023-11-25 07:42:01'),
(21, 'BIODEGRADATION', 'Is the process by which organic matter is broken down into simpler substances by living microorganisms such as bacteria, fungi, and yeast.', '1701033133.png', 'biodegradation.mp3', '2023-11-27 02:12:13', '2023-11-27 02:12:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nicolas', 'nicocostahg95@gmail.com', NULL, '$2y$10$U97WBQwKjhADPRMSuArytuX4fhcGM2ss/P3u8ZgK6olqE3eUdHlsK', 'rj62T2M2mNGC3RZSd4qXvbfU8leMpd9fuONdhqvlOWv9aTSQCfAIzXJFVh86', '2024-10-04 21:14:42', '2024-10-04 21:14:42'),
(2, 'Ana', 'ana@gmail.com', NULL, '$2y$10$TPNPmYVMPyOGgXw/fZO6B.T6bn9oEIU1BwoZcd1UG09czPsTH2OPm', 'cbhUfaI5v5ledzWqD8iTnMDFIJbRrvwpZqCs6dWr0gbrHVizbySC4UGCvk1c', '2024-10-05 19:37:12', '2024-10-05 19:37:12'),
(3, 'andres', 'hola@gmail.com', NULL, '$2y$10$lczwetrByOYKeztvr7KpkeRFEeiGBVlKnSezhG8580dngTm5zl0HO', NULL, '2024-10-06 05:30:47', '2024-10-06 05:30:47'),
(4, 'juancho', 'jancho@gmail.com', NULL, '$2y$10$gyFrj.6E6xNnT6qRQ7PzVeckZYeFvUXAKRYrhoMLX0AMoxH3Y4X/2', NULL, '2024-10-07 04:44:03', '2024-10-07 04:44:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vocabularies`
--

CREATE TABLE `vocabularies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vocabulary` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vocabularies`
--

INSERT INTO `vocabularies` (`id`, `vocabulary`, `description`, `img`, `audio`, `created_at`, `updated_at`) VALUES
(1, 'ACID', 'A chemical that emits hydrogen ions in water and forms salts when combined with certain metals.', '1700871735.png', 'acid.mp3', '2023-11-25 05:22:15', '2023-11-25 05:22:15'),
(2, 'REAGENT', 'It is a substance or compound added to a system to cause a chemical reaction or test if one occurs.', '1700871855.jpg', 'reagent.mp3', '2023-11-25 05:24:15', '2023-11-25 05:24:15'),
(3, 'GENE', 'Is the basic physical and functional unit of heredity. Genes are made up of DNA. Some genes act as instructions to make molecules called proteins.', '1700871905.png', 'gene.mp3', '2023-11-25 05:25:05', '2023-11-25 05:25:05'),
(4, 'MOLECULE', 'The smallest part of any chemical substance made up of two or more atoms and having the properties of that substance.', '1700871990.jpg', 'molecule.mp3', '2023-11-25 05:26:30', '2023-11-25 05:26:30'),
(5, 'ENZYME', 'A substance produced by a living organism which acts as a catalyst to bring about a specific biochemical reaction.', '1700872135.jpg', 'enzyme.mp3', '2023-11-25 05:28:55', '2023-11-25 05:28:55'),
(6, 'AMINO ACID', 'Organic chemical substance that constitutes the basic component of proteins.', '1700872271.png', 'aminoacid.mp3', '2023-11-25 05:31:11', '2023-11-25 05:31:11'),
(7, 'CELL', 'Is the smallest structural and functional unit of an organism, which is typically microscopic and consists of cytoplasm and a nucleus enclosed in a membrane.', '1700872322.png', 'cell.mp3', '2023-11-25 05:32:02', '2023-11-25 05:32:02'),
(9, 'BACTERIUM', 'They are single-celled microorganisms that are responsible for causing diseases.', '1700872488.png', 'bacterium.mp3', '2023-11-25 05:34:48', '2023-11-25 05:34:48'),
(10, 'PATHOGEN', 'Is an organism that can cause disease in another organism. Pathogens can be bacteria, viruses, fungi, protists, or parasitic worms.', '1700872556.PNG', 'pathogen.png', '2023-11-25 05:35:56', '2023-11-25 05:35:56'),
(11, 'GENOTYPE', 'It refers to the genetic constitution of living organisms. Also the complete set of heritable genes that can be transferred to the offsprings from its parents.', '1700880963.png', 'genotype.mp3', '2023-11-25 07:56:03', '2023-11-25 07:56:03'),
(12, 'PHENOTYPE', 'The observable physical traits based on the expression of the genotype.', '1700944290.png', 'phenotype.mp3', '2023-11-26 01:31:30', '2023-11-26 01:31:30'),
(14, 'BIO INPUTS', 'Are products made from beneficial organisms such as bacteria, fungi, viruses, and insects, or natural extracts obtained from plants, that can be used in agricultural production.', '1701032551.png', 'bioinputs.mp3', '2023-11-27 02:02:31', '2023-11-27 02:02:31'),
(15, 'CLONE', 'Cell or organism that is genetically identical to the original cell or organism from which it is derived.', '1701032900.png', 'clone.mp3', '2023-11-27 02:08:20', '2023-11-27 02:08:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `concepts`
--
ALTER TABLE `concepts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `interactions`
--
ALTER TABLE `interactions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vocabularies`
--
ALTER TABLE `vocabularies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `concepts`
--
ALTER TABLE `concepts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `elements`
--
ALTER TABLE `elements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `interactions`
--
ALTER TABLE `interactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vocabularies`
--
ALTER TABLE `vocabularies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
