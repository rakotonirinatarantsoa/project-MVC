-- table evenements
CREATE TABLE `evenements` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`titre` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`description` TEXT NOT NULL COLLATE 'utf8mb4_general_ci',
	`date` DATE NOT NULL,
	`lieu` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`categorie` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`image` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`places` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`prix` INT NOT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=13
;

--table utilisateurs
CREATE TABLE `utilisateurs` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Nom` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Prenom` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Email` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Password` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`Postal` INT NOT NULL DEFAULT '0',
	`Ville` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
AUTO_INCREMENT=25
;

--table reservation
CREATE TABLE `reservations` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nombre_personnes` INT NOT NULL,
	`id_evenement` INT NOT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=11
;

