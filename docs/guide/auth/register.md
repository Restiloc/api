# Register <Badge type="tip" text="POST"/>

## Code samples

```bash
POST /api/auth/register
```

::: code-group

```bash :line-numbers {3} [cURL]
curl \
  -X POST \
  -H "Accept: application/json" \
  -H 'Content-Type: application/json' \
  https://restiloc.space/api/auth/register \
  -d '{
	"lastName": "GRUCeCIO",
	"firstName": "Antoeine",
	"phoneNumber": "+33685251447",
	"username": "antgeru",
	"email": "ante.gru@gmail.com",
	"password": "admin123"
  }'
```

```json :line-numbers [Body example]
{
	"lastName": "GRUCCIO",
	"firstName": "Néo",
	"phoneNumber": "+33685251447",
	"username": "antgru",
	"email": "ant.gru@gmail.com",
	"password": "admin123"
}
```

```json :line-numbers [Body schema]
{
	"lastName": string,
	"firstName": string,
	"phoneNumber": string,
	"username": string,
	"email": string,
	"password": string
}
```

:::
## Response <Badge type="tip" text="200"/>

::: code-group

```json :line-numbers {3} [Example response]
{
  "status": true,
  "message": "Expert created successfully"
}
```

```json :line-numbers {3} [Response schema]
{
  "status": boolean,
  "message": string
}
```

:::

## Response <Badge type="warning" text="401"/>

::: code-group

```json :line-numbers {3} [Example response]
{
  "status": false,
  "message": "validation error",
  "errors": {
    "username": [
      "The username has already been taken."
    ],
    "email": [
      "The email has already been taken."
    ]
  }
}
```

```json :line-numbers {3} [Validation]
{
  ...
  "errors": {
    "lastName": [
      "The last name field is required."
    ],
    "firstName": [
      "The first name field is required."
		],
    "phoneNumber": [
      "The phone number field is required."
    ],
    "username": [
      "The username field is required."
    ],
    "email": [
      "The email field is required."
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