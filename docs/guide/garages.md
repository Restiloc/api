# Garages

## List all garages <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/garages
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/garages
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "name":"Ut Ab Garage",
      "addressNumber":"337",
      "street":"Barton Shores",
      "postalCode":"50169-7391",
      "city":"Port Phyllisshire",
      "phoneNumber":"276.733.9813",
      "latitude":"-20.579567",
      "longitude":"-171.901572",
      "url":"https:\/\/restiloc.space\/api\/garages\/1",
      "missions":[]
    },
    ...
  ]
}
```

:::

## Show a garage <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/garages/{id}
```

::: code-group

```bash :line-numbers [cURL]
curl \
  -H "Accept: application/json" \
  -H "Authorization: Bearer <YOUR-TOKEN>" \
  https://restiloc.space/api/garages/{id}
```

:::

#### Response

::: code-group

```json :line-numbers [Example response]
{
  "data":[
    {
      "id":1,
      "name":"Ut Ab Garage",
      "addressNumber":"337",
      "street":"Barton Shores",
      "postalCode":"50169-7391",
      "city":"Port Phyllisshire",
      "phoneNumber":"276.733.9813",
      "latitude":"-20.579567",
      "longitude":"-171.901572",
      "url":"https:\/\/restiloc.space\/api\/garages\/1",
      "missions":[]
    }
  ]
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "name":"string",
  "addressNumber":"int",
  "street":"string",
  "postalCode":"string",
  "city":"string",
  "phoneNumber":"string",
  "latitude":"string",
  "longitude":"string",
  "url":"string",
  "missions":"array"
}
```

:::
