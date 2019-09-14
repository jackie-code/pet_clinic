-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2019 at 08:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `animal type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `brand`, `animal type`, `price`, `image`, `description`) VALUES
(1, 'Iam\'s', 'cat/dog', '20', 'iams.jpg', 'Iams (/ˈaɪəmz/) is a popular brand name for dog food and cat food manufactured by Spectrum Brands in Europe and Mars, Inc worldwide. The company sells pet food for cats and dogs formulated for puppy/kitten, adult and mature.'),
(2, 'Nature\'s Recipe', 'cat', '15', 'natures_recipe.jpg', 'We believe our dogs and cats deserve real fresh food to help them live their best, happiest, tail-wagging lives. So we developed a totally different ideology on how to feed our four legged family members. It’s really simple: use fresh, whole ingredients, gently cooked without preservatives, and kept in the fridge where meats belong.  Our recipes are made with US-raised chicken or beef delivered daily to our Freshpet Kitchens. We then use steam-cooking to lock in vital nutrients, all done according to FDA and USDA standards.'),
(5, 'Pedigree', 'dog', '12.99', 'pedigree.jpg', 'PEDIGREE® Puppy Growth and Protection Chicken & Vegetable Flavor Dog Food is formulated to help your pup keep up with the big dogs. This puppy formula is made with DHA for healthy brain development, plus calcium and phosphorus for healthy teeth and strong bones. With PEDIGREE® Puppy Food, it\'s never been easier to give your growing dog a complete and balanced meal in a savory kibble they will love.'),
(6, 'Kirkland', 'small dog', '15', 'kirkland.jpg', 'Kirkland Signature Adult Formula – ingredients in this dry dog food include chicken, rice, and a range of vegetables. ... This Kirkland brand formula includes the ingredients of fresh chicken, chicken meal, rice, and vegetables, and has smaller kibble which helps puppies with chewing and swallowing the dry dog food');

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` int(11) NOT NULL,
  `medication name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `medication name`, `type`, `price`, `image`, `description`) VALUES
(5, 'Enrofloxacin (Baytril)', 'respritory/skin/urinary tract', 30, 'enro.png', 'Enrofloxacin is a broad spectrum antibiotic used in veterinary medicine to treat animals afflicted with certain bacterial infections. This drug belongs to a class of antibiotics known as fluoroquinolones and is not effective against infections caused by viruses, fungi or parasites.'),
(6, 'Amoxicillin', 'wounds/respiratory infections/ skin infections', 50, 'amox.png', 'Amoxicillin is a broad-spectrum antibiotic prescribed by veterinarians to treat various infections in dogs and cats. It inhibits the growth of bacteria by preventing the cell wall formation of the bacterial cells. Amoxicillin should only be used to treat bacterial infections and not viral or parasitic infections.'),
(9, 'Heart Guard', 'flea/ tick', 20, 'heart_guard.jpg', 'HEARTGARD Plus is the only real-beef chew that prevents heartworm disease, and treats and controls preexisting hookworm and roundworm infections. HEARTGARD Plus not only affects larvae, preventing adult heartworms from forming, it also treats and controls hookworms and roundworms. Dogs like tasty things.'),
(10, 'Frontline Plus', 'flea/ tick', 26, 'frontline_plus.jpg', 'Frontline Plus is a quick, convenient, and effective way to prevent fleas, ticks, chewing lice, and sarcoptic mites from making your dog a walking resort. When applied monthly, Frontline Plus completely eradicates every stage in the life cycle of fleas, ticks, and chewing lice.');

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `id` int(11) NOT NULL,
  `toy` varchar(255) NOT NULL,
  `animal type` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`id`, `toy`, `animal type`, `price`, `image`, `description`) VALUES
(1, 'bone', 'dog', 6, 'dogbone.jpg', 'The Puppy Goodie Bone is designed to entertain. Fill the patented Goodie Grippers with Puppy Snacks for a happy, busy puppy.  Made in the USA. Globally Sourced Materials. Assorted colors: Pink and Blue Available in one size: S Bone made of soft KONG puppy rubber designed to soothe sore teeth and gums Promotes positive chewing behavior Fill Goodie Grippers with treats, pastes or peanut butter to extend playtime'),
(2, 'wand', 'cat', 10, 'wand.jpg', 'The cat catcher teaser wand toy has a cute little mouse attached to a flexible braided wire and then connected to a 12\" glitter wand. The mouse averages 2 inches in length with a tail that averages 3 inches. A fantastic toy to interact with your kitty for play and exercise. Colors may vary.'),
(5, 'ball', 'dog', 3, 'fetch.png', 'Fetch Ball is specially designed to enhance the game of fetch, encouraging pets to run farther and leap higher. Featuring a natural, high-bounce rubber construction, Chuckit!\'s dog fetch ball bounces higher and farther than standard tennis balls.'),
(6, 'bird', 'cat', 5, 'bird.jpg', 'Catnip filled Birds of a Feather, about the size of a real bird, will give your pet hours of amusement that comes with catching prey. Bird is made of fur and is approximately 8 inches to end of feathered tail.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
