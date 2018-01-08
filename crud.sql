-- INSERT文の宿題
INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES("あべくん","abe@gmail","あべま"),
("ひろさん","hiro@gmail","夜遊び"),("つのいさん","tunoi@gmail","キャニオニング"),("あんどうさん","ando@gmail","カロリ"),
("なおきくん","naoki@gmail","夜遊び２"),("りょうさん","ryo@gmail","シンガポール"),("しゅんたくん","syunta@gmail","英語力"),
("ようへいくん","youhei@gmail","グルメ"),("げんとくん","gento@gmail","ロードオブザリング"),("かよさん","kayo@gmail","下着"),("ザキヤマ","zaki@gmail","紳士");

-- SELECT文
SELECT * FROM `survey` WHERE `content` LIKE "%です";

-- UPDATE文
UPDATE `survey` SET `content` = "セブ最高だぜ" WHERE `content` = "%です";

-- DELETE文
DELETE FROM `survey` WHERE `content`="セブ最高だぜ";

