<?php
class Patient extends Database
{

    private $id;
    private $lastname;
    private $firstname;
    private $phone;
    private $mail;
    private $birthdate;

/**
 * Get the value of id
 */
    public function getId()
    {
        return $this->id;
    }

/**
 * Set the value of id
 *
 * @return  self
 */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

/**
 * Get the value of lastname
 */
    public function getLastname()
    {
        return $this->lastname;
    }

/**
 * Set the value of lastname
 *
 * @return  self
 */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

    }

/**
 * Get the value of firstname
 */
    public function getFirstname()
    {
        return $this->firstname;
    }

/**
 * Set the value of firstname
 *
 * @return  self
 */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

    }

/**
 * Get the value of phone
 */
    public function getPhone()
    {
        return $this->phone;
    }

/**
 * Set the value of phone
 *
 * @return  self
 */
    public function setPhone($phone)
    {
        $this->phone = $phone;

    }

/**
 * Get the value of mail
 */
    public function getMail()
    {
        return $this->mail;
    }

/**
 * Set the value of mail
 *
 * @return  self
 */
    public function setMail($mail)
    {
        $this->mail = $mail;

    }

    /**
     * Get the value of birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function addPatient()
    {

        $pdoQuery = "INSERT INTO patients (firstname, lastname, birthdate, phone, mail) VALUES
        (:lastname,:firstname,:birthdate,:phone,:mail)";

        $pdoResult = $this->db->prepare($pdoQuery);
        $pdoResult->bindValue(':lastname', $this->getLastname(), PDO::PARAM_STR);
        $pdoResult->bindValue(':firstname', $this->getFirstname(), PDO::PARAM_STR);
        $pdoResult->bindValue(':birthdate', $this->getBirthdate(), PDO::PARAM_STR);
        $pdoResult->bindValue(':phone', $this->getPhone(), PDO::PARAM_STR);
        $pdoResult->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);

        if ($pdoResult->execute()) {
            header('location: ../views/liste-patient.php');
        } else {
            echo 'erreur';
        }

    }

    public function listPatient()
    {
        $listPatient = $this->db->query("SELECT * FROM patients");
        $PatientList = $listPatient->fetchAll();
        return $PatientList;
    }

    public function eachPatient()
    {
        $eachPatient = $this->db->prepare("SELECT *, appointments.id AS idAppointment FROM patients LEFT JOIN appointments ON patients.id = appointments.idPatients WHERE patients.id = :id");
        $eachPatient->bindValue(':id', $this->getId(), PDO::PARAM_INT);
        if ($eachPatient->execute()) {
            $EachPatient = $eachPatient->fetchAll();
            return $EachPatient; // return un tableau associatif
        }
    }

    public function uploadPatient()
    {
        $uploadPatient = $this->db->prepare("UPDATE patients SET firstname = :firstname, lastname = :lastname, birthdate = :birthdate, phone = :phone, mail = :mail WHERE id = :id ");
        $uploadPatient->bindValue(':id', $this->getId(), PDO::PARAM_INT);
        $uploadPatient->bindValue(':lastname', $this->getLastname(), PDO::PARAM_STR);
        $uploadPatient->bindValue(':firstname', $this->getFirstname(), PDO::PARAM_STR);
        $uploadPatient->bindValue(':birthdate', $this->getBirthdate(), PDO::PARAM_STR);
        $uploadPatient->bindValue(':phone', $this->getPhone(), PDO::PARAM_STR);
        $uploadPatient->bindValue(':mail', $this->getMail(), PDO::PARAM_STR);

        if ($uploadPatient->execute()) {
            return true;
        } else {
            return false;
        }
    }
        public function deletePatient() {

            $deletePatient = $this->db->prepare("DELETE FROM patients
            WHERE id = :id");
            $deletePatient->bindValue(':id', $this->getId(), PDO::PARAM_INT);
            if ($deletePatient->execute()) {
                return true;
            } else {
                echo 'erreur';
            }




        }

    
    
    
}
