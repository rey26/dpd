<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BranchModel extends Model
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
}

