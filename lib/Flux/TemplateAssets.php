<?php
require_once 'Flux/jsmin.php';

class Flux_TemplateAssets {
    private $ci;

    private $styles;
    
    private $scripts;

    public function __construct($config = array())
    {
        $this->basePath     = $config->get('basePath');
        $this->themePath    = $config->get('themePath');
        $this->styles       = array();
        $this->scripts      = array();
    }

    public function add_string_js($content)
    {
        $this->scripts[] = array(
            'path' => NULL,
            'content' => $content
        );
        return $this;
    }

    public function add_string_css($content)
    {
        $this->styles[] = array(
            'path' => NULL,
            'content' => $content
        );
        return $this;
    }

    public function add_js($path)
    {
        $this->scripts[] = array(
            'path' => $this->themePath.'/assets/js/'.$path,
            'content' => ''
        );
        return $this;
    }

    public function add_css($path)
    {
        $this->styles[] = array(
            'path' => $this->themePath.'/assets/css/'.$path,
            'content' => ''
        );
        return $this;
    }

    private function combine_css($resources, $extension = 'css')
    {
        $long_name = '';
        foreach ($resources as $resource) {
            if (isset($resource['path'])) {
                $long_name .= $resource['path'];
            } else {
                $long_name .= $resource['content'];
            }
        }
        
        $md5_name  = md5($long_name);
        $file_name = $this->themePath.'/assets/caches/'.$md5_name.'.'. $extension;
        $file_url  = $this->themePath.'/assets/caches/' . $md5_name . '.' . $extension;
        
        if (!file_exists($file_name)) {
            if (file_exists($file_name))
                unlink($file_name);
            foreach ($resources as $resource) {
                if (isset($resource['path'])) {
                    $path    = $resource['path'];
                    $content = file_get_contents($path);
                } else {
                    // write content
                    $content = $resource['content'];
                }
                $content = JSMin::minify($content);
                file_put_contents($file_name, $content, FILE_APPEND);
                file_put_contents($file_name, PHP_EOL, FILE_APPEND);
            }

        }
        return $this->basePath.$file_url;
    }

    private function combine_js($resources, $extension = 'js')
    {
        $long_name = '';
        foreach ($resources as $resource) {
            if (isset($resource['path'])) {
                $long_name .= $resource['path'];
            } else {
                $long_name .= $resource['content'];
            }
        }
        $md5_name  = md5($long_name);
        $file_name = $this->themePath.'/assets/caches/'.$md5_name.'.'. $extension;
        $file_url  = $this->themePath.'/assets/caches/' . $md5_name . '.' . $extension;
        
        if (!file_exists($file_name)) {
            if (file_exists($file_name))
                unlink($file_name);
            foreach ($resources as $resource) {
                $content = '';
                if (isset($resource['path'])) {
                    $path = FLUX_ROOT.'/'.$resource['path'];
                    if (strpos($path, $this->basePath) == 0) {
                        $path = $this->themePath. substr($path, strlen($this->basePath));
                    }
                    $content = file_get_contents($path);
                } else {
                    // write content
                    $content = $resource['content'];
                }
                $content = JSMin::minify($content);
                if (strlen($content) > 0 && $content[strlen($content) - 1] != ';') {
                    $content .= ';';
                } else {
                    $content .= '/*is alright*/';
                }
                file_put_contents($file_name, $content . PHP_EOL . PHP_EOL, FILE_APPEND);
            }

        }
        return $this->basePath.$file_url;
    }

    public function compile_css($combine = FALSE)
    {
        if ($combine) {
            $file_name    = $this->combine_css($this->styles, 'css');
            $this->styles = array();
            return '<link rel="stylesheet" type="text/css" href="' . $file_name . '" />';
        } else {
            $return = '';
            foreach ($this->styles as $style) {
                if (isset($style['path'])) {
                    $return .= '<link rel="stylesheet" type="text/css" href="'.$this->basePath.$style['path'].'" />';
                } else {
                    $return .= '<style type="text/css">'.$style['content'].'</style>';
                }
            }
            $this->styles = array();
            return $return;
        }
    }

    public function compile_js($combine = FALSE)
    {
        if ($combine) {
            $file_name     = $this->combine_js($this->scripts, 'js');
            $this->scripts = array();
            return '<script type="text/javascript" src="' . $file_name . '"></script>';
        } else {
            $return = '';
            foreach ($this->scripts as $script) {
                if (isset($script['path'])) {
                    $return .= '<script type="text/javascript" src="'.$this->basePath.$script['path'].'"></script>';
                } else {
                    $return .= '<script type="text/javascript">'.$script['content'].'</script>';
                }
            }
            $this->scripts = array();
            return $return;
        }
    }
}
?>