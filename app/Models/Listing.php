<?php
    namespace App\Models;

    class Listing{
        public static function all() {
            return [
            [
                'id'=>1,
                'title'=>"listing one",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
            ],
            [
                'id'=>2,
                'title'=>"listing two",
                'description' => "lorem ipsum dolor sit amet consw"
            ]
            ];
        }
        public static function find($id){
          $listings = self::all();
          foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
          }  
        }
    }