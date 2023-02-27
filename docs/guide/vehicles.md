# Vehicles

## List all vehicles <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/vehicles
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/vehicles
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data": [
    {
      "id": 1,
      "licencePlate": "SAJWJ0FF3F8321657",
      "color": "Yellow",
      "releaseYear": 2002,
      "route": "https:\/\/restiloc.space\/api\/vehicles\/1",
      "missions": []
    },
    ...
  ]
}
```

:::

## Show a vehicle <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/vehicles/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/vehicles/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
    "data": [
        {
            "id": 1,
            "licencePlate": "SAJWJ0FF3F8321657",
            "color": "Yellow",
            "releaseYear": 2002,
            "route": "https://restiloc.space/api/vehicles/1",
            "missions": []
        }
    ]
}
```

```json :line-numbers [Response schema]
{
    "id": "int",
    "licencePlate": "string",
    "color": "string",
    "releaseYear": "int",
    "route": "string",
    "missions": "array"
}
```

:::
