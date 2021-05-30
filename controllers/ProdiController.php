<?php 
	namespace app\controllers;
	use yii\web\Controller;
	use yii\data\Pagination;
	use app\models\Prodi;

	/**
	 * 
	 */
	class ProdiController extends Controller
	{
		
		public function actionIndex()
		{
			$query = Prodi::find();
			$pagination = new Pagination([
				'defaultPageSize'=> 5,
				'totalCount' => $query->count(),]);
			$isiProdi = $query->orderBy('id')
				->offset($pagination->offset)
				->limit($pagination->limit)
				->all();
			return $this->render('index', [
				'isiProdi'=> $isiProdi,
				'pagination'=> $pagination,
			]);
		}
	}
 ?>
