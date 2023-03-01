# Reasons

## List all reasons <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/reasons
```

::: code-group

```bash :line-numbers [cURL]
curl \
    -H "Accept: application/json" \
    -H "Authorization: Bearer <YOUR-TOKEN>" \
    https://restiloc.space/api/reasons
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "label":"Client absent",
      "route":"https:\/\/restiloc.space\/api\/reasons\/1",
      "unavailabilities":[
        {
          "id":4,
          "customerResponsible":true,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/4"
        },
        {
          "id":8,
          "customerResponsible":true,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/8"
        }
      ]
    },
    {
      "id":2,
      "label":"Véhicule inaccessible",
      "route":"https:\/\/restiloc.space\/api\/reasons\/2",
      "unavailabilities":[
        {
          "id":5,
          "customerResponsible":false,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/5"
        },
        {
          "id":7,
          "customerResponsible":false,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/7"
        },
        {
          "id":10,
          "customerResponsible":true,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/10"
        }
      ]
    },
    {
      "id":3,
      "label":"Véhicule absent",
      "route":"https:\/\/restiloc.space\/api\/reasons\/3",
      "unavailabilities":[
        {
          "id":1,
          "customerResponsible":true,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/1"
        },
        {
          "id":2,
          "customerResponsible":false,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/2"
        },
        {
          "id":9,
          "customerResponsible":false,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/9"
        }
      ]
    },
    {
      "id":4,
      "label":"Adresse erronée",
      "route":"https:\/\/restiloc.space\/api\/reasons\/4",
      "unavailabilities":[
        {
          "id":3,
          "customerResponsible":true,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/3"
        },
        {
          "id":6,
          "customerResponsible":false,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/6"
        }
      ]
    }
  ]
}
```

:::

## Show a reason <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/reasons/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
    -H "Accept: application/json" \
    -H "Authorization: Bearer <YOUR-TOKEN>" \
    https://restiloc.space/api/reasons/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":2,
      "label":"Véhicule inaccessible",
      "route":"https:\/\/restiloc.space\/api\/reasons\/2",
      "unavailabilities":[
        {
          "id":5,
          "customerResponsible":false,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/5"
        },
        {
          "id":7,
          "customerResponsible":false,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/7"
        },
        {
          "id":10,
          "customerResponsible":true,
          "route":"https:\/\/restiloc.space\/api\/unavailabilities\/10"
        }
      ]
    }
  ]
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "label":"string",
  "route":"string",
  "unavailabilities":"array"
}
```

:::
