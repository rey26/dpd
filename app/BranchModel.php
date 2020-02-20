<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BranchModel
{
 /**
 * @var string
 */
 private $internalId;
 /**
 * @var string
 */
 private $internalName;
 /**
 * @var Coordinates
 */
 private $location;
 /**
 * @var array|BusinessHourModel[]
 */
 private $businessHours;
 /**
 * @var Address
 */
 private $address;

 /**
 * @var string
 */
 private $phoneNumber;
 /**
 * @var string
 */
 private $email;

 public function __construct($item){
     $this->internalId = $item->id;
     $this->internalName = $item->company;
     $this->email = $item;
     $this->phoneNumber = $phoneNumber;

 }

 public function getBranchData(){
    return get_object_vars($this);
 }


}

