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

class templateController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function engine() {

        $vars = array();

        $this->vars[$key] = $value;

        $path = $template_name . '.html';

        if (file_exists($path)) {

            $contents = file_get_contents($path);

            foreach ($this->vars as $key => $value) {

                $contents = preg_replace('/\[' . $key . '\]/', $value, $contents);
                $contents = preg_replace('/\<\!\-\- if (.*) \-\-\>/', '<?php if ($1) : ?>', $contents);
                $contents = preg_replace('/\<\!\-\- else \-\-\>/', '<?php else : ?>', $contents);
                $contents = preg_replace('/\<\!\-\- endif \-\-\>/', '<?php endif; ?>', $contents);
            }

            eval(' ?>' . $contents . '<?php ');
        } else {

            exit('<h1>Template error</h1>');
        }
    }

}

?>
