
CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(256) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `articles` (`id`, `slug`, `title`, `content`)
VALUES
	(1,'welkom','Welkom op de website van Graduaat Programmeren','<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quae hic ipsa aut quisquam dolorem quidem, placeat, sunt dolore minima molestias magni asperiores officiis ut, reprehenderit similique error! Maiores, consequuntur.</p>\n<p>Nemo quod dignissimos illum rem excepturi enim sapiente et tenetur, similique a dolores qui itaque dolor repudiandae magnam corporis fuga! Repudiandae totam vitae ea eaque veniam voluptatem quibusdam, odit optio.</p>\n<p>Rem fuga illum hic debitis perspiciatis! Culpa modi ex autem in nostrum placeat consequatur explicabo suscipit ipsum dolorum neque voluptatibus, pariatur dolorem reiciendis numquam labore deleniti temporibus adipisci vel quos?</p>\n<p>Non possimus pariatur recusandae veritatis sequi minus dolorum, corrupti, suscipit impedit, commodi atque id. Dolore, a! Sapiente, architecto deleniti quibusdam repellendus, debitis dolorum hic maiores perspiciatis nulla aut vitae sed!</p>\n'),
	(2,'2e-blogbericht','Dit is mij 2e bericht','<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quae hic ipsa aut quisquam dolorem quidem, placeat, sunt dolore minima molestias magni asperiores officiis ut, reprehenderit similique error! Maiores, consequuntur.</p>\n<p>Nemo quod dignissimos illum rem excepturi enim sapiente et tenetur, similique a dolores qui itaque dolor repudiandae magnam corporis fuga! Repudiandae totam vitae ea eaque veniam voluptatem quibusdam, odit optio.</p>\n<p>Rem fuga illum hic debitis perspiciatis! Culpa modi ex autem in nostrum placeat consequatur explicabo suscipit ipsum dolorum neque voluptatibus, pariatur dolorem reiciendis numquam labore deleniti temporibus adipisci vel quos?</p>\n<p>Non possimus pariatur recusandae veritatis sequi minus dolorum, corrupti, suscipit impedit, commodi atque id. Dolore, a! Sapiente, architecto deleniti quibusdam repellendus, debitis dolorum hic maiores perspiciatis nulla aut vitae sed!</p>\n')
;



