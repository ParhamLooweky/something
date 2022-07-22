<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Condensed">
    <style>
        * {
            font-family: Roboto Condensed;
        }
        span {
            color: red;
        }
        table {
            margin: 0px 150px;
            border: none
        }
        tr {
            background-color: none;
            transition: all 0.5s;
        }
        tr:nth-child(odd) {
            background-color: rgb(214, 211, 211);
        }
        td , th {
            margin: 10px 5px;
            padding: 10px;
            text-align: center;
        }
        tr:hover {
            background-color: lightgreen;
        }
        th {
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <table>
        <tr style="background-color: black;color:white;">
            <th>Tabel Name</th>
            <th>Column </th>
            <th>Column </th>
            <th>Column </th>
            <th>Column </th>
            <th>Column </th>
            <th>Column </th>
            <th>Column </th>
            <th>Column </th>
        </tr>
        <tr>
            <td>USER</td>
            <td>name<span>(str-100)</span></td>
            <td>passwrod<span>(str)</span></td>
            <td>Email<span>(str)</span></td>
            <td>phone<span>(str-14)</span></td>
            <td>status<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>PRODUCT</td>
            <td>label<span>(str-100)</span></td>
            <td>price<span>(decimal-20-2)</span></td>
            <td>category_id<span>(int)</span></td>
            <td>tag_id<span>(int)</span></td>
            <td>discount_id<span>(int)</span></td>
            <td>count<span>(int)</span></td>
            <td>description<span>(str-10000)</span></td>
            <td>status<span>(int)</span></td>
        </tr>
        <tr>
            <td>CATEGORY</td>
            <td>label<span>(str-100)</span></td>
            <td>parent_id<span>(int)</span></td>
            <td>status<span>(int)</span></td>
            <td>discount_id<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>CONTACT</td>
            <td>name<span>(str-100)</span></td>
            <td>Email<span>(str)</span></td>
            <td>phone<span>(str-14)</span></td>
            <td>description<span>(str-1000)</span></td>
            <td>user_id<span>(int)</span></td>
            <td>status<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>TAG</td>
            <td>label<span>(str-100)</span></td>
            <td>status<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>DISCOUNT</td>
            <td>label<span>(str-100)</span></td>
            <td>percent<span>(decimal-20-2)</span></td>
            <td>price<span>(decimal-20-2)</span></td>
            <td>status<span>(int)</span></td>
            <td>gift_code<span>(str)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>IMAGE</td>
            <td>path<span>(str)</span></td>
            <td>product_id<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>COMMENT</td>
            <td>description<span>(str-10000)</span></td>
            <td>user_id<span>(int)</span></td>
            <td>status<span>(int)</span></td>
            <td>state<span>(bol)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>REGION</td>
            <td>label<span>(str-100)</span></td>
            <td>status<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>CITY</td>
            <td>label<span>(str-100)</span></td>
            <td>status<span>(int)</span></td>
            <td>region_id<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>ADDRESS</td>
            <td>detail<span>(str-1000)</span></td>
            <td>status<span>(int)</span></td>
            <td>city_id<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>ORDER</td>
            <td>products_id<span>(int)</span></td>
            <td>total_price<span>(decimal-20-2)</span></td>
            <td>pay_price<span>(decimal-20-2)</span></td>
            <td>user_id<span>(int)</span></td>
            <td>discount_id<span>(int)</span></td>
            <td>status<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>TRANSACTION</td>
            <td>price<span>(decimal-20-2)</span></td>
            <td>order_id<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>LIST_ITEM</td>
            <td>product_id<span>(int)</span></td>
            <td>order_id<span>(int)</span></td>
            <td>price<span>(decimal-20-2)</span></td>
            <td>pay_price<span>(decimal-20-2)</span></td>
            <td>conut<span>(int)</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
    </table>

</body>
</html>
