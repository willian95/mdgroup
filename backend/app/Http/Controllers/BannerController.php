<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\BannerUpdateRequest;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Banner;

class BannerController extends Controller
{
    function store(BannerStoreRequest $request){

        try{

            $imageData = $request->get('image');

            if(strpos($imageData, "svg+xml") > 0){

                $data = explode( ',', $imageData);
                $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.'."svg";
                $ifp = fopen($fileName, 'wb' );
                fwrite($ifp, base64_decode( $data[1] ) );
                rename($fileName, 'images/banners/'.$fileName);

            }else{

                $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
                Image::make($request->get('image'))->save(public_path('images/banners/').$fileName);

            }

            

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Hubo un problema con la imagen", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }

        try{

            $banner = new Banner;
            $banner->image = url('/').'/images/banners/'.$fileName;
            $banner->save();

            return response()->json(["success" => true, "msg" => "Banner creado"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }
        
    }

    function update(BannerUpdateRequest $request){

        if($request->get('image') != null){

            try{

                $imageData = $request->get('image');
    
                if(strpos($imageData, "svg+xml") > 0){
    
                    $data = explode( ',', $imageData);
                    $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.'."svg";
                    $ifp = fopen($fileName, 'wb' );
                    fwrite($ifp, base64_decode( $data[1] ) );
                    rename($fileName, 'images/banners/'.$fileName);
    
                }else{
    
                    $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
                    Image::make($request->get('image'))->save(public_path('images/banners/').$fileName);
    
                }
    
            }catch(\Exception $e){
    
                return response()->json(["success" => false, "msg" => "Hubo un problema con la imagen", "err" => $e->getMessage(), "ln" => $e->getLine()]);
    
            }

        }

        try{
 
            $baner = Banner::find($request->id);
            if($request->get('image') != null){
                $baner->image = $fileName;
            }
            $baner->update();

            return response()->json(["success" => true, "msg" => "Banner actualizado"]);
            

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor", "err" => $e->getMessage(), "ln" => $e->getLine()]);

        }
        
    }

    function delete(Request $request){

        try{

            $banner = Banner::find($request->id);
            $banner->delete();

            return response()->json(["success" => true, "msg" => "Banner eliminado"]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor"]);

        }

    }

    function fetch(){

        try{

            $banners = Banner::paginate(20);

            return response()->json(["success" => true, "banners" => $banners]);

        }catch(\Exception $e){

            return response()->json(["success" => false, "msg" => "Error en el servidor"]);

        }

    }
}
