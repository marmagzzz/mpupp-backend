<?php
	namespace App\Models;
	use Carbon\Carbon;
	use Illuminate\Database\Eloquent\Model;
	use DB;
	use Hash;

	class UserModel extends Model {

		protected $table = 'user';

		public function checkIfEmailExistingModel($emailAddress) {
	        $result = DB:: table($this->table)
	        ->where('email_address','=',$emailAddress)
	        ->get();
	        if(count($result) == 0) {
	            return false;
	        }
	        else{
	        	return true;
	        }
	    }


	}


?>