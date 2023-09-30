-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 09:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(15) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `otp_generated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `admin_password`, `otp`, `otp_generated_at`) VALUES
(1, 'jinmeh485@gmail.com', 'testPw21', '667121', '2023-08-09 17:22:40.000000');

-- --------------------------------------------------------

--
-- Table structure for table `api_blogs`
--

CREATE TABLE `api_blogs` (
  `userId` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `api_blogs`
--

INSERT INTO `api_blogs` (`userId`, `id`, `title`, `body`) VALUES
(1, 1, 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit Update', 'quia et suscipitsuscipit recusandae consequuntur expedita et cumreprehenderit molestiae ut ut quas totamnostrum rerum est autem sunt rem eveniet architecto'),
(1, 2, 'THis is some content', 'est rerum tempore vitaesequi sint nihil reprehenderit dolor beatae ea dolores nequefugiat blanditiis voluptate porro vel nihil molestiae ut reiciendisqui aperiam non debitis possimus qui neque nisi nulla'),
(1, 3, 'ea molestias quasi exercitationem repellat qui ipsa sit aut', 'et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut'),
(1, 4, 'eum et est occaecati', 'ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit'),
(1, 5, 'nesciunt quas odio', 'repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque'),
(1, 6, 'dolorem eum magni eos aperiam quia', 'ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae'),
(1, 7, 'magnam facilis autem', 'dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas'),
(1, 8, 'dolorem dolore est ipsam', 'dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae'),
(1, 9, 'nesciunt iure omnis dolorem tempora et accusantium', 'consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas'),
(1, 10, 'optio molestias id quia eum', 'quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error'),
(2, 11, 'et ea vero quia laudantium autem', 'delectus reiciendis molestiae occaecati non minima eveniet qui voluptatibus\naccusamus in eum beatae sit\nvel qui neque voluptates ut commodi qui incidunt\nut animi commodi'),
(2, 12, 'in quibusdam tempore odit est dolorem', 'itaque id aut magnam\npraesentium quia et ea odit et ea voluptas et\nsapiente quia nihil amet occaecati quia id voluptatem\nincidunt ea est distinctio odio'),
(2, 13, 'dolorum ut in voluptas mollitia et saepe quo animi', 'aut dicta possimus sint mollitia voluptas commodi quo doloremque\niste corrupti reiciendis voluptatem eius rerum\nsit cumque quod eligendi laborum minima\nperferendis recusandae assumenda consectetur porro architecto ipsum ipsam'),
(2, 14, 'voluptatem eligendi optio', 'fuga et accusamus dolorum perferendis illo voluptas\nnon doloremque neque facere\nad qui dolorum molestiae beatae\nsed aut voluptas totam sit illum'),
(2, 15, 'eveniet quod temporibus', 'reprehenderit quos placeat\nvelit minima officia dolores impedit repudiandae molestiae nam\nvoluptas recusandae quis delectus\nofficiis harum fugiat vitae'),
(2, 16, 'sint suscipit perspiciatis velit dolorum rerum ipsa laboriosam odio', 'suscipit nam nisi quo aperiam aut\nasperiores eos fugit maiores voluptatibus quia\nvoluptatem quis ullam qui in alias quia est\nconsequatur magni mollitia accusamus ea nisi voluptate dicta'),
(2, 17, 'fugit voluptas sed molestias voluptatem provident', 'eos voluptas et aut odit natus earum\naspernatur fuga molestiae ullam\ndeserunt ratione qui eos\nqui nihil ratione nemo velit ut aut id quo'),
(2, 18, 'voluptate et itaque vero tempora molestiae', 'eveniet quo quis\nlaborum totam consequatur non dolor\nut et est repudiandae\nest voluptatem vel debitis et magnam'),
(2, 19, 'adipisci placeat illum aut reiciendis qui', 'illum quis cupiditate provident sit magnam\nea sed aut omnis\nveniam maiores ullam consequatur atque\nadipisci quo iste expedita sit quos voluptas'),
(2, 20, 'doloribus ad provident suscipit at', 'qui consequuntur ducimus possimus quisquam amet similique\nsuscipit porro ipsam amet\neos veritatis officiis exercitationem vel fugit aut necessitatibus totam\nomnis rerum consequatur expedita quidem cumque explicabo'),
(3, 21, 'asperiores ea ipsam voluptatibus modi minima quia sint', 'repellat aliquid praesentium dolorem quo\nsed totam minus non itaque\nnihil labore molestiae sunt dolor eveniet hic recusandae veniam\ntempora et tenetur expedita sunt'),
(3, 22, 'dolor sint quo a velit explicabo quia nam', 'eos qui et ipsum ipsam suscipit aut\nsed omnis non odio\nexpedita earum mollitia molestiae aut atque rem suscipit\nnam impedit esse'),
(3, 23, 'maxime id vitae nihil numquam', 'veritatis unde neque eligendi\nquae quod architecto quo neque vitae\nest illo sit tempora doloremque fugit quod\net et vel beatae sequi ullam sed tenetur perspiciatis'),
(3, 24, 'autem hic labore sunt dolores incidunt', 'enim et ex nulla\nomnis voluptas quia qui\nvoluptatem consequatur numquam aliquam sunt\ntotam recusandae id dignissimos aut sed asperiores deserunt'),
(3, 25, 'rem alias distinctio quo quis', 'ullam consequatur ut\nomnis quis sit vel consequuntur\nipsa eligendi ipsum molestiae et omnis error nostrum\nmolestiae illo tempore quia et distinctio'),
(3, 26, 'est et quae odit qui non', 'similique esse doloribus nihil accusamus\nomnis dolorem fuga consequuntur reprehenderit fugit recusandae temporibus\nperspiciatis cum ut laudantium\nomnis aut molestiae vel vero'),
(3, 27, 'quasi id et eos tenetur aut quo autem', 'eum sed dolores ipsam sint possimus debitis occaecati\ndebitis qui qui et\nut placeat enim earum aut odit facilis\nconsequatur suscipit necessitatibus rerum sed inventore temporibus consequatur'),
(3, 28, 'delectus ullam et corporis nulla voluptas sequi', 'non et quaerat ex quae ad maiores\nmaiores recusandae totam aut blanditiis mollitia quas illo\nut voluptatibus voluptatem\nsimilique nostrum eum'),
(3, 29, 'iusto eius quod necessitatibus culpa ea', 'odit magnam ut saepe sed non qui\ntempora atque nihil\naccusamus illum doloribus illo dolor\neligendi repudiandae odit magni similique sed cum maiores'),
(3, 30, 'a quo magni similique perferendis', 'alias dolor cumque\nimpedit blanditiis non eveniet odio maxime\nblanditiis amet eius quis tempora quia autem rem\na provident perspiciatis quia'),
(4, 31, 'ullam ut quidem id aut vel consequuntur', 'debitis eius sed quibusdam non quis consectetur vitae\nimpedit ut qui consequatur sed aut in\nquidem sit nostrum et maiores adipisci atque\nquaerat voluptatem adipisci repudiandae'),
(4, 32, 'doloremque illum aliquid sunt', 'deserunt eos nobis asperiores et hic\nest debitis repellat molestiae optio\nnihil ratione ut eos beatae quibusdam distinctio maiores\nearum voluptates et aut adipisci ea maiores voluptas maxime'),
(4, 33, 'qui explicabo molestiae dolorem', 'rerum ut et numquam laborum odit est sit\nid qui sint in\nquasi tenetur tempore aperiam et quaerat qui in\nrerum officiis sequi cumque quod'),
(4, 34, 'magnam ut rerum iure', 'ea velit perferendis earum ut voluptatem voluptate itaque iusto\ntotam pariatur in\nnemo voluptatem voluptatem autem magni tempora minima in\nest distinctio qui assumenda accusamus dignissimos officia nesciunt nobis'),
(4, 35, 'id nihil consequatur molestias animi provident', 'nisi error delectus possimus ut eligendi vitae\nplaceat eos harum cupiditate facilis reprehenderit voluptatem beatae\nmodi ducimus quo illum voluptas eligendi\net nobis quia fugit'),
(4, 36, 'fuga nam accusamus voluptas reiciendis itaque', 'ad mollitia et omnis minus architecto odit\nvoluptas doloremque maxime aut non ipsa qui alias veniam\nblanditiis culpa aut quia nihil cumque facere et occaecati\nqui aspernatur quia eaque ut aperiam inventore'),
(4, 37, 'provident vel ut sit ratione est', 'debitis et eaque non officia sed nesciunt pariatur vel\nvoluptatem iste vero et ea\nnumquam aut expedita ipsum nulla in\nvoluptates omnis consequatur aut enim officiis in quam qui'),
(4, 38, 'explicabo et eos deleniti nostrum ab id repellendus', 'animi esse sit aut sit nesciunt assumenda eum voluptas\nquia voluptatibus provident quia necessitatibus ea\nrerum repudiandae quia voluptatem delectus fugit aut id quia\nratione optio eos iusto veniam iure'),
(4, 39, 'eos dolorem iste accusantium est eaque quam', 'corporis rerum ducimus vel eum accusantium\nmaxime aspernatur a porro possimus iste omnis\nest in deleniti asperiores fuga aut\nvoluptas sapiente vel dolore minus voluptatem incidunt ex'),
(4, 40, 'enim quo cumque', 'ut voluptatum aliquid illo tenetur nemo sequi quo facilis\nipsum rem optio mollitia quas\nvoluptatem eum voluptas qui\nunde omnis voluptatem iure quasi maxime voluptas nam'),
(5, 41, 'non est facere', 'molestias id nostrum\nexcepturi molestiae dolore omnis repellendus quaerat saepe\nconsectetur iste quaerat tenetur asperiores accusamus ex ut\nnam quidem est ducimus sunt debitis saepe'),
(5, 42, 'commodi ullam sint et excepturi error explicabo praesentium voluptas', 'odio fugit voluptatum ducimus earum autem est incidunt voluptatem\nodit reiciendis aliquam sunt sequi nulla dolorem\nnon facere repellendus voluptates quia\nratione harum vitae ut'),
(5, 43, 'eligendi iste nostrum consequuntur adipisci praesentium sit beatae perferendis', 'similique fugit est\nillum et dolorum harum et voluptate eaque quidem\nexercitationem quos nam commodi possimus cum odio nihil nulla\ndolorum exercitationem magnam ex et a et distinctio debitis'),
(5, 44, 'optio dolor molestias sit', 'temporibus est consectetur dolore\net libero debitis vel velit laboriosam quia\nipsum quibusdam qui itaque fuga rem aut\nea et iure quam sed maxime ut distinctio quae'),
(5, 45, 'ut numquam possimus omnis eius suscipit laudantium iure', 'est natus reiciendis nihil possimus aut provident\nex et dolor\nrepellat pariatur est\nnobis rerum repellendus dolorem autem'),
(5, 46, 'aut quo modi neque nostrum ducimus', 'voluptatem quisquam iste\nvoluptatibus natus officiis facilis dolorem\nquis quas ipsam\nvel et voluptatum in aliquid'),
(5, 47, 'quibusdam cumque rem aut deserunt', 'voluptatem assumenda ut qui ut cupiditate aut impedit veniam\noccaecati nemo illum voluptatem laudantium\nmolestiae beatae rerum ea iure soluta nostrum\neligendi et voluptate'),
(5, 48, 'ut voluptatem illum ea doloribus itaque eos', 'voluptates quo voluptatem facilis iure occaecati\nvel assumenda rerum officia et\nillum perspiciatis ab deleniti\nlaudantium repellat ad ut et autem reprehenderit'),
(5, 49, 'laborum non sunt aut ut assumenda perspiciatis voluptas', 'inventore ab sint\nnatus fugit id nulla sequi architecto nihil quaerat\neos tenetur in in eum veritatis non\nquibusdam officiis aspernatur cumque aut commodi aut'),
(5, 50, 'repellendus qui recusandae incidunt voluptates tenetur qui omnis exercitationem', 'error suscipit maxime adipisci consequuntur recusandae\nvoluptas eligendi et est et voluptates\nquia distinctio ab amet quaerat molestiae et vitae\nadipisci impedit sequi nesciunt quis consectetur'),
(6, 51, 'soluta aliquam aperiam consequatur illo quis voluptas', 'sunt dolores aut doloribus\ndolore doloribus voluptates tempora et\ndoloremque et quo\ncum asperiores sit consectetur dolorem'),
(6, 52, 'qui enim et consequuntur quia animi quis voluptate quibusdam', 'iusto est quibusdam fuga quas quaerat molestias\na enim ut sit accusamus enim\ntemporibus iusto accusantium provident architecto\nsoluta esse reprehenderit qui laborum'),
(6, 53, 'ut quo aut ducimus alias', 'minima harum praesentium eum rerum illo dolore\nquasi exercitationem rerum nam\nporro quis neque quo\nconsequatur minus dolor quidem veritatis sunt non explicabo similique'),
(6, 54, 'sit asperiores ipsam eveniet odio non quia', 'totam corporis dignissimos\nvitae dolorem ut occaecati accusamus\nex velit deserunt\net exercitationem vero incidunt corrupti mollitia'),
(6, 55, 'sit vel voluptatem et non libero', 'debitis excepturi ea perferendis harum libero optio\neos accusamus cum fuga ut sapiente repudiandae\net ut incidunt omnis molestiae\nnihil ut eum odit'),
(6, 56, 'qui et at rerum necessitatibus', 'aut est omnis dolores\nneque rerum quod ea rerum velit pariatur beatae excepturi\net provident voluptas corrupti\ncorporis harum reprehenderit dolores eligendi'),
(6, 57, 'sed ab est est', 'at pariatur consequuntur earum quidem\nquo est laudantium soluta voluptatem\nqui ullam et est\net cum voluptas voluptatum repellat est'),
(6, 58, 'voluptatum itaque dolores nisi et quasi', 'veniam voluptatum quae adipisci id\net id quia eos ad et dolorem\naliquam quo nisi sunt eos impedit error\nad similique veniam'),
(6, 59, 'qui commodi dolor at maiores et quis id accusantium', 'perspiciatis et quam ea autem temporibus non voluptatibus qui\nbeatae a earum officia nesciunt dolores suscipit voluptas et\nanimi doloribus cum rerum quas et magni\net hic ut ut commodi expedita sunt'),
(6, 60, 'consequatur placeat omnis quisquam quia reprehenderit fugit veritatis facere', 'asperiores sunt ab assumenda cumque modi velit\nqui esse omnis\nvoluptate et fuga perferendis voluptas\nillo ratione amet aut et omnis'),
(7, 61, 'voluptatem doloribus consectetur est ut ducimus', 'ab nemo optio odio\ndelectus tenetur corporis similique nobis repellendus rerum omnis facilis\nvero blanditiis debitis in nesciunt doloribus dicta dolores\nmagnam minus velit'),
(7, 62, 'beatae enim quia vel', 'enim aspernatur illo distinctio quae praesentium\nbeatae alias amet delectus qui voluptate distinctio\nodit sint accusantium autem omnis\nquo molestiae omnis ea eveniet optio'),
(7, 63, 'voluptas blanditiis repellendus animi ducimus error sapiente et suscipit', 'enim adipisci aspernatur nemo\nnumquam omnis facere dolorem dolor ex quis temporibus incidunt\nab delectus culpa quo reprehenderit blanditiis asperiores\naccusantium ut quam in voluptatibus voluptas ipsam dicta'),
(7, 64, 'et fugit quas eum in in aperiam quod', 'id velit blanditiis\neum ea voluptatem\nmolestiae sint occaecati est eos perspiciatis\nincidunt a error provident eaque aut aut qui'),
(7, 65, 'consequatur id enim sunt et et', 'voluptatibus ex esse\nsint explicabo est aliquid cumque adipisci fuga repellat labore\nmolestiae corrupti ex saepe at asperiores et perferendis\nnatus id esse incidunt pariatur'),
(7, 66, 'repudiandae ea animi iusto', 'officia veritatis tenetur vero qui itaque\nsint non ratione\nsed et ut asperiores iusto eos molestiae nostrum\nveritatis quibusdam et nemo iusto saepe'),
(7, 67, 'aliquid eos sed fuga est maxime repellendus', 'reprehenderit id nostrum\nvoluptas doloremque pariatur sint et accusantium quia quod aspernatur\net fugiat amet\nnon sapiente et consequatur necessitatibus molestiae'),
(7, 68, 'odio quis facere architecto reiciendis optio', 'magnam molestiae perferendis quisquam\nqui cum reiciendis\nquaerat animi amet hic inventore\nea quia deleniti quidem saepe porro velit'),
(7, 69, 'fugiat quod pariatur odit minima', 'officiis error culpa consequatur modi asperiores et\ndolorum assumenda voluptas et vel qui aut vel rerum\nvoluptatum quisquam perspiciatis quia rerum consequatur totam quas\nsequi commodi repudiandae asperiores et saepe a'),
(7, 70, 'voluptatem laborum magni', 'sunt repellendus quae\nest asperiores aut deleniti esse accusamus repellendus quia aut\nquia dolorem unde\neum tempora esse dolore'),
(8, 71, 'et iusto veniam et illum aut fuga', 'occaecati a doloribus\niste saepe consectetur placeat eum voluptate dolorem et\nqui quo quia voluptas\nrerum ut id enim velit est perferendis'),
(8, 72, 'sint hic doloribus consequatur eos non id', 'quam occaecati qui deleniti consectetur\nconsequatur aut facere quas exercitationem aliquam hic voluptas\nneque id sunt ut aut accusamus\nsunt consectetur expedita inventore velit'),
(8, 73, 'consequuntur deleniti eos quia temporibus ab aliquid at', 'voluptatem cumque tenetur consequatur expedita ipsum nemo quia explicabo\naut eum minima consequatur\ntempore cumque quae est et\net in consequuntur voluptatem voluptates aut'),
(8, 74, 'enim unde ratione doloribus quas enim ut sit sapiente', 'odit qui et et necessitatibus sint veniam\nmollitia amet doloremque molestiae commodi similique magnam et quam\nblanditiis est itaque\nquo et tenetur ratione occaecati molestiae tempora'),
(8, 75, 'dignissimos eum dolor ut enim et delectus in', 'commodi non non omnis et voluptas sit\nautem aut nobis magnam et sapiente voluptatem\net laborum repellat qui delectus facilis temporibus\nrerum amet et nemo voluptate expedita adipisci error dolorem'),
(8, 76, 'doloremque officiis ad et non perferendis', 'ut animi facere\ntotam iusto tempore\nmolestiae eum aut et dolorem aperiam\nquaerat recusandae totam odio'),
(8, 77, 'necessitatibus quasi exercitationem odio', 'modi ut in nulla repudiandae dolorum nostrum eos\naut consequatur omnis\nut incidunt est omnis iste et quam\nvoluptates sapiente aliquam asperiores nobis amet corrupti repudiandae provident'),
(8, 78, 'quam voluptatibus rerum veritatis', 'nobis facilis odit tempore cupiditate quia\nassumenda doloribus rerum qui ea\nillum et qui totam\naut veniam repellendus'),
(8, 79, 'pariatur consequatur quia magnam autem omnis non amet', 'libero accusantium et et facere incidunt sit dolorem\nnon excepturi qui quia sed laudantium\nquisquam molestiae ducimus est\nofficiis esse molestiae iste et quos'),
(8, 80, 'labore in ex et explicabo corporis aut quas', 'ex quod dolorem ea eum iure qui provident amet\nquia qui facere excepturi et repudiandae\nasperiores molestias provident\nminus incidunt vero fugit rerum sint sunt excepturi provident'),
(9, 81, 'tempora rem veritatis voluptas quo dolores vero', 'facere qui nesciunt est voluptatum voluptatem nisi\nsequi eligendi necessitatibus ea at rerum itaque\nharum non ratione velit laboriosam quis consequuntur\nex officiis minima doloremque voluptas ut aut'),
(9, 82, 'laudantium voluptate suscipit sunt enim enim', 'ut libero sit aut totam inventore sunt\nporro sint qui sunt molestiae\nconsequatur cupiditate qui iste ducimus adipisci\ndolor enim assumenda soluta laboriosam amet iste delectus hic'),
(9, 83, 'odit et voluptates doloribus alias odio et', 'est molestiae facilis quis tempora numquam nihil qui\nvoluptate sapiente consequatur est qui\nnecessitatibus autem aut ipsa aperiam modi dolore numquam\nreprehenderit eius rem quibusdam'),
(9, 84, 'optio ipsam molestias necessitatibus occaecati facilis veritatis dolores aut', 'sint molestiae magni a et quos\neaque et quasi\nut rerum debitis similique veniam\nrecusandae dignissimos dolor incidunt consequatur odio'),
(9, 85, 'dolore veritatis porro provident adipisci blanditiis et sunt', 'similique sed nisi voluptas iusto omnis\nmollitia et quo\nassumenda suscipit officia magnam sint sed tempora\nenim provident pariatur praesentium atque animi amet ratione'),
(9, 86, 'placeat quia et porro iste', 'quasi excepturi consequatur iste autem temporibus sed molestiae beatae\net quaerat et esse ut\nvoluptatem occaecati et vel explicabo autem\nasperiores pariatur deserunt optio'),
(9, 87, 'nostrum quis quasi placeat', 'eos et molestiae\nnesciunt ut a\ndolores perspiciatis repellendus repellat aliquid\nmagnam sint rem ipsum est'),
(9, 88, 'sapiente omnis fugit eos', 'consequatur omnis est praesentium\nducimus non iste\nneque hic deserunt\nvoluptatibus veniam cum et rerum sed'),
(9, 89, 'sint soluta et vel magnam aut ut sed qui', 'repellat aut aperiam totam temporibus autem et\narchitecto magnam ut\nconsequatur qui cupiditate rerum quia soluta dignissimos nihil iure\ntempore quas est'),
(9, 90, 'ad iusto omnis odit dolor voluptatibus', 'minus omnis soluta quia\nqui sed adipisci voluptates illum ipsam voluptatem\neligendi officia ut in\neos soluta similique molestias praesentium blanditiis'),
(10, 91, 'aut amet sed', 'libero voluptate eveniet aperiam sed\nsunt placeat suscipit molestias\nsimilique fugit nam natus\nexpedita consequatur consequatur dolores quia eos et placeat'),
(10, 92, 'ratione ex tenetur perferendis', 'aut et excepturi dicta laudantium sint rerum nihil\nlaudantium et at\na neque minima officia et similique libero et\ncommodi voluptate qui'),
(10, 93, 'beatae soluta recusandae', 'dolorem quibusdam ducimus consequuntur dicta aut quo laboriosam\nvoluptatem quis enim recusandae ut sed sunt\nnostrum est odit totam\nsit error sed sunt eveniet provident qui nulla'),
(10, 94, 'qui qui voluptates illo iste minima', 'aspernatur expedita soluta quo ab ut similique\nexpedita dolores amet\nsed temporibus distinctio magnam saepe deleniti\nomnis facilis nam ipsum natus sint similique omnis'),
(10, 95, 'id minus libero illum nam ad officiis', 'earum voluptatem facere provident blanditiis velit laboriosam\npariatur accusamus odio saepe\ncumque dolor qui a dicta ab doloribus consequatur omnis\ncorporis cupiditate eaque assumenda ad nesciunt'),
(10, 96, 'quaerat velit veniam amet cupiditate aut numquam ut sequi', 'in non odio excepturi sint eum\nlabore voluptates vitae quia qui et\ninventore itaque rerum\nveniam non exercitationem delectus aut'),
(10, 97, 'quas fugiat ut perspiciatis vero provident', 'eum non blanditiis soluta porro quibusdam voluptas\nvel voluptatem qui placeat dolores qui velit aut\nvel inventore aut cumque culpa explicabo aliquid at\nperspiciatis est et voluptatem dignissimos dolor itaque sit nam'),
(10, 98, 'laboriosam dolor voluptates', 'doloremque ex facilis sit sint culpa\nsoluta assumenda eligendi non ut eius\nsequi ducimus vel quasi\nveritatis est dolores'),
(10, 99, 'temporibus sit alias delectus eligendi possimus magni', 'quo deleniti praesentium dicta non quod\naut est molestias\nmolestias et officia quis nihil\nitaque dolorem quia');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` text NOT NULL,
  `author_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_email`) VALUES
(1, 'Santosh', 'santosh1@gmail.com'),
(2, 'Jinit ', 'jinit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_description` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` text NOT NULL,
  `blog_posttime` date NOT NULL DEFAULT current_timestamp(),
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_description`, `blog_content`, `blog_image`, `blog_posttime`, `author_id`, `category_id`, `status`) VALUES
(1, 'Chase Jarvis', 'Chase Jarvis a BlogPage', '<p><em><strong>Chase Jarvis</strong></em> travels the world capturing both still and motion pictures. He aims to be &ldquo;<em>...as creative as possible towards everything I endeavor.</em>&rdquo; So, his photography blog features inspiring photo shoots, in addition to tips on how to improve your photography. He often interviews his subjects or other professionals in his blog posts.</p>\r\n', 'photo_category.jpg', '2023-08-04', 1, 2, 0),
(2, 'Love and Lemons ', 'Love and Lemons by Jeanine Donofrio', '<p><strong>Love and Lemons</strong> has been created by <strong>Jeanine Donofrio</strong> and her husband, Jack Mathews (&ldquo;#1 taste-tester&rdquo;). The blog&rsquo;s name comes from the fact that Jeanine loves seasonal food, often finished off with a squeeze of lemon.</p>\r\n\r\n<p>Most of the recipes on the site are vegetarian.</p>\r\n\r\n<p>The blog was founded in <em>2011</em> and has been recognized by prestigious food magazines like Food &amp; Wine, Food52, Refinery29, SELF Magazine, and Oprah Magazine. It was named<strong> Readers&rsquo; Choice Best Cooking Blog</strong> by Saveur Magazine in 2014 and won a <strong>Saveur Editor&rsquo;s Choice award in 2016.</strong></p>\r\n\r\n<p>If you are looking for a recipe, you can filter your search by season, holiday, special diet, meal type, or ingredient. Surprisingly there are only six recipes under the ingredient, lemon.</p>\r\n', 'food_category.jpg', '2023-08-06', 2, 1, 0),
(3, 'The 35 Best New Books Of Fall 2023', 'Featuring the return of literary greats, all-American heroes, and a heavy dose of modern gothic.', '<p>The shift into fall reading can be a fun transition point as we finish up the last of the summer vacation stack before the ambitious, serious season starts in September. Lucky for us, there are dozens of exciting new books across genres and topics.</p>\r\n\r\n<p>A handful of this season&rsquo;s releases explore image-making, public perception, and the inevitable haziness of truth. <strong>Marisa Meltzer&rsquo;s</strong> latest nonfiction book,&nbsp;<strong><em>Glossy</em></strong>, goes deep into Glossier&rsquo;s creation and expansion by profiling its founder, the elusive cool girl Emily Weiss. <strong>Julia Fox&rsquo;s</strong> highly anticipated memoir,<strong>&nbsp;</strong><em><strong>Down the Drain</strong>,&nbsp;</em>promises dark luxe candor.<strong> Zadie Smith&rsquo;s&nbsp;new&nbsp;novel,</strong>&nbsp;<strong><em>The Fraud</em></strong>, concerns narrative-shaping during a high profile, 19th century court case. And <strong>Taylor Lorenz&rsquo;s&nbsp;<em>Extremely Online</em></strong>&nbsp;analyzes influencer culture writ large.</p>\r\n', 'book_category.jpg', '2023-08-04', 2, 3, 0),
(4, '8 Best Cut Flowers For People With Hay Fever', 'If you’ve got hay fever - or know someone who does - here are some of the best hay fever friendly flowers to send (and which to avoid too!) ', '<p>&lt;p&gt;If you&amp;rsquo;ve got hay fever - or know someone who does - here are some of the best hay fever friendly flowers to send (and which to avoid too!)&amp;nbsp;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Hay fever is an allergy to pollen and it&amp;rsquo;s one of the most common allergies, with 1 in 5 people affected. It&amp;rsquo;s not usually dangerous, but its symptoms can be very annoying - sneezing, itchy eyes, and runny noses are all common signs!&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;You might think that it&amp;rsquo;s best to avoid cut flowers if you have hay fever, but luckily this isn&amp;rsquo;t the case! There&amp;rsquo;s plenty of low pollen blooms that are safe for people with hay fever to enjoy.&amp;nbsp;&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Which flowers cause hay fever?&amp;nbsp;&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Although most people with hay fever are more allergic to grass, some cut flowers can also be a problem. Wind-pollinated flowers are usually the worst for hay fever, as their pollen is light and naturally breaks away from the plant very easily. On the other hand, flowers which are&amp;nbsp;&lt;strong&gt;pollinated by insects&lt;/strong&gt;&amp;nbsp;tend to be much less irritating, as their pollen is heavy and sticky, and doesn&amp;#39;t disperse around the home.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Here are some flowers to avoid if you have hay fever:&lt;/p&gt;</p>\r\n\r\n<p>&lt;h3&gt;Sunflowers&lt;/h3&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;em&gt;&lt;strong&gt;Sunflowers&lt;/strong&gt;&lt;/em&gt;&amp;nbsp;don&amp;rsquo;t really have a scent, so you might think they&amp;rsquo;re a good option. However, their flowers are&amp;nbsp;&lt;strong&gt;absolutely packed full of pollen!&lt;/strong&gt;&lt;/p&gt;<br />\r\n&nbsp;</p>\r\n', 'flower_image.jpg', '2023-08-07', 1, 5, 0),
(5, 'Pitchfork', 'Pitchfork by Ryan Schreiber', '<p>The American influential online publication,&nbsp;<strong>Pitchfork</strong>, was launched by writer <em><strong>Ryan Schreiber </strong></em>as an independent music blog called Turntable in 1995. This makes it almost 30 years that the publication, considered one of the most prominent music magazines in the world, has been active. In 2015, the magazine was sold to a global mass media company, <strong><em>Cond&eacute; Nast,</em></strong> with Schreiber remaining the editor-in-chief.</p>\r\n\r\n<p>Having started as a blog covering mostly the field of indie rock, Pitchfork has since expanded writing about all kinds of music and genres, stepping also into the contemporary pop scene. The site is widely known for its daily dose of music reviews that shaped the music industry, particularly during the 1990s and 2000s. It was even said that in the past, a Pitchfork music review could make or even break a career!</p>\r\n\r\n<p>Although the reviews may not be that influential nowadays, they have remained a valuable part of the creative content that the publication puts out. Since 2016, each Sunday, Pitchfork has been also releasing retrospective reviews on music classics that it had not previously reviewed. Besides reviews, Pitchfork is also a great source of music-related news and is further known for publishing its &lsquo;<strong>best-off</strong>&rsquo; lists as well as yearly features and retrospectives.</p>\r\n', 'music_category.jpg', '2023-08-06', 2, 4, 0),
(6, 'The Ending Of The Lost Flowers Of Alice Hart Book, Explained', 'Holly Ringland’s best-selling novel is now a Prime Video series.', '<p><em><strong>Spoilers ahead for&nbsp;</strong></em><strong>The Lost Flowers of Alice Hart.</strong>&nbsp;Holly Ringland&rsquo;s best-selling novel,&nbsp;<a href=\"https://harpersbazaar.com.au/the-lost-flowers-of-alice-hart-holly-ringland/\" target=\"_blank\"><em>The Lost Flowers of Alice Hart</em></a>, begins with the titular character having a dark vision. &ldquo;I knew when I read the first page about a nine-year-old Alice Hart sitting at the end of a laneway dreaming of ways to set her father on fire, that I had to bring this to the screen,&rdquo; Sarah Lambert, who adapted the book for Prime Video&rsquo;s new series of the same name, recently explained to&nbsp;<em>Harper&rsquo;s Bazaar</em>. &ldquo;It was one of the best opening lines I had ever read.&rdquo;</p>\r\n', 'book_category.jpg', '2023-08-06', 1, 3, 0),
(7, 'Cookie and Kate', 'Cookie and Kate by Kathryne Taylor', '<p><strong>Cookie and Kate</strong> is all about celebrating good food. Kate is Kathryne Taylor. Cookie is her <em>dog</em> &ndash; which Kate describes as a<strong><em> &ldquo;mystery mutt,&rdquo; </em></strong>or as a DNA test found, half schipperke and half dachshund/Australian koolie mix.</p>\r\n\r\n<p>Kate is a photographer and cook from Oklahoma. She created the blog in 2010 and now works on it full-time.</p>\r\n\r\n<p>Like many of the other top food blogs featured here, Cookie and Kate features vegetarian and whole food recipes.</p>\r\n\r\n<p>The site makes it easy to search for recipes. You can look for recipes by Course, Cuisine, Diet, Everyday, Ingredient, or Season.</p>\r\n', 'food_category.jpg', '2023-08-07', 2, 1, 0),
(8, 'For The Love of Bands', 'For The Love of Bands by Roel Welsink', '<p>Launched in 2016 by Roel Welsink,&nbsp;<strong>For the Love of Bands</strong>&nbsp;is a fine music blog concentrating mostly on the best in contemporary <em>indie music, including the up-and-coming indie artists and bands</em>. The blog&rsquo;s main focus is on exploring and discovering new music, covering reviews and artist interviews in a whole range of genres, from Indie to Garage to Americana.</p>\r\n\r\n<p>Besides that, the blog aims to provide valuable information and music industry tips for independent artists, makes YouTube compilations, and just like the iMusician Blog, curates their own Spotify playlists.</p>\r\n', 'music_category.jpg', '2023-08-07', 1, 4, 0),
(9, 'Test Title ', 'Test Description ', '<p>Test Content</p>\r\n', 'flower_image.jpg', '2023-08-07', 2, 5, 0),
(10, 'Joe McNally', 'Joe McNally a photography Blog', '<p>As an award-winning and internationally acclaimed photographer, <em><strong>Joe McNally</strong></em> has photographed on assignment in nearly 70 countries. His projects are mostly commercial and editorial with a client list including well known international brands. Also, he has shot for notable magazines. On his photography blog, he mostly writes anecdotes from his journeys and projects, offering advice for photographers at any level of learning.</p>\r\n', 'photo_category.jpg', '2023-08-04', 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Food', 'Food is good'),
(2, 'Photo', 'Cinematic '),
(3, 'Book', 'Reading'),
(4, 'Music ', 'Musicians'),
(5, 'Flower', 'Flowers are beautiful');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_blogs`
--
ALTER TABLE `api_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `fk_blog_author` (`author_id`),
  ADD KEY `fk_blog_category` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_blog_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
