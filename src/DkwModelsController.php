<?php

namespace Makkinga\DkwModels;

class DkwModelsController
{
    protected $carModels;
    protected $carModelAdditions;
    protected $mopedModels;
    protected $mopedModelAdditions;
    protected $motorcycleModels;
    protected $motorcycleModelAdditions;
    protected $miscModels;

    /**
     * DkwModelsServiceController constructor.
     */
    public function __construct()
    {
        $this->carModels = require_once __DIR__ . '/data/car-models.php';
        $this->carModelAdditions = require_once __DIR__ . '/data/car-model-additions.php';
        $this->mopedModels = require_once __DIR__ . '/data/moped-models.php';
        $this->mopedModelAdditions = require_once __DIR__ . '/data/moped-model-additions.php';
        $this->motorcycleModels = require_once __DIR__ . '/data/motorcycle-models.php';
        $this->motorcycleModelAdditions = require_once __DIR__ . '/data/motorcycle-model-additions.php';
        $this->miscModels = require_once __DIR__ . '/data/misc-models.php';

        return $this;
    }

    /**
     * @param $vehicleType
     * @return mixed
     * @throws \ErrorException
     */
    public function getModels($vehicleType)
    {
        return $this->getData($vehicleType, 'Models');
    }

    /**
     * @return bool
     * @throws \ErrorException
     */
    public function getAllModels()
    {
        $models = array_merge(
            $this->getModels('car'),
            $this->getModels('motorcycle'),
            $this->getModels('moped'),
            $this->getModels('misc')
        );

        sort($models);

        return $models;
    }

    /**
     * @param $vehicleType
     * @return mixed
     * @throws \ErrorException
     */
    public function getModelAdditions($vehicleType)
    {
        return $this->getData($vehicleType, 'ModelAdditions');
    }

    /**
     * @return bool
     * @throws \ErrorException
     */
    public function getAllModelAdditions()
    {
        $modelAdditions = array_merge(
            $this->getModelAdditions('car'),
            $this->getModelAdditions('motorcycle'),
            $this->getModelAdditions('moped')
        );

        sort($modelAdditions);

        return $modelAdditions;
    }

    /**
     * @param $vehicleType
     * @param $dataType
     * @return mixed
     * @throws \ErrorException
     */
    protected function getData($vehicleType, $dataType)
    {
        $property = $vehicleType . $dataType;

        if (! property_exists($this, $property)) {
            throw new \ErrorException('The property [' . $property . '] doesn\'t exist.');
        }

        return $this->{$property};
    }

}
