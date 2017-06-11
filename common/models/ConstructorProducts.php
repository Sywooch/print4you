<?php

namespace common\models;

use Yii;

use yii\web\UploadedFile;


class ConstructorProducts extends \yii\db\ActiveRecord
{

    const STORAGE_FULL_SIZE_DIR_TEMPLATE = '/constructor/full-size';
    const STORAGE_SMALL_SIZE_DIR_TEMPLATE = '/constructor/small-size';
    
    public $imageFile;

    public static function tableName()
    {
        return 'constructor_products';
    }

    public function rules()
    {
        return [
            [['name', 'price', 'category_id', 'is_published'], 'required'],
            [['description'], 'string'],
            [['price', 'category_id'], 'integer'],
            [['name', 'full_image', 'small_image'], 'string', 'max' => 255],
            ['is_published', 'boolean'],
            ['imageFile', 'file', 'extensions' => 'png, jpg', 
                    'skipOnEmpty' => true],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'description' => 'Описание',
            'imageFile' => 'Картинка',
            'price' => 'Цена',
            'category_id' => 'Категория',
            'is_published' => 'Опубликовать?',
        ];
    }

    public function uploadImage() {
        if ($this->checkDir()) {

            $this->imageFile = UploadedFile::getInstance($this, 'imageFile');

            if ($this->validate() && $this->imageFile != null) {

                // генеририуем полную картинку
                $full_image_name = time() . '.' . $this->imageFile->extension;
                $full_dir = self::getFullImagesDir();
                $this->imageFile->saveAs("$full_dir/$full_image_name");

                // генерируем маленькую картинку
                $small_image = new \Imagick("$full_dir/$full_image_name");
                $small_image->adaptiveResizeImage(320,320);
                $small_dir = self::getSmallImagesDir();
                $small_image_name = time() . '.' . $this->imageFile->extension;;
                $small_image->writeImage("$small_dir/$small_image_name");

                // удалим старые картнки
                $this->removeImages();

                $this->full_image = $full_image_name;
                $this->small_image = $small_image_name;

                $this->imageFile = null;

                
            }

        } else {
            throw new Exception("Cant't make upload dir!");
        }
    }

    // проверка папок загрузки файлов и создание, если нет
    private function checkDir() {
        $alias = Yii::getAlias('@storage');
        $full_folder_path =  $alias . self::STORAGE_FULL_SIZE_DIR_TEMPLATE;
        $small_folder_path =  $alias . self::STORAGE_SMALL_SIZE_DIR_TEMPLATE;

        if (!file_exists($full_folder_path) && !is_dir($full_folder_path)) 
            if (!mkdir($full_folder_path, 0755, true)) return false;
    
        elseif (!file_exists($small_folder_path) && !is_dir($small_folder_path)) 
            if (!mkdir($small_folder_path, 0755, true)) return false;

        return true;
    }   


    // методы возвращают папки и ссылки на директорию картинки
    public static function getFullImagesDir() {
        return Yii::getAlias('@storage') . self::STORAGE_FULL_SIZE_DIR_TEMPLATE;
    }

    public static function getSmallImagesDir() {
        return Yii::getAlias('@storage') . self::STORAGE_SMALL_SIZE_DIR_TEMPLATE;
    }

    public static function getFullImagesLink() {
        return Yii::getAlias('@storage_link') . self::STORAGE_FULL_SIZE_DIR_TEMPLATE;
    }

    public static function getSmallImagesLink() {
        return Yii::getAlias('@storage_link') . self::STORAGE_SMALL_SIZE_DIR_TEMPLATE;
    }



    public function getCategory() {
        return $this->hasOne(ConstructorCategories::className(), ['id' => 'category_id']);
    }

    // удаление картинок
    public function removeImages() {
        if ($this->full_image != '') {

            $full_image_name = $this->full_image;
            $full_dir = self::getFullImagesDir();

            $small_image_name = $this->small_image;
            $small_dir = self::getSmallImagesDir();

            @unlink("$full_dir/$full_image_name");
            @unlink("$small_dir/$small_image_name");
        }
    }

    // перед удалением записи - удалим картинки
    public function beforeDelete() {
        parent::beforeDelete();
        $this->removeImages();

        return true;
    }
}