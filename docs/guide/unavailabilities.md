# Unavailabilities

With this route you can get all unavailabilities including relations.

## List all unavailabilities <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/unavailabilities
```

::: code-group

```bash :line-numbers [cURL]
curl \
    -H "Accept: application/json" \
    -H "Authorization: Bearer <YOUR-TOKEN>" \
    https://restiloc.space/api/unavailabilities
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "customerResponsible":1,
      "route":"https:\/\/restiloc.space\/api\/unavailabilities\/1",
      "missions":[
        {
          "id":3,
          "dateMission":"2023-02-06",
          "startedAt":null,
          "kilometersCounter":185467,
          "nameExpertFile":"Garrett Bailey",
          "isFinished":1,
          "route":"https:\/\/restiloc.space\/api\/missions\/3"
        }
      ],
      "reason":{
        "id":3,
        "label":"Véhicule absent",
        "route":"https:\/\/restiloc.space\/api\/reasons\/3"
      }
    },
    ...
  ]
}
```

:::

## Get a unavailabilities <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/unavailabilities/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
    -H "Accept: application/json" \
    -H "Authorization: Bearer <YOUR-TOKEN>" \
    https://restiloc.space/api/unavailabilities/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "customerResponsible":1,
      "route":"https:\/\/restiloc.space\/api\/unavailabilities\/1",
      "missions":[
        {
          "id":3,
          "dateMission":"2023-02-06",
          "startedAt":null,
          "kilometersCounter":185467,
          "nameExpertFile":"Garrett Bailey",
          "isFinished":1,
          "route":"https:\/\/restiloc.space\/api\/missions\/3"
        }
      ],
      "reason":{
        "id":3,
        "label":"Véhicule absent",
        "route":"https:\/\/restiloc.space\/api\/reasons\/3"
      }
    }
  ]
}
```

```json :line-numbers [Response schema]
{
    "id":"int",
    "customerResponsible":"int",
    "route":"string",
    "missions":"array",
    "reason":"array"
}
```

:::
