<?php

function image_upload($file, $name, $width, $height)
{
    $thumb_path = "uploads/".$name."/";

    // this is upload path relative to file system
    $uploadPath = $thumb_path;
    $extension = $file->getClientOriginalExtension();
    $filename = time() . Illuminate\Support\Str::random(20) . "." . $extension;

    // dd(is_dir($uploadPath));
    if (false == is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $filename  = time() . '.' . $file->getClientOriginalExtension();
    Image::make($file)->resize($width, $height)->save($uploadPath . $filename);
    $path_name = $uploadPath. $filename;
    return $path_name;
}

function multiple_cropper($file, $name, $width, $height)
{
    $thumb_path = "uploads/".$name."/";

    // this is upload path relative to file system
    $uploadPath = $thumb_path;
    $extension = $file->getClientOriginalExtension();
    $filename = time() . Illuminate\Support\Str::random(20) . "." . $extension;

    // dd(is_dir($uploadPath));
    if (false == is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    $filename  = time() . '.' . $file->getClientOriginalExtension();
    
    Image::make($file->getRealPath())->resize($width, $height)->save($uploadPath . "/" . "banner-" . $filename);
    Image::make($file->getRealPath())->resize('200', '100')->save($uploadPath . "/" . "thumbnail-" . $filename);
    $path_name = $uploadPath. $filename;
    return $path_name;
}

function menuActive($path)
{
   return Request::is($path . '*') ? 'mdc-permanent-drawer--selected' : '';
}

function menuSelected($path)
{
    return Request::is($path. '*') ? 'class=selected' : '';
}

function menuParamSelected($path)
{
    return Request::is('*'. $path) ? 'class=selected' : '';
}

function getHeightWidth($bannerSection)
{
    switch ($bannerSection) {
        case 'Main Banner':
            return array('width' =>'1920', 'height' => '600');
            break;
        case 'Product Banner':
            return array('width' =>'960', 'height' => '680');
            break;
        case 'Testimonials':
            return array('width' =>'1920', 'height' => '1200');
            break;
        case 'Services':
            return array('width' =>'390', 'height' => '260');
            break;
        default:
            return array('width' =>'1920', 'height' => '600');
            break;
    }
}


function getThumbnails($thumb_image = NULL)
{
    $strposres=strpos($thumb_image, 'http');
    $isAbsoluteURL= $strposres===FALSE?false:($strposres==0?true:false); //shame on you PHP :(, Why didn't you just return -1 when needle not found
    if (empty($thumb_image) || $isAbsoluteURL) {
        return $thumb_image;
    }

    $dirname=dirname($thumb_image);
    $basename=basename($thumb_image);
    $thumb_image = $dirname."/thumbnail-".$basename;

    return $thumb_image;
}

function getBanners($thumb_image = NULL)
{
    $strposres=strpos($thumb_image, 'http');
    $isAbsoluteURL= $strposres===FALSE?false:($strposres==0?true:false); //shame on you PHP :(, Why didn't you just return -1 when needle not found
    if (empty($thumb_image) || $isAbsoluteURL) {
        return $thumb_image;
    }

    $dirname=dirname($thumb_image);
    $basename=basename($thumb_image);
    $thumb_image = $dirname."/banner-".$basename;

    return $thumb_image;
}
