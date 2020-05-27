<?php


class DobrasCutaneasVO{
    private $id, $peitoral, $axilar_media, $abdominal,
            $coxa, $bicipital, $supra_iliaca, $subscapular,
            $tricipital;

    /**
     * DobrasCutaneasVO constructor.
     * @param $id
     * @param $peitoral
     * @param $axilar_media
     * @param $abdominal
     * @param $coxa
     * @param $bicipital
     * @param $supra_iliaca
     * @param $subscapular
     * @param $tricipital
     */
    public function __construct($id, $peitoral, $axilar_media, $abdominal, $coxa, $bicipital, $supra_iliaca, $subscapular, $tricipital)
    {
        $this->id = $id;
        $this->peitoral = $peitoral;
        $this->axilar_media = $axilar_media;
        $this->abdominal = $abdominal;
        $this->coxa = $coxa;
        $this->bicipital = $bicipital;
        $this->supra_iliaca = $supra_iliaca;
        $this->subscapular = $subscapular;
        $this->tricipital = $tricipital;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPeitoral()
    {
        return $this->peitoral;
    }

    /**
     * @param mixed $peitoral
     */
    public function setPeitoral($peitoral)
    {
        $this->peitoral = $peitoral;
    }

    /**
     * @return mixed
     */
    public function getAxilarMedia()
    {
        return $this->axilar_media;
    }

    /**
     * @param mixed $axilar_media
     */
    public function setAxilarMedia($axilar_media)
    {
        $this->axilar_media = $axilar_media;
    }

    /**
     * @return mixed
     */
    public function getAbdominal()
    {
        return $this->abdominal;
    }

    /**
     * @param mixed $abdominal
     */
    public function setAbdominal($abdominal)
    {
        $this->abdominal = $abdominal;
    }

    /**
     * @return mixed
     */
    public function getCoxa()
    {
        return $this->coxa;
    }

    /**
     * @param mixed $coxa
     */
    public function setCoxa($coxa)
    {
        $this->coxa = $coxa;
    }

    /**
     * @return mixed
     */
    public function getBicipital()
    {
        return $this->bicipital;
    }

    /**
     * @param mixed $bicipital
     */
    public function setBicipital($bicipital)
    {
        $this->bicipital = $bicipital;
    }

    /**
     * @return mixed
     */
    public function getSupraIliaca()
    {
        return $this->supra_iliaca;
    }

    /**
     * @param mixed $supra_iliaca
     */
    public function setSupraIliaca($supra_iliaca)
    {
        $this->supra_iliaca = $supra_iliaca;
    }

    /**
     * @return mixed
     */
    public function getSubscapular()
    {
        return $this->subscapular;
    }

    /**
     * @param mixed $subscapular
     */
    public function setSubscapular($subscapular)
    {
        $this->subscapular = $subscapular;
    }

    /**
     * @return mixed
     */
    public function getTricipital()
    {
        return $this->tricipital;
    }

    /**
     * @param mixed $tricipital
     */
    public function setTricipital($tricipital)
    {
        $this->tricipital = $tricipital;
    }



}