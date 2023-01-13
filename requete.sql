CREATE TABLE categorie (
id_categorie INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom_categorie VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO `categorie` (`nom_categorie`)                     /* `utilisateurs` (`nom`,`prénom`,`email`,`numéro`,`etc....`) */
VALUES 
('Outils'),                                              /* ('Véron','Léandre','Léandre.Véron@gmail.com','0603365726',etc....) */
('Design'),
('Front-end'),
('HTML'),
('CSS'),
('JAVASCRIPT'),
('BACKEND')    ;     

INSERT INTO 'liens'
VALUES
('nom_liens'),
('url_liens'), 
('id_categorie');












CREATE TABLE liens (

    id_liens INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom_liens VARCHAR(100),
    url_liens VARCHAR(255) NOT NULL UNIQUE
    );
    
ALTER TABLE liens
ADD id_categorie INT NULL;

ALTER TABLE liens
ADD FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
ON DELETE CASCADE;