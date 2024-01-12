This example laravel app is a proof of concept showing how to have an API that
is versioned using an HTTP header, and documented with swagger.

## Running

Start the web server: `php artisan serve`
Regenerate the V1 docs: `php artisan l5-swagger:generate V1`
Regenerate the V2 docs: `php artisan l5-swagger:generate V2`

See the v1 docs: http://localhost:8000/api/documentation/v1
See the v2 docs: http://localhost:8000/api/documentation/v2

See the different responses for v1 and v2:

```
$ curl -H 'Accept: application/vnd.example+json; version=1' http://127.0.0.1:8000/api/posts
{"message": "some posts"}%

$ curl -H 'Accept: application/vnd.example+json; version=2' http://127.0.0.1:8000/api/posts
{"message": "some v2 posts"}%
```
