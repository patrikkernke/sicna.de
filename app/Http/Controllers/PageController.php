<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class PageController extends Controller
{
    
    /**
     * Shows welcome page
     * 
     * @return Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('pages.welcome');
    }

    /**
     * Shows contact page
     * 
     * @return Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Shows sun-protection page
     * 
     * @return Illuminate\Http\Response
     */
    public function sunprotection_cars()
    {
        $ref_images = $this->getImages('sunprotection_cars');
        return view('pages.sunprotection-cars', compact('ref_images'));
    }

    /**
     * Shows folation page
     * 
     * @return Illuminate\Http\Response
     */
    public function folation()
    {   
        $ref_images = $this->getImages('folation_cars');
        return view('pages.folation', compact('ref_images'));
    }

    /**
     * Shows style & wrapping page
     * 
     * @return Illuminate\Http\Response
     */
    public function wrapping()
    {
        $ref_images = $this->getImages('wrapping_cars');
        return view('pages.wrapping', compact('ref_images'));
    }

    /**
     * Shows about us - page
     * 
     * @return Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view('pages.about-us');   
    }



    protected function getImages($directory)
    {
        $thumbs   = $this->listImagesFromDirectory($directory . '_thumbs');
        $originals = $this->listImagesFromDirectory($directory);

        return $this->combineImageListCollections($originals, $thumbs);
    }


    protected function listImagesFromDirectory($directory)
    {
        $images = Storage::disk('product-images')->files($directory);
        $images = collect($images);
        $images = $images->filter(function($image) use ($directory) {
            return ($image != $directory . '/.DS_Store');
        });

        return $images->flatten();
    }
    

    protected function combineImageListCollections($originals, $thumbs)
    {
        $collection_length = count($originals);
        $collection_merged = collect([]);
        $originals         = $originals->toArray();
        $thumbs            = $thumbs->toArray();

        for ($i=0; $i < $collection_length; $i++) { 

            $collection_merged->push([
                'original' => $originals[$i],
                'thumb'    => $thumbs[$i]
            ]);

        }

        return $collection_merged;
    }
}
