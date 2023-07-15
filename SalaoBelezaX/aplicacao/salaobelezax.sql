
CREATE DATABASE salaobelezax;
USE salaobelezax;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `senha_user` varchar(255) NOT NULL,
  `adm_user` boolean NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id_user`, `nome_user`, `email_user`, `senha_user`, `adm_user`) VALUES (NULL, 'admin', 'admin@gmail.com', MD5('admin'), '1');
