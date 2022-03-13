-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2016 at 03:31 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `chat` text NOT NULL,
  `sender_id` int(9) NOT NULL,
  `reciever_id` int(9) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat`, `sender_id`, `reciever_id`, `send_date`) VALUES
(' oga mi sir', 2, 2, '2016-01-17 07:22:43'),
(' baba', 2, 1, '2016-01-17 07:24:12'),
(' kilowa', 1, 2, '2016-01-17 07:24:19'),
(' i dey oo', 2, 1, '2016-01-17 07:24:36'),
(' henhen', 1, 2, '2016-01-17 07:24:41'),
(' you dey go school abi ', 2, 1, '2016-01-17 07:24:52'),
(' yah I suppose go', 1, 2, '2016-01-17 07:25:08'),
(' okay nah ', 2, 1, '2016-01-17 07:25:19'),
('nah you', 2, 1, '2016-01-17 07:25:28'),
(' haa baba na god oo', 1, 2, '2016-01-17 07:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `chat_group`
--

CREATE TABLE IF NOT EXISTS `chat_group` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `birthdate` varchar(12) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `user_id` int(9) NOT NULL AUTO_INCREMENT,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chat_group`
--

INSERT INTO `chat_group` (`first_name`, `last_name`, `user_name`, `password`, `birthdate`, `pic`, `user_id`, `registration_date`) VALUES
('joshua', 'baba', 'josh', 'josh', '26/06/1990', 'userspic/IMG-20151123-WA001.png', 1, '2016-01-16 15:08:15'),
('ba', 'ba', 'ba', 'ba', '26/06/1990', 'userspic/IMG_20151021_202558.jpg', 2, '2016-01-16 23:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `coment` mediumtext NOT NULL,
  `text_id` int(9) NOT NULL,
  `user_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`coment`, `text_id`, `user_id`) VALUES
(' wow this is cool', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `tittle` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `image` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`text_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`tittle`, `message`, `image`, `user_id`, `text_id`) VALUES
(' Thirty - Eight Ways to Win an', '+%0D%0Afrom+Schopenhauer%27s+%26quot%3BThe+Art+of+Controversy%26quot%3B%0D%0A...per+fas+et+nefas+%3A-%29%0D%0A%28Courtesy+of+searchlore+%7E+Back+to+the+trolls+lore+%7E+original+german+text%29%0D%0A1+Carry+your+opponent%27s+proposition+beyond+its+natural+limits%3B+exaggerate+it.%0D%0AThe+more+general+your+opponent%27s+statement+becomes%2C+the+more+objections+you+can+find+against+it.%0D%0AThe+more+restricted+and+narrow+your+own+propositions+remain%2C+the+easier+they+are+to+defend.%0D%0A2+Use+different+meanings+of+your+opponent%27s+words+to+refute+his+argument.%0D%0AExample%3A+Person+A+says%2C+%26quot%3BYou+do+not+understand+the+mysteries+of+Kant%27s+philosophy.%26quot%3B%0D%0APerson+B+replies%2C+%26quot%3BOf%2C+if+it%27s+mysteries+you%27re+talking+about%2C+I%27ll+have+nothing+to+do+with+them.%26quot%3B%0D%0A3+Ignore+your+opponent%27s+proposition%2C+which+was+intended+to+refer+to+some+particular+thing.%0D%0ARather%2C+understand+it+in+some+quite+different+sense%2C+and+then+refute+it.%0D%0AAttack+something+different+than+what+was+asserted.%0D%0A4+Hide+your+conclusion+from+your+opponent+until+the+end.%0D%0AMingle+your+premises+here+and+there+in+your+talk.%0D%0AGet+your+opponent+to+agree+to+them+in+no+definite+order.%0D%0ABy+this+circuitous+route+you+conceal+your+goal+until+you+have+reached+all+the+admissions+necessary+to%0D%0Areach+your+goal.%0D%0A5+Use+your+opponent%27s+beliefs+against+him.%0D%0AIf+your+opponent+refuses+to+accept+your+premises%2C+use+his+own+premises+to+your+advantage.%0D%0AExample%2C+if+the+opponent+is+a+member+of+an+organization+or+a+religious+sect+to+which+you+do+not+belong%2C%0D%0Ayou+may+employ+the+declared+opinions+of+this+group+against+the+opponent.%0D%0A6+Confuse+the+issue+by+changing+your+opponent%27s+words+or+what+he+or+she+seeks+to+prove.%0D%0AExample%3A+Call+something+by+a+different+name%3A+%26quot%3Bgood+repute%26quot%3B+instead+of+%26quot%3Bhonor%2C%26quot%3B+%26quot%3Bvirtue%26quot%3B+instead+of%0D%0A%26quot%3Bvirginity%2C%26quot%3B+%26quot%3Bred-blooded%26quot%3B+instead+of+%26quot%3Bvertebrates%26quot%3B.%0D%0A7+State+your+proposition+and+show+the+truth+of+it+by+asking+the+opponent+many+questions.%0D%0ABy+asking+many+wide-reaching+questions+at+once%2C+you+may+hide+what+you+want+to+get+admitted.%0D%0AThen+you+quickly+propound+the+argument+resulting+from+the+proponent%27s+admissions.%0D%0A8+Make+your+opponent+angry.%0D%0AAn+angry+person+is+less+capable+of+using+judgment+or+perceiving+where+his+or+her+advantage+lies.%0D%0A9+Use+your+opponent%27s+answers+to+your+question+to+reach+different+or+even+opposite+conclusions.%0D%0Aschopeng.%26lt%3Bbr%26gt%3Bhtm%3A+Thirty+-+Eight+Ways+to+Win+an+Argument%2C+by+Schopenhauer+Page+1+of+5%0D%0Afile%3A%2F%2FE%3A%5CThirty%2520Eight%2520Ways%2520to%2520Win%2520an%2520Argument%2C%2520by%2520Schopenh...+7%2F1%2F05%0D%0A10+If+you+opponent+answers+all+your+questions+negatively+and+refuses+to+grant+you+any+points%2C+ask+him%0D%0Aor+her+to+concede+the+opposite+of+your+premises.%0D%0AThis+may+confuse+the+opponent+as+to+which+point+you+actually+seek+him+to+concede.%0D%0A11+If+the+opponent+grants+you+the+truth+of+some+of+your+premises%2C+refrain+from+asking+him+or+her+to%0D%0Aagree+to+your+conclusion.%0D%0ALater%2C+introduce+your+conclusions+as+a+settled+and+admitted+fact.%0D%0AYour+opponent+and+others+in+attendance+may+come+to+believe+that+your+conclusion+was+admitted.%0D%0A12+If+the+argument+turns+upon+general+ideas+with+no+particular+names%2C+you+must+use+language+or+a%0D%0Ametaphor+that+is+favorable+to+your+proposition.%0D%0AExample%3A+What+an+impartial+person+would+call+%26quot%3Bpublic+worship%26quot%3B+or+a+%26quot%3Bsystem+of+religion%26quot%3B+is+described%0D%0Aby+an+adherent+as+%26quot%3Bpiety%26quot%3B+or+%26quot%3Bgodliness%26quot%3B+and+by+an+opponent+as+%26quot%3Bbigotry%26quot%3B+or+%26quot%3Bsuperstition.%26quot%3B%0D%0AIn+other+words%2C+inset+what+you+intend+to+prove+into+the+definition+of+the+idea.%0D%0A13+To+make+your+opponent+accept+a+proposition+%2C+you+must+give+him+an+opposite%2C+counter-proposition%0D%0Aas+well.%0D%0AIf+the+contrast+is+glaring%2C+the+opponent+will+accept+your+proposition+to+avoid+being+paradoxical.%0D%0AExample%3A+If+you+want+him+to+admit+that+a+boy+must+to+everything+that+his+father+tells+him+to+do%2C+ask+him%2C%0D%0A%26quot%3Bwhether+in+all+things+we+must+obey+or+disobey+our+parents.%26quot%3B%0D%0AOr+%2C+if+a+thing+is+said+to+occur+%26quot%3Boften%26quot%3B+you+are+to+understand+few+or+many+times%2C+the+opponent+will+say%0D%0A%26quot%3Bmany.%26quot%3B%0D%0AIt+is+as+though+you+were+to+put+gray+next+to+black+and+call+it+white%3B+or+gray+next+to+white+and+call+it+black.%0D%0A14+Try+to+bluff+your+opponent.%0D%0AIf+he+or+she+has+answered+several+of+your+question+without+the+answers+turning+out+in+favor+of+your%0D%0Aconclusion%2C+advance+your+conclusion+triumphantly%2C+even+if+it+does+not+follow.%0D%0AIf+your+opponent+is+shy+or+stupid%2C+and+you+yourself+possess+a+great+deal+of+impudence+and+a+good+voice%2C%0D%0Athe+technique+may+succeed.%0D%0A15+If+you+wish+to+advance+a+proposition+that+is+difficult+to+prove%2C+put+it+aside+for+the+moment.%0D%0AInstead%2C+submit+for+your+opponent%27s+acceptance+or+rejection+some+true+proposition%2C+as+though+you+wished%0D%0Ato+draw+your+proof+from+it.%0D%0AShould+the+opponent+reject+it+because+he+suspects+a+trick%2C+you+can+obtain+your+triumph+by+showing+how%0D%0Aabsurd+the+opponent+is+to+reject+an+obviously+true+proposition.%0D%0AShould+the+opponent+accept+it%2C+you+now+have+reason+on+your+side+for+the+moment.%0D%0AYou+can+either+try+to+prove+your+original+proposition%2C+as+in+%2314%2C+maintain+that+your+original+proposition%0D%0Ais+proved+by+what+your+opponent+accepted.%0D%0AFor+this+an+extreme+degree+of+impudence+is+required%2C+but+experience+shows+cases+of+it+succeeding.%0D%0A16+When+your+opponent+puts+forth+a+proposition%2C+find+it+inconsistent+with+his+or+her+other+statements%2C%0D%0Abeliefs%2C+actions+or+lack+of+action.%0D%0AExample%3A+Should+your+opponent+defend+suicide%2C+you+may+at+once+exclaim%2C+%26quot%3BWhy+don%27t+you+hang%0D%0Ayourself%3F%26quot%3B%0D%0AShould+the+opponent+maintain+that+his+city+is+an+unpleasant+place+to+live%2C+you+may+say%2C+%26quot%3BWhy+don%27t+you%0D%0Aleave+on+the+first+plane%3F%26quot%3B%0D%0Aschopeng.%26lt%3Bbr%26gt%3Bhtm%3A+Thirty+-+Eight+Ways+to+Win+an+Argument%2C+by+Schopenhauer+Page+2+of+5%0D%0Afile%3A%2F%2FE%3A%5CThirty%2520Eight%2520Ways%2520to%2520Win%2520an%2520Argument%2C%2520by%2520Schopenh...+7%2F1%2F05%0D%0A17+If+your+opponent+presses+you+with+a+counter-proof%2C+you+will+often+be+able+to+save+yourself+by%0D%0Aadvancing+some+subtle+distinction.%0D%0ATry+to+find+a+second+meaning+or+an+ambiguous+sense+for+your+opponent%27s+idea.%0D%0A18+If+your+opponent+has+taken+up+a+line+of+argument+that+will+end+in+your+defeat%2C+you+must+not+allow%0D%0Ahim+to+carry+it+to+its+conclusion.%0D%0AInterrupt+the+dispute%2C+break+it+off+altogether%2C+or+lead+the+opponent+to+a+different+subject.%0D%0A19+Should+your+opponent+expressly+challenge+you+to+produce+any+objection+to+some+definite+point+in%0D%0Ahis+argument%2C+and+you+have+nothing+to+say%2C+try+to+make+the+argument+less+specific.%0D%0AExample%3A+If+you+are+asked+why+a+particular+hypothesis+cannot+be+accepted%2C+you+may+speak+of+the%0D%0Afallibility+of+human+knowledge%2C+and+give+various+illustrations+of+it.%0D%0A20+If+your+opponent+has+admitted+to+all+or+most+of+your+premises%2C+do+not+ask+him+or+her+directly+to%0D%0Aaccept+your+conclusion.%0D%0ARather%2C+draw+the+conclusion+yourself+as+if+it+too+had+been+admitted.%0D%0A21+When+your+opponent+uses+an+argument+that+is+superficial+and+you+see+the+falsehood%2C+you+can+refute%0D%0Ait+by+setting+forth+its+superficial+character.%0D%0ABut+it+is+better+to+meet+the+opponent+with+acounter-argument+that+is+just+as+superficial%2C+and+so+dispose+of%0D%0Ahim.%0D%0AFor+it+is+with+victory+that+you+are+concerned%2C+not+with+truth.%0D%0AExample%3A+If+the+opponent+appeals+to+prejudice%2C+emotion+or+attacks+you+personally%2C+return+the+attack+in+the%0D%0Asame+manner.%0D%0A22+If+your+opponent+asks+you+to+admit+something+from+which+the+point+in+dispute+will+immediately%0D%0Afollow%2C+you+must+refuse+to+do+so%2C+declaring+that+it+begs+the+question.%0D%0A23+Contradiction+and+contention+irritate+a+person+into+exaggerating+their+statements.%0D%0ABy+contradicting+your+opponent+you+may+drive+him+into+extending+the+statement+beyond+its+natural+limit.%0D%0AWhen+you+then+contradict+the+exaggerated+form+of+it%2C+you+look+as+though+you+had+refuted+the+original%0D%0Astatement.%0D%0AContrarily%2C+if+your+opponent+tries+to+extend+your+own+statement+further+than+your+intended%2C+redefine+your%0D%0Astatement%27s+limits+and+say%2C+%26quot%3BThat+is+what+I+said%2C+no+more.%26quot%3B%0D%0A24+State+a+false+syllogism.%0D%0AYour+opponent+makes+a+proposition%2C+and+by+false+inference+and+distortion+of+his+ideas+you+force+from+the%0D%0Aproposition+other+propositions+that+are+not+intended+and+that+appear+absurd.%0D%0AIt+then+appears+that+opponent%27s+proposition+gave+rise+to+these+inconsistencies%2C+and+so+appears+to+be%0D%0Aindirectly+refuted.%0D%0A25+If+your+opponent+is+making+a+generalization%2C+find+an+instance+to+the+contrary.%0D%0AOnly+one+valid+contradiction+is+needed+to+overthrow+the+opponent%27s+proposition.%0D%0AExample%3A+%26quot%3BAll+ruminants+are+horned%2C%26quot%3B+is+a+generalization+that+may+be+upset+by+the+single+instance+of+the%0D%0Acamel.%0D%0Aschopeng.%26lt%3Bbr%26gt%3Bhtm%3A+Thirty+-+Eight+Ways+to+Win+an+Argument%2C+by+Schopenhauer+Page+3+of+5%0D%0Afile%3A%2F%2FE%3A%5CThirty%2520Eight%2520Ways%2520to%2520Win%2520an%2520Argument%2C%2520by%2520Schopenh...+7%2F1%2F05%0D%0A26+A+brilliant+move+is+to+turn+the+tables+and+use+your+opponent%27s+arguments+against+himself.%0D%0AExample%3A+Your+opponent+declares%3A+%26quot%3Bso+and+so+is+a+child%2C+you+must+make+an+allowance+for+him.%26quot%3B%0D%0AYou+retort%2C+%26quot%3BJust+because+he+is+a+child%2C+I+must+correct+him%3B+otherwise+he+will+persist+in+his+bad+habits.%26quot%3B%0D%0A27+Should+your+opponent+suprise+you+by+becoming+particularly+angry+at+an+argument%2C+you+must+urge+it%0D%0Awith+all+the+more+zeal.%0D%0ANo+only+will+this+make+your+opponent+angry%2C+but+it+will+appear+that+you+have+put+your+finger+on+the%0D%0Aweak+side+of+his+case%2C+and+your+opponent+is+more+open+to+attack+on+this+point+than+you+expected.%0D%0A28+When+the+audience+consists+of+individuals+%28or+a+person%29+who+is+not+an+expert+on+a+subject%2C+you+make%0D%0Aan+invalid+objection+to+your+opponent+who+seems+to+be+defeated+in+the+eyes+of+the+audience.%0D%0AThis+strategy+is+particularly+effective+if+your+objection+makes+your+opponent+look+ridiculous+or+if+the%0D%0Aaudience+laughs.%0D%0AIf+your+opponent+must+make+a+long%2C+winded+and+complicated+explanation+to+correct+you%2C+the+audience%0D%0Awill+not+be+disposed+to+listen+to+him.%0D%0A29+If+you+find+that+you+are+being+beaten%2C+you+can+create+a+diversion--that+is%2C+you+can+suddenly+begin+to%0D%0Atalk+of+something+else%2C+as+though+it+had+a+bearing+on+the+matter+in+dispute.%0D%0AThis+may+be+done+without+presumption+if+the+diversion+has+some+general+bearing+on+the+matter.%0D%0A30+Make+an+appeal+to+authority+rather+than+reason.%0D%0AIf+your+opponent+respects+an+authority+or+an+expert%2C+quote+that+authority+to+further+your+case.%0D%0AIf+needed%2C+quote+what+the+authority+said+in+some+other+sense+or+circumstance.%0D%0AAuthorities+that+your+opponent+fails+to+understand+are+those+which+he+generally+admires+the+most.%0D%0AYou+may+also%2C+should+it+be+necessary%2C+not+only+twist+your+authorities%2C+but+actually+falsify+them%2C+or+quote%0D%0Asomething+that+you+have+entirely+invented+yourself.%0D%0A31+If+you+know+that+you+have+no+reply+to+the+arguments+that+your+opponent+advances%2C+you+by+a+find%0D%0Astroke+of+irony+declare+yourself+to+be+an+incompetent+judge.%0D%0AExample%3A+%26quot%3BWhat+you+say+passes+my+poor+powers+of+comprehension%3B+it+may+well+be+all+very+true%2C+but+I%0D%0Acan%27t+understand+it%2C+and+I+refrain+from+any+expression+of+opinion+on+it.%26quot%3B%0D%0AIn+this+way+you+insinuate+to+the+audience%2C+with+whom+you+are+in+good+repute%2C+that+what+your+opponent%0D%0Asays+is+nonsense.%0D%0AThis+technique+may+be+used+only+when+you+are+quite+sure+that+the+audience+thinks+much+better+of+you%0D%0Athan+your+opponent.%0D%0A32+A+quick+way+of+getting+rid+of+an+opponent%27s+assertion%2C+or+of+throwing+suspicion+on+it%2C+is+by+putting+it%0D%0Ainto+some+odious+category.%0D%0AExample%3A+You+can+say%2C+%26quot%3BThat+is+fascism%26quot%3B+or+%26quot%3BAtheism%26quot%3B+or+%26quot%3BSuperstition.%26quot%3B%0D%0AIn+making+an+objection+of+this+kind+you+take+for+granted%0D%0A1%29That+the+assertion+or+question+is+identical+with%2C+or+at+least+contained+in%2C+the+category+cited%3B%0D%0Aand%0D%0A2%29The+system+referred+to+has+been+entirely+refuted+by+the+current+audience.%0D%0A33+You+admit+your+opponent%27s+premises+but+deny+the+conclusion.%0D%0AExample%3A+%26quot%3BThat%27s+all+very+well+in+theory%2C+but+it+won%27t+work+in+practice.%26quot%3B%0D%0Aschopeng.%26lt%3Bbr%26gt%3Bhtm%3A+Thirty+-+Eight+Ways+to+Win+an+Argument%2C+by+Schopenhauer+Page+4+of+5%0D%0Afile%3A%2F%2FE%3A%5CThirty%2520Eight%2520Ways%2520to%2520Win%2520an%2520Argument%2C%2520by%2520Schopenh...+7%2F1%2F05%0D%0A34+When+you+state+a+question+or+an+argument%2C+and+your+opponent+gives+you+no+direct+answer%2C+or+evades%0D%0Ait+with+a+counter+question%2C+or+tries+to+change+the+subject%2C+it+is+sure+sign+you+have+touched+a+weak+spot%2C%0D%0Asometimes+without+intending+to+do+so.%0D%0AYou+have%2C+as+it+were%2C+reduced+your+opponent+to+silence.%0D%0AYou+must%2C+therefore%2C+urge+the+point+all+the+more%2C+and+not+let+your+opponent+evade+it%2C+even+when+you+do%0D%0Anot+know+where+the+weakness+that+you+have+hit+upon+really+lies.%0D%0A35+Instead+of+working+on+an+opponent%27s+intellect+or+the+rigor+of+his+arguments%2C+work+on+his+motive.%0D%0AIf+you+success+in+making+your+opponent%27s+opinion%2C+should+it+prove+true%2C+seem+distinctly+prejudicial+to+his%0D%0Aown+interest%2C+he+will+drop+it+immediately.%0D%0AExample%3A+A+clergyman+is+defending+some+philosophical+dogma.%0D%0AYou+show+him+that+his+proposition+contradicts+a+fundamental+doctrine+of+his+church.%0D%0AHe+will+abandon+the+argument.%0D%0A36+You+may+also+puzzle+and+bewilder+your+opponent+by+mere+bombast.%0D%0AIf+your+opponent+is+weak+or+does+not+wish+to+appear+as+if+he+has+no+idea+what+your+are+talking+about%2C+you%0D%0Acan+easily+impose+upon+him+some+argument+that+sounds+very+deep+or+learned%2C+or+that+sounds%0D%0Aindisputable.%0D%0A37+Should+your+opponent+be+in+the+right+but%2C+luckily+for+you%2C+choose+a+faulty+proof%2C+you+can+easily%0D%0Arefute+it+and+then+claim+that+you+have+refuted+the+whole+position.%0D%0AThis+is+the+way+in+which+bad+advocates+lose+good+cases.%0D%0AIf+no+accurate+proof+occurs+to+your+opponent%2C+you+have+won+the+day.%0D%0A38+Become+personal%2C+insulting+and+rude+as+soon+as+you+perceive+that+your+opponent+has+the+upper+hand.%0D%0AIn+becoming+personal+you+leave+the+subject+altogether%2C+and+turn+your+attack+on+the+person+by+remarks+of%0D%0Aan+offensive+and+spiteful+character.%0D%0AThis+is+a+very+popular+technique%2C+because+it+takes+so+little+skill+to+put+it+into+effect.%0D%0A%28c%29+1952-2032%3A+%5Bfravia%2B%5D%2C+all+rights+reserved%0D%0Aschopeng.%26lt%3Bbr%26gt%3Bhtm%3A+Thirty+-+Eight+Ways+to+Win+an+Argument%2C+by+Schopenhauer+Page+5+of+5%0D%0Afile%3A%2F%2FE%3A%5CThirty%2520Eight%2520Ways%2520to%2520Win%2520an%2520Argument%2C%2520by%2520Schopenh...+7%2F1%2F05', 'frmpix/AM-060-4.JPG', 1, 2);
