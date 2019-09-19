-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 01:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital-agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `desc_blog` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc_blog`, `image`) VALUES
(1, '10 things you need to know about digital marketing', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos rem a, iste repellat vel qui, quod quidem pariatur doloremque natus officia eaque nam aliquam voluptatum. Ab quam obcaecati magni suscipit non porro, ad vitae, placeat praesentium quos, soluta quasi nam? Dolores, minus natus. Esse magni itaque sequi! Architecto reiciendis repellat ad tenetur ea nisi eveniet esse sequi iusto aperiam consequuntur dolore repudiandae, ipsa rem, provident autem laborum cum numquam nulla qui? Nisi maxime illo non modi quaerat obcaecati, nobis quos vel necessitatibus fugiat aut deleniti atque expedita quae corporis nihil dolorem natus ea impedit ad sequi! Debitis fugit a cupiditate nesciunt ratione sint suscipit quis, totam omnis quaerat neque aspernatur incidunt sequi! Similique facere, corrupti, asperiores perferendis saepe aliquid eius ipsum dolores unde accusantium eaque cupiditate ullam sequi deserunt maiores laboriosam rem magni qui? Recusandae inventore corporis cumque ex molestiae accusamus quaerat laboriosam temporibus, vero rerum dolor repellendus quae explicabo. Ipsa, in vitae? Fugit labore at tempore suscipit distinctio sequi optio consequuntur voluptatem tempora inventore incidunt voluptatibus eius debitis, quae quibusdam explicabo praesentium odit assumenda, repellat nemo eaque! Velit distinctio ipsa, architecto exercitationem illum quas, corrupti nulla at quam ratione cumque omnis dicta sed consectetur consequuntur. Temporibus eius officiis quasi!', 'digi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `detail`) VALUES
(1, 'advertising', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quam cumque animi iusto saepe nulla corporis id voluptatem quaerat ad ipsum velit, nesciunt aperiam itaque distinctio expedita iure explicabo inventore quisquam earum officia excepturi. Eaque aspernatur ullam aliquid quidem! Voluptatibus vero unde dolor deleniti nostrum culpa provident, a id. Maiores facere neque ab quasi deserunt ipsam deleniti corporis quisquam fugit, sit, cupiditate doloribus aut itaque atque assumenda in accusamus, modi consequatur ipsum recusandae dolorem hic possimus ipsa. Minus voluptas laudantium odit repudiandae veritatis tenetur, consectetur hic temporibus assumenda facilis eum ipsam totam? Quas amet enim expedita rerum magnam illum corrupti voluptatum ullam laborum, velit nam veritatis eaque architecto, quam provident asperiores sunt illo fugiat! Id quo perspiciatis minus animi molestias quibusdam ipsum sint dolor unde corrupti? Libero fuga ullam beatae dolores, repudiandae quis ipsam officiis distinctio doloribus cum totam eaque. Sequi odit error voluptates blanditiis dignissimos consequatur magni. Adipisci harum quos dicta at dolore sed voluptatibus veniam consectetur suscipit eius ratione sint alias numquam earum, nobis ipsam deserunt vel autem! Ea, molestiae quia ducimus ut in quae. Modi repudiandae voluptatum placeat reprehenderit dolore doloribus similique. Tenetur dolorem laborum dignissimos placeat molestiae fugit necessitatibus possimus debitis nisi dolores? Nihil molestiae nesciunt a est maiores repellat aliquid totam obcaecati sed velit dolore id laboriosam iure eius, exercitationem doloribus, facilis ullam nisi? Necessitatibus possimus cumque doloremque ipsam dicta at suscipit minus quibusdam, nobis nihil itaque ut aspernatur mollitia pariatur. Aliquam non sint, ducimus, ab veniam reprehenderit in dignissimos totam aspernatur atque nulla reiciendis fuga adipisci distinctio ipsam illum eveniet soluta recusandae explicabo. Consequatur iusto nihil rem praesentium aut doloribus culpa et voluptatem labore, modi ab temporibus tempore debitis, cumque veniam illo eligendi? Odit soluta iure quae voluptatem. Voluptatibus obcaecati cumque expedita ipsa adipisci, repudiandae doloribus quidem veniam dolorum sunt possimus? Iusto, nihil consequuntur!'),
(2, 'digital marketing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quam cumque animi iusto saepe nulla corporis id voluptatem quaerat ad ipsum velit, nesciunt aperiam itaque distinctio expedita iure explicabo inventore quisquam earum officia excepturi. Eaque aspernatur ullam aliquid quidem! Voluptatibus vero unde dolor deleniti nostrum culpa provident, a id. Maiores facere neque ab quasi deserunt ipsam deleniti corporis quisquam fugit, sit, cupiditate doloribus aut itaque atque assumenda in accusamus, modi consequatur ipsum recusandae dolorem hic possimus ipsa. Minus voluptas laudantium odit repudiandae veritatis tenetur, consectetur hic temporibus assumenda facilis eum ipsam totam? Quas amet enim expedita rerum magnam illum corrupti voluptatum ullam laborum, velit nam veritatis eaque architecto, quam provident asperiores sunt illo fugiat! Id quo perspiciatis minus animi molestias quibusdam ipsum sint dolor unde corrupti? Libero fuga ullam beatae dolores, repudiandae quis ipsam officiis distinctio doloribus cum totam eaque. Sequi odit error voluptates blanditiis dignissimos consequatur magni. Adipisci harum quos dicta at dolore sed voluptatibus veniam consectetur suscipit eius ratione sint alias numquam earum, nobis ipsam deserunt vel autem! Ea, molestiae quia ducimus ut in quae. Modi repudiandae voluptatum placeat reprehenderit dolore doloribus similique. Tenetur dolorem laborum dignissimos placeat molestiae fugit necessitatibus possimus debitis nisi dolores? Nihil molestiae nesciunt a est maiores repellat aliquid totam obcaecati sed velit dolore id laboriosam iure eius, exercitationem doloribus, facilis ullam nisi? Necessitatibus possimus cumque doloremque ipsam dicta at suscipit minus quibusdam, nobis nihil itaque ut aspernatur mollitia pariatur. Aliquam non sint, ducimus, ab veniam reprehenderit in dignissimos totam aspernatur atque nulla reiciendis fuga adipisci distinctio ipsam illum eveniet soluta recusandae explicabo. Consequatur iusto nihil rem praesentium aut doloribus culpa et voluptatem labore, modi ab temporibus tempore debitis, cumque veniam illo eligendi? Odit soluta iure quae voluptatem. Voluptatibus obcaecati cumque expedita ipsa adipisci, repudiandae doloribus quidem veniam dolorum sunt possimus? Iusto, nihil consequuntur!'),
(3, 'video production', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quam cumque animi iusto saepe nulla corporis id voluptatem quaerat ad ipsum velit, nesciunt aperiam itaque distinctio expedita iure explicabo inventore quisquam earum officia excepturi. Eaque aspernatur ullam aliquid quidem! Voluptatibus vero unde dolor deleniti nostrum culpa provident, a id. Maiores facere neque ab quasi deserunt ipsam deleniti corporis quisquam fugit, sit, cupiditate doloribus aut itaque atque assumenda in accusamus, modi consequatur ipsum recusandae dolorem hic possimus ipsa. Minus voluptas laudantium odit repudiandae veritatis tenetur, consectetur hic temporibus assumenda facilis eum ipsam totam? Quas amet enim expedita rerum magnam illum corrupti voluptatum ullam laborum, velit nam veritatis eaque architecto, quam provident asperiores sunt illo fugiat! Id quo perspiciatis minus animi molestias quibusdam ipsum sint dolor unde corrupti? Libero fuga ullam beatae dolores, repudiandae quis ipsam officiis distinctio doloribus cum totam eaque. Sequi odit error voluptates blanditiis dignissimos consequatur magni. Adipisci harum quos dicta at dolore sed voluptatibus veniam consectetur suscipit eius ratione sint alias numquam earum, nobis ipsam deserunt vel autem! Ea, molestiae quia ducimus ut in quae. Modi repudiandae voluptatum placeat reprehenderit dolore doloribus similique. Tenetur dolorem laborum dignissimos placeat molestiae fugit necessitatibus possimus debitis nisi dolores? Nihil molestiae nesciunt a est maiores repellat aliquid totam obcaecati sed velit dolore id laboriosam iure eius, exercitationem doloribus, facilis ullam nisi? Necessitatibus possimus cumque doloremque ipsam dicta at suscipit minus quibusdam, nobis nihil itaque ut aspernatur mollitia pariatur. Aliquam non sint, ducimus, ab veniam reprehenderit in dignissimos totam aspernatur atque nulla reiciendis fuga adipisci distinctio ipsam illum eveniet soluta recusandae explicabo. Consequatur iusto nihil rem praesentium aut doloribus culpa et voluptatem labore, modi ab temporibus tempore debitis, cumque veniam illo eligendi? Odit soluta iure quae voluptatem. Voluptatibus obcaecati cumque expedita ipsa adipisci, repudiandae doloribus quidem veniam dolorum sunt possimus? Iusto, nihil consequuntur!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
