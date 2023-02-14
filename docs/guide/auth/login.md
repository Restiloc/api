# Login <Badge type="tip" text="POST"/>

## Code samples

```bash
POST /api/auth/login
```

::: code-group

```bash :line-numbers {3} [cURL]
curl \
  -X POST \
  -H "Accept: application/json" \
  -H 'Content-Type: application/json' \
  https://restiloc.space/api/auth/login \
  -d '{ "identifier": string, "password": string }'
```

```json :line-numbers [Body example]
{
	"identifier": "admin",
	"password": "admin123"
}
```

```json :line-numbers [Body schema]
{
	"identifier": string,
	"password": string
}
```

:::

## Response <Badge type="tip" text="200"/>

::: code-group

```json :line-numbers {3} [Example response]
{
	"status": true,
	"message": "Expert logged in successfully",
	"token": "14|utuujfObA3rJm2IfqJPn9sTeklyhq6Jx1AzAGoot"
}
```

```json :line-numbers {3} [Response schema]
{
	"status": boolean,
	"message": string,
	"token": string
}
```

:::

## Response <Badge type="warning" text="401"/>

::: code-group

```json :line-numbers {3} [Example response]
{
  "status": false,
  "message": "validation error",
}
```

```json :line-numbers {3} [Validation]
{
  ...
  "errors": {
    "identifier": [
      "The identifier field is required."
    ],
    "password": [
      "The password field is required."
    ]
  }
}
```

```json :line-numbers {3} [Response schema]
{
	"status": "string",
	"message": "string",
	"errors" : "?array<string,string>"
}
```

:::