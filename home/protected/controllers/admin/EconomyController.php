<?php

class EconomyController extends Controller
{
  /**
   * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
   * using two-column layout. See 'protected/views/layouts/column2.php'.
   */
  public $layout='//layouts/column2';

  /**
   * @return array action filters
   */
  public function filters()
  {
    return array(
      'accessControl', // perform access control for CRUD operations
      'postOnly + delete', // we only allow deletion via POST request
    );
  }

  /**
   * Specifies the access control rules.
   * This method is used by the 'accessControl' filter.
   * @return array access control rules
   */
  public function accessRules()
  {
    return array(
      array('allow',  // allow all users to perform 'index' and 'view' actions
        'actions'=>array('index','view','create','update', 'admin', 'delete', 'delete_image', 'downloadFile', 'delete_file'),
        'users'=>array('*'),
      ),
      array('allow', // allow authenticated user to perform 'create' and 'update' actions
        'actions'=>array('create','update'),
        'users'=>array('@'),
      ),
      array('allow', // allow admin user to perform 'admin' and 'delete' actions
        'actions'=>array('admin','delete'),
        'users'=>array('admin'),
      ),
      array('deny',  // deny all users
        'users'=>array('*'),
      ),
    );
  }

  /**
   * Displays a particular model.
   * @param integer $id the ID of the model to be displayed
   */
  public function actionView($id)
  {
    $model = $this->loadModel($id);
    $model->setAttribute('title', CHtml::decode($model->title));
    $model->setAttribute('tieude', CHtml::decode($model->tieude));
    $model->setAttribute('content', CHtml::decode($model->content));
    $model->setAttribute('noidung', CHtml::decode($model->noidung));
    $this->render('view',array(
      'model'=>$model,
    ));
  }

  /**
   * Creates a new model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   */
  public function actionCreate()
  {
    $model=new Economy;
//    print_r($_GET);die;
    if(!isset($_GET['category_id']))
      $this->redirect(Yii::app()->homeUrl);
    else
      $category_id = $_GET['category_id'];
    // Uncomment the following line if AJAX validation is needed
    // $this->performAjaxValidation($model);
    $model->setAttribute('is_public', 0);
    if(isset($_POST['Economy']))
    {
      $model->attributes=$_POST['Economy'];
      $model->create_date = time();
      $model->create_user =  1;
      if ($model->validate()) {
        //save list image
        $ifile_paths = array();
        $ifile = CUploadedFile::getInstances($model, 'image');
        if($ifile){
          foreach($ifile as $i=>$image_path) {
            $formatName = $image_path;
            $ifile_paths[$i] = $formatName;
          }
          $model->image = implode(',', $ifile_paths);
        }
        //save list file
        $ffile_paths = array();
        $ffile=CUploadedFile::getInstances($model, 'file');
        if($ffile){
          foreach ($ffile as $i=>$file){
            $formatName=$file;
            $ffile_paths[$i]=$formatName;
          }
          $model->file = implode(',', $ffile);
        }

        //save video
        $vfile_paths = CUploadedFile::getInstance($model,'video');
        if (is_object($vfile_paths) && get_class($vfile_paths)==='CUploadedFile')
        {
          $model->video = $vfile_paths;
        }

        $model->title=CHtml::encode($model->title);
        $model->tieude= CHtml::encode($model->tieude);
        $model->content=CHtml::encode($model->content);
        $model->noidung=CHtml::encode($model->noidung);
        $model->category_id = $category_id;

        if($model->save(true,array('title','tieude','content','noidung','image','file','video','create_date','create_user','del_flag','feature_flg', 'is_public')))
          if($ifile_paths){
            uploadMultifile($model, 'image', Economy::image_url);
          }
        if($ffile_paths){
          uploadMultifile($model, 'file', Economy::file_url);
        }

        if($vfile_paths) {
          $model->video->saveAs(Yii::getPathOfAlias('webroot').Economy::video_url . $model->video->name);
          $model->save(false);
        }

        $this->redirect(array('view','id'=>$model->id));
      }
    }

    $this->render('create',array(
      'model'=>$model,'category_id'=>$category_id
    ));
  }

  /**
   * Updates a particular model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id the ID of the model to be updated
   */
  public function actionUpdate($id)
  {
    $model=$this->loadModel($id);
    $model->setAttribute('title', CHtml::decode($model->title));
    $model->setAttribute('tieude', CHtml::decode($model->tieude));
    $model->setAttribute('content', CHtml::decode($model->content));
    $model->setAttribute('noidung', CHtml::decode($model->noidung));
    // Uncomment the following line if AJAX validation is needed
    // $this->performAjaxValidation($model);
    $old_image = $model->image;
    $old_file = $model->file;
    $old_video = $model->video;
    if(isset($_POST['Economy']))
    {
      $model->attributes=$_POST['Economy'];
      if($model->validate()) {
        //save list image
        $ifile_paths = array();
        $ifile = CUploadedFile::getInstances($model, 'image');
        if($ifile){
          foreach($ifile as $i=>$image_path) {
            $formatName = $image_path;
            $ifile_paths[$i] = $formatName;
          }
          if($old_image) {
            $model->image = implode(',', $ifile_paths).','.$old_image;
          } else {
            $model->image = implode(',', $ifile_paths);
          }

        } else {
          $model->image=$old_image;
        }
        //save list file
        $ffile_paths = array();
        $ffile=CUploadedFile::getInstances($model, 'file');
        if($ffile){
          foreach ($ffile as $i=>$file){
            $formatName=$file;
            $ffile_paths[$i]=$formatName;
          }
          if($old_file) {
            $model->file = implode(',', $ffile).','.$old_file;
          } else{
            $model->file = implode(',', $ffile);
          }

        } else {
          $model->file = $old_file;
        }

        //save video
        $vfile_paths = CUploadedFile::getInstance($model,'video');
        if (is_object($vfile_paths) && get_class($vfile_paths)==='CUploadedFile')
        {
          $model->video = $vfile_paths;
          if($old_video) {
            unlink(Yii::getPathOfAlias('webroot').Economy::video_url . $old_video);
          }
        } else {
          $model->video = $old_video;
        }
      }

      if($model->save()) {
        if($ifile_paths){
          uploadMultifile($model, 'image', Economy::image_url);
        }
        if($ffile_paths){
          uploadMultifile($model, 'file', Economy::file_url);
        }

        if($vfile_paths) {
          $model->video->saveAs(Yii::getPathOfAlias('webroot').Economy::video_url . $model->video->name);
          $model->save(false);
        } else {
          $model->video = $old_file;
        }
        $this->redirect(array('view','id'=>$model->id));
      }

    }

    $this->render('update',array(
      'model'=>$model,
    ));
  }

  /**
   * Deletes a particular model.
   * If deletion is successful, the browser will be redirected to the 'admin' page.
   * @param integer $id the ID of the model to be deleted
   */
  public function actionDelete($id)
  {
    $this->loadModel($id)->delete();

    // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
    if(!isset($_GET['ajax']))
      $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
  }

  /**
   * Lists all models.
   */
  public function actionIndex()
  {
    $dataProvider=new CActiveDataProvider('Economy');
    $this->render('index',array(
      'dataProvider'=>$dataProvider,
    ));
  }

  /**
   * Manages all models.
   */
  public function actionAdmin()
  {

    if(!isset($_GET['category_id']))
//      $this->redirect(Yii::app()->homeUrl);
    $category_id = "";
    else

      $category_id = $_GET['category_id'];
    $model=new Economy('search');
    $model->unsetAttributes();  // clear any default values
    if(isset($_GET['Economy']))
      $model->attributes=$_GET['Economy'];
    $model->category_id = $category_id;

    $this->render('admin',array(
      'model'=>$model,'category_id'=>$category_id
    ));
  }

  /**
   * Returns the data model based on the primary key given in the GET variable.
   * If the data model is not found, an HTTP exception will be raised.
   * @param integer $id the ID of the model to be loaded
   * @return Economy the loaded model
   * @throws CHttpException
   */
  public function loadModel($id)
  {
    $model=Economy::model()->findByPk($id);
    if($model===null)
      throw new CHttpException(404,'The requested page does not exist.');
    return $model;
  }

  /**
   * Performs the AJAX validation.
   * @param Economy $model the model to be validated
   */
  protected function performAjaxValidation($model)
  {
    if(isset($_POST['ajax']) && $_POST['ajax']==='economy-form')
    {
      echo CActiveForm::validate($model);
      Yii::app()->end();
    }
  }


  public  function actionDelete_image(){

    $string ="";
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];
    $economy = Yii::app()->db->createCommand()
      ->select('*')
      ->from('economy')
      ->where('id='. $id)
      ->andWhere('del_flag = 0')
      ->queryAll();
    if($image_name){
      if($economy[0]['image']){
        $array_file = explode(',', $economy[0]['image']);
        $arr = array_diff($array_file, array($_GET['image_name']));
        $new_file = implode(',', $arr);
        unlink(Yii::getPathOfAlias('webroot').Economy::image_url . $image_name);
        $news = Yii::app()->db
          ->createCommand("UPDATE economy SET `image` ='$new_file' WHERE id=".$id)
          ->execute();
        if($news[0]['image']){
          $array_file = explode(',', $news[0]['image']);
          $string .= '<ul>';
          foreach($array_file as $file)
            $thumb_image_path = Economy::image_url.''.$file;
          $string .= '<li><img width="170px" height="220px" src="'.$thumb_image_path.'" alt="" /><input style=" position:absolute;  margin-left:-25px; padding-top:-15px; z-index:1; background-color: #ff0000"
          type="button" value="x" name="'.$file.'" onclick="delete_image_name(this)">
          </li>';

        }
      }
    } else {

      if($economy[0]['image']){
        $string .= '<ul>';
        $array_file = explode(',', $economy[0]['image']);
        foreach($array_file as $file){
          $thumb_image_path = Economy::image_url.''.$file;
          $string .=  '<li><img width="170px" height="220px" src="'.$thumb_image_path.'" alt="" /><input style=" position:absolute;  margin-left:-25px; padding-top:-15px; z-index:1; background-color: #ff0000"
          type="button" value="x" name="'.$file.'" onclick="delete_image_name(this)">
          </li>';
        }
      }
    }
    $string .= '</ul';
    echo $string;
    exit();
  }

  public  function actionDelete_file(){
    $string ="";
    $id = $_GET['id'];
    $file_name = $_GET['file_name'];
    $economy = Yii::app()->db->createCommand()
      ->select('*')
      ->from('economy')
      ->where('id='. $id)
      ->andWhere('del_flag = 0')
      ->queryAll();
    if($file_name){
      if($economy[0]['file']){
        $array_file = explode(',', $economy[0]['file']);
        $arr = array_diff($array_file, array($_GET['file_name']));
        $new_file = implode(',', $arr);
        unlink(Yii::getPathOfAlias('webroot').Economy::file_url . $file_name);
        $news = Yii::app()->db
          ->createCommand("UPDATE economy SET `file` ='$new_file' WHERE id=".$id)
          ->execute();
        if($news[0]['file']){
          $array_file = explode(',', $news[0]['file']);
          $string .= '<ul>';
          foreach($array_file as $file)
            $thumb_file_path = Economy::image_url.''.$file;
          $string .=  '<li><input type="checkbox" name="'.$file.'" onclick="delete_file_name(this)"/>'.$thumb_file_path.'</li>';

        }
      }
    } else {

      if($economy[0]['file']){
        $string .= '<ul>';
        $array_file = explode(',', $economy[0]['file']);
        foreach($array_file as $file){
          $thumb_file_path = Economy::file_url.''.$file;
          $string .=  '<li><input type="checkbox" name="'.$file.'" onclick="delete_file_name(this)"/>'.CHtml::link($file, Yii::app()->createUrl('/economy/downloadFile',array('id' => $id))).'</li>&nbsp';
        }
      }
    }
    $string .= '</ul';
    echo $string;
    exit();
  }

  public function actionDownloadFile($id)
  {
    $model = $this->loadModel($id);
    $src = Yii::getPathOfAlias('webroot'). Economy::file_url.$model->file;
    if(file_exists($src)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      //header('Content-Type: '.$mime);
      header('Content-Disposition: attachment; filename='.basename($src));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      header('Pragma: public');
      header('Content-Length: ' . filesize($src));
      ob_clean();
      flush();
      readfile($src);
    } else {
      header("HTTP/1.0 404 Not Found");
      exit();
    }
  }
}
