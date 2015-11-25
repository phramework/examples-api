# Simple API example using phramework
## Endpoints
Available endpoints:
- `GET /book/`
- `GET /book/{id}`

## Install

```bash
composer update
```

## Run
You can execute `composer run` to start a local php server at port `8000`

```
composer run
```

or expose `/public` to your webserver.

You can access the book controller using `GET http://localhost:8000/book/` request.

## Test
Test code for errors

```
composer test
```

## Lint code
Lint code using PSR-2 coding style

```
composer lint
```
