<?php
/**
 * Created by PhpStorm.
 * User: Dhanushka
 * Date: 7/19/2018
 * Time: 9:21 PM
 */



class photo extends db_object
{


    protected static $db_table="photos";
    protected static $db_table_fields=array('id','title','caption','description','filename','alternate_text','type','size');
    public $id;
    public $title;
    public $caption;
    public $description;
    public $filename;
    public $alternate_text;
    public $type;
    public $size;


    public $tmp_path;
    public $upload_directory="images";
    public $errors=array();
    public $upload_errors_array=array(
    UPLOAD_ERR_OK=>"ONE",
    );




    public function set_file($file){

        if (empty($file)|| !$file || !is_array($file)){
            $this->errors[]="there was no file uploaded here";
            return false;
        }elseif ($file['error'] !=0){
            $this->errors[]=$this->upload_errors_array[$file['error']];
            return false;
        }else{
            $this->filename=basename($file['name']);
            $this->tmp_path=$file['tmp_name'];
            $this->type=$file['type'];
            $this->size=$file['size'];
        }


    }




public function save()
{

    if ($this->id){
        $this->update();
    }else{

        if (!empty($this->errors)){
            return false;
        }

       if (empty($this->filename)||empty($this->tmp_path)){
            $this->errors[]="the file was not avaiable";
            return false;
       }

         $target_path='images/'.$this->filename;

        if (file_exists($target_path)){

            $this->errors[]="";
            return false;
        }


        if (move_uploaded_file($this->tmp_path,$target_path)){
            if ($this->create()){
                unset($this->tmp_path);
                return true;
            }
        }

        $this->create();
    }

}


public function delete_photo(){

        if ($this->delete()){

            $target_path='images/'.$this->filename;

            return unlink($target_path)?true:false;

        }else{

            return false;

        }



}










}








