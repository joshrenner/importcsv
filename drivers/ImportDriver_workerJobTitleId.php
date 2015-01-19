<?php

/*
 * Import Driver for type: gender
 */

class ImportDriver_workerJobTitleId extends ImportDriver_default {

    /**
     * Constructor
     * @return void
     */
    public function ImportDriver_workerJobTitleId()
    {
        $this->type = 'workerJobTitleId';
    }

    /**
     * Process the data so it can be imported into the entry.
     * @param  $value   The value to import
     * @param  $entry_id    If a duplicate is found, an entry ID will be provided.
     * @return The data returned by the field object
     */
    public function import($value, $entry_id = null)
    {
        echo 'not implemented';
    }

    /**
     * Process the data so it can be exported to a CSV
     * @param  $data    The data as provided by the entry
     * @param  $entry_id    The ID of the entry that is exported
     * @return string   A string representation of the data to import into the CSV file
     */
    public function export($data, $entry_id = null)
    {
        $value = null;

        switch (trim($data['handle'])) {
            case 'carpenter':
                $value = 3;
                break;
            case 'finisher':
                $value = 6;
                break;
            case 'mason':
                $value = 2;
                break;
            case 'operator':
                $value = 10;
                break;
            default:
                $value = 8;
                break;
        }


        return $value;
    }

}
