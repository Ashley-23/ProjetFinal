/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ gestionecole /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE gestionecole;

DROP TABLE IF EXISTS admins;
CREATE TABLE `admins` (
  `idAdmin` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissAdmin` date NOT NULL,
  `sexeAdmin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhotoAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photoAdmin.jpg',
  `adresseAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeAdmin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idProfil` bigint unsigned NOT NULL,
  `idEtablissement` bigint unsigned NOT NULL,
  PRIMARY KEY (`idAdmin`),
  UNIQUE KEY `admins_login_unique` (`login`),
  UNIQUE KEY `admins_emailadmin_unique` (`emailAdmin`),
  UNIQUE KEY `admins_telephoneadmin_unique` (`telephoneAdmin`),
  KEY `admins_idprofil_foreign` (`idProfil`),
  KEY `admins_idetablissement_foreign` (`idEtablissement`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS annee_scolaires;
CREATE TABLE `annee_scolaires` (
  `idAnneeScolaire` bigint unsigned NOT NULL AUTO_INCREMENT,
  `AnneeScolaireInf` year NOT NULL,
  `AnneeScolaireSup` year NOT NULL,
  `idAnneeScolaireDesc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeAnneeScolaire` char(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idAnneeScolaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS bulletins;
CREATE TABLE `bulletins` (
  `idBulletin` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dateBulletin` date NOT NULL,
  `AuthentifieBulletin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeBulltin` char(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idMatiereMoyenne` bigint unsigned NOT NULL,
  `idEleve` bigint unsigned NOT NULL,
  PRIMARY KEY (`idBulletin`),
  KEY `bulletins_idmatieremoyenne_foreign` (`idMatiereMoyenne`),
  KEY `bulletins_ideleve_foreign` (`idEleve`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS classe_matieres;
CREATE TABLE `classe_matieres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idClasse` bigint unsigned NOT NULL,
  `idMatiere` bigint unsigned NOT NULL,
  `idProfesseur` bigint unsigned NOT NULL,
  `coef` int NOT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classe_matieres_idclasse_idmatiere_unique` (`idClasse`,`idMatiere`),
  KEY `classe_matieres_idmatiere_foreign` (`idMatiere`),
  KEY `classe_matieres_idprofesseur_foreign` (`idProfesseur`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS classes;
CREATE TABLE `classes` (
  `idClasse` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomClasse` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeClasse` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeClasse` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idClasse`),
  UNIQUE KEY `classes_nomclasse_typeclasse_unique` (`nomClasse`,`typeClasse`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS eleves;
CREATE TABLE `eleves` (
  `idEleve` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissEleve` date NOT NULL,
  `sexeEleve` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhotoEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photoEleve.jpg',
  `adresseEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeEleve` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idRelative` bigint unsigned DEFAULT NULL,
  `idClasse` bigint unsigned NOT NULL,
  `idProfil` bigint unsigned DEFAULT NULL,
  `idBulletin` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`idEleve`),
  UNIQUE KEY `eleves_login_unique` (`login`),
  UNIQUE KEY `eleves_emaileleve_unique` (`emailEleve`),
  UNIQUE KEY `eleves_telephoneeleve_unique` (`telephoneEleve`),
  KEY `eleves_idrelative_foreign` (`idRelative`),
  KEY `eleves_idclasse_foreign` (`idClasse`),
  KEY `eleves_idprofil_foreign` (`idProfil`),
  KEY `eleves_idbulletin_foreign` (`idBulletin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS enseignements;
CREATE TABLE `enseignements` (
  `idEnseignement` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descEnseignement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeEnseignement` char(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idEpreuveMatiereNote` bigint unsigned NOT NULL,
  `idProfesseur` bigint unsigned NOT NULL,
  PRIMARY KEY (`idEnseignement`),
  KEY `enseignements_idepreuvematierenote_foreign` (`idEpreuveMatiereNote`),
  KEY `enseignements_idprofesseur_foreign` (`idProfesseur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS epreuve_matiere_notes;
CREATE TABLE `epreuve_matiere_notes` (
  `idEpreuveMatiereNote` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descEpreuveMatiereNote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeEpreuveMatiereNote` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idEpreuve` bigint unsigned NOT NULL,
  `idMatiere` bigint unsigned NOT NULL,
  `idNote` bigint unsigned NOT NULL,
  PRIMARY KEY (`idEpreuveMatiereNote`),
  KEY `epreuve_matiere_notes_idepreuve_foreign` (`idEpreuve`),
  KEY `epreuve_matiere_notes_idmatiere_foreign` (`idMatiere`),
  KEY `epreuve_matiere_notes_idnote_foreign` (`idNote`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS epreuves;
CREATE TABLE `epreuves` (
  `idEpreuve` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomEpreuve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateEpreuve` date NOT NULL,
  `activeEpreuve` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idEpreuve`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS etablissements;
CREATE TABLE `etablissements` (
  `idEtablissement` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomEtablissement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresseEtablissement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailEtablissement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneEtablissement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeEtablissement` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idProfil` bigint unsigned DEFAULT NULL,
  `idSuperAdmin` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`idEtablissement`),
  UNIQUE KEY `etablissements_login_unique` (`login`),
  UNIQUE KEY `etablissements_telephoneetablissement_unique` (`telephoneEtablissement`),
  KEY `etablissements_idprofil_foreign` (`idProfil`),
  KEY `etablissements_idsuperadmin_foreign` (`idSuperAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS failed_jobs;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS frais_scolaires;
CREATE TABLE `frais_scolaires` (
  `idFraisScolaire` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dateFraisScolaire` date NOT NULL,
  `montantFraiscolaire` double(12,2) unsigned NOT NULL,
  `soldeFraisScolaire` double(12,2) unsigned NOT NULL,
  `activeFraisScolaire` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idTypeFrais` bigint unsigned NOT NULL,
  `idInscription` bigint unsigned NOT NULL,
  `idRelative` bigint unsigned NOT NULL,
  PRIMARY KEY (`idFraisScolaire`),
  KEY `frais_scolaires_idtypefrais_foreign` (`idTypeFrais`),
  KEY `frais_scolaires_idinscription_foreign` (`idInscription`),
  KEY `frais_scolaires_idrelative_foreign` (`idRelative`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS info_eleve_enseignements;
CREATE TABLE `info_eleve_enseignements` (
  `idInfoEleveEnseignement` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descInfoEleveEnseignement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeInfoEleveEnseignement` char(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idEpreuveMatiereNote` bigint unsigned NOT NULL,
  `idEnseignement` bigint unsigned NOT NULL,
  `idEleve` bigint unsigned NOT NULL,
  PRIMARY KEY (`idInfoEleveEnseignement`),
  KEY `info_eleve_enseignements_idepreuvematierenote_foreign` (`idEpreuveMatiereNote`),
  KEY `info_eleve_enseignements_idenseignement_foreign` (`idEnseignement`),
  KEY `info_eleve_enseignements_ideleve_foreign` (`idEleve`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS inscriptions;
CREATE TABLE `inscriptions` (
  `idInscription` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descInscription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeInscription` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idAnneeScolaire` bigint unsigned NOT NULL,
  `idEtablissement` bigint unsigned NOT NULL,
  `idClasse` bigint unsigned NOT NULL,
  `idFraisScolaire` bigint unsigned NOT NULL,
  PRIMARY KEY (`idInscription`),
  KEY `inscriptions_idanneescolaire_foreign` (`idAnneeScolaire`),
  KEY `inscriptions_idetablissement_foreign` (`idEtablissement`),
  KEY `inscriptions_idclasse_foreign` (`idClasse`),
  KEY `inscriptions_idfraisscolaire_foreign` (`idFraisScolaire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS matiere_moyenes;
CREATE TABLE `matiere_moyenes` (
  `idMatiereMoyenne` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descriptionMatiereMoyenne` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeMatiereMoyenne` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idMatiere` bigint unsigned NOT NULL,
  `idMoyenne` bigint unsigned NOT NULL,
  PRIMARY KEY (`idMatiereMoyenne`),
  KEY `matiere_moyenes_idmatiere_foreign` (`idMatiere`),
  KEY `matiere_moyenes_idmoyenne_foreign` (`idMoyenne`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS matieres;
CREATE TABLE `matieres` (
  `idMatiere` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomMatiere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeMatiere` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idMatiere`),
  UNIQUE KEY `matieres_nommatiere_unique` (`nomMatiere`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS migrations;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS moyennes;
CREATE TABLE `moyennes` (
  `idMoyenne` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ValeurMoyenne` double(4,2) unsigned NOT NULL,
  `rangMoyenne` int NOT NULL,
  `activeMoyenne` char(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `idNote` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idMoyenne`),
  KEY `moyennes_idnote_foreign` (`idNote`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS notes;
CREATE TABLE `notes` (
  `idNote` bigint unsigned NOT NULL AUTO_INCREMENT,
  `note1` double(4,2) unsigned DEFAULT '0.00',
  `note2` double(4,2) unsigned DEFAULT '0.00',
  `note3` double(4,2) unsigned DEFAULT '0.00',
  `activeNote` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idEleve` bigint unsigned NOT NULL,
  `id` bigint unsigned NOT NULL,
  PRIMARY KEY (`idNote`),
  UNIQUE KEY `notes_ideleve_id_unique` (`idEleve`,`id`),
  KEY `notes_id_foreign` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS password_resets;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS permission_role;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS permission_user;
CREATE TABLE `permission_user` (
  `permission_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS permissions;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS personal_access_tokens;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS professeurs;
CREATE TABLE `professeurs` (
  `idProfesseur` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomProfesseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomProfesseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissProfesseur` date NOT NULL,
  `sexeProfesseur` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailProfesseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordProfesseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneProfesseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhotoProfesseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photoProfesseur.jpg',
  `adresseProfesseur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeProfesseur` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idProfil` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`idProfesseur`),
  UNIQUE KEY `professeurs_login_unique` (`login`),
  UNIQUE KEY `professeurs_emailprofesseur_unique` (`emailProfesseur`),
  UNIQUE KEY `professeurs_telephoneprofesseur_unique` (`telephoneProfesseur`),
  KEY `professeurs_idprofil_foreign` (`idProfil`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS profils;
CREATE TABLE `profils` (
  `idProfil` bigint unsigned NOT NULL AUTO_INCREMENT,
  `profilDesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idProfil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS relation_eleves;
CREATE TABLE `relation_eleves` (
  `idRelationEleve` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descRelationEleve` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeRelationEleve` char(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idRelative` bigint unsigned NOT NULL,
  `idEleve` bigint unsigned NOT NULL,
  PRIMARY KEY (`idRelationEleve`),
  KEY `relation_eleves_idrelative_foreign` (`idRelative`),
  KEY `relation_eleves_ideleve_foreign` (`idEleve`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS relatives;
CREATE TABLE `relatives` (
  `idRelative` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissRelative` date NOT NULL,
  `sexeRelative` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhotoRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photoRelative.jpg',
  `adresseRelative` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeRelative` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idProfil` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`idRelative`),
  UNIQUE KEY `relatives_login_unique` (`login`),
  UNIQUE KEY `relatives_emailrelative_unique` (`emailRelative`),
  UNIQUE KEY `relatives_telephonerelative_unique` (`telephoneRelative`),
  KEY `relatives_idprofil_foreign` (`idProfil`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS role_user;
CREATE TABLE `role_user` (
  `role_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS roles;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS super_admins;
CREATE TABLE `super_admins` (
  `idSuperAdmin` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomSuperAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomSuperAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissSuperAdmin` date NOT NULL,
  `sexeSuperAdmin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailSuperAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordSuperAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephoneSuperAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhotoSuperAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photoSuperAdmin.jpg',
  `adresseSuperAdmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeSuperAdmin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idProfil` bigint unsigned NOT NULL,
  PRIMARY KEY (`idSuperAdmin`),
  UNIQUE KEY `super_admins_login_unique` (`login`),
  UNIQUE KEY `super_admins_emailsuperadmin_unique` (`emailSuperAdmin`),
  UNIQUE KEY `super_admins_telephonesuperadmin_unique` (`telephoneSuperAdmin`),
  KEY `super_admins_idprofil_foreign` (`idProfil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS type_frais;
CREATE TABLE `type_frais` (
  `idTypeFrais` bigint unsigned NOT NULL AUTO_INCREMENT,
  `typeFraisDesc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeTypeFrais` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idTypeFrais`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` date NOT NULL,
  `sexe` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 't',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_unique` (`login`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




INSERT INTO classe_matieres(id,idClasse,idMatiere,idProfesseur,coef,active,created_at,updated_at) VALUES(1,1,1,2,2,'t','2021-09-17 08:58:07','2021-09-17 08:58:07'),(2,1,2,1,2,'t','2021-09-17 10:06:07','2021-09-17 10:06:07'),(3,1,3,2,2,'t','2021-09-17 11:25:33','2021-09-17 11:25:33'),(4,1,4,3,2,'t','2021-09-17 11:47:03','2021-09-17 11:47:03'),(5,2,4,2,2,'t','2021-09-17 11:53:14','2021-09-17 11:53:14'),(6,2,1,1,2,'t','2021-09-17 12:45:29','2021-09-17 12:45:29'),(7,2,2,1,2,'t','2021-09-18 16:13:45','2021-09-18 16:13:45');

INSERT INTO classes(idClasse,nomClasse,typeClasse,activeClasse,created_at,updated_at) VALUES(1,'sixieme','A','t','2021-09-17 08:50:51','2021-09-17 08:50:51'),(2,'cinquieme','B','t','2021-09-17 08:51:07','2021-09-17 08:51:07');

INSERT INTO eleves(idEleve,nomEleve,prenomEleve,login,dateNaissEleve,sexeEleve,emailEleve,passwordEleve,telephoneEleve,PhotoEleve,adresseEleve,activeEleve,created_at,updated_at,idRelative,idClasse,idProfil,idBulletin) VALUES(1,'SATCHIVI','Yannick','yannick_satchivi','1996-06-24','m','yannicksatchivi@gmail.com','$2y$10$tXiE4HH5th4bzYt.D8sqQO7P8ApAmn/AknaGFisiGgJgCAS9d3W6m','93131337','photoEleve.jpg','Netadis','t','2021-09-17 10:02:39','2021-09-17 10:02:39',NULL,1,NULL,NULL),(2,'SATCHIVI','Yolande','yolande_satchivi','2012-03-13','f','yolandesatchivi@gmail.com','$2y$10$6LTHvkeez7Bh4YSfq/rah.J8SL9SR7ddg51QAGmTt3pBzCm3hohZG','50604070','photoEleve.jpg','Netadis','t','2021-09-17 12:44:51','2021-09-18 16:10:40',NULL,2,NULL,NULL),(3,'TOMETY','Assion','assion_tomety','1995-03-25','m','assiontomety@gmail.com','$2y$10$cuMBIOk6EQisa4xA0hykGO5B65wiz2hVeg6or3mbxCA2sQJv5RZSO','92100144','photoEleve.jpg','Attiegou','t','2021-09-17 14:33:37','2021-09-17 14:33:37',NULL,1,NULL,NULL),(4,'AWUDI','Laurent','laurent_awudi','1996-08-11','m','laurentawudji@gmail.com','$2y$10$x8srvvZo40tYMBq4MhIsKOpDI56zFgllbUlfcf8xnC5kN21fCJn9K','92109801','photoEleve.jpg','Adidogome','t','2021-09-17 14:44:28','2021-09-17 14:44:28',NULL,2,NULL,NULL);




INSERT INTO etablissements(idEtablissement,nomEtablissement,login,adresseEtablissement,emailEtablissement,password,telephoneEtablissement,activeEtablissement,created_at,updated_at,idProfil,idSuperAdmin) VALUES(1,'Saint Joseph','St Jo','Nukafu','saintjoseph@gmail.com','$2y$10$NVMVzuTp145fqLKppJiLq.2rWGXawe3jVOlm5kPzEA8bcT5KADeTK','22203060','t','2021-09-20 10:44:49','2021-09-20 10:44:49',NULL,NULL);






INSERT INTO matieres(idMatiere,nomMatiere,activeMatiere,created_at,updated_at) VALUES(1,'Anglais','t','2021-09-17 08:51:21','2021-09-17 10:56:01'),(2,'Mathematiques','t','2021-09-17 08:51:34','2021-09-17 08:51:34'),(3,'physiques','t','2021-09-17 11:23:25','2021-09-17 11:23:25'),(4,'SVT','t','2021-09-17 11:44:17','2021-09-17 11:44:17');

INSERT INTO migrations(id,migration,batch) VALUES(1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_08_26_095737_create_profils_table',1),(6,'2021_08_26_120439_create_admins_table',1),(7,'2021_08_26_120459_create_super_admins_table',1),(8,'2021_08_26_125138_create_relatives_table',1),(9,'2021_08_26_143456_create_epreuves_table',1),(10,'2021_08_26_144229_create_notes_table',1),(11,'2021_08_26_150655_create_moyennes_table',1),(12,'2021_08_26_152104_create_professeurs_table',1),(13,'2021_08_26_153355_create_annee_scolaires_table',1),(14,'2021_08_26_154319_create_etablissements_table',1),(15,'2021_08_26_155218_create_type_frais_table',1),(16,'2021_08_26_155932_create_frais_scolaires_table',1),(17,'2021_08_26_161050_create_matieres_table',1),(18,'2021_08_26_161756_create_matiere_moyenes_table',1),(19,'2021_08_26_163332_create_epreuve_matiere_notes_table',1),(20,'2021_08_26_164147_create_classes_table',1),(21,'2021_08_26_165157_create_inscriptions_table',1),(22,'2021_08_26_170056_create_enseignements_table',1),(23,'2021_08_26_170738_create_info_eleve_enseignements_table',1),(24,'2021_08_26_171542_create_bulletins_table',1),(25,'2021_08_26_172150_create_eleves_table',1),(26,'2021_08_26_173237_create_relation_eleves_table',1),(27,'2021_09_02_084313_laratrust_setup_tables',1),(28,'2021_09_10_120556_create_classe_matieres_table',1);


INSERT INTO notes(idNote,note1,note2,note3,activeNote,created_at,updated_at,idEleve,id) VALUES(1,7.00,8.00,9.00,'t','2021-09-17 11:34:44','2021-09-18 16:27:18',1,3),(2,15.00,8.00,9.00,'t','2021-09-17 11:37:40','2021-09-18 18:32:31',1,1),(3,7.00,8.00,9.00,'t','2021-09-17 11:39:41','2021-09-18 16:27:18',1,2),(4,7.00,8.00,9.00,'t','2021-09-17 11:47:38','2021-09-18 16:27:18',1,4),(5,6.00,8.00,9.00,'t','2021-09-18 16:17:09','2021-09-18 16:41:09',2,7),(6,17.00,8.00,9.00,'t','2021-09-18 16:18:21','2021-09-18 18:29:21',2,5),(7,NULL,4.00,NULL,'t','2021-09-18 18:34:38','2021-09-18 18:36:30',3,1);


INSERT INTO permission_role(permission_id,role_id) VALUES(1,1),(1,2),(2,1),(2,2),(3,1),(3,2),(4,1),(4,2),(5,1),(6,1),(7,1),(8,1),(9,1),(9,2),(9,3),(9,4),(9,5),(9,6),(10,1),(10,2),(10,3),(10,4),(10,5),(10,6);


INSERT INTO permissions(id,name,display_name,description,created_at,updated_at) VALUES(1,'users-create','Create Users','Create Users','2021-09-16 18:38:42','2021-09-16 18:38:42'),(2,'users-read','Read Users','Read Users','2021-09-16 18:38:42','2021-09-16 18:38:42'),(3,'users-update','Update Users','Update Users','2021-09-16 18:38:42','2021-09-16 18:38:42'),(4,'users-delete','Delete Users','Delete Users','2021-09-16 18:38:42','2021-09-16 18:38:42'),(5,'payments-create','Create Payments','Create Payments','2021-09-16 18:38:42','2021-09-16 18:38:42'),(6,'payments-read','Read Payments','Read Payments','2021-09-16 18:38:42','2021-09-16 18:38:42'),(7,'payments-update','Update Payments','Update Payments','2021-09-16 18:38:42','2021-09-16 18:38:42'),(8,'payments-delete','Delete Payments','Delete Payments','2021-09-16 18:38:42','2021-09-16 18:38:42'),(9,'profile-read','Read Profile','Read Profile','2021-09-16 18:38:42','2021-09-16 18:38:42'),(10,'profile-update','Update Profile','Update Profile','2021-09-16 18:38:42','2021-09-16 18:38:42');


INSERT INTO professeurs(idProfesseur,nomProfesseur,prenomProfesseur,login,dateNaissProfesseur,sexeProfesseur,emailProfesseur,passwordProfesseur,telephoneProfesseur,PhotoProfesseur,adresseProfesseur,activeProfesseur,created_at,updated_at,idProfil) VALUES(1,'AGBODJAN','Eric','eric_agbodjan','6681-04-21','m','ericagbodjan@gmail.com','$2y$10$gOeEprNFkpPOqQOYWaWVnOUCWjAxSKPiBEaacefme/FixZz1LR13C','12478596','photoProfesseur.jpg','Baguida','t','2021-09-17 08:54:33','2021-09-17 08:54:33',NULL),(2,'SOSSOU-GAH','Ezechiel','eze_chiel','2001-10-22','m','ezchielsossougah@gmail.com','$2y$10$H.I0Sy7DyETxNvuTVP1ZT.e6Rf/IWUeA0IbmpAfYn3Ar8C70V9RAO','58964624','photoProfesseur.jpg','Baguida','t','2021-09-17 08:56:06','2021-09-17 08:56:06',NULL),(3,'LAWSON','Hellu-nadu','hellunadu_lawson','2003-06-05','f','hellunadulawson@gmail.com','$2y$10$1MLm5T7X5Itr.Ir1PLvU8OuZQXYjtqf25FW2fLcHIlIZt91Ud7IXW','12504736','photoProfesseur.jpg','Super ramco','t','2021-09-17 11:46:12','2021-09-17 11:46:12',NULL);



INSERT INTO relatives(idRelative,nomRelative,prenomRelative,login,typeRelative,dateNaissRelative,sexeRelative,emailRelative,passwordRelative,telephoneRelative,PhotoRelative,adresseRelative,activeRelative,created_at,updated_at,idProfil) VALUES(1,'SATCHIVI','Nicolas','nicolas_satchivi','','1965-12-08','m','nicolassatchivi@gmail.com','nicolassatchivi1234','90046627','photoRelative.jpg','Netadis','t',NULL,NULL,NULL),(2,'SATCHIVI','Nicolas','nicolas__satchivi','','1965-12-08','m','nicolassatchivi1@gmail.com','nicolassatchivi1234','90045511','photoRelative.jpg','Netadis','t',NULL,NULL,NULL);

INSERT INTO role_user(role_id,user_id,user_type) VALUES(1,1,'App\\Models\\User');

INSERT INTO roles(id,name,display_name,description,created_at,updated_at) VALUES(1,'superadmin','Superadmin','Superadmin','2021-09-16 18:38:42','2021-09-16 18:38:42'),(2,'admin','Admin','Admin','2021-09-16 18:38:42','2021-09-16 18:38:42'),(3,'eleve','Eleve','Eleve','2021-09-16 18:38:42','2021-09-16 18:38:42'),(4,'relative','Relative','Relative','2021-09-16 18:38:42','2021-09-16 18:38:42'),(5,'professeur','Professeur','Professeur','2021-09-16 18:38:42','2021-09-16 18:38:42'),(6,'etablissement','Etablissement','Etablissement','2021-09-16 18:38:42','2021-09-16 18:38:42');


INSERT INTO users(id,nom,prenom,login,datenaiss,sexe,email,email_verified_at,password,adresse,remember_token,active,created_at,updated_at) VALUES(1,'SATCHIVI','Kokoè Yasmine Ashley','ashley_satchivi','2002-01-23','f','ashleysatchivi@gmail.com',NULL,'$2y$10$xN.Q73GuiJDc9/jgngfvSe6DFb6t9hMw4DZkp0PJkVQdsMH0nt0Ym','Netadis',NULL,'t','2021-09-16 18:39:59','2021-09-16 18:39:59');