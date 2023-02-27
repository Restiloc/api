# Missions

## List all missions <Badge type="tip" text="GET"/>

#### Code samples

```bash
GET /api/missions
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
  "data":[
    {
      "id":1,
      "dateMission":"2023-02-16",
      "startedAt":"10:06:15",
      "kilometersCounter":186950,
      "folder":"VTT4K",
      "type":"Garage",
      "isFinished":true,
      "route":"https:\/\/restiloc.space\/api\/missions\/1",
      "vehicle":{
        "id":49,
        "licencePlate":"1GD312CG5CF627983",
        "color":"Blue",
        "releaseYear":1994,
        "route":"https:\/\/restiloc.space\/api\/vehicles\/49"
      },
      "expert":{
        "id":6,
        "lastName":"Haley",
        "firstName":"Tomasa",
        "email":"ctorphy@smith.com",
        "phoneNumber":"660-247-4186",
        "username":"yoberbrunner",
        "route":"https:\/\/restiloc.space\/api\/experts\/6"
      },
      "garage":{
        "id":25,
        "name":"Rerum Quisquam Garage",
        "addressNumber":"371",
        "street":"Lonnie Wall",
        "postalCode":"04579",
        "city":"Zoramouth",
        "phoneNumber":"+1-458-818-8937",
        "latitude":"-7.436501",
        "longitude":"170.50101",
        "url":"https:\/\/restiloc.space\/api\/garages\/25"
      },
      "unavailability":{
        "id":4,
        "customerResponsible":true,
        "route":"https:\/\/restiloc.space\/api\/unavailabilities\/4"
      },
      "pree":[
        {
          "id":30,
          "label":"inventore",
          "description":"nostrum magni corporis voluptate quibusdam officia magni debitis quia suscipit est eveniet ut minus ex enim repellat aliquam vero nulla",
          "image":"\/tmp\/519dfcf612e32e5814ca67d2d5926f47.png",
          "signature":"\/tmp\/a8ee6b78a531ec77191564f9a5b944c8.png",
          "route":"https:\/\/restiloc.space\/api\/pree\/30"
        },
        {
          "id":33,
          "label":"excepturi",
          "description":"voluptas enim nobis error iste reprehenderit incidunt praesentium quia voluptas rem quibusdam omnis aut ut nam nisi consequatur qui cumque",
          "image":"\/tmp\/c7238b17968fc67438ad81ba532ca2cd.png",
          "signature":"\/tmp\/baa209ceffda7d56578e392fcafc8f94.png",
          "route":"https:\/\/restiloc.space\/api\/pree\/33"
        },
        {
          "id":41,
          "label":"autem",
          "description":"consequatur excepturi eius quisquam aut laborum dolores molestiae voluptates delectus recusandae odio ut quo est possimus et at at necessitatibus",
          "image":"\/tmp\/7240dd41da0c17f198ffc58ab914adb7.png",
          "signature":"\/tmp\/73d2c99dd2044a9ba484ac7f72b296c1.png",
          "route":"https:\/\/restiloc.space\/api\/pree\/41"
        }
      ]
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
  "data":[
    {
      "id":1,
      "dateMission":"2023-02-16",
      "startedAt":"10:06:15",
      "kilometersCounter":186950,
      "folder":"VTT4K",
      "type":"Garage",
      "isFinished":true,
      "route":"https:\/\/restiloc.space\/api\/missions\/1",
      "vehicle":{
        "id":49,
        "licencePlate":"1GD312CG5CF627983",
        "color":"Blue",
        "releaseYear":1994,
        "route":"https:\/\/restiloc.space\/api\/vehicles\/49"
      },
      "expert":{
        "id":6,
        "lastName":"Haley",
        "firstName":"Tomasa",
        "email":"ctorphy@smith.com",
        "phoneNumber":"660-247-4186",
        "username":"yoberbrunner",
        "route":"https:\/\/restiloc.space\/api\/experts\/6"
      },
      "garage":{
        "id":25,
        "name":"Rerum Quisquam Garage",
        "addressNumber":"371",
        "street":"Lonnie Wall",
        "postalCode":"04579",
        "city":"Zoramouth",
        "phoneNumber":"+1-458-818-8937",
        "latitude":"-7.436501",
        "longitude":"170.50101",
        "url":"https:\/\/restiloc.space\/api\/garages\/25"
      },
      "unavailability":{
        "id":4,
        "customerResponsible":true,
        "route":"https:\/\/restiloc.space\/api\/unavailabilities\/4"
      },
      "pree":[
        {
          "id":30,
          "label":"inventore",
          "description":"nostrum magni corporis voluptate quibusdam officia magni debitis quia suscipit est eveniet ut minus ex enim repellat aliquam vero nulla",
          "image":"\/tmp\/519dfcf612e32e5814ca67d2d5926f47.png",
          "signature":"\/tmp\/a8ee6b78a531ec77191564f9a5b944c8.png",
          "route":"https:\/\/restiloc.space\/api\/pree\/30"
        },
        {
          "id":33,
          "label":"excepturi",
          "description":"voluptas enim nobis error iste reprehenderit incidunt praesentium quia voluptas rem quibusdam omnis aut ut nam nisi consequatur qui cumque",
          "image":"\/tmp\/c7238b17968fc67438ad81ba532ca2cd.png",
          "signature":"\/tmp\/baa209ceffda7d56578e392fcafc8f94.png",
          "route":"https:\/\/restiloc.space\/api\/pree\/33"
        },
        {
          "id":41,
          "label":"autem",
          "description":"consequatur excepturi eius quisquam aut laborum dolores molestiae voluptates delectus recusandae odio ut quo est possimus et at at necessitatibus",
          "image":"\/tmp\/7240dd41da0c17f198ffc58ab914adb7.png",
          "signature":"\/tmp\/73d2c99dd2044a9ba484ac7f72b296c1.png",
          "route":"https:\/\/restiloc.space\/api\/pree\/41"
        }
      ]
    }
  ]
}
```

```json :line-numbers [Response schema]
{
  "id":"int",
  "dateMission":"date",
  "startedAt":"?date",
  "kilometersCounter":"int",
  "folder":"string",
  "type":"string",
  "isFinished":"boolean",
  "route":"string",
  "vehicle":"array",
  "expert":"array",
  "garage":"array",
  "unavailability":"array",
  "pree":"array"
}
```

:::