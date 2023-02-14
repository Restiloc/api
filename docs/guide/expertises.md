# Expertises

With this route you can get result of the expertises sql view including relations.

## Get expertises records <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/expertises
```

::: code-group

```bash :line-numbers [cURL]
curl \
    -H "Accept: application/json" \
    -H "Authorization: Bearer <YOUR-TOKEN>" \
    https://restiloc.space/api/expertises
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":33,
      "licencePlate":"1G6KF57901U666328",
      "color":"Violet",
      "releaseYear":1992,
      "label":"3 Series",
      "brand":"BMW",
      "route":"https:\/\/restiloc.space\/api\/expertises",
      "mission":{
        "id":11,
        "dateMission":"2023-02-23",
        "startedAt":null,
        "kilometersCounter":80455,
        "nameExpertFile":"Deanna Krajcik Sr.",
        "isFinished":0,
        "route":"https:\/\/restiloc.space\/api\/missions\/11"
      }
    },
    ...
  ]
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "licencePlate":"string",
  "color":"string",
  "releaseYear":"int",
  "label":"string",
  "brand":"string",
  "route":"string",
  "mission":"array"
}
```

:::
