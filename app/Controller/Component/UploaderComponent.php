<?php

class UploaderComponent extends Component {

    public function initialize(Controller $controller) {
        define("MAXFILESIZE", 500000000000);
    }

    /**
     * uploadFile method
     *
     * @throws NotFoundException
     * @param type $fileCtrl
     * @param type $fileName
     * @param type $cat
     * @param type $oldFile
     * @return string
     */
    public function uploadFile($fileCtrl, $fileName, $cat) {
        
        if ($fileName && $fileCtrl['tmp_name'] && $fileCtrl['size'] < MAXFILESIZE) {
            $name = $this->uploadDir($cat) . $fileName . "." . $this->fileExtension($fileCtrl);
            if (file_exists($name)) {
                unlink($name);
            }

            move_uploaded_file($fileCtrl['tmp_name'], $name);

            return $name;
        } else {
            die("File size has exceeded the limit. Maximum: " . MAXFILESIZE . " bytes can be allowed.");
        }
    }

    /**
     * Image Uploading Function
     *
     * @param File $fileCtrl
     * @param String $imgName
     * @param char $cat
     * @param Integer $h
     * @param Integer $w
     * @return Image
     */
    public function uploadImage($fileCtrl, $imgName, $cat = NULL, $h = NULL, $w = NULL) {
        if ($imgName && $fileCtrl['tmp_name'] && $fileCtrl['size'] < MAXFILESIZE) {
            $name = $this->uploadDir($cat) . $imgName . ".png";
            if (file_exists($name)) {
                unlink($name);
            }
            return $this->fixDimension($fileCtrl['tmp_name'], $name, IMAGETYPE_PNG, $h, $w);
        } else {
            return "File size has exceeded the limit. Maximum: " . MAXFILESIZE . " bytes can be allowed.";
        }
    }

    /**
     * Fix Image Dimension Function
     *
     * @param File $fileCtrl
     * @param String $path
     * @param char $cat
     * @param Integer $h
     * @param Integer $w
     * @return Image
     */
    private function fixDimension($fileCtrl, $path, $cat, $h, $w) {
        if ($h && $w) {
            $new_w = $w;
            $new_h = $h;
        } else {
            list($width, $height) = getimagesize($fileCtrl);

            if ($h && empty($w)) {
                $new_w = $width * ($h / $height);
                $new_h = $h;
            } elseif ($w && empty($h)) {
                $new_w = $w;
                $new_h = $height * ($w / $width);
            } else {
                $new_w = $width;
                $new_h = $height;
            }
        }

        return $this->resizeImage($fileCtrl, $path, $cat, $new_w, $new_h);
    }

    /**
     * Resize Uploading Image Function
     *
     * @param file $fileCtrl
     * @param string $newFile
     * @param char $outType
     * @param Integer $width
     * @param Integer $height
     * @return Image
     */
    private function resizeImage($fileCtrl, $newFile, $outType, $width, $height) {
        if ($height < 1 || $width < 1) {
            return "Height or Width required";
        }

        # Setting defaults and meta
        $info = getimagesize($fileCtrl);

        # Loading image to memory according to type
        switch ($info [2]) {
            case IMAGETYPE_GIF :
                $image = imagecreatefromgif($fileCtrl);
                $image_resized = imagecreate($width, $height);
                break;
            case IMAGETYPE_JPEG :
                $image = imagecreatefromjpeg($fileCtrl);
                $image_resized = imagecreatetruecolor($width, $height);
                break;
            case IMAGETYPE_PNG :
                $image = imagecreatefrompng($fileCtrl);
                $image_resized = imagecreatetruecolor($width, $height);
                break;
            default :
                $image = imagecreatefromwbmp($fileCtrl);
                $image_resized = imagecreatetruecolor($width, $height);
                return false;
        }

        imagealphablending($image_resized, false);
        imagesavealpha($image_resized, true);
        $transparent = imagecolorallocatealpha($image_resized, 255, 255, 255, 127);
        imagefilledrectangle($image_resized, 0, 0, $width, $height, $transparent);
        imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $width, $height, $info[0], $info[1]);

        # Writing image
        switch ($outType) {
            case IMAGETYPE_GIF :
                imagegif($image_resized, $newFile);
                break;
            case IMAGETYPE_JPEG :
                imagejpeg($image_resized, $newFile);
                break;
            case IMAGETYPE_PNG :
                imagepng($image_resized, $newFile);
                break;
            default :
                imagewbmp($image_resized, $newFile);
                break;
        }

        return "Image Uploaded Successfully";
    }

    /**
     * Image directory for Storage Function
     *
     * @param char $cat
     * @return String
     */
    public function uploadDir($cat, $id = NULL) {
        $dir = IMAGES . $cat . DS;
        if ($id) {
            $dir = $dir . "$id.png";
        }
        return $dir;
    }

    /**
     * get file extension Function
     *
     * @param char $file_name
     * @return String
     */
    public function fileExtension($file_name) {
        $ext = strtolower($file_name['name']);
        $ext = explode(".", $ext);
        return end($ext);
    }

}
