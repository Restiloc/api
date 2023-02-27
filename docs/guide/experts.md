# Experts

## List all experts <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/experts
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/experts
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "lastName":"HETT",
      "firstName":"Alizée",
      "email":"ali.he@gmail.fr",
      "phoneNumber":"0685256893",
      "username":"ali.he",
      "route":"https:\/\/restiloc.space\/api\/experts\/1",
      "missions":[
        {
          "id":3,
          "dateMission":"2023-02-06",
          "startedAt":"12:07:42",
          "kilometersCounter":185467,
          "folder":"GAZ34",
          "type":"Client",
          "isFinished":true,
          "route":"https:\/\/restiloc.space\/api\/missions\/3"
        }
      ]
    }
  ],
  ...
}
```

:::

## Show a expert <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/experts/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/experts/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "lastName":"HETT",
      "firstName":"Alizée",
      "email":"ali.he@gmail.fr",
      "phoneNumber":"0685256893",
      "username":"ali.he",
      "route":"https:\/\/restiloc.space\/api\/experts\/1",
      "missions":[
        {
          "id":3,
          "dateMission":"2023-02-06",
          "startedAt":"12:07:42",
          "kilometersCounter":185467,
          "folder":"GAZ34",
          "type":"Client",
          "isFinished":true,
          "route":"https:\/\/restiloc.space\/api\/missions\/3"
        }
      ]
    }
  ]
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "lastName":"string",
  "firstName":"string",
  "email":"string",
  "phoneNumber":"string",
  "username":"string",
  "route":"string",
  "missions":"array"
}
```

:::
