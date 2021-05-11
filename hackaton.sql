SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE DATABASE hackaton;
USE hackaton;

CREATE TABLE `movie` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `type`VARCHAR(100) NOT NULL,
  `director` VARCHAR(100),
  `actors` VARCHAR(100) NOT NULL,
  `release_date` DATE NOT NULL,
  `url_trailer` VARCHAR(2083) NOT NULL,
  `url_image` VARCHAR(2083) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `movie` (`name`, `type`, `director`, `actors`, `release_date`, `url_trailer`, `url_image`)
VALUES ("Archive", "sci-fi", "Gavin Rothery", "Theo James, Stacy Martin", "2020-02-03", "https://www.youtube.com/watch?v=DtrjCp5f_TE", "Archive.jpeg"),
("Wall-e", "sci-fi", "Andrew Stanton", "Ben Burtt, Elissa Knight", "2008-06-23", "https://www.youtube.com/watch?v=CZ1CATNbXg0", "wall-e.png"),
('The Terminator', "sci-fi", "James Cameron", "Arnold Schwarzenegger, Michael Biehn", "1984-10-26", "https://www.youtube.com/watch?v=k64P4l2Wmeg", "the_terminator_still.jpeg"),
("I Am Mother", "thriller", "	Grant Sputore", "Clara Rugaard, Hilary Swank", "2019-01-25", "https://www.youtube.com/watch?v=N5BKctcZxrM", "IAmMother.jpeg"),
("Transformers", "sci-fi", "Michael Bay", "Peter Cullen, Shia LaBeouf", "2007-07-25", "https://www.youtube.com/watch?v=dxQxgAfNzyE", "transformers.jpeg"),
("Chappie", "sci-fi", "	Neill Blomkamp", "Sharlto Copley, Yolandi Visser", "2015-03-04", "https://www.youtube.com/watch?v=lyy7y0QOK-0", "Chappie.jpeg"),
("Ex Machina", "sci-fi", "Alex Garland", "Oscar Isaac, Alicia Vikander", "2014-12-16", "https://www.youtube.com/watch?v=EoQuVnKhxaM", "ex-machina"),
("A.I Artificial Intelligence", "sci-fi drama", "Steven Spielberg", "Haley Joel Osment, Jude Law", "2001-06-29", "https://www.youtube.com/watch?v=_19pRsZRiz4", "A-I.jpeg"),
("I,Robot", "sci-fi", "	Alex Proyas", "Will Smith, Alan Tudyk", "2004-07-28", "https://www.youtube.com/watch?v=7Dlo-VB0-HI", "i-robot.jpeg"),
("Star Wars", "sci-fantasy", "George Lucas", "Mark Hamill, Carrie Fisher", "1977-10-19", "https://www.youtube.com/watch?v=XHk5kCIiGoM", "star-wars.jpeg");

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `description` VARCHAR(2083) NOT NULL,
  `location` VARCHAR(100) NOT NULL,
  `url_image` VARCHAR(2083),
  PRIMARY KEY (`id`)
);

INSERT INTO `users` (`name`, `description`, `location`, `url_image`)
VALUES ("Perseverance", "Hello! My name is Perseverance and I am an American Rover who landed on mars this year (2021). I love watching sci-fi movies and pop-corn", "Jezero Crater", "Perseverance.jpeg"),
("Curiosity", "Hi bros, I am Curiosity. I am from America. I love Bruce Springsteen cause I am born in the U.S.A. I am here since 2012", "Gale Crater", "Curiosity.jpeg"),
("Ingenuity", "Hi guys, my name is Ingenuity, I don't really like to speak about me so 'have fun i-brothers !!'", "Jezero Crater", "Ingenuity.jpeg"),
("InSight", "Hello, I am InSight, I arrived on mars in 2018, I am 1530,01 pounds. I am proud to be american", "Elysium Planitia", "InSight.jpeg"),
("Schiaparelli", "dЗдравствуйте, я Скиапарелли и я русский. Я люблю знакомиться с новыми роботами. Я на марсе с 2016 года.", "Meridiani Planum", "Schiaparelli.jpeg");













/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
