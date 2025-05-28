-- Base de données : gestionproduit_v2

CREATE DATABASE IF NOT EXISTS gestionproduit_v2;
USE gestionproduit_v2;

CREATE TABLE Categorie (
    idCategorie INT AUTO_INCREMENT PRIMARY KEY,
    denomination VARCHAR(100),
    description TEXT
);

CREATE TABLE Produit (
    reference INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(100),
    prixUnitaire FLOAT,
    dateAchat DATE,
    photoProduit VARCHAR(255),
    idCategorie INT,
    FOREIGN KEY (idCategorie) REFERENCES Categorie(idCategorie)
);

CREATE TABLE CompteProprietaire (
    loginProp VARCHAR(50) PRIMARY KEY,
    motPasse VARCHAR(100),
    nom VARCHAR(100),
    prenom VARCHAR(100)
);

-- Données d'exemple
INSERT INTO CompteProprietaire VALUES ('admin', 'admin123', 'Dupont', 'Jean');
INSERT INTO Categorie (denomination, description) VALUES ('Informatique', 'Produits informatiques');
