<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Redirect;

use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Translation\FileLoader;
use Illuminate\Contracts\Filesystem\Factory;

class TemplateengineController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function home() {
        $template = new TemplateengineController();
        $template->assign('username', 'pavan');
        $template->assign('age', '23');
        $template->assign('favourite', 'fried');
        $template->render("Templateengine");
        return view('Templateengine');
    }

    private $vars = array();

    public function assign($key, $value) {
        $this->vars[$key] = $value;
    }

    public function render($template_name) {
        $path = $template_name . '.blade.php';
        //echo $path;
        if (File::exists($path)) {
            $contents = File::get($path);
             //echo $contents;
            foreach ($this->vars as $key => $value) {
                $contents    = preg_replace('/\[' . $key . '\]/', $value, $contents);
            }
            $contents = preg_replace('/\<\!\-\- if(.*) \-\-\>/', '<?php if($1):  ?>', $contents);
            $contents = preg_replace('/\<\!\-\- else(.*) \-\-\>/', '<?php else:  ?>', $contents);
            $contents = preg_replace('/\<\!\-\- endif \-\-\>/', '<?php endif;?>', $contents);
            eval(' ?>' . $contents . '<?php ');
        } else {
            exit('<h2>Template Error</h2>');
        }
    }

}