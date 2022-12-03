## Backend Routes

This documentation throws more lights on how each routes are to be developed.

> Please note, all response sent to the client must follow the below convention.

```json([
        'errorState' => false,
        'error' => null,
        'message' => 'Successfull',
        'data' => $data,
    ], 200);
```

## Endpoints
Below are the endpoints which would be used when adding the features.

| Class Methods           |      Method / Endpoints       |  Authentication |  Payload                                   | Description                              |
| ----------------------- | :---------------------------: | --------------: | -----------------------------------------: | ---------------------------------------: |
| `creatQrCode()`         |     `POST /qrcode/`           | `true`          | `first_name,last_name,username,email,hash` | To create a qrcode                       |
| `getQrCodeByUser()`     |     `GET /qrcodes/user/{id}`  | `true`          | `qrcode.users_id`                          | To get all qr codes belonging to a user  |
| `getQrCodeByID()`       |     `GET /qrcodes/id/{id}`    | `true`          | `qrcode.id`                                | To retrieve one qr code by the id        |
| `updateQrCode()`        |     `PUT /qrcodes/id/{id}`    | `true`          | `qrcode.id`                                | To edit one qr code by the id            |
| `deleteQrCode()`        |     `DELETE /qrcodes/id/{id}` | `true`          | `qrcode.id`                                | To edit one qr code by the id            |




