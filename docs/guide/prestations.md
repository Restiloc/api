# PREE

## List all pree <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/pree
```

::: code-group

```bash :line-numbers [cURL]
curl \
    -H "Accept: application/json" \
    -H "Authorization: Bearer <YOUR-TOKEN>" \
    https://restiloc.space/api/pree
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "label":"omnis",
      "description":"labore voluptatum inventore et quae rem officia pariatur ut eius delectus aut accusamus nihil qui in esse qui deserunt magni",
      "image":"\/tmp\/1ef455c515081a8e21baa5dfd6e3ab7b.png",
      "signature":"\/tmp\/617f3dac252400ea5ff96e9f8008fa1e.png",
      "route":"https:\/\/restiloc.space\/api\/pree\/1",
      "mission":{
        "id":11,
        "dateMission":"2023-02-23",
        "startedAt":"18:22:41",
        "kilometersCounter":80455,
        "folder":"DKJ67",
        "type":"Garage",
        "isFinished":false,
        "route":"https:\/\/restiloc.space\/api\/missions\/11"
      }
    },
    ...
  ]
}
```

:::

## Show a pree <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/pree/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
    -H "Accept: application/json" \
    -H "Authorization: Bearer <YOUR-TOKEN>" \
    https://restiloc.space/api/pree/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "label":"omnis",
      "description":"labore voluptatum inventore et quae rem officia pariatur ut eius delectus aut accusamus nihil qui in esse qui deserunt magni",
      "image":"\/tmp\/1ef455c515081a8e21baa5dfd6e3ab7b.png",
      "signature":"\/tmp\/617f3dac252400ea5ff96e9f8008fa1e.png",
      "route":"https:\/\/restiloc.space\/api\/pree\/1",
      "mission":{
        "id":11,
        "dateMission":"2023-02-23",
        "startedAt":"18:22:41",
        "kilometersCounter":80455,
        "folder":"DKJ67",
        "type":"Garage",
        "isFinished":false,
        "route":"https:\/\/restiloc.space\/api\/missions\/11"
      }
    }
  ]
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "label":"string",
  "description":"string",
  "image":"string",
  "signature":"string",
  "route":"string",
  "mission":"array"
}
```

:::
