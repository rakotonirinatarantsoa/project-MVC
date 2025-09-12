<!-- syntaxe pour creer un evenement -->
<!-- CREATE TABLE `evenements` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nom` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`description` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`date` DATE NOT NULL,
	`lieu` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	`categories` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
; -->

<!-- CREATE TABLE `billets` (
	`id` INT NOT NULL AUTO_INCREMENT,
   `code_qr` VARCHAR(255) NOT NULL UNIQUE COLLATE 'utf8mb4_general_ci', -- QR unique
   `date_emission` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,        -- date auto
   `statut` ENUM('valide','utilisé','annulé','revendu') NOT NULL DEFAULT 'valide',
   `prix` DECIMAL(10,2) NOT NULL CHECK (`prix` >= 0),                  -- prix >= 0
   `mode_creation` ENUM('auto','manuel') NOT NULL DEFAULT 'auto',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
; -->

 <!-- CREATE TABLE `user_tickeko` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nom` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
; -->

