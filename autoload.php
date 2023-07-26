<?php

//Para fazer o autload:
spl_autoload_register(function($class){
    $baseDir = __DIR__.'/classes/';

    $file = $baseDir.str_replace('\\','/', $class).'.php';

    if(file_exists($file)) {
        require $file;
    }
});
//Se tivermos estanciado um objeto e não fizemos o require da mesma, podemos usar o spl_autoload_register, que ele mesmo identificará a classe que estamos usando e irá executar o código. Vale ressaltar que o nome do arquivo precisa serigual o da Classe.

?>