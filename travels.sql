-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 02:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `tour_package_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT current_timestamp(),
  `image_url` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `tour_package_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cost` double NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL DEFAULT 0,
  `date_from` date NOT NULL,
  `date_till` date NOT NULL,
  `food_type` enum('Veg','Non-veg','Jain','Vegan') DEFAULT NULL,
  `booking_time` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_method` enum('visa','mastercard','credit card','debit card') DEFAULT NULL,
  `payment_status` enum('success','fail') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tour_package_id` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `tour_package_id`, `description`) VALUES
(1, 'London', 1, 'London hosts all kinds of attractions that suit all sorts of preferences, and there\'s always something interesting going on in the city. ... From iconic attractions such as the Buckingham Palace and Big Ben to more than 170 museums, from endless parklands to quirky cafes, there\'s something for all sorts of people.'),
(2, 'Paris', 1, 'Often called by nicknames like the “city of love” and “city of lights,” Paris is today one of the world\'s leading centers for business, fashion, entertainment, art and culture. Just the mere mention of Paris conjures up images of the city\'s world famous landmarks, museums and cathedrals.'),
(3, 'Amsterdam', 1, 'Amsterdam, the capital of the Netherlands, is one of the most popular tourist destinations in Europe. With its universities, academies, and research institutes, along with more than 40 museums, numerous theaters, and entertainment venues, Amsterdam is also the country\'s leading cultural center.'),
(4, 'Venice', 1, 'Venice, known also as the “City of Canals,” “The Floating City,” and “Serenissima,” is arguably one of Italy\'s most picturesque cities. With its winding canals, striking architecture, and beautiful bridges, Venice is a popular destination for travel.'),
(5, 'Vatican', 1, 'Venice, known also as the “City of Canals,” “The Floating City,” and “Serenissima,” is arguably one of Italy\'s most picturesque cities. With its winding canals, striking architecture, and beautiful bridges, Venice is a popular destination for travel.'),
(6, 'Dubai', 2, 'Once a small trading hub, Dubai has risen to become an international tourism destination for leisure and business travellers “through the infrastructure developed to cater to these markets,” Hewett said. Dubai is recognised as an entertainment hub, known for its shopping malls and attractions.'),
(7, 'Burj Khalifa', 2, 'The Burj Khalifa is the tallest building in the world and a global icon. Truly a feat of engineering, the building represents the conceptual heart and soul of the city of Dubai.At 828m tall, this magnificent structure is located next to The Dubai Mall and has drawn visitors from all over the world since opening in 2010. The unmatched Burj Khalifa view can be taken in from not one but two observations decks – the two-storey At the Top on the 124th and 125th floors, as well as the world’s highest observation deck (555m) on the 148th floor. '),
(8, 'Ferrari World', 2, 'Ferrari World, located on Yas Island, is Abu Dhabi\'s premier entertainment destination and the world\'s first Ferrari theme park. ... 1) Ferrari World houses the world fastest rollercoaster, Formula Rossa, which reaches heart- pounding speeds of 150mph in just 4.9 seconds.'),
(9, 'Burj Al Arab', 2, 'Reportedly the world\'s only 7 star hotel, Burj Al Arab offers the ultimate in luxury featuring a 180m tall atrium, a fleet of white Rolls Royce cars, dancing fountains and touches of gold leave everywhere.Other than the world\'s tallest free-standing structure, the Burj Khalifa also has the world record for longest elevator travel distance and highest restaurant in the world.'),
(10, 'The Dubai Mall', 2, 'The Dubai Mall is the ultimate family entertainment destination with The Dubai Aquarium and Underwater Zoo, the Olympic-sized Dubai Ice Rink, the children\'s \'edutainment\' concept Kidzania and a massive indoor cinema complex – just some of the ways to keep everyone busy.'),
(11, 'Jumeirah Beach', 2, 'Jumeirah Beach, with its picturesque surroundings, is undeniably one of the most popular as well as frequently visited tourist spots in Dubai. Once a major fishing and pearl farming center, Jumeirah over the years has evolved into one of the city’s principal residential areas, particularly among elite families and western expatriates. Being the site of the former Chicago Beach Hotel, the beachfront area was previously known as Chicago Beach till the late 1990s when it was demolished and the construction of Burj Al Arab began. Jumeirah is now administratively categorized into three neighborhoods: Jumeirah 1, Jumeirah 2 and Jumeirah 3. Apart from these, here are some of the key aspects that attract both locals and tourists to Jumeirah Beach.'),
(12, 'Singapore', 3, 'Singapore\'s transport system of well-developed road networks and public transportation systems allows visitors to access attractions conveniently and quickly. ... Being a major air hub, Singapore serves plenty of air routes as well as a cruise centre.'),
(13, 'Marina Bay Sands', 3, 'As the centrepiece of Singapore\'s urban transformation efforts, Marina Bay has grown into a leading financial centre, a civic space, and a community playground for all. Its journey to become the symbol of 21st century Singapore is a story of long-term planning and meticulous implementation.'),
(14, 'Universal Studios', 3, 'It is one of the oldest and most famous Hollywood film studios still in use. Its official marketing headline is \"The Entertainment Capital of LA\". It was initially created to offer tours of the real Universal Studios sets and is the first of many full-fledged Universal Studios Theme Parks located across the world.'),
(15, 'Malaysia', 4, 'Malaysia is a beautiful Southeast Asian country, situated near the equator. It is created by merging two different regions; one is Peninsular Malaysia & East Malaysia. Kuala Lumpur is its capital and Putrajaya is the administrative center. Malaysia was a British territory, and in August 1965, it became an independent country.Malaysia is one of the biggest tourist attractions in the South East Asia and Malaysia tour package is one of the most searched items on the internet. Every year hundreds of thousands of tourists visited and explored this beautiful country. Malaysia truly has some of the fascinating tourist destinations in the world. Malaysia is a place of diversity and so many Malaysia holiday packages for visitors to explore.'),
(16, 'Petronas Twin Towers', 4, 'The tallest twin towers in the world, the Petronas reach an impressive 452 meters high up into the clouds. The towers are 88 floors tall and have an impressive total of 76 elevators.Built using reinforced concrete, steel, and glass, the two towers are connected to each other by a double skybridge on the 41st and 42nd floors. Visitors can make their way up here for stunning views of KL and the 6.9-hectare KLCC Park below-the views are particularly impressive at night.While most of the floors on the towers are rented to companies-IBM, Microsoft, and Huawei Technologies all have offices here-the bottom floors of the towers are reserved for Suria KLCC, one of the largest shopping centers in Malaysia. With over 300 stores, an art gallery, and even space for a Philharmonic Hall, this retail and entertainment space will keep visitors occupied for hours.'),
(17, 'Sipadan Island', 4, 'Sipadan Island and its surrounding ocean waters are part of the world\'s richest marine habitat, home to endangered hawksbill turtles, whale sharks, monitor lizards, and hundreds of coral species. The island is also considered one of the best diving destinations in the world and is fiercely protected-visiting requires a permit in advance and only 120 permits are given out per day.Reaching the island requires an hour-long ride on a speed boat. Once here, the island can be easily explored on foot, with different beaches and reef sites within minutes of each other.Since it\'s no longer possible to stay on the island because of environmental protection laws (the nearby Mabul Island offers accommodations), visitors usually come here early in the morning as part of snorkeling and diving tours.'),
(18, 'Andaman', 5, 'The Group of islands covering a total area of 8,073 sq kilometers, the Andaman and Nicobar Islands are a union territory of the republic of India. Initially inhabited by multiple groups of indigenous tribes, the island was later used as a penal colony during the British occupation of India. Despite of the horrid reputation during the colonial period, the Andaman and Nicobar Islands this day are one of the most sought after tourist destination of India. The islands are famous for its serene, white sandy beaches characterized by sparkling blue waters. In this article we shall discuss the best places to visit in Andaman and Nicobar Islands.'),
(19, 'Port Blair', 5, 'The capital of Andaman and Nicobar Islands, Port Blair is poignant reminder of the many sacrifices of freedom fighters. The Cellular jail here is perhaps one of the most infamous remnants of India’s struggle for independence. The main motive of the establishment of this prison was solitary confinement of the prisoners. The wings were built in a manner that the face of each cell only saw the back of the cell opposite to it. Many freedom fighters were incarcerated in this prison colony including Veer Savarkar and Batukeshwar Dutt. Port Blair is also a gateway to other tourist attractions in Andaman and Nicobar Islands, due to its accessibility from the mainland. Ferries operate mainly from Port Blair to other islands.'),
(20, 'Havelock Islands', 5, 'Havelock islands is home to Radhanagar beach, one of the most popular beaches in India and also awarded the best beach in Asia by TIME magazine in 2004. The beach is situated around a distance of 12 kilometers from the Havelock islands and is a must visit site. The waters are sparkling blue and devoid of any wave action. There are a huge number of activities that one can do like scuba diving, snorkeling, boating, fishing etc. The beach is especially popular for couples as it is almost vacant and the serene environment adds to the romance. One can also enjoy elephant rides here. The best way to enjoy the beauty of the beach is to take a camera and go on a long stroll and click photographs amidst the white sands and the blue waters, the sunset at this beach is a marvel to behold.'),
(21, 'Egypt', 6, 'Egypt is famous for its ancient civilization and some of the world’s most famous monuments, including the Giza pyramids, the Great Sphinx and the ancient temples of Luxor dating back thousands of years. Although focus of most tourist visits remains the great monuments along the Nile, possibilities for Egyptian travel also includes snorkeling and diving along the Red Sea coast. Other tourist attractions in Egypt include camel trips into the mountains of Sinai, tours to remote oases or visits to the Coptic monasteries of the Eastern Desert.'),
(22, 'Red Sea Reef', 6, 'The Red Sea, off the coast of Egypt, is one of the most beautiful places in the world to go diving. The waters of the Red Sea are renowned for their spectacular visibility and features some of the most exotic seascapes. With its wide expanse of coral formation on the reefs, it is home to thousands of different sea creatures. Red Sea beach resorts are located on both sides of the sea, on the east side and part of the Sinai peninsula is the long established Sharm el Sheikh and its neo-hippy counterpart, Dahab. On the west coast of the Red Sea lies relatively old and touristy Hurghada and a cluster of new resort towns.'),
(23, 'Giza Necropolis', 6, 'The Pyramids of Giza, situated in the immediate vicinity of the southwestern suburbs of Cairo are the undisputable top attractions in Egypt. The pyramids at Giza were built over the span of three generations – by Khufu, his second reigning son Khafre, and Menkaure. The Great Pyramid of Khufu is an awe-inspiring 139 meters (455 feet) high making it the largest pyramid in Egypt, although nearby Khafre’s Pyramid appears to be larger as it is build at a higher elevation.'),
(24, 'Australia', 7, 'With so many good reasons to visit Australia, like its diverse landscapes, friendly locals and a long list of amazing ‘bucket list’ experiences, it’s clear why so many backpackers head here first. It’s unbelievable size and vastness means that there is a little something for every kind of traveller, whether you are looking for an island getaway, a unique cultural experience, an adrenaline fix, to get in touch with nature or an all-round party!The East Coast alone stretches a gigantic 4000 km from Melbourne to Cairns and would take you around 50 hours of nonstop driving to cover the entire coastline. Australia is home to over 10,685 beaches, over 500 national parks and, drum-roll… 8,222 islands.  Here are some of the MANY reasons why everyone should visit Australia at least once in their lifetime…'),
(25, 'Great Barrier Reef', 7, 'Australia’s famous Great Barrier Reef needs no introduction and occupies pride of place at the top of most visitors’ must-see list. The amazing reef (the largest in the world) is made up of over 3,000 separate reef systems and dozens of beautiful, inviting tropical islands surrounded by azure waters teeming with marine life. You can access this wonderland from several coastal cities, including Cairns, Townsville, Rockhampton, and Mackay. Activities at the Great Barrier Reef are generally centered on the amazing marine life, which draws snorkelers and scuba divers – if you prefer to keep your feet dry, you can join a tour on a glass-bottomed boat instead. Boating, sailing, scenic helicopter flips, and simply relaxing on the beach complete the picture.'),
(26, 'Daintree Rainforest', 7, 'Daintree Rainforest invites visitors to indulge in some genuine ecotourism as they seize the unique opportunity to visit the World’s oldest surviving rainforest, located 100km northwest of Cairns on the east coast of Australia. The pristine and completely natural old-growth rainforest is a privately owned conservation initiative run by long-term inhabitants who are dedicated to sharing their knowledge and their rainforest with nature lovers. You can choose from several guided interpretive tours, which range from 2 to 5 hours, some of which include a cruise through the mangrove swamps, lunch, and afternoon tea. Along the way you will meet some of the very special animals, plants, and insects who inhabit this heritage site.'),
(27, 'USA', 8, 'Tourism in the United States is a large industry that serves millions of international and domestic tourists yearly. Foreigners visit the U.S. to see natural wonders, cities, historic landmarks, and entertainment venues. Americans seek similar attractions, as well as recreation and vacation areas.'),
(28, 'Times Square', 8, 'Times Square is one of New York City\'s most popular tourist attractions, as it\'s the epicenter for all things media and a famous New Year\'s Eve venue. ... New York City reduced the amount of vehicle traffic through the Times Square area, making it a more pleasant place to linger and people watch.'),
(29, 'Golden Gate Bridge', 8, 'Due to its attractive structure, the Frommer\'s travel guide recognizes this bridge to be one of the most beautiful and most photographed bridges across the globe. This orange vermillion suspension bridge has been well designed and colored to match the atmosphere of the natural surroundings.');

-- --------------------------------------------------------

--
-- Table structure for table `location_images`
--

CREATE TABLE `location_images` (
  `id` int(11) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location_images`
--

INSERT INTO `location_images` (`id`, `link`, `location_id`) VALUES
(6, 'https://london.ac.uk/sites/default/files/styles/max_1300x1300/public/2018-10/london-aerial-cityscape-river-thames_1.jpg?itok=6LenFxuz', 1),
(7, 'https://upload.travelawaits.com/ta/uploads/2021/04/eiffel-tower-800x800.jpg', 2),
(8, 'https://www.costacruises.com/content/dam/costa/inventory-assets/ports/AMS/ams-amsterdam-port-1b.jpg', 3),
(9, 'https://www.traveldailymedia.com/assets/2019/06/shutterstock_1316625557.jpg', 4),
(10, 'https://i.ytimg.com/vi/NXnSZ2-eSr0/maxresdefault.jpg', 5),
(11, 'https://content.presspage.com/uploads/2431/1920_dubaiconnect.jpg?10000', 6),
(12, 'https://www.arabianbusiness.com/public/images/2018/02/08/Burj-Khalifas-LED-facade.jpg', 7),
(13, 'https://aecom.com/wp-content/uploads/2015/08/Ferrari-World-Abu-Dhabi-2.jpg', 8),
(14, 'https://www.dubaitravelplanner.com/wp-content/uploads/2020/07/Dubai-Travel-Planner-CanvaPro-250.jpg', 9),
(15, 'https://www.visitdubai.com/-/media/gathercontent/poi/t/the-dubai-mall/fallback-image/the-dubai-mall-poi-shutterstock.jpg', 10),
(16, 'https://www.egypttoursplus.com/wp-content/uploads/2014/03/Jumeirah-Beach.jpg', 11),
(17, 'https://blogs.forbes.com/alexcapri/files/2018/09/Singapore.jpg', 12),
(18, 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Marina_Bay_Sands_in_the_evening_-_20101120.jpg/1200px-Marina_Bay_Sands_in_the_evening_-_20101120.jpg', 13),
(19, 'https://images.thrillophilia.com/image/upload/s--OAlCzEM8--/c_fill,h_600,q_auto,w_975/f_auto,fl_strip_profile/v1/images/photos/000/141/422/original/1547875968_uni4.jpg.jpg?1547875968', 14),
(20, 'https://www.intracen.org/uploadedImages/intracenorg/Content/Redesign/Projects/Arise_plus_Malaysia/shutterstock_1103855666.jpg', 15),
(21, 'https://static.toiimg.com/thumb/msid-54444342,width=1200,height=900/54444342.jpg', 16),
(22, 'https://livingnomads.com/wp-content/uploads/2018/03/24/Sipadan-Island-7.jpg', 17),
(23, 'https://pickyourtrail.com/blog/wp-content/uploads/2020/05/moneyinc.jpg', 18),
(24, 'https://images.thrillophilia.com/image/upload/s--xITWjz13--/c_fill,g_auto,h_600,q_auto,w_975/f_auto,fl_strip_profile/v1/images/photos/000/004/162/original/1556071835_1514367386_Port-Blair.jpg.jpg.jpg', 19),
(25, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/55/63/96/our-beautiful-beach.jpg?w=900&h=-1&s=1', 20),
(26, 'https://cdn77.pressenza.com/wp-content/uploads/2021/08/Egypt-03.jpg', 21),
(27, 'https://images.adsttc.com/media/images/603c/cc33/f91c/8186/2500/0051/newsletter/ummahatalshaykh12_1.jpg?1614597163', 22),
(28, 'https://www.planetware.com/photos-large/EGY/egypt-cairo-pyramids-of-giza-and%20camels-2.jpg', 23),
(29, 'https://c.ndtvimg.com/2021-09/jrmb9oto_sydney-pixabay_625x300_11_September_21.jpg', 24),
(30, 'https://idsb.tmgrup.com.tr/ly/uploads/images/2021/06/23/123837.jpg', 25),
(31, 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/28img-2223-hr-1534159335.jpg?crop=1xw:0.75xh;center,top&resize=1200:*', 26),
(32, 'https://www.nationsonline.org/gallery/USA/San-Francisco-CA-USA.jpg', 27),
(33, 'https://www.collinsdictionary.com/images/full/timessquare_99855551_1000.jpg', 28),
(34, 'https://cdn.britannica.com/95/94195-050-FCBF777E/Golden-Gate-Bridge-San-Francisco.jpg', 29);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `tour_package_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package`
--

CREATE TABLE `tour_package` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price_adult` int(11) NOT NULL,
  `price_child` int(11) NOT NULL,
  `discount` int(11) DEFAULT 0,
  `available_days` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') DEFAULT NULL,
  `total_days` int(11) NOT NULL,
  `itinerary` varchar(4000) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_package`
--

INSERT INTO `tour_package` (`id`, `name`, `description`, `price_adult`, `price_child`, `discount`, `available_days`, `total_days`, `itinerary`, `rating`) VALUES
(1, 'Europe', 'Explore the best destinations in the Netherlands with Traveldealsfinder. Book your 14 Days 13 Nights of Netherlands tour package with Traveldealsfinder. Visit the best tourist places in Europe including London, Paris, Brussels, Amsterdam, Switzerland, Frankfurt, Venice, Rome, Vatican', 148999, 128999, 10, 'Wednesday', 14, 'Day 1:Pickup from London Airport - Enjoy the Evening - Relax at Hotel;\r\n          Day 2:After Breakfast - Visit Tourist Places of London;\r\n          Day 3:After Breakfast Travel from London to Paris - Visit Eiffel Tower, Enjoy Seine River Cruise;\r\n          Day 4:After Breakfast Proceed to Disneyland, Enjoy Various Rides & Shows;\r\n          Day 5:After Breakfast Proceed to Brussels - Brussels Sightseeing;\r\n          Day 6:Enjoy Amsterdam City Tour;\r\n          Day 7:Enjoy Day in Switizerland - City Tour;\r\n          Day 8:After Breakfast Visit Engelberg - Experience Titlis Rotair;\r\n          Day 9:After Breakfast Visit Jungfraujoc Trummelbach Glacial Waterfalls;\r\n          Day 10:After Breakfast Drive Through Vaduz, Liechtenstein;\r\n          Day 11:Venice Sightseeing;\r\n          Day 12:Visit Pisa, Florence, Perugia City - The Beauty of Italy;\r\n          Day 13:Vatican City Sightseeing;\r\n          Day 14:Drop at Airport - Journey End;', NULL),
(2, 'Dubai', 'Dubai to believe that a man-made marvel like this exists. Record-breaking architecture and man-made islands here, cannot be seen anywhere else in the world. For tourists across the globe, Dubai is a travel mecca and business hub. Explore the best destinations in Dubai. Book your 5 Days 4 Nights of Dubai tour package and visit Dubai Museum, Burj Al Arab, Jumeirah Mosque.', 85788, 68999, 10, 'Monday', 5, 'Day 1:Arrive at Dubai Airport and transferred to Hotel. In evening visit Bastakia Quaeter.;\r\n          Day 2:After Breakfast visit Dubai Museum, Burj Al Arab, Jumeirah Mosque and Gold Souk.;\r\n          Day 3:After Breakfast full day is at leisure. You can take a optional tour of Desert Safari.;\r\n          Day 4:Today visit Burj Khalifa the tallest building in the world.;\r\n          Day 5:Proceed to Dubai International Airport Airport to Board a Flight for your onwards journey;', NULL),
(3, 'Singapore', 'Explore the best destinations in Singapore with TUI. Book your 4 Days 3 Nights of Singapore city tour package with TUI. Visit the best tourist places in Singapore including Parliament House, Supreme Court and City Hall.', 42589, 36589, 10, 'Tuesday', 4, 'Day 1:Arrive in Singapore. You will be met and transferred to your hotel. Check into the hotel. Rest of the day is at leisure. Overnight stay at the hotel.;\r\n          Day 2:After breakfast, proceed for a city tour of Singapore; an orientation tour that begins with a drive around the Civic District, the Cricket Club and the historic Parliament House, Supreme Court and City Hall. Stop at the Merlion Park for a great view of the Marina Bay and a picture-taking opportunity with The Merlio. The tour continues with a visit to the Thian Hock Keng Temple, one of the oldest Buddhist-Taoist temples on the island, before driving past Chinatown to a local handicraft centre. The final stop is in Little India. Rest of the day at leisure. Overnight stay at the hotel.;\r\n          Day 3:Breakfast at the hotel. The day is at leisure. Overnight stay at the hotel.;\r\n          Day 4:After breakfast at the hotel, you will be transferred to the airport for your flight back home or onward destination;', NULL),
(4, 'Malaysia', 'Malaysia is a stunning blend of skyscrapers to gorgeous beaches. From traditional villages to serene temples and century-old caves - a trip to Malaysia will not disappoint you at all. Explore the best destinations in Malaysia. Book your 4 Days 3 Nights of Malaysia tour package.', 36999, 32999, 10, 'Tuesday', 4, '         Day 1:Arrive Kuala Lumpur International Airport and transfer to the hotel.;\r\n          Day 2:Today visit Iconic Petronas Twin Towers,The Palace,National Monument,The National Museum and The National Mosque;\r\n          Day 3:Today proceed to full day tour at Sunway Lagoon here you visit Extreme Park,Scream park,Amusement Park and the Wildlife Park.;\r\n          Day 4:Today  proceed to Kuala Lumpur international Airport to board a flight for your onwards journey;', NULL),
(5, 'Andaman', 'The only place where you could find this in abundance is Andaman! Its ever-welcoming weather and the serene shorelines provide a wide array of fun and outdoor activities. Adding to its beauty is the delicious seafood and the mind-boggling sightseeing places in Andaman that make your holiday unforgettable.', 58990, 56990, 10, 'Thursday', 6, 'Day 1:Arrive at Port Blair airport and you are transferred to hotel. In afternoon visit Corbyns Cove Beach and Cellular Jail.;\r\n          Day 2:Proceed to Havelock Island by ferry. Later visit World Famous Radha Nagar Beach .;\r\n          Day 3:Morning is at leisure for your individual activities. Sail for Port Blair in the evening.;\r\n          Day 4:Full day sightseeing of Port Blair which covers Fisheries Museum, Anthropological Museum , Naval Marine Museum etc.;\r\n          Day 5:Full day sightseeing of Ross Island .;\r\n          Day 6:Proceed to Port Blair airport to board a flight for your onwards journey;', NULL),
(6, 'Egypt', '7 Days Egyptian Treasures Winter Tour Package by us.Explore the best destinations in Egypt with us. Book your 7 Days 6 Nights of Cairo, Aswan With Luxor tour package with Thomas Cook. Visit the best tourist places in Egypt including Kom El – Dekka, Catacombs of Kom- El- Shokafa, the Roman Catacombs, Giza plateau, Cairo tower.', 73499, 70499, 10, 'Saturday', 7, 'Day 1:Egypt-Today, embark on your exciting tour of Egypt. On arrival, you are greeted by your friendly tour manager / local representative outside the baggage hall. Check into your conveniently located hotel (check-in by 1400 hrs). Later this evening, enjoy the Sound and light show at the pyramids of Giza. You can get a glimpse back in time to see, feel and imagine how it was when the powerful Egyptians ruled. Tonight enjoy a sumptuous Indian dinner at a local Indian restaurant. Overnight at Hotel Movenpick Pyramid / Pyramid Park / Intercontinental or similar in Cairo.;\r\n          Day 2:Alexandria-This morning, after a sumptuous breakfast at your hotel, get ready for a full day excursion to Alexandria, the second-largest city in Egypt. Sit back in your coach as we take you to Alexandria. On arrival, visit In Kom El – Dekka, Catacombs of Kom- El- Shokafa, the Roman Catacombs are rock-hewn in three tiers at depth off 1000 feet dating back to the early first early second century A.D.See the Pompey’s Pillar, a colossal granite pillar erected in 297 A.D. Also see the Montazah Gardens. Later, you will have some free time to stroll by the Corniche, the sea-front promenade. After a day full of history and fun, return back to Cairo. Tonight enjoy a sumptuous Indian dinner at a local Indian restaurant. Overnight at Hotel Movenpick Pyramid / Pyramid Park / Intercontinental or similar in Cairo.;\r\n          Day 3:Cairo-After breakfast at your hotel, we proceed for a guided tour of this ancient capital city. On the west bank of the Nile, facing Cairo and on top of the Giza plateau, rise the three Pyramids erected by Cheops, Chephren and Mycerinus, and guarded by the mysterious sphinx, a mythical statue with a body of a lion and a human head. The three Pyramids and the Sphinx are considered one of the Seven Wonders of the World.Also see the Cairo tower, one of the more recent landmarks of Cairo rising to a height of 187 meters, the famous Blue Mosque with blue mosaic walls, and the Mari Mina church dating back to the early 5th century. See the famous Egyptian Museum which houses more than 2,50,000 antique pieces covering the whole history of ancient Egypt, which extends over the past five thousand years; the most splendid being the collection of Tut Ankh- Amen.Later, you can visit the Khan El-Khalili Bazaar and the Al Sangha market place where you will come across some interesting jewellery shops or go shopping to pick up souvenirs on your own. Tonight enjoy a sumptuous Indian dinner at a local restaurant. Overnight at Hotel Movenpick Pyramid / Pyramids Park / Intercontinental or similar in Cairo.;\r\n          Day 4:Aswan – Kom Ombo-After an American breakfast at the hotel, proceed to the airport for your flight to Aswan. On arrival at Aswan; proceed on a guided city tour visiting the High Dam – one of the outstanding architectural achievements of the twentieth century. Enjoy an excursion to the magnificent temples of Abu Simbel dedicated to Gods Amun, Ra-Horakhty, and Ptah, as well as to the deified Rameses.We then visit the temple of Philae dedicated to Goddess Isis. Enjoy a felucca ride around the Elephantine island, after which we proceed to the Cruise centre to board the luxury cruise liner. After boarding, enjoy the delicious welcome aboard buffet lunch. Later today, we sail to Kom Ombo. The rest of the day is at leisure. Enjoy dinner on the cruise. Overnight on board the cruise.;\r\n          Day 5:Edfu-After breakfast, we proceed to visit the famous Temple of Two Gods. Dedicated to Sobek and Haroeris, the crocodile gods, this temple was constructed during the Roman era and is noted for the engravings on the walls. After the city sights of Kom Ombo, we board the cruise and sail to Edfu town situated on the west bank of the river Nile. On arrival, we proceed to the famous Edfu temple dedicated to god Horus, represented by the Falcon.This is one of the most beautiful Egyptian temples distinguished by its huge splendid structure that blends', NULL),
(7, 'Australia', 'Escape to beautiful Moreton Bay with a scenic cruise that in just over an hour will bring you to the crystal clear waters and white sandy beaches of Tangalooma Island Resort. Tangaloomas wide range of resort facilities caters for everyone and offers guests of all ages the perfect destination for a unique adventure, education, or nature-based experiences in a truly relaxed environment. Yatra brings to you specially designed package with an enriching experience of Sydney, adventures of Gold Coast along with Natural Wonders of Tangalooma.', 116899, 110899, 10, 'Tuesday', 8, 'Day 1:Arrive in Sydney Kingsford Smith International Airport and transfer to hotel. rest of the day at leisure.;\r\n          Day 2:Today Half day city tour of Sydney like Harbour Bridge, Opera House and other attractions.;\r\n          Day 3:Today boago for Full Day Trip to Blue Mountains with Jenolan Caves.;\r\n          Day 4:Today proceed for Sydney Airport to board your flight to Gold Coast.;\r\n          Day 5:Today enjoy theme park . like Sea World, Movie World ,Wet n Wild Water World etc;\r\n          Day 6:Full day is free to leisure;\r\n          Day 7:Today transfer back to Brisbane Airport, from where you will proceed to Tangalooma Resort. day is free to leisure;          \r\n          Day 8:Today proceed Brisbane airport to board your flight to back to India.;', NULL),
(8, 'USA', 'America is a metropolis brimming with cities like LA, Las Vegas, Chicago, Miami, Boston and New York. Each city is different in itself with a different set of cultures, cuisines and entertainment options. The USA is rightly called the country of road trips. You can enjoy sun-bleached hillsides of the Great Plains, rainforests, swamplands and scenic country lanes as you veer off to discover blue highways. Explore the best destinations in the USA. Book your 7 Days 6 Nights of New York, Washington holiday travel package. Visit the best tourist places in the USA including New York, Atlantic City, Washington.', 143689, 126589, 10, 'Friday', 7, 'Day 1:New York-Arrive at New York airport and you are transferred to your pre-booked hotel. En-route enjoy the Delicious dinner at an Indian restaurant. then you are transferred to your hotel. Check-in the hotel and relax for some time. The evening is free for your leisure activities. Overnight stay at the hotel.;\r\n          Day 2:New York Sightseeing-After Delicious Breakfast begins an amazing city tour of New York which covers 9/11 memorial, the Theatre District, Chinatown, Wall Street, Central Park, United Nations’ Global Headquarters, the Trump Tower, the Manhattan and Brooklyn Bridges and much other attraction. Later enjoy the short cruise to take a close view of the Statue of Liberty. After tour enjoys the dinner at the Indian restaurant then return back to the hotel. Overnight stay at the hotel.;\r\n          Day 3:Atlantic City tour-After Breakfast check out the hotel and board a flight and proceed to Atlantic City. Later we proceed for a walking tour of the world-famous Atlantic City Boardwalk. And you can shop in one of the best shopping destinations on the east coast Later enjoy the dinner at the Indian restaurant. Overnight stay at the hotel.;\r\n          Day 4:Washington D.C City Tour-After Breakfast checks out the hotel and boards a flight to Washington D.C. On arrival enjoy the city tour of the historical and beautiful city here you see the Washington Monument - The Marble Obelisk built-in memory of George Washington, then continue to drive to Pennsylvania Avenue.On arriving at The Capitol - the White dome-shaped building which serves as the office of elected members of the Senate then visits Lincoln Memorial, Korean Memorial and World War II Memorial en route you see the Smithsonian Institution - The World’s Largest Museum Complex, which includes The National Air and Space Museum. In the evening enjoy the dinner at the local Indian restaurant. Overnight stay at the hotel.;\r\n          Day 5:City sightseeing-After Breakfast starts your tour to the most popular Chocolate factory at Hersheys Chocolate World - Here you see the process of ow beans are made into milk chocolate. then we continue to Niagara Falls - one of the natural wonders of the world. After tour proceeds to the hotel. Check-in the hotel and relax for some time. Overnight stay at the hotel.;\r\n          Day 6:Sightseeing-After Breakfast proceed to Niagara Falls to enjoy the thrilling boat ride ‘Maid of The Mist’ which gives you a breathtaking view of the cascading waters of this majestic waterfall Later, sit back and relax in your coach as we drive to Philadelphia, the economic and cultural centre city. The city has more outdoor sculptures and murals than any other American city. After tour return back to the hotel. Overnight stay at the hotel.;\r\n          Day 7:Depart New York-Today is last day of your tour after Breakfast check out the hotel and proceed to New York airport to board a flight for your onwards journey.;', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` int(8) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `dob` date DEFAULT NULL,
  `doc` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fname`, `lname`, `gender`, `email`, `phone`, `address`, `pincode`, `city`, `country`, `password`, `is_admin`, `dob`, `doc`) VALUES
(1, 'Raj', 'Tiwari', 'M', 'raj@gmail.com', '8070810263', '504', 400604, 'Thane', 'India', '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824', 1, '2000-04-23', '2021-11-07'),
(2, 'Shreyans', 'Mulkutkar', 'M', 'shreyans@gmail.com', '9819693167', 'Home', 400008, 'Mumbai', 'India', '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824', 1, '2001-04-23', '2021-11-07'),
(3, 'axon', 'blaze', 'male', 'axon@example.com', '', NULL, NULL, NULL, NULL, '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824', 0, '2001-04-23', '2021-11-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_package_id` (`tour_package_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_package_id` (`tour_package_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_package_id` (`tour_package_id`);

--
-- Indexes for table `location_images`
--
ALTER TABLE `location_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_package_id` (`tour_package_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tour_package`
--
ALTER TABLE `tour_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `location_images`
--
ALTER TABLE `location_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_package`
--
ALTER TABLE `tour_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`tour_package_id`) REFERENCES `tour_package` (`id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`tour_package_id`) REFERENCES `tour_package` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`tour_package_id`) REFERENCES `tour_package` (`id`);

--
-- Constraints for table `location_images`
--
ALTER TABLE `location_images`
  ADD CONSTRAINT `location_images_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`tour_package_id`) REFERENCES `tour_package` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
