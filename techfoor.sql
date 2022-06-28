-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 03:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techfoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `search_engine_data`
--

CREATE TABLE `search_engine_data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `websites` text NOT NULL,
  `seo_keyword1` varchar(255) DEFAULT NULL,
  `seo_keyword2` varchar(255) DEFAULT NULL,
  `seo_keyword3` varchar(255) DEFAULT NULL,
  `seo_keyword4` varchar(255) DEFAULT NULL,
  `seo_keyword5` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_engine_data`
--

INSERT INTO `search_engine_data` (`id`, `title`, `description`, `websites`, `seo_keyword1`, `seo_keyword2`, `seo_keyword3`, `seo_keyword4`, `seo_keyword5`, `slug`) VALUES
(2, 'Websites', 'Stack Overflow\nAbout\nProducts\nFor Teams\nSearch…\nJoin Stack Overflow to find the best answer to your technical question, help others answer theirs.\n\nHome\nPUBLIC\nQuestions\nTags\nUsers\nCompanies\nCOLLECTIVES\nExplore Collectives\nTEAMS\nStack Overflow for Teams – Start collaborating and sharing organizational knowledge. \nLimit String Length\nAsked 11 years, 11 months ago\nModified today\nViewed 231k times\n\n83\n\n\n14\nI\'m looking for a way to limit a string in php and add on ... at the end if the string was too long.\n\nphp\nstring\nShare\nImprove this question\nFollow\nedited May 31, 2015 at 22:24\nuser avatar\nCarrie Kendall\n10.9k55 gold badges6060 silver badges8181 bronze badges\nasked Jun 10, 2010 at 23:32\nuser avatar\nBelgin Fish\n17.8k4040 gold badges101101 silver badges129129 bronze badges\nYou might find s($str)->truncate($length) or even s($str)->truncateSafely($length) helpful, as found in this standalone library. – \ncaw\n Jul 27, 2016 at 1:01\n1\nWorking example:stackoverflow.com/a/66662165/7186739 – \ndev\n Mar 16, 2021 at 19:34\nAdd a comment\n13 Answers\nSorted by:\n\nHighest score (default)\n\n171\n\nYou can use something similar to the below:\n\nif (strlen($str) > 10)\n   $str = substr($str, 0, 7) . \'...\';\nShare\nImprove this answer\nFollow\nedited Jan 6, 2017 at 15:18\nuser avatar\nMichele La Ferla\n6,5351111 gold badges4848 silver badges7777 bronze badges\nanswered Jun 10, 2010 at 23:37\nuser avatar\nbramp\n9,16355 gold badges3939 silver badges4545 bronze badges\n2\nI guess you didn\'t think he might be skipping his homework reading assignments. – \ndlamblin\n Jun 10, 2010 at 23:43\n1\nSorry no I didn\'t consider that. What are the rules for homework? Oh and wait, I just noticed, my code doesn\'t even work correctly ;) – \nbramp\n Jun 10, 2010 at 23:47\n3\nIt\'s just a community rule: meta.stackexchange.com/questions/10811/… – \ndlamblin\n Jun 11, 2010 at 0:01 \n5\nFor getting a substring of UTF-8 characters, I highly recommend mb_substr -> mb_substr($utf8string,0,5,\'UTF-8\'); You would avoid wrong lenght of the slice this way. – \nvinsa\n Jun 6, 2015 at 10:44 \nAdd a comment\n\n39\n\nFrom php 4.0.6 , there is a function for the exact same thing\n\nfunction mb_strimwidth can be used for your requirement\n\n<?php\necho mb_strimwidth(\"Hello World\", 0, 10, \"...\");\n//Hello W...\n?>\nIt does have more options though,here is the documentation for this mb_strimwidth\n\nShare\nImprove this answer\nFollow\nedited Apr 21, 2019 at 19:40\nuser avatar\nmiken32\n39.4k1515 gold badges9090 silver badges132132 bronze badges\nanswered Nov 4, 2014 at 6:40\nuser avatar\nSarath Sadasivan Pillai\n6,1512626 silver badges4141 bronze badges\n1\nwordwrap() function can also be usefull: w3schools.com/php/func_string_wordwrap.asp – \nCyril Jacquart\n May 4, 2016 at 16:49\nBut personally, i prefer to use : $s=preg_replace(\'/\\s+?(\\S+)?$/\', \'\', substr($s, $START, $LIMIT)); – \nCyril Jacquart\n May 4, 2016 at 17:56\n6\n@CyrilJacquart its better to avoid using regular expressions where ever its not necessary. – \nSarath Sadasivan Pillai\n Jun 10, 2016 at 10:30\nAdd a comment\n\n10\n\nYou can use the wordwrap() function then explode on newline and take the first part, if you don\'t want to split words.\n\n$str = \'Stack Overflow is as frictionless and painless to use as we could make it.\';\n$str = wordwrap($str, 28);\n$str = explode(\"\\n\", $str);\n$str = $str[0] . \'...\';\nSource: https://stackoverflow.com/a/1104329/1060423\n\nIf you don\'t care about splitting words, then simply use the php substr function.\n\necho substr($str, 0, 28) . \'...\';\nShare\nImprove this answer\nFollow\nedited Dec 4, 2018 at 17:28\nuser avatar\nManoj\n21.4k33 gold badges1919 silver badges4040 bronze badges\nanswered Jun 10, 2010 at 23:37\nuser avatar\nSev\n14.8k88 gold badges5454 silver badges7575 bronze badges\nAdd a comment\n\n7\n\n2nd argument is where to start string and 3rd argument how many characters you need to show\n\n$title = \"This is for testing string for get limit of string This is for testing string for get limit of string This is for testing string for get limit of string This is for testing string for get limit of string\";\n    echo substr($title,0,50);\nShare\nImprove this answer\nFollow\nanswered Jul 9, 2019 at 5:31\nuser avatar\nNaeem Ijaz\n72988 silver badges1414 bronze badges\nAdd a comment\n\n3\n\nDo a little homework with the php online manual\'s string functions. You\'ll want to use strlen in a comparison setting, substr to cut it if you need to, and the concatenation operator with \"...\" or \"&hellip;\"\n\nShare\nImprove this answer\nFollow\nanswered Jun 10, 2010 at 23:37\nuser avatar\ndlamblin\n42.5k2020 gold badges9797 silver badges135135 bronze badges\nAdd a comment\n\n3\n\n $string = (strlen($string) > 13) ? substr($string,0,10).\'...\' : $string;\nOr as function:\n\nfunction truncate($string, $length, $dots = \"...\") {\n    return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;\n}\nIt\'s been a while since I wrote this answer and I don\'t actually use this code any more. I prefer this function which prevents breaking the string in the middle of a word using the wordwrap function:\n\nfunction truncate($string,$length=100,$append=\"&hellip;\") {\n$string = trim($string);\n\n  if(strlen($string) > $length) {\n    $string = wordwrap($string, $length);\n    $string = explode(\"\\n\", $string, 2);\n    $string = $string[0] . $append;\n  }\n\n  return $string;\n}\nShare\nImprove this answer\nFollow\nanswered Aug 25, 2021 at 17:27\nuser avatar\nWaruna Manjula\n2,49711 gold badge2424 silver badges2828 bronze badges\nAdd a comment\n\n1\n\nIn Laravel, there is a string util function for this, and it is implemented this way:\n\npublic static function limit($value, $limit = 100, $end = \'...\')\n{\n    if (mb_strwidth($value, \'UTF-8\') <= $limit) {\n        return $value;\n    }\n\n    return rtrim(mb_strimwidth($value, 0, $limit, \'\', \'UTF-8\')).$end;\n}\nShare\nImprove this answer\nFollow\nanswered Sep 5, 2017 at 17:46\nuser avatar\ngeckob\n6,88955 gold badges2929 silver badges3737 bronze badges\nAdd a comment\n\n1\n\nTo truncate a string provided by the maximum limit without breaking a word use this:\n\n/**\n * truncate a string provided by the maximum limit without breaking a word\n * @param string $str\n * @param integer $maxlen\n * @return string\n */\npublic static function truncateStringWords($str, $maxlen): string\n{\n    if (strlen($str) <= $maxlen) return $str;\n\n    $newstr = substr($str, 0, $maxlen);\n    if (substr($newstr, -1, 1) != \' \') $newstr = substr($newstr, 0, strrpos($newstr, \" \"));\n\n    return $newstr;\n}\nShare\nImprove this answer\nFollow\nedited Apr 5, 2019 at 1:07\nanswered Oct 30, 2013 at 16:25\nuser avatar\ncrmpicco\n15.5k2424 gold badges123123 silver badges206206 bronze badges\nAdd a comment\n\n0\n\nIn another way to limit a string in php and add on readmore text or like \'...\' using below code\n\nif (strlen(preg_replace(\'#^https?://#\', \'\', $string)) > 30) { \n    echo substr(preg_replace(\'#^https?://#\', \'\', $string), 0, 35).\'&hellip;\'; \n}\nShare\nImprove this answer\nFollow\nanswered Nov 9, 2016 at 10:24\nuser avatar\nPCMShaper\n3144 bronze badges\nAdd a comment\n\n0\n\n$res = explode(\"\\n\",wordwrap(\'12345678910\', 8, \"...\\n\",true))[0];\n\n// $res will be  : \"12345678...\"\nShare\nImprove this answer\nFollow\nedited Nov 24, 2020 at 11:43\nuser avatar\nJ.F.\n10.8k88 gold badges2222 silver badges4646 bronze badges\nanswered Nov 24, 2020 at 10:53\nuser avatar\nuser3815441\n11\n2\nWhile this code may answer the question, providing additional context regarding why and/or how this code answers the question improves its long-term value. – \nDonald Duck\n Nov 24, 2020 at 12:06\nAdd a comment\n\n0\n\nfunction truncateString($string, $maxlength, $ellipsis = false){\n\n    if(mb_strlen($string) <= $maxlength){\n        return $string;\n    }\n\n    if(empty($ellipsis)){\n        $ellipsis = \'\';\n    }\n\n    if($ellipsis === true){\n        $ellipsis = \'…\';\n    }\n\n    $ellipsis_length = mb_strlen($ellipsis);\n\n    $maxlength = $maxlength - $ellipsis_length;\n\n    $string = trim(mb_substr($string, 0, $maxlength)) . $ellipsis;\n\n    return $string;\n\n}\nhttp://sandbox.onlinephpfunctions.com/code/968e2fd1e98b60828a12d6dc0b68ec38b3628757\n\nShare\nImprove this answer\nFollow\nanswered Aug 19, 2021 at 13:25\nuser avatar\nArthur Shlain\n73577 silver badges1818 bronze badges\nAdd a comment\n\n0\n\nfunction showAHumanDate( $dateString ){\n$toRet = \'\';\n$days = date( \"d\", strtotime( $dateString ) );\n$month = date( \"F\", strtotime( $dateString ) );\n$year = date( \"Y\", strtotime( $dateString ) );\n\nswitch( $days ){\n    case \'01\':\n    $string = \'1st\';\n    break;\n    case \'02\':\n    $string = \'2nd\';\n    break;\n    case \'03\':\n    $string = \'3rd\';\n    break;\n    case \'21\':\n    $string = \'21st\';\n    break;\n    case \'22\':\n    $string = \'22nd\';\n    break;\n    case \'23\':\n    $string = \'23rd\';\n    break;\n    case \'31\':\n    $string = \'31st\';\n    break;\n    default:\n    $string = $days.\'th\';\n}\n\n// strip the month to three letters: \n$month = mb_strimwidth( $month, 0, 3, \'\' );\n\n$toRet = $string.\' \'.$month.\' \'.$year;\nreturn $toRet;\n\n}\nShare\nImprove this answer\nFollow\nedited 23 hours ago\nuser avatar\nPritam Pawade\n50855 silver badges1717 bronze badges\nanswered 2 days ago\nuser avatar\nDamian\n1\n New contributor\nAdd a comment\n\n-3\n\n$value = str_limit(\'This string is really really long.\', 7);\n\n// This st...\n\nShare\nImprove this answer\nFollow\nanswered Mar 4, 2018 at 20:30\nuser avatar\nPaul Caleb\n15344 silver badges1111 bronze badges\n1\nThat\'s a Laravel thing – \nJeff\n Oct 12, 2018 at 17:27\nEven that is removed from Laravel. It\'s Str::limit($s); now – \nSalam\n Apr 20 at 8:05\nAdd a comment\nYour Answer\nSign up or log in\nPost as a guest\nName\nEmail\nRequired, but never shown\n\nBy clicking “Post Your Answer”, you agree to our terms of service, privacy policy and cookie policy\n\nNot the answer you\'re looking for? Browse other questions tagged php string or ask your own question.\nThe Overflow Blog\nFeeling burned out? You’re not the only one (Ep. 440)\nSecurity needs to shift left into the software development lifecycle\nFeatured on Meta\nStaging Ground: Reviewer Motivation, Scaling, and Open Questions\nOverhauling our community\'s closure reasons and guidance\nLinked\n1\nHow can I make sure it checks if there is a minimum of 30 characters in an input?\n0\nHow do i change multiple characters str_split index to one line character str_split\n22\nLimiting the output of PHP\'s echo to 200 characters\n14\nHow to get first x chars from a string, without cutting off the last word?\n0\nLaravel: Error when trying to use Str::limit in views\n0\nlimit php varible output in script\nRelated\n7194\nWhat is the difference between String and string in C#?\n3249\nHow do I iterate over the words of a string?\n4508\nHow do I read / convert an InputStream into a String in Java?\n3240\nCase insensitive \'Contains(string)\'\n3302\nConvert bytes to a string\n2494\nHow do I get a substring of a string in Python?\n5152\nHow to replace all occurrences of a string in JavaScript\n7417\nHow to check whether a string contains a substring in JavaScript?\n4910\nReference — What does this symbol mean in PHP?\n3353\nHow do I convert a String to an int in Java?\nHot Network Questions\nCheck if process exits or doesn\'t exists\nMy creature mixes lye and sal ammoniac to cool its blood. How cold can its blood get before it stops working as blood?\nHow would an adult artificial human behave after they exit the biofabricator?\nMuggle military tactics against mind-controlling wizards\nTravelling from USA to Canada by Ship\nAre render results hardware dependent?\nWas Ukraine planning an attack in Donbas/Crimea prior to the 2022 Russian invasion of Ukraine?\n\"quae haec mihi dōna dedistī\"\nCan する substitute a previously used verb?\nWhat changes were made for the second edition of \'The Martian\'?\nWhy shouldn\'t one make changes to concentration in homebrew?\nDo androids left on their own have any hope of replicating?\nFastest 8-bit microprocessor for multiply-accumulate?\nIf p-values are random, why not decide using the test statistic instead?\nESTA for Italian spouse\nCan you just cancel a health insurance plan and buy a new one at any time?\nWhat does Jesus mean by \"hot\", \"cold\" and \"lukewarm\" in Revelation 3:16?\nWrite some text under physic-chemistry formula\nWhen did horseback riding start? Are Doosheh cave petroglyphs authentic and correctly dated?\nSafe breakout for an RV outlet\nAlternate sky colors?\nHow can I draw a \"table\" with 4 numbers around a cross/X-shape for the diamond method?\nDid ancient polytheistic religions believe theirs was the only pantheon?\nMonitoring Apply / @@@ over large lists\n Question feed\n\nSTACK OVERFLOW\nQuestions\nHelp\nPRODUCTS\nTeams\nAdvertising\nCollectives\nTalent\nCOMPANY\nAbout\nPress\nWork Here\nLegal\nPrivacy Policy\nTerms of Service\nContact Us\nCookie Settings\nCookie Policy\nSTACK EXCHANGE NETWORK\nTechnology\nCulture & recreation\nLife & arts\nScience\nProfessional\nBusiness\nAPI\nData\nBlog\nFacebook\nTwitter\nLinkedIn\nInstagram\nSite design / logo © 2022 Stack Exchange Inc; user contributions licensed under cc by-sa. rev 2022.5.9.42071\n\n ', 'https://template.hasthemes.com/resta/resta/index.htmll', 'laaaa', 'l', 'l', 'l', 'l', 'SEARCH-ENGINE-DATA625e63c8c18f3'),
(4, 'Techfore', 'This is a search engine', 'http://www.techfore.xyz', 'Search Engine', '', 'laaaa', '', '', 'SEARCH-ENGINE-DATA625e860a2f62a');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `sa_email` varchar(100) NOT NULL,
  `sa_password` varchar(32) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `sa_email`, `sa_password`, `role_id`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(2) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Motivator'),
(3, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_engine_data`
--
ALTER TABLE `search_engine_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search_engine_data`
--
ALTER TABLE `search_engine_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
