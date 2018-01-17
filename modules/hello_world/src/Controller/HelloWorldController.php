<?php

namespace Drupal\hello_world\Controller;

class HelloWorldController {

public function hello() {
    return array(
            '#titile' => 'Hello World',
            '#markup' => 'This ia some content.'
    );
}

}

