-- Création de la base de données
CREATE DATABASE IF NOT EXISTS gestionemprunt_v2;
USE gestionemprunt_v2;

-- Table Livre
CREATE TABLE Livre (
    Isbn VARCHAR(20) PRIMARY KEY,
    Titre VARCHAR(100) NOT NULL,
    Auteur VARCHAR(100) NOT NULL
);

-- Table Emprunt
CREATE TABLE Emprunt (
    Id_Emprunt INT AUTO_INCREMENT PRIMARY KEY,
    Cin VARCHAR(20) NOT NULL,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    Tel VARCHAR(20) NOT NULL,
    date_emprunt DATE NOT NULL,
    isbn_livre VARCHAR(20) NOT NULL,
    FOREIGN KEY (isbn_livre) REFERENCES Livre(Isbn) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Insertion de quelques livres pour les tests
INSERT INTO Livre (Isbn, Titre, Auteur) VALUES
('978-2-1234-5678-9', 'Le Petit Prince', 'Antoine de Saint-Exupéry'),
('978-0-9876-5432-1', '1984', 'George Orwell'),
('978-1-2345-6789-0', 'L\'Étranger', 'Albert Camus');


-- Insertion de quelques emprunts
INSERT INTO Emprunt (Cin, Nom, Prenom, Tel, date_emprunt, isbn_livre) VALUES
('BB123456', 'El Fassi', 'Youssef', '06 123-456-78', '2025-05-10', '978-2-1234-5678-9'),
('AA987654', 'Bennani', 'Sara', '06 234-567-89', '2025-05-14', '978-0-9876-5432-1'),
('CC456789', 'Karim', 'Nadia', '06 345-678-90', '2025-05-20', '978-1-2345-6789-0');
