# Clients

## List all clients <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/clients
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/clients
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id": 1,
	  "lastName": "Eichmann",
	  "firstName": "Gust",
	  "email": "catharine93@hotmail.com",
	  "phoneNumber": "505-227-5845",
	  "addressNumber": "380",
	  "street": "Diego Club",
	  "postalCode": "43067-3453",
	  "city": "Halland",
	  "url": "http:\/\/127.0.0.1:8000\/api\/clients\/1",
	  "missions": []
    },
    ...
  ]
}
```

:::

## Show a client <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/clients/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/clients/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id": 1,
	  "lastName": "Eichmann",
	  "firstName": "Gust",
	  "email": "catharine93@hotmail.com",
	  "phoneNumber": "505-227-5845",
	  "addressNumber": "380",
	  "street": "Diego Club",
	  "postalCode": "43067-3453",
	  "city": "Halland",
	  "url": "http:\/\/127.0.0.1:8000\/api\/clients\/1",
	  "missions": []
    }
  ]
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "lastName":"string",
  "firstName":"string",
  "email": "string",
  "phoneNumber":"string",
  "addressNumber":"int",
  "street":"string",
  "postalCode":"string",
  "city":"string",
  "url":"string",
  "missions":"array"
}
```

:::
