<?php

	namespace App\Http\Controllers\API;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use App\Models\UserModel;
	use Hash;

	class UserController extends Controller {

		public function checkEmailIfExisting (Request $request) {
			$userModel = new UserModel;

			$emailAddress = $request->input('emailAddress');

			$result = $userModel->checkIfEmailExistingModel($emailAddress);

			return json_encode($result);
		}

	}

?>