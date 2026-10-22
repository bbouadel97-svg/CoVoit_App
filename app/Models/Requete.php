<?php
declare(strict_types=1);

class Requete
{
    public function __construct(private PDO $connection)
    {
    }

    public function getRequete1(): array
    {
        return $this->connection
            ->query('SELECT nom, prenom, email FROM Salarie ORDER BY nom ASC, prenom ASC')
            ->fetchAll();
    }

    public function getRequete2(): array
    {
        return $this->connection
            ->query('SELECT nom, prenom, email FROM Salarie ORDER BY nom ASC LIMIT 3')
            ->fetchAll();
    }

    public function getRequete3(): array
    {
        return $this->connection
            ->query('SELECT s.nom, s.prenom, s.email, serv.nom AS nom_service FROM Salarie s INNER JOIN Service serv ON s.id_service = serv.id_service WHERE serv.id_service = 2')
            ->fetchAll();
    }

    public function getRequete4(): array
    {
        return $this->connection
            ->query('SELECT immatriculation, marque, modele, nombrePlaces FROM Voiture WHERE nombrePlaces >= 5')
            ->fetchAll();
    }

    public function getRequete5(): array
    {
        return $this->connection
            ->query("SELECT nom, prenom, email FROM Salarie WHERE nom LIKE 'M%'")
            ->fetchAll();
    }

    public function getRequete6(): array
    {
        return $this->connection
            ->query('SELECT s.nom, s.prenom, s.email FROM Salarie s LEFT JOIN Voiture v ON s.id_salarie = v.id_salarie WHERE v.id_voiture IS NULL')
            ->fetchAll();
    }

    public function getRequete7(): array
    {
        return $this->connection
            ->query('SELECT COUNT(*) AS total_salaries FROM Salarie')
            ->fetchAll();
    }

    public function getRequete8(): array
    {
        return $this->connection
            ->query('SELECT serv.nom AS nom_service, COUNT(s.id_salarie) AS nombre_salaries FROM Service serv LEFT JOIN Salarie s ON serv.id_service = s.id_service GROUP BY serv.id_service, serv.nom')
            ->fetchAll();
    }

    public function getRequete9(): array
    {
        return $this->connection
            ->query('SELECT s.nom, s.prenom, v.marque, v.modele, v.immatriculation FROM Salarie s INNER JOIN Voiture v ON s.id_salarie = v.id_salarie')
            ->fetchAll();
    }

    public function getRequete10(): array
    {
        return $this->connection
            ->query('SELECT c.id_covoiturage, c.`date`, c.heureDepart, COUNT(p.id_reservation) AS nb_demandes FROM Covoiturage c LEFT JOIN Participation p ON c.id_covoiturage = p.id_covoiturage GROUP BY c.id_covoiturage, c.`date`, c.heureDepart')
            ->fetchAll();
    }
}
