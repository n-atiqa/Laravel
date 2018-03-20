<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
      //
      /**
   * Fillable fields
   *
   * @var array
   */
  protected $fillable = [
      'Name',
      'Category',
      'Latitude',
      'Longitude'
  ];
}
