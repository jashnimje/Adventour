-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2020 at 01:51 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database adventour;
use adventour;
--
-- Database: `adventour`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `cdesc` text NOT NULL,
  `cimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `ctitle`, `cdesc`, `cimg`) VALUES
(11, 'How I Spent 24 Hours In Mumbai', 'One fine day, my father came home in an excited mood and shouted at the top of his voice\r\n\r\n‘We are going for a week holiday in Maharashtra!!!’\r\n\r\nThe movement my father broke this news; I was jumping on my bed screaming and shouting “WE ARE GOING TO MUMBAI.”\r\n\r\nLast Updated: July 25, 2018 Latika Sabharwal\r\nOne fine day, my father came home in an excited mood and shouted at the top of his voice\r\n\r\n‘We are going for a week holiday in Maharashtra!!!’\r\n\r\nThe movement my father broke this news; I was jumping on my bed screaming and shouting “WE ARE GOING TO MUMBAI.”\r\n\r\nI was in the seventh heaven because being a Bollywood fan, visiting Aamchi Mumbai, was always on my bucket list. I was laughing from ear to ear with the thought of how much fun I am going to have on this trip. I didn’t even care to open the map because I knew exactly where I want to go and want to do on this journey.  While I was daydreaming about my Mumbai trip, my father broke the big news, which tore me apart. In filmy language, I was scattered, and my dreams were devastated.\r\n\r\n“WE ARE SPENDING JUST A DAY IN MUMBAI”, my father said.\r\n\r\nGuess now, I need to open the map as I can’t afford to waste this opportunity of being in my dream destination, that too just for a day.  I carefully planned my 24 hours in my Mumbai keeping in mind that none of the famed attractions should be missed and let me tell you I had one of the best trips I could have dreamed of. I also realized there must be a number of people like, who have a single day to spend in Mumbai, so I thought of penning this blog down to help one-day visitors get the maximum of Mumbai.\r\n\r\nRecommended Tours\r\nMumbai - Panchgani Weekend Tour\r\n2 Nights / 3 Days\r\nMumbai - Panchgani Weekend Tour\r\nMumbai - Lonavala Weekend Tour\r\n2 Nights / 3 Days\r\nMumbai - Lonavala Weekend Tour\r\nMumbai - Khandala Weekend Tour\r\n2 Nights / 3 Days\r\nMumbai - Khandala Weekend Tour\r\nMumbai - Mahabaleshwar Weekend Tour\r\n2 Nights / 3 Days\r\nMumbai - Mahabaleshwar Weekend Tour\r\n05: 00 AM to 09:00 PM – Early morning Aarti at Shree Siddhivinayak and breakfast at Haji Ali Dargah\r\nSiddhivinayak and Haji Ali Dargah\r\n\r\nOur first morning in the city of dreams started with a very humbling experience at the Siddhivinayak temple. Early morning, me, my brother and parents borrowed the car of Raju uncle (one of my father’s friend) and headed straight away to Siddhivinayak temple. I have only seen Siddhivinayak temple in Ekta Kapoor serials and heard that it’s always brimming with devotees, no matter at what time you visit. Fortunately, we didn’t find any rush and it was a smooth walk to the sanctum. In Shree Siddhivinayak, we attended the morning Aarti ceremony, which happened at sharp 05:30 and learned about the significance of this temple from one Marathi couple who was standing right next to us. Inside the temple, there is a black stone idol, which is believed to be 200 years old, under a dome coated with 3.7 kg gold plating. Flanking the deity on both sides are Riddhi & Siddhi, goddesses signifying sanctity, fulfillment, prosperity and riches. After attending the Aarti and seeking blessings of God, we made our way to Gate No 3 to take Prasadam.  Starting our day with so much gold and glitter, we proceed to our next stopover Haji Ali Dargah, which is exactly 6 km away from the Siddhivinayak temple.\r\nFinally, it was the time to experience a joyride on the Bandra-Worli Sea link. Yet another architectural wonder in Mumbai, this 5.6 km long cable-stayed bridge crosses the Arabian Sea and links the Mumbai suburbs with South Mumbai. I felt the glory of Mumbai at its best and in the blink of an eye, we were in Bandra. Our first stopover in Bandra was Bandstand Promenade. A beautiful little corner by the sea, this place is a secret hideout for many lovers staying in Mumbai. My father was so mesmerized with this place that he took out his camera and started clicking some awesome pictures. Also we enjoyed some tasty street food like panipuri, bhutta, and vada pav. With belly full of food and beautiful pictures, we head to the next destination ‘Walk of the Stars.’ The path features about six statues of famous Bollywood actors and 100 brass plates embossed with the handprints and signatures of other stars.  While walking the walk of stars, I saw a huge crowd, when I asked somebody the reason behind such rush, they said it’s the residence of Shah Rukh Khan and all these people are his fans, waiting outside just to get his glimpses. Unfortunately, I wasn’t able to see Shah Rukh Khan but I do got a picture clicked in front of name board displaying ‘Mannat.’\r\nIf we go by the map, the journey from Linking Road to Gateway of India will take an hour, but one should never underestimate the traffic of Mumbai. It took us 2 hours to complete this journey so as to reach Gateway of India. Though the traffic was boring, but the best part was that we got an opportunity to see Crawford Market and heritage buildings in the fort area like Victoria Terminus Train Station, Municipal Council Building, Regal Cinema, National Gallery of Modern Art, David Sassoon Library, Army and Navy Building and Flora Fountain. Also, we came across open-air laundries, better known as dhobi Ghats. If you have some extra time at your disposal, you can go to Crawford Market to shop ready-to-stitch clothes, dress material, Chinese toys, party products, artificial jewellery, and miniatures.', 'HowISpent24HoursInMumbai.jpg'),
(12, 'My Solo Trip To Kerala', '\r\n\r\nI went on a solo trip to Kerala from 30th Nov to 5th Dec 2015. I started my journey on 30th Nov from Delhi. I took an afternoon flight from Delhi to Trivandrum, reached there in evening. I had planned to move to Kovalam . I came out of airport & booked an “Uber Cab”. I got a call from driver & he told me that Uber only operates in the Trivandrum city. Then I took a prepaid taxi from airport to Kovalam, they charged 500 Rs. I didn’t have any hotel bookings in advance. I asked the driver about the cheapest hotel near Kovalam, he told that the minimum would be around Rs1200/. I was not convinced, I browsed internet & looked for the best prize stay for the night. I found a deal of 800 Rs. I did the booking while travelling. I guided my cab towards hotel. I reached hotel by around 8:00PM. I changed & walked towards the beach area. It felt awesome. Beach had a concrete embankment at some distance away from sea, it had a pathway for walking & all shops were lined together. It looked very organised & clean.\r\nKovalam beach is also called “Hawa beach, it is connected to light house beach. If one looks at it, it seemed a single beach but different names have been given. Lighthouse beach is named because of its proximity to lighthouse. There are all kinds of shops along the beach. I took a walk of around 1 km till lighthouse beach & then I decided to eat something & enjoy the sea view. I had read a lot of positive reviews about Malabar café located along the beach. I went there, had a beer & some non veg snacks. They have seating facing the sea with reasonable rates & good food. I noticed mostly foreign tourists there. At around 1030 in the night, I called it a day & moved towards my room.\r\nI had breakfast & moved to Kovalam to return the scooty. I reached Kovalam by around 1130 hrs. I booked a hotel online in Trivandrum. I took local bus from Kovalam to Trivandrum. I checked into hotel, took a quick nap & moved to see Swami Padmanbham Temple. It’s a beautiful temple. It has some strict rules for entry like, males have to wear dhoti, ladies in sarees or dhotis on their dresses & most important one is that it allows entry only to Hindus. However if you are a Hindu, then this temple is worth a visit. Apart from its religious value, it has unique architecture & in terms of assets, it is the richest religious institution in recorded history of the world. After the temple visit, I decided to do some shopping. I went to SMSM Emporium; it offers large variety of handicrafts & local materials. It’s a good place for taking souvenirs. After this I visited Connemara market for shopping of spices. Here there are lot of shops & one can get good variety of spices & other items in reasonable rates. I bought all kinds of spices & herbs which I found useful for me. Although the shopkeeper did not understand Hindi or English, he was very patient with me. He allowed me to make bill for myself as I wanted to write down the names of all spices & herbs clearly. I was tired after the shopping. I moved back to hotel, freshened up & had dinner. I had an early morning flight from Trivandrum to Delhi on 5th Dec. I finally said goodbye to Kerala with lots of good memories & a resolve to visit again.', 'MySoloTripToKerala.jpg'),
(13, 'My Breath-Taking Vacation Into The Hills Post Lockdown!', 'After the much awaited unlock regulations were made effective, we gathered the courage to travel to Himachal for a 5-6 days’ holiday. After lock down, it was our first trip in unlock 1. We travelled by my car as it felt more safe and comfortable, and it seemed to be the best way to maintain social distancing while travelling.\r\n\r\nWe booked an ‘Airbnb in hills’ package and stayed in Manali to experience the beauty around. From waking up early and witnessing a breath-taking view of the sunrise to sipping on a cup of hot tea while enjoying the sunset, every experience here was worthwhile. We found some secret places in the mountains like River Forest café and Bijli Mahadev temple. These places are hardly explored by tourists. We had to trek for hours through the beautiful mountains to reach these stunning destinations. I must say Himachal took away my heart this time. \r\n\r\nHere are some pictures from our memorable trip to share with you.\r\n\r\najay-trip-1\r\n\r\nThis picture was shot at an empty location where I could get rid of my mask and breathe in some fresh air. It reminds me of the times when travelling was so convenient for us. Things were so easy then. I remember I would travel around so freely pre-COVID.\r\n\r\najay-trip-2\r\n\r\nYou can see the brilliant Atal Tunnel behind me in this photograph. Witnessing this tunnel in the mountains fitted with best of class technology was like seeing wonders through my eyes.\r\najay-trip-3\r\n\r\nOh, how can I forget this picture? This was the place where I started my YouTube channel by the name Ajju 0008 and dreamt of achieving a new life. I’m fortunate to have visited these exceptional beauties of my country. What more could I have asked for?\r\n\r\najay-trip-5\r\n\r\nAnd look at the magnificence of Himachal. We were so blessed to have such stunning locations around us. The splendid things I experienced on this trip will last with me forever.\r\n\r\nAfter this amazing trip to Manali, we were so excited that we immediately agreed upon going on another trip soon. So, now we are planning to visit Gulmarg this December.', 'MyBreath-TakingVacationIntoTheHillsPostLockdown!.jpg'),
(14, 'After Months Of Probing, We Finally Decided To Take The Risk!', 'If there is one activity my family and I absolutely enjoy doing together, it is travelling and exploring new places. If someone asks me tomorrow what is that one thing that makes me feel alive and gives me the highest form of joy and self-satisfaction, this would probably be it. So, it is very typical to assume that a person who loves to be out there would not have taken the news of an impending lockdown very well. Honestly, it struck me rather badly because we hadn’t been able to go for a full-fledged family vacation for a long time due to my sister’s board exam and other school-related activities. Additionally, we stayed at home for 6 long months with little or no contact with the outside world. With increasing stress of my online classes, my parent’s work from home and my sister’s college entrance exams, we thought we had had enough and wanted to go for a vacation. The Dussehra break seemed the most apt time for it. So, we shortlisted some exotic destinations near us and decided to go on a trip to Gokarna and Murdeshwar. To start with, we looked for resorts and hotels and confirmed with them in advance about the safety measures being implemented for COVID. We inquired about the approximate crowding at the properties and finally booked our stay. \r\n\r\nTrip to Gokarna\r\nWe packed our bags and headed out for an incredible road trip to our first destination, Gokarna. We travelled in our own car and practiced social distancing every time we stepped out of it. We happened to visit during an off season, hence the tourist crowd had reduced considerably.\r\n\r\nharsh-trip-1\r\n\r\nWe stopped at two other places in between, the first was Jog falls at Shimoga. Watching the waterfall from a distance was a breath-taking experience.\r\n\r\nThe next spot, Honnavar view point was not very far away from Jog falls. Although we didn’t stop there for too long, the view was nothing like we had seen before; it was quiet awe-inspiring.\r\n\r\nharsh-trip-2\r\n\r\nThe view was not the only take away from the place, it also held a wide variety of spectacular lifeforms for us to observe – like butterflies and other insects. We had come across a glorious specimen of a butterfly called ‘Tamil lacewing’.\r\n\r\nharsh-trip-3\r\n\r\nWe continued our journey to Gokarna without a halt, and as we drove past, we could see the serene view of the sea overlooking the beach. My sister and I, sitting on the backseat of the car, shared an overwhelming glance that clearly meant we didn’t know what emotions to express.\r\n\r\nWe reached our resort, ‘Hotel Gokarna International’ and it was nothing like we had expected. It had many admirable amenities, but the best part about it was that it directly opened up to the Kudle beach where we could enjoy a private beach experience.\r\n\r\nharsh-trip-4\r\n\r\nThe following day, we decided to trek up a hill and stumbled upon a place called Jatayu Teertha to catch an outstanding view of the Arabian sea. At some point, it looked like there was no boundary between the water and the sky and it seemed to merge perfectly. All the good things one can imagine about the sea had adorned our eyes.\r\n\r\nharsh-trip-5\r\n\r\nThe same evening, we took a long and relaxing stroll on the beach until it became dark. We felt lucky to have witnessed one of the most beautiful sunsets ever with a pink sky and the dazzling reflections of the hills in the water.\r\n\r\nprgaya-trip-6\r\n\r\nJourney to Murdeshwar\r\nThe next day we advanced to Murdeshwar, famous for its beaches and temples. We spent hours in the water just splashing and letting the waves carry us away. It was such a picturesque location considering the tall statue of Lord Shiva in the background.\r\n\r\nprgaya-trip-7\r\n\r\nWe stayed till dark to experience a sheer delight of colourful lights illuminating the statue and the temple from all directions and creating a glistening reflection on the sea. It made a fabulous destination for photography enthusiasts to capture light-related long exposure and nightscape shots.\r\n\r\nprgaya-trip-8\r\n\r\nOur last and final spot before we headed back home was ‘Agumbe Sunset view point’ that came on our way. The scenery was splendid with blue sky, dense forests, tall hills and a waterfall to compliment the scene.\r\n\r\nI’m so mesmerised with this trip that I recommend every fellow traveller to visit these places for some unforgettable moments of pure bliss. This was indeed the finest escape from lockdown and our hectic lives. I am so grateful to my parents for having organised this much needed getaway.', 'AfterMonthsOfProbing,WeFinallyDecidedToTakeTheRisk!.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` float NOT NULL,
  `fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `title`, `details`, `price`, `rating`, `fname`) VALUES
(1, 'Mumbai', 'Mumbai, the capital city of the Indian state of Maharashtra, is a spectacular paradox of chaos and hope, glamour and squalor, modernity and tradition. Famously known as the City of Dreams, Mumbai â€“ formerly known as Bombay - Mumbai is a beautifully blen', 18000, 4.2, 'Mumbai.jpg'),
(2, 'Goa', 'Lying on the western coast, Goa is India\'s smallest state and unlike any other, known for its endless beaches, stellar nightlife, eclectic seafood, world-heritage listed architecture.', 15000, 4.5, 'Goa.jpg'),
(3, 'Delhi', 'The capital of India, Delhi is a cosmopolitan city with a historic old Delhi and the modern New Delhi. From historical monuments to crowded shopping malls, from an extensive network of the modern metro system to Delhi University campus, Dilli has multiple', 19000, 4.1, 'Delhi.jpg'),
(4, 'Kashmir', 'Popularly known as the \"Paradise on Earth\", Jammu and Kashmir is world famous for its scenic splendour, snow-capped mountains, plentiful wildlife, exquisite monuments, hospitable people and local handicrafts. Your trip to Jammu and Kashmir will be a memor', 15000, 4.8, 'Kashmir.jpg'),
(5, 'Agra', 'Agra is a popular tourist destination as it is home to one of the 7 wonders of the world, the Taj Mahal. Agra is mostly visited on a one-day trip from New Delhi or other nearby cities in Uttar Pradesh but is totally worth it. Be prepared to be astounded, ', 16000, 4.8, 'Agra.jpg'),
(6, 'Leh Ladakh', 'Ladakh is a union territory in the Kashmir region of India.\r\nLadakh is an adventure playground for climbing, jeeps tours, rafting and high-altitude trekking.', 16000, 4.7, 'LehLadakh.jpg'),
(7, 'Nainital', 'The gem of Uttarakhand - Nainital is a charming hill station that sits prettily at the green foothills of the Kumaon ranges in the Himalayas. Located at an elevation of around 1938 metres, Nainital is located and developed around the beautiful Naini Lake,', 16000, 4.4, 'Nainital.jpg'),
(8, 'Bangalore', 'Having evolved gradually from being the Garden city to the Silicon Valley of India, Bangalore is India\'s third-largest city. Bangalore is loved for its pleasant weather, beautiful parks and the many lakes here. Bangalore is renowned for its eateries, stre', 18000, 4, 'Bangalore.jpg'),
(9, 'Jaipur', 'Jaipur is a vibrant amalgamation of the old and the new. Also called the Pink City, the capital of the royal state of Rajasthan, was ruled by the Rajputs for many centuries and developed as a planned city in the 17th century AD. Along with Delhi and Agra,', 21000, 4.3, 'Jaipur.jpg'),
(10, 'Kolhapur', 'Kolhapur is situated on the banks of the river Panchaganga in the south-west region of Maharashtra.  Situated 230 kilometres away from Pune, Kolhapur is one of the princely states and boasts of a rich legacy dating back to the times of the Marathas. Prese', 25000, 4.6, 'Kolhapur.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
