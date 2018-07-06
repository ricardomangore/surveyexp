<?php

namespace ElMictlan\SurveyExp;

class SurveyExp{


	public function views(){

		return [
			SURVEYEXP_PATH . '/resources/views/home.blade.php'          => /*path de origen de l recurso*/
				resource_path('views/surveyexp/home.blade.php'),  /*path destino del recurso*/
			SURVEYEXP_PATH . '/resources/views/landingpage.blade.php'   =>
				resource_path('views/surveyexp/landingpage.blade.php'),
			SURVEYEXP_PATH . '/resources/views/dashboard.blade.php'     =>
				resource_path('views/surveyexp/dashboard.blade.php'),
			SURVEYEXP_PATH . '/resources/views/surveyexp/layouts/app.blade.php'   =>
				resource_path('views/surveyexp/layouts/app.blade.php'),
			SURVEYEXP_PATH . '/resources/views/surveyexp/layouts/partials/landingpageheader.blade.php'  =>
				resource_path('views/surveyexp/layouts/partials/landingpageheader.blade.php')
		];
	}

	public function resourceAssests(){
		return[
			SURVEYEXP_PATH . '/resources/assets/css' =>
				resource_path('assets/css')
		];
	}
}