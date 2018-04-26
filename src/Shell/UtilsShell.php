<?php

namespace App\Shell;

use Cake\Console\Shell;
use Cake\Utility\Text;

class UtilsShell extends Shell
{

    /**
     * Reset UUID keys for a model.
     */
    public function rekey($model = '')
    {
        $this->loadModel($model);
        $q = $this->$model->find();

        foreach ($q as $key => $value) {
            $this->$model->query()
                ->update()
                ->set([
                    'id' => Text::uuid()
                ])
                ->where([
                    'id' => $value->id
                ])
                ->execute();
        }
    }

    /**
     * Resave all entities of a model.
     *
     * This will trigger many events (i.e. beforeSave) so data will
     * be consistent with the current implementation of the Entity.
     */
    public function resave($model = '')
    {
        $this->loadModel($model);
        $q = $this->$model->find();

        foreach ($q as $key => $value) {
            // Set all fields dirty to trigger events when saving
            $value->dirty('', true);

            // Save
            $this->$model->save($value);
        }
    }
}
