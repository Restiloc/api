# Unavailabilities

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
      "customerResponsible":true,
      "route":"https:\/\/restiloc.space\/api\/unavailabilities\/1",
      "missions":[
        {
          "id":3,
          "dateMission":"2023-02-06",
          "startedAt":"14:25:35",
          "kilometersCounter":185467,
          "folder":"GBLY6",
          "type":"Client",
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

## Show a unavailabilities <Badge type="tip" text="GET"/>

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
      "customerResponsible":true,
      "route":"https:\/\/restiloc.space\/api\/unavailabilities\/1",
      "missions":[
        {
          "id":3,
          "dateMission":"2023-02-06",
          "startedAt":"14:25:35",
          "kilometersCounter":185467,
          "folder":"GBLY6",
          "type":"Client",
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
    "customerResponsible":"boolean",
    "route":"string",
    "missions":"array",
    "reason":"array"
}
```

:::
