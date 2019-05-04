<?php

namespace App\Repositories;

use App\Models\realState;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class realStateRepository
 * @package App\Repositories
 * @version April 30, 2019, 9:13 pm UTC
 *
 * @method realState findWithoutFail($id, $columns = ['*'])
 * @method realState find($id, $columns = ['*'])
 * @method realState first($columns = ['*'])
*/
class realStateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'city',
        'group',
        'building',
        'flat',
        'type',
        'view',
        'purpose',
        'name',
        'mobile',
        'price',
        'state',
        'date',
        'note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return realState::class;
    }
}
