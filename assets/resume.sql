-- phpMyAdmin SQL Dump
-- version 4.9.6
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 04 月 12 日 08:31
-- 伺服器版本： 10.3.24-MariaDB
-- PHP 版本： 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `klik_loginsystem`
--

-- --------------------------------------------------------

--
-- 資料表結構 `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Gender` text DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `Age` int(11) NOT NULL DEFAULT 0,
  `Job_title` text NOT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Social_Media` text DEFAULT NULL,
  `Portfolio` text NOT NULL,
  `Experience` text DEFAULT NULL,
  `Keyword` text DEFAULT NULL,
  `Introduction` text DEFAULT NULL,
  `Time` text DEFAULT NULL,
  `Work_way` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `resume`
--

INSERT INTO `resume` (`id`, `Name`, `Gender`, `Birth`, `Age`, `Job_title`, `Phone`, `Email`, `Social_Media`, `Portfolio`, `Experience`, `Keyword`, `Introduction`, `Time`, `Work_way`) VALUES
(1, '李亞鵬', '男', '2003-03-02', 0, '', 988925149, 'pong555@gmail.com', '亞鵬李/0988925149/pongˍ555', '', '全國機器大賽優等/2019北市黑客松', '#熱忱 #勇敢 #具前瞻性', '在今年入學的時候加入了新市高中資訊研究社，看到學長們在學習架設網站，也有很多校內厲害的學長姐們都開始參與一些專案的製作，因為之前在國中的時候學校有培養一群選手參加機器人大賽，在將近一年的培訓後，在全國機器人大賽得到優 等，也因此發現了自己的興趣。希望在高中時期能將這份能力擴大，參加更多由青年高中生發起的專案活動。也希望能夠參加學生組織，讓高中生的聲音能夠被聽到，讓高中生成為社會不可或缺的一抹力量。', '星期一、三晚上8:00以後  星期六整天 星期天中午12點過後', 'work together'),
(3, '王凱伊', '女', '2002-06-13', 0, '', 923456123, 'oneone798@yahoo.com.tw', '王凱伊/9303080206', '', '參加高雄市商賽/青年創業佳作/南市設計大賽第三名', '#具創作力 #具領導力 #果敢', '從國中開始就對商業跟設計抱有很大的興趣，在國中跟高中都經由網路上的資訊看到了一些國內新興的青年創業比賽跟商賽模式，過程雖然在同時兼顧課業及準備比賽時有些痛苦和不能負荷，但還是挺過來了，有些也取得不錯的成績，希望在高中生活快進入最忙時期前能夠找一些除了課業以外的事務平衡課業帶來的壓力，對於學生組織則是今年新新高中學生會成員，在提出學生的意見及觀點方面具有一定的經驗。', '\"平日 星期二～星期四 晚上21:00-23:00\r\n假日 星期日 晚上20:00-23:30\"', 'work from home'),
(4, '劉一其', '女', '2002-07-26', 0, '', 999223564, 'yichi98253@gmail.com', 'YiChi/0999223564/Yichiˍ920102/x', '', '全國學生美展/2020北市黑客松', '＃有想像力　＃彈性佳　＃有責任感', '我是台北市某高中的學生，並且從國小３年級就開始學習畫畫，到了國中開始接觸電腦繪圖，在國三的時候參加美展，得到佳作的成績，在學校各個團體合作時，我通常是扮演較彈性及中立的角色，善於在產生紛爭時調停，在別人不願意扛事情的時候也願意跳出來把責任扛下來，因此我認為自己是富有責任感的。', '\"星期二、五　晚上７－１０點\r\n星期六日　　晚上８－１１點\"', 'work together'),
(5, '陳玲玲', '女', '2004-03-06', 0, '', 975828146, 'mamamia999@gmail.com', 'Mia Chen/mamamia999/mamamia999ˍ/x', '', '參加過台大資訊營/實權高中學生會長', '#具條理的 #理性的 #熱情的', '高中生活沒有特別參加過某些比賽但是從國中就開始寫程式了，在高二上的時候參加台大資訊營，更了解了這方面的資訊以及多了一些管道可以更精進自己的技術，在學生自治方面，我在學校是擔任學生會長的職務，代替學生去跟學校開會並且協商關於學生權益的部分，也十分認同這個社會是需要一股來自高中生的聲量，高中生的創造力有時候並不會低於大學生或者是出社會的工作者，學生有學生的好處，像是勇於嘗試、彈性化、富創造力的。雖然並沒有參加過太多很著名的比賽或取得非常優異亮眼的成績，但是我認為我的能力應該有達到一定的水準之上。', '星期一~星期四 晚上8-11點', 'work from home'),
(6, '華圈與', '男', '2000-05-30', 0, '', 919795565, 'Huahua20@yahoo.com.tw', 'CHyu HUa/0919795565/yuyu0808./x', '', '全國學生音樂比賽鋼琴獨奏優等/竹殷椰韻杯創作組亞軍', '#浪漫 #感性 #有創意', '雖然不是特別厲害的資訊工程師出身或者是擁有很厲害的畫圖技能，但是我在音樂方面具有一定的水準，也喜歡從事樂曲創作等方面，在國中及高中階段都不斷有作品輸出，軟體的架構有時候並不只是侷限在冷冰冰的數字或者是畫面感十足的畫作上面，音樂也是在一個軟體或者是一個專案上加分的選項，希望我可以用我的長才讓一個專案更加豐富多元化', '\"星期三四五 下午5-晚上7點\r\n星期六下午3點過後\"', 'work from home'),
(7, '蘇品萱', '女', '2004-12-29', 0, '', 973645287, 'pxuan@gmail.com', 'Instagram: @pxuan', '', '全國美術大賽得獎、Instagram畫帳粉絲數達5000人追蹤', '#設計 #美術 #個人品牌', '儘管我的自傳看似不顯眼，卻佔據了我的腦海。湯姆遜曾經提到過，我堅持奮戰五十餘年，致力於科學的發展。用一個詞可以道出我最艱辛的工作特點，這個詞就是“失敗”。這段話對世界的改變有著深遠的影響。其實，若思緒夠清晰，那麼我的自傳也就不那麼複雜了。儘管如此，我們仍然需要對我的自傳保持懷疑的態度。列寧曾經提過，全世界無產者和被壓迫民族聯合起來。這段話讓我所有的疑惑頓時豁然開朗。做好我的自傳這件事，可以說已經成為了全民運動。問題的核心究竟是什麼？我們要學會站在別人的角度思考。現在，正視我的自傳的問題，是非常非常重要的。因為，我們都有個共識，若問題很困難，那就勢必不好解決。我的自傳，到底應該如何實現。瑟伯與懷特曾經提到過，愛情有著奇妙的魔力，它使一個人為另一個人所傾倒。但願諸位理解後能從中有所成長。我的自傳究竟是怎麼樣的存在，始終是個謎題。經過上述討論，對於一般人來說，我的自傳究竟象徵著什麼呢？我的自傳勢必能夠左右未來。這種事實對本人來說意義重大，相信對這個世界也是有一定意義的。韓愈講過一段深奧的話，事業無窮年。這句話令我不禁感慨問題的迫切性。巴爾扎克說過一句著名的話，遺忘是一般剛強的，有創造力的人的法寶，他們會像自然一樣的遺忘，自然界就不知道有什麼過失，弱者不是把痛苦作為懲前毖後的教訓，反而在痛苦中討生活，浸在裡頭，天天回顧以往的苦難，折磨自己。這激勵了我。我們需要淘汰舊有的觀念，塞涅卡講過一句值得人反覆尋思的話，如果一個人不知道他要駛向哪個碼頭，那麼任何風都不會是順風。這段話的餘韻不斷在我腦海中迴盪著。在這種不可避免的衝突下，我們必須解決這個問題。深入的探討我的自傳，是釐清一切的關鍵。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。了解清楚我的自傳到底是一種怎麼樣的存在，是解決一切問題的關鍵。一般來講，我們都必須務必慎重的考慮考慮。李大釗曾經說過，知識是引導人生到光明與真實境界的燈燭。希望大家能發現話中之話。話雖如此，透過逆向歸納，得以用最佳的策略去分析我的自傳。而這些並不是完全重要，更加重要的問題是，英格索爾講過一段深奧的話，柯爾律治才能和天才的差別就如同泥瓦和雕塑家的差別。想必各位已經看出了其中的端倪。拉斯金講過一段耐人尋思的話，年輕時代是培養、希望及信仰的一段時光。強烈建議大家把這段話牢牢記住。就我個人來說，我的自傳對我的意義，不能不說非常重大。不要先入為主覺得我的自傳很複雜，實際上，我的自傳可能比你想的還要更複雜。我的自傳的發生，到底需要如何實現，不我的自傳的發生，又會如何產生。從這個角度來看，如果仔細思考我的自傳，會發現其中蘊含的深遠意義。我們要從本質思考，從根本解決問題。', '每天晚上10點後', 'work from home'),
(8, '楊祐邦', '男', '2003-06-12', 0, '', 983762545, 'youbang@gmail.com', 'Instagram: @youbang1.11', '', 'APCS 滿級分', '#C++ #Python #資安', '\"我們不得不相信，我們都很清楚，這是個嚴謹的議題。我們不妨可以這樣來想: 司馬遷深信，人固有一死，或重於泰山，或輕於鴻毛。為人們利益而死，就比泰山還重; 替法西斯賣力，替剝削人民和壓迫人民的人去死，就比鴻毛還輕。這句話看似簡單，但其中的陰鬱不禁讓人深思。若發現問題比我們想像的還要深奧，那肯定不簡單。希臘曾經提過，語言是醫治惡劣心情的良藥。希望大家實際感受一下這段話。世界需要改革，需要對我的自傳有新的認知。問題的關鍵看似不明確，但想必在諸位心中已有了明確的答案。鄧小平說過，左已形成了一種習慣勢力，現在中國反對改革的人不多，但在製定和實行具體政策的時候，總容易出現有一點留戀過去的情況，習慣的東西就起作用，就冒出來了。希望大家能從這段話中有所收穫。一般來說，我們需要淘汰舊有的觀念，若沒有我的自傳的存在，那麼後果可想而知。帶著這些問題，我們一起來審視我的自傳。我的自傳勢必能夠左右未來。伏爾泰曾說過，天賦的力量大於教育的力量。這段話的餘韻不斷在我腦海中迴盪著。而這些並不是完全重要，更加重要的問題是，若無法徹底理解我的自傳，恐怕會是人類的一大遺憾。喬叟曾經說過，酒杯中可見天堂，但縱情狂飲只能。這句話幾乎解讀出了問題的根本。問題的關鍵究竟為何？我的自傳究竟是怎麼樣的存在，始終是個謎題。車爾尼雪夫斯基深信，美的事物在人心中喚起的那種感覺，是類似我們當著親愛的人的面前時，洋溢於我們心中的喜悅。這句話看似簡單，卻埋藏了深遠的意義。既然，對於我的自傳，我們不能不去想，卻也不能走火入魔。當前最急迫的事，想必就是釐清疑惑了。對我個人而言，我的自傳不僅僅是一個重大的事件，還可能會改變我的人生。我想，把我的自傳的意義想清楚，對各位來說並不是一件壞事。對於一般人來說，我的自傳究竟象徵著什麼呢？謹慎地來說，我們必須考慮到所有可能。我的自傳的發生，到底需要如何實現，不我的自傳的發生，又會如何產生。儘管我的自傳看似不顯眼，卻佔據了我的腦海。每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮我的自傳的各種可能。探討我的自傳時，如果發現非常複雜，那麼想必不簡單。俗話說的好，掌握思考過程，也就掌握了我的自傳。若到今天結束時我們都還無法釐清我的自傳的意義，那想必我們昨天也無法釐清。當你搞懂後就會明白了。克雷洛夫說過一句發人省思的話，只有在患難的時候，才能看到朋友的真心。這段話可說是震撼了我。需要考慮周詳我的自傳的影響及因應對策。不要先入為主覺得我的自傳很複雜，實際上，我的自傳可能比你想的還要更複雜。如果此時我們選擇忽略我的自傳，那後果可想而知。\r\n\r\n        契訶夫曾提出，從我們心中奪走對美的愛，也就奪。這句話幾乎解讀出了問題的根本。\"', '週休二日全天', 'work from home'),
(9, '許耀光', '男', '2007-08-07', 0, '', 983726546, 'yaoguang@gmail.com', 'Instagram: @yaoguang7.31', '', '曾經參與過TED演講', '#自我表達 #演說 #主持', '\"  儘管如此，我們仍然需要對我的自傳保持懷疑的態度。每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮我的自傳的各種可能。顧炎武說過，人生富貴駒過隙，唯有榮名壽金石。這段話對世界的改變有著深遠的影響。斯特林堡講過一句值得人反覆尋思的話，生活的目的究竟是什麼？是生活本身！除把生命維持到死以處不會再有其他任務。人因此而獲得維持生命的力量。這似乎解答了我的疑惑。\r\n\r\n        要想清楚，我的自傳，到底是一種怎麼樣的存在。這樣看來，對我的自傳進行深入研究，在現今時代已經無法避免了。我的自傳的存在，令我無法停止對他的思考。阿密埃爾說過一句發人省思的話，幸運的人為了使自己不過分得意，希望各位能用心體會這段話。如果別人做得到，那我也可以做到。墨子深信，仁人之所以為事者，必興天下之利，除天下之害。這句話看似簡單，但其中的陰鬱不禁讓人深思。我以為我了解我的自傳，但我真的了解我的自傳嗎？仔細想想，我對我的自傳的理解只是皮毛而已。洛克講過一段深奧的話，為了使兒童具有自信，獲得一點點與人相處的技能，就去犧牲他的天真，讓他和那些沒有教養的邪惡的孩子交往，這是很不對的; 剛毅自主的品性的主要用途是為保持他的德行。男孩子有了與人交接的機會，沒有不能學得鎮定的，只要時間夠。但願諸位理解後能從中有所成長。探討我的自傳時，如果發現非常複雜，那麼想必不簡單。一般來講，我們都必須務必慎重的考慮考慮。我們都知道，只要有意義，那麼就必須慎重考慮。\r\n\r\n        我們不得不相信，列寧曾經提過，免難識朋友。這句話改變了我的人生。我的自傳的發生，到底需要如何實現，不我的自傳的發生，又會如何產生。所謂我的自傳，關鍵是我的自傳需要如何解讀。當你搞懂後就會明白了。在這種不可避免的衝突下，我們必須解決這個問題。而這些並不是完全重要，更加重要的問題是，由於，王維說過一句經典的名言，坐看紅樹不知遠，行盡青山不見人。他會這麼說是有理由的。貝爾納曾提出，科學既是人類智慧的最高成果，又是最有希望的物質福利的源泉。希望大家能發現話中之話。我的自傳，發生了會如何，不發生又會如何。塞內加曾經說過，老是遇不上機會的人，最終總會走運。希望各位能用心體會這段話。伽利略曾提出，真理就是具備這樣的力量，你越是想要攻擊它，你的攻擊就愈加充實了和證明了它。帶著這句話，我們還要更加慎重的審視這個問題。蘇霍姆林斯基曾經認為，使人做自己舉止行為的最嚴厲的評判者的力量是什麼？是良心，它成為行為和理智的捍衛者。希望各位能用心體會這段話。\"', '一、三、五半夜', 'work together'),
(10, '林雨涵', '女', '2007-07-26', 0, '', 983726567, 'han0398@gmail.com', 'Instagram: han0398', '', '曾休學一年前往東部偏鄉國小擔任駐點志工', '#社工 #教育 #心理輔導', '\"問題的關鍵看似不明確，但想必在諸位心中已有了明確的答案。而這些並不是完全重要，更加重要的問題是，如果此時我們選擇忽略我的自傳，那後果可想而知。我以為我了解我的自傳，但我真的了解我的自傳嗎？仔細想想，我對我的自傳的理解只是皮毛而已。\r\n\r\n        每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮我的自傳的各種可能。馬克思曾經提過，人民的信任是報刊賴以生存的條件，沒有這種條件，報刊就會完全萎靡不振。這段話看似複雜，其中的邏輯思路卻清晰可見。把我的自傳輕鬆帶過，顯然並不適合。\r\n\r\n        楊慎在過去曾經講過，服藥千副，不如一宵獨臥; 服藥千朝，不如獨臥一宵。帶著這句話，我們還要更加慎重的審視這個問題。我們不得不相信，動機，可以說是最單純的力量。我們一般認為，抓住了問題的關鍵，其他一切則會迎刃而解。布邊曼曾經認為，最本質的人性價值就是人的獨立性。這句話讓我們得到了一個全新的觀點去思考這個問題。看看別人，再想想自己，會發現問題的核心其實就在你身旁。儘管我的自傳看似不顯眼，卻佔據了我的腦海。由於，司湯達講過一句值得人反覆尋思的話，做一個傑出的人，光有一個合乎邏輯的頭腦是不夠的，人還要有一種強烈的氣質。這段話令我陷入了沈思。我們不得不面對一個非常尷尬的事實，那就是，圣西門講過一段耐人尋思的話，必須讓有天才的人獨立，而人類應當深刻地掌握一條真理，即人類要使有天才的人成為火炬，而不要讓他們放棄真正的使命。這句話把我們帶到了一個新的維度去思考這個問題。儘管如此，別人往往卻不這麼想。既然如此，總結來說，我的自傳似乎是一種巧合，但如果我們從一個更大的角度看待問題，這似乎是一種不可避免的事實。愛因斯坦曾經說過，在科學上，每一條道路都應該走一走，發現一條走不通的道路，就是對科學的一大貢獻。那種證明\"\"此路不通\"\"的吃力不討好的工作，就讓我來做吧！ 這段話的餘韻不斷在我腦海中迴盪著。若發現問題比我們想像的還要深奧，那肯定不簡單。米歇潘告訴我們，生命是一條艱險的峽谷，只有勇敢的人才能通過。他會這麼說是有理由的。泰戈爾相信，閃射理想之光吧，心靈之星！把光流注入，未來的暮靄之中。希望大家能發現話中之話。博斯威爾說過一句富有哲理的話，能對你開懷直言的人，便是你的摯友。這句話改變了我的人生。何良臣講過，有正無奇，雖整不烈，無以致勝也; 有奇無正，雖銳無恃，難以控御也。請諸位將這段話在心中默念三遍。老舊的想法已經過時了。經過上述討論，孟浩然講過，開軒面場圃，把酒話桑麻。希望各位能用心體會這段話。\"', '每週二晚上8點', 'work together'),
(11, '王琪涵', '女', '2003-02-07', 0, '', 983726567, 'wqh7287@gmil.com', 'Instagram:wqh7287', '', 'Microbiz商賽全球賽獲得最佳企業', '#組織規劃 #企劃 #管理', '\"克雷洛夫說過一句很有意思的話，交上了壞朋友的人，是難以得到世人的敬重的。這句話看似簡單，但其中的陰鬱不禁讓人深思。儘管如此，我們仍然需要對我的自傳保持懷疑的態度。我們都很清楚，這是個嚴謹的議題。其實，若思緒夠清晰，那麼我的自傳也就不那麼複雜了。可是，即使是這樣，我的自傳的出現仍然代表了一定的意義。陀思妥耶夫斯基講過一句值得人反覆尋思的話，對具有高度自覺與深邃透徹的心靈的人來說，痛苦與煩惱是他必備的氣質。這段話讓我所有的疑惑頓時豁然開朗。生活中，若我的自傳出現了，我們就不得不考慮它出現了的事實。\r\n\r\n        陶鑄曾經說過，我們應該讚美岩石的堅定。我們應該學習岩石的堅定。我們應該對革命有著堅強的信念。這句話令我不禁感慨問題的迫切性。我的自傳對我來說有著舉足輕重的地位，必須要嚴肅認真的看待。儘管如此，別人往往卻不這麼想。總而言之，本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。阿拉伯曾經提過，風並不按照船的要求吹拂。想必各位已經看出了其中的端倪。而這些並不是完全重要，更加重要的問題是，我的自傳的出現，重寫了人生的意義。徐特立告訴我們，盤基廣大高原之上的一個高峰; 假如把喜馬拉雅山建立在河海平原上，八千公尺的高峰是難以存在的，猶如無源之水易於枯竭的。我希望諸位也能好好地體會這句話。在人類的歷史中，我們總是盡了一切努力想搞懂我的自傳。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。帶著這些問題，我們一起來審視我的自傳。總結來說，列寧說過一句著名的話，政治是經濟的集中表現。這句話改變了我的人生。貝蒂講過，大家都不聽謊言，說謊的人也就絕跡了。希望各位能用心體會這段話。薩迪在過去曾經講過，溫和、謙遜、多禮的言行，有時能使人回心轉意。這段話可說是震撼了我。想必大家都能了解我的自傳的重要性。一般來說，屠格涅夫講過，你想成為幸福的人嗎?但願你首先學會吃得起苦。但願各位能從這段話中獲得心靈上的滋長。我的自傳勢必能夠左右未來。劉義慶曾說過一句意義深遠的話，乘興而行，興盡而返。這段話對世界的改變有著深遠的影響。世界上若沒有我的自傳，對於人類的改變可想而知。我的自傳似乎是一種巧合，但如果我們從一個更大的角度看待問題，這似乎是一種不可避免的事實。\r\n\r\n        現在，正視我的自傳的問題，是非常非常重要的。因為，要想清楚，我的自傳，到底是一種怎麼樣的存在。我們一般認為，抓住了問題的關鍵，其他一切則會迎刃而解。謹慎地來說，我們必須考慮到所有可能。\"', '週五、六晚上9點到半夜', 'work together'),
(12, '王昕', '女', '2005-08-07', 0, '', 988975603, 'wangxin0306@gmail.com', '王昕/0988975603/wangˍ222/X', '', '多益920', '#開朗 #樂觀 #積極', '因為機緣巧合參加了國內某學生組織，也因此對學生專案產生極濃厚的興趣，希望未來也可以多往此方向發展，除此之外我也多次參加模聯活動，看到了許多同樣年紀卻有不凡能力的人，因此深知台灣的高中生具有非常強的能量，一旦能夠匯集，將會是社會上最堅強的一股中堅力量，希望自己能夠運用我的能力在這方面為國家爭取榮耀跟未來', '平日晚上7點過後', 'work from home'),
(13, '陳學案', '男', '2000-12-05', 0, '', 955485931, 'hanry931@yahoo.com.tw', 'x/hanryhanry/hanry333/x', '', '多益920/全民英檢中高級/台中市程式設計比賽季軍', '#冷靜 #有想法 #積極', '因為國中待過國際學校的因素，所以英文是強項，然後在國際學校也打開了不同的視野，與台灣的教育體制不同，也讓我有更多機會做我想做的事，就跟隨爸爸的腳步開始學習程式設計，在參加諸多大大小小的比賽後，到了大學也看到更多厲害的人，就決定不想僅僅只是成為一個普通的工程師之類的，想做出更多不一樣的事業或者是其他更富有教育意義的事，想加入專案團隊是希望可以給予這些有夢想的高中生一點意見或者是在程式設計方面可以互補不足，彼此討教，讓更多有能力的孩子作出更完整完善的規劃', '\"平日下午5點過後\r\n假日下午3點過後\"', 'work together'),
(14, '王可欣', '女', '1995-05-03', 0, '', 987364787, 'kexin@gmail.com', 'Instagram: kexin0293', '', '動畫作品榮獲紅點設計獎Best of the best', '#腳本設計 #動畫 #故事寫作', '最近剛結束掉設計系的畢業專題，但是距離畢業還有幾個月的時間，想在畢業之前多多累積一些與自己科系相關的經歷。本人偏好冒險，尤其是喜歡做一些看似不可能的專案。將不可能化為可能是我的專長（當然還是要以動畫工作為主啦）個人的夢想是讓自己設計的動畫在自己生活的周邊地區隨處可見。並帶給我的受眾們快樂。', '每天晚上10點-12點', 'work from home'),
(15, '王宇傑', '男', '2003-04-04', 0, '', 934477657, 'jack0312@gmail.com', 'Instagram: @jack0312', '', '全國機器人大賽佳作', '#程式 #AI #Arduino', '其實我對自己的人生並沒有什麼實際的想法，機器人也是硬著爸媽的要求學的。前幾天學校的輔導老師跟握介紹了這個網站，我希望可以在這裡找到屬於我自己的機會。讓我的高中生活沒那麼無聊。希望在這上面找到的經歷可以充實我的學習歷程', '每天晚上六點後都可以', 'work from home'),
(16, '黃勝其', '男', '2002-03-17', 0, '', 966315124, 'hurt552@yahoo.com.tw', 'x/5522613/x/x', '', '\"追夢人-青年創業提案比賽佳作\r\n多益850\r\n北市黑客松\"', '#創業 #英文通 #計劃書', '我來自台中，從高中開始接觸各方面的創業資訊，在老師的建議下去參加了一些提案比賽，也從失敗中及評審給的建議不斷的改進自己的計畫書，終於在追夢人比賽中取得了一些成績，我的行動力並不強，需要有人督促，但是可以把事情跟計劃做得很好，除此之外我的英文是從很小的時候就開始跟爸媽用英文溝通，算是半個native speaker，所以在翻閱國外的文獻資料或者是書籍的時候都蠻輕鬆。', '\"星期五下午16:00-18:00\r\n星期六早上8:00-12:00\r\n星期天下午4:00-5:00\"', 'work from home'),
(17, 'Koqqra', 'F', '2003-01-01', 0, '', 91234567, 'asd@asd.com', 'asd@asd.com', '', NULL, '#test233', NULL, NULL, NULL),
(18, 'yu9yy8y', 'NB', NULL, 0, '', NULL, NULL, NULL, '', '.N.LKNLH', 'ULIUGIUG', NULL, NULL, NULL),
(19, 'HGLKG', 'LKJ/J', NULL, 0, '', NULL, NULL, NULL, '', 'H;LIO', 'KJHGF', NULL, NULL, NULL),
(20, 'HGLKG', 'LKJ/J', NULL, 0, '', NULL, NULL, NULL, '', 'H;LIO', 'KJHGF', NULL, NULL, NULL),
(21, 'DFGGFDS', 'wSDEDA', NULL, 0, '', NULL, NULL, NULL, '', 'dWQEDDEWDWDF', 'IU,KHJ,', NULL, NULL, NULL),
(22, 'yu9yy8y', 'boy', NULL, 11, 'hgfdsa', 987654, 'hgfds@ggg.vvv', 'gfds', 'hgfdssdfg/hgfewdf', NULL, 'asdfghjhgfdshgfdsa', '-0987654567890bhtgrfes', NULL, 'hgfdsa'),
(23, '7654321', 'boy', NULL, 11, '6545678', 6789, '6789', '345678', '6789', NULL, '098765987609876', '78', NULL, '6543'),
(24, '9876543', '987654', NULL, 8765, '9876543', 87543, 'jhgfd', 'gfds', '0988985670', NULL, '7654387654987654', 'jhgfds', NULL, 'work'),
(25, 'rtyuio', 'tyu', NULL, 9876543, '76543', 98765432, 'ytredfghju6r@joiuytdv.ytd', 'trew', '765ewfgjuy5trdft', NULL, '6543765437654376543', 'yhtrgefkkt;r[ef\r\ntrefghtjyf\r\ntfgnhjtyr\r\nfgjtgfhjtrfghjt\r\nytghjtyrfgh', NULL, 'work from home'),
(26, 'rtyuio', 'tyu', NULL, 9876543, '76543', 98765432, 'ytredfghju6r@joiuytdv.ytd', 'ddedef', '765ewfgjuy5trdft', NULL, '6543765437654376543', 'yhtrgefkkt;r[ef\r\ntrefghtjyf\r\ntfgnhjtyr\r\nfgjtgfhjtrfghjt\r\nytghjtyrfgh', NULL, 'work from home'),
(27, 'rtyuio', 'tyu', NULL, 9876543, '76543', 98765432, 'ytredfghju6r@joiuytdv.ytd', 'dedfeff', '765ewfgjuy5trdft', NULL, '6543765437654376543', 'yhtrgefkkt;r[ef\r\ntrefghtjyf\r\ntfgnhjtyr\r\nfgjtgfhjtrfghjt\r\nytghjtyrfgh', NULL, 'work from home'),
(28, 'rtyuio直4r3efgtredvfg', 'tyu', NULL, 9876543, '76543', 98765432, 'ytredfghju6r@joiuytdv.ytd', '76543', '765ewfgjuy5trdft', NULL, '6543765437654376543', 'yhtrgefkkt;r[ef\r\ntrefghtjyf\r\ntfgnhjtyr\r\nfgjtgfhjtrfghjt\r\nytghjtyrfgh', NULL, 'work from home'),
(29, 'rtyuio', 'tyu', NULL, 9876543, '76543', 98765432, 'ytredfghju6r@joiuytdv.ytd', '窩ij 窩', '765ewfgjuy5trdft', NULL, '6543765437654376543', 'yhtrgefkkt;r[ef\r\ntrefghtjyf\r\ntfgnhjtyr\r\nfgjtgfhjtrfghjt\r\nytghjtyrfgh', NULL, 'work from home');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;