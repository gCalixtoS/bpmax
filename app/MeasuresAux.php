<?php
/**
 * @author Gustavo Calixto de Souza <[<email address>]>
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class MeasuresAux extends Model
{
    protected $fillable = [
    	'user_id',
    	'measure_id'
    ];
}
