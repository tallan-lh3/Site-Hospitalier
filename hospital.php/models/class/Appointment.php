<?php
class Appointment extends Database
{
    private $id;
    private $datehour;
    private $idPatient;

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
     * Get the value of idPatient
     */
    public function getIdPatient()
    {
        return $this->idPatient;
    }

    /**
     * Set the value of idPatient
     *
     * @return  self
     */
    public function setIdPatient($idPatient)
    {
        $this->idPatient = $idPatient;

        return $this;
    }

    /**
     * Get the value of datehour
     */
    public function getDatehour()
    {
        return $this->datehour;
    }

    /**
     * Set the value of datehour
     *
     * @return  self
     */
    public function setDatehour($datehour)
    {
        $this->datehour = $datehour;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function addAppointment()
    {

        $pdoQuery = "INSERT INTO appointments (dateHour, idPatients) VALUES
        (:dateHour, :idPatients)";

        $pdoResult = $this->db->prepare($pdoQuery);
        $pdoResult->bindValue(':dateHour', $this->getDatehour(), PDO::PARAM_STR);
        $pdoResult->bindValue(':idPatients', $this->getIdPatient(), PDO::PARAM_INT);

        if ($pdoResult->execute()) {
            echo 'good';
        } else {
            echo 'erreur';
        }

    }

    public function listAppointment()
    { //select tout from rdv ou idPatient est egal a patient id
        $AppointmentList = $this->db->query('SELECT * FROM appointments INNER JOIN patients ON appointments.idPatients = patients.id');
        $listAppointment = $AppointmentList->fetchAll(PDO::FETCH_ASSOC);
        return $listAppointment;
    }

    public function deleteAppointment()
    {
        $deleteAppointment = $this->db->prepare('DELETE FROM appointments WHERE id = :id');
        $deleteAppointment->bindValue(':id', $this->getId(), PDO::PARAM_INT);
        if($deleteAppointment->execute()){
            return true;
        }
    }
}
