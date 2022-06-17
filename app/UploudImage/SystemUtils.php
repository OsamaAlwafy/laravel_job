<?php

namespace App\UploudImage;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SystemUtils extends UploadingUtils
{
  const AVATER_PATH = 'uploads/';
  const UPLOADS_PATH = 'uploads/';
  const LOGO_PATH = 'uploads/logo/';
  const REQUEST_IMAGE_PATH = 'requests/';
  const REPLY_IMAGE_PATH = 'replies/';

  public static function  logo(Request $request, $path)
  {

    $request->validate(
      ['logo' => 'required|image|mimes:png,jpg'],
      [
        'logo.mimes' => 'يجب ان تكون الصورة بصيغة png , jpg فقط',
        'logo.image' => 'يجب ان تكون الملف  الصوره '
      ]
    );

    return SystemUtils::returnPath($request->logo, $path);
  }

  
  public static function returnPath($img, $path)
  {
    $image = UploadingUtils::updateImage(
      $img,
      $path,
     ""
    );

    return $image;
  }
}
