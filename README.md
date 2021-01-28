# API-REST

## LARAVEL SANCTUM
    Laravel Sanctum proporciona un sistema de autenticación ligero
    basado en Tokens o Cokies de autenficación segun sea el caso  para:

        - API's
        - SPA (aplicaciones de una sola página)
        - Aplicaciones móviles

    Cuando Sanctum examina una solicitud HTTP entrante, primero verificará 
    si hay una cookie de autenticación y, si no hay ninguna, Sanctum examinará 
    el encabezado Authorization en busca de un token API válido.

<pre>
    Está perfectamente bien usar Sanctum solo para la autenticación de token de API o 
    solo para la autenticación de SPA. El hecho de que utilice Sanctum no significa 
    que deba utilizar las dos funciones que ofrece.
<pre>    


    