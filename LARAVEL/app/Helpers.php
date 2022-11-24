<?php 


//product image upload
function imgUpload($filename, $request){
    $mainFile = $request->file($filename);
    $data = null;

    if($request->has($filename) && $mainFile->isValid()){
        $tempName = $mainFile->getClientOriginalName();

        $data['imgExtension'] = $mainFile->getClientOriginalExtension();

        $data['imgSize'] = $mainFile->getSize();

        $ran = date('Gis');
        $imgName = "img_{$ran}.{$data['imgExtension']}";

        $data['imgUrl'] = "storage/products/{$imgName}";

        $mainFile->storeAs('/products', $imgName, 'public');
    }

    return $data;
}