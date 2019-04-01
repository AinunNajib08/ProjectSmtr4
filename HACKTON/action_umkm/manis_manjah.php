CREATE TABLE `products` (
  `ID` INT(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(250) NOT NULL,
  `email` varchar (100) NOT NULL,
  `no_hp` varchar (12) NOT NULL,
  `password` varchar (200)NOT NULL,
  `level` VARCHAR (4) NOT NULL,
  `sektor` ENUM ('pertanian','pendidikan','ind_rumah','jasa','fashion','peternakan')NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1