# Models

## List all vehicles models <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/models
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/models
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "label":"Montero",
      "brand":"Mitsubishi",
      "route":"https:\/\/restiloc.space\/api\/models\/1",
      "vehicles":[
        {
          "id":1,
          "licencePlate":"SAJWJ0FF3F8321657",
          "color":"Yellow",
          "releaseYear":2002,
          "route":"https:\/\/restiloc.space\/api\/vehicles\/1"
        },
        {
          "id":46,
          "licencePlate":"WAUGL68E25A756856",
          "color":"Crimson",
          "releaseYear":1996,
          "route":"https:\/\/restiloc.space\/api\/vehicles\/46"
        }
      ]
    }
  ],
  ...
}
```

:::

## Show a vehicle model <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/models/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/models/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":{
    "id":2,
    "label":"Passat",
    "brand":"Volkswagen",
    "route":"https:\/\/restiloc.space\/api\/models\/2",
    "vehicles":[
      {
        "id":2,
        "licencePlate":"WBANV9C51AC203320",
        "color":"Maroon",
        "releaseYear":2008,
        "route":"https:\/\/restiloc.space\/api\/vehicles\/2"
      },
      {
        "id":35,
        "licencePlate":"JTDKN3DU1B0728650",
        "color":"Puce",
        "releaseYear":1998,
        "route":"https:\/\/restiloc.space\/api\/vehicles\/35"
      }
    ]
  }
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "label":"string",
  "brand":"string",
  "route":"string",
  "vehicles":"array"
}
```

:::
