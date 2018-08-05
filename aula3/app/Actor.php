<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  public function getNomeCompleto()
  {
    return $this->first_name . " " . $this->last_name ;
  }
  public function getInfo() {
    return $this->rating;
  }
}
