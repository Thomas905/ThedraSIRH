CREATE TABLE `prospects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `prenom_prospect` varchar(255) DEFAULT NULL,
  `nom_prospect` varchar(255) DEFAULT NULL,
  `email_prospect` varchar(255) DEFAULT NULL,
  `telephone_prospect` varchar(255) DEFAULT NULL,
  `fonction_prospect` varchar(255) DEFAULT NULL,
  `interet` varchar(255) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;